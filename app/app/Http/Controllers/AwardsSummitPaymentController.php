<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AwardsSummitRegistration;
use App\Exports\TicketSalesExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\AwardsSummitPaymentConfirmation;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class AwardsSummitPaymentController extends Controller
{

    public static $tickets = [
        'africa' => [
            'summit' => [
                'name' => 'Summit Pass',
                'price' => 100,
                'currency' => 'usd',
                'subtitle' => 'Morning access only',
                'description' => 'Full access to the morning Summit programme — keynotes, panel discussions and networking luncheon.',
            ],
            'full' => [
                'name' => 'Full Delegate Pass',
                'price' => 250,
                'currency' => 'usd',
                'subtitle' => 'Summit + Gala — Full Day',
                'description' => 'The complete experience — full day Summit access plus the evening Gala Awards Ceremony, dinner and reception.',
            ],
            'gala' => [
                'name' => 'Gala Only Pass',
                'price' => 150,
                'currency' => 'usd',
                'subtitle' => 'Evening access only',
                'description' => 'For guests attending only the Gala Awards Ceremony — ideal for VIPs, nominees\' guests and partners.',
            ],
            'student' => [
                'name' => 'Student Promo',
                'price' => 77,
                'currency' => 'usd',
                'subtitle' => 'Summit + Gala — Full Day — valid ID required',
                'description' => 'Discounted full-day access — Summit programme plus the evening Gala Awards Ceremony — for full-time students and academic staff from accredited institutions across East Africa.',
            ],
            'discount_a' => [
                'name' => 'Guest Discount Plan A',
                'price' => 23,
                'currency' => 'usd',
                'subtitle' => 'Summit + Gala — Full Day — guest discount rate',
                'description' => 'Discounted full-day access — Summit programme plus the evening Gala Awards Ceremony — at a preferential guest rate.',
            ],
            'discount_b' => [
                'name' => 'Guest Discount Plan B',
                'price' => 38,
                'currency' => 'usd',
                'subtitle' => 'Summit + Gala — Full Day — guest discount rate',
                'description' => 'Discounted full-day access — Summit programme plus the evening Gala Awards Ceremony — at a preferential guest rate.',
            ],
        ],
        'europe' => [
            'summit' => [
                'name' => 'Summit Pass',
                'price' => 75,
                'currency' => 'gbp',
                'subtitle' => 'Morning access only',
                'description' => 'Full access to the morning Summit programme — keynotes, panel discussions and networking luncheon.',
            ],
            'full' => [
                'name' => 'Full Delegate Pass',
                'price' => 185,
                'currency' => 'gbp',
                'subtitle' => 'Summit + Gala — Full Day',
                'description' => 'The complete experience — full day Summit access plus the evening Gala Awards Ceremony, dinner and reception.',
            ],
            'gala' => [
                'name' => 'Gala Only Pass',
                'price' => 110,
                'currency' => 'gbp',
                'subtitle' => 'Evening access only',
                'description' => 'For guests attending only the Gala Awards Ceremony — ideal for VIPs, nominees\' guests and partners.',
            ],
            'group' => [
                'name' => 'Group & Tables',
                'price' => 45,
                'currency' => 'gbp',
                'subtitle' => 'Corporate & sponsor tables',
                'description' => 'Preferential per-seat rate for tables of 10 at the Gala and group delegate bookings.',
            ],
        ],
    ];

    /**
     * Early bird promo on the Africa Full Delegate Pass — USD 115 (KES
     * 15,000 equivalent) instead of USD 250, until 31 Oct 2026 inclusive.
     * Applied here, upstream of both showPayment() and initiatePayment(), so
     * the price shown on the payment page and the amount actually charged by
     * Stripe can never drift apart — same price everywhere, same promo
     * window as the /tickets page (LandingPageController::showTickets).
     */
    private function regionTickets($region)
    {
        $tickets = self::$tickets[$region] ?? null;

        if ($tickets && $region === 'africa' && isset($tickets['full']) && $this->fullPassPromoActive()) {
            $tickets['full']['original_price'] = $tickets['full']['price'];
            $tickets['full']['price'] = 115;
        }

        return $tickets;
    }

    private function fullPassPromoActive()
    {
        return now()->lte(\Illuminate\Support\Carbon::create(2026, 10, 31, 23, 59, 59));
    }

    public function showPayment(Request $request, $ticket)
    {
        $region = $request->query('region', 'africa');
        $tickets = $this->regionTickets($region);

        if (!$tickets || !array_key_exists($ticket, $tickets)) {
            abort(404);
        }

        $remaining = AwardsSummitRegistration::remainingSlots($region);

        return view('contents.voter.awards_summit.payment', [
            'stripe_key' => env('STRIPE_KEY'),
            'ticket_type' => $ticket,
            'ticket' => $tickets[$ticket],
            'region' => $region,
            'remaining_slots' => $remaining,
        ]);
    }

    public function initiatePayment(Request $request)
    {
        $region = $request->input('region', 'africa');
        $tickets = $this->regionTickets($region);

        if (!$tickets) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid edition selected.',
            ], 422);
        }

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'organization' => 'nullable|string|max:255',
            'region' => ['nullable', Rule::in(array_keys(self::$tickets))],
            'ticket_type' => ['required', 'string', Rule::in(array_keys($tickets))],
            'quantity' => 'required|integer|min:1|max:20',
        ]);

        $ticket = $tickets[$data['ticket_type']];
        $amount = $ticket['price'] * $data['quantity'];

        // Check slot availability before proceeding (each edition has its own 200-seat pool)
        $requestedSlots = $data['quantity'];
        $remaining = AwardsSummitRegistration::remainingSlots($region);

        if ($requestedSlots > $remaining) {
            return response()->json([
                'status' => 'error',
                'message' => $remaining > 0
                    ? "Only {$remaining} seat(s) remaining. You requested {$requestedSlots} ticket(s)."
                    : 'Sorry, all seats have been sold out.',
                'remaining' => $remaining,
            ], 400);
        }

        try {
            DB::beginTransaction();

            $registrationId = 'GRC-' . strtoupper(Str::random(8));

            $registration = AwardsSummitRegistration::create([
                'registration_id' => $registrationId,
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'] ?? null,
                'organization' => $data['organization'] ?? null,
                'ticket_type' => $data['ticket_type'],
                'ticket_name' => $ticket['name'],
                'quantity' => $data['quantity'],
                'amount' => $amount,
                'currency' => strtoupper($ticket['currency']),
                'payment_status' => 'pending',
                'payment_method' => 'stripe',
                'region' => $region,
            ]);

            // Stripe Integration
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $checkoutSession = StripeSession::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => $ticket['currency'],
                        'product_data' => [
                            'name' => 'GRC & Financial Crime Prevention Awards & Summit 2026 - ' . $ticket['name'],
                            'description' => $data['quantity'] . ' Ticket(s)',
                        ],
                        'unit_amount' => $ticket['price'] * 100,
                    ],
                    'quantity' => $data['quantity'],
                ]],
                'mode' => 'payment',
                'success_url' => route('awards_summit.payment.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('awards_summit.payment.cancel'),
                'customer_email' => $data['email'],
                'metadata' => [
                    'registration_id' => $registrationId,
                ],
            ]);

            $registration->update(['stripe_session_id' => $checkoutSession->id]);

            DB::commit();

            return response()->json([
                'status' => 'success',
                'checkout_url' => $checkoutSession->url,
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error(ucfirst($region) . ' Edition Stripe Payment Initiation Error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to initiate payment. Please try again later.',
            ], 500);
        }
    }

    public function paymentSuccess(Request $request)
    {
        $sessionId = $request->query('session_id');

        if (!$sessionId) {
            return redirect()->route('landing.index')->with('error', 'Invalid session.');
        }

        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $session = StripeSession::retrieve($sessionId);

            $registration = AwardsSummitRegistration::where('stripe_session_id', $sessionId)->first();

            if (!$registration) {
                return redirect()->route('landing.index')->with('error', 'Registration not found.');
            }

            if ($session->payment_status === 'paid' && $registration->payment_status !== 'paid') {
                $this->finalizeRegistrationPayment($registration);
            }

            return view('contents.voter.awards_summit.success', compact('registration'));
        } catch (\Throwable $e) {
            Log::error('Awards Summit Stripe Payment Success Handling Error: ' . $e->getMessage());
            return redirect()->route('landing.index')->with('error', 'Error processing payment confirmation.');
        }
    }

    public function paymentCancel()
    {
        return redirect()->route('landing.index')->with('error', 'Payment was cancelled.');
    }

    /**
     * PayPal Integration — same redirect-based checkout shape as Stripe:
     * create an order, send the buyer to PayPal's hosted approval page, then
     * capture on return. Reuses the Stripe flow's registration record,
     * validation and slot-check logic; only the gateway call differs.
     */
    public function initiatePaypalPayment(Request $request)
    {
        $region = $request->input('region', 'africa');
        $tickets = $this->regionTickets($region);

        if (!$tickets) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid edition selected.',
            ], 422);
        }

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'organization' => 'nullable|string|max:255',
            'region' => ['nullable', Rule::in(array_keys(self::$tickets))],
            'ticket_type' => ['required', 'string', Rule::in(array_keys($tickets))],
            'quantity' => 'required|integer|min:1|max:20',
        ]);

        $ticket = $tickets[$data['ticket_type']];
        $amount = $ticket['price'] * $data['quantity'];

        $requestedSlots = $data['quantity'];
        $remaining = AwardsSummitRegistration::remainingSlots($region);

        if ($requestedSlots > $remaining) {
            return response()->json([
                'status' => 'error',
                'message' => $remaining > 0
                    ? "Only {$remaining} seat(s) remaining. You requested {$requestedSlots} ticket(s)."
                    : 'Sorry, all seats have been sold out.',
                'remaining' => $remaining,
            ], 400);
        }

        try {
            DB::beginTransaction();

            $registrationId = 'GRC-' . strtoupper(Str::random(8));

            $registration = AwardsSummitRegistration::create([
                'registration_id' => $registrationId,
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'] ?? null,
                'organization' => $data['organization'] ?? null,
                'ticket_type' => $data['ticket_type'],
                'ticket_name' => $ticket['name'],
                'quantity' => $data['quantity'],
                'amount' => $amount,
                'currency' => strtoupper($ticket['currency']),
                'payment_status' => 'pending',
                'payment_method' => 'paypal',
                'region' => $region,
            ]);

            $provider = new PayPalClient();
            $provider->getAccessToken();

            $order = $provider->createOrder([
                'intent' => 'CAPTURE',
                'application_context' => [
                    'return_url' => route('awards_summit.payment.paypal.success'),
                    'cancel_url' => route('awards_summit.payment.paypal.cancel'),
                    'brand_name' => 'GRC & Financial Crime Prevention Awards & Summit',
                    'user_action' => 'PAY_NOW',
                ],
                'purchase_units' => [[
                    'reference_id' => $registrationId,
                    'description' => 'GRC & Financial Crime Prevention Awards & Summit 2026 - ' . $ticket['name'] . ' x' . $data['quantity'],
                    'amount' => [
                        'currency_code' => strtoupper($ticket['currency']),
                        'value' => number_format($amount, 2, '.', ''),
                    ],
                ]],
            ]);

            $approveUrl = collect($order['links'] ?? [])->firstWhere('rel', 'approve')['href'] ?? null;

            if (empty($order['id']) || !$approveUrl) {
                throw new \Exception('PayPal did not return an order id / approval link: ' . json_encode($order));
            }

            $registration->update(['paypal_order_id' => $order['id']]);

            DB::commit();

            return response()->json([
                'status' => 'success',
                'checkout_url' => $approveUrl,
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error(ucfirst($region) . ' Edition PayPal Payment Initiation Error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to initiate payment. Please try again later.',
            ], 500);
        }
    }

    public function paypalPaymentSuccess(Request $request)
    {
        $orderId = $request->query('token');

        if (!$orderId) {
            return redirect()->route('landing.index')->with('error', 'Invalid session.');
        }

        try {
            $registration = AwardsSummitRegistration::where('paypal_order_id', $orderId)->first();

            if (!$registration) {
                return redirect()->route('landing.index')->with('error', 'Registration not found.');
            }

            if ($registration->payment_status !== 'paid') {
                $provider = new PayPalClient();
                $provider->getAccessToken();
                $capture = $provider->capturePaymentOrder($orderId);

                if (($capture['status'] ?? null) === 'COMPLETED') {
                    $this->finalizeRegistrationPayment($registration);
                } else {
                    Log::error('Awards Summit PayPal Capture Not Completed: ' . json_encode($capture));
                    return redirect()->route('landing.index')->with('error', 'Payment could not be confirmed. Please contact us if you were charged.');
                }
            }

            return view('contents.voter.awards_summit.success', compact('registration'));
        } catch (\Throwable $e) {
            Log::error('Awards Summit PayPal Payment Success Handling Error: ' . $e->getMessage());
            return redirect()->route('landing.index')->with('error', 'Error processing payment confirmation.');
        }
    }

    public function paypalPaymentCancel()
    {
        return redirect()->route('landing.index')->with('error', 'Payment was cancelled.');
    }

    /**
     * Marks a registration paid and assigns seat numbers — shared by both
     * the Stripe and PayPal success handlers so the seat-locking logic
     * (and the confirmation email) only exists once.
     */
    private function finalizeRegistrationPayment(AwardsSummitRegistration $registration)
    {
        $registration->assignSeatAndMarkPaid();

        try {
            Mail::to($registration->email)->send(new AwardsSummitPaymentConfirmation($registration));
        } catch (\Exception $e) {
            Log::error(ucfirst($registration->region) . ' Edition Confirmation Email Error: ' . $e->getMessage());
        }
    }

    /**
     * Return remaining slot count as JSON for AJAX polling.
     */
    public function getRemainingSlots(Request $request)
    {
        $region = $request->query('region', 'africa');

        if (!array_key_exists($region, self::$tickets)) {
            $region = 'africa';
        }

        return response()->json([
            'remaining' => AwardsSummitRegistration::remainingSlots($region),
            'total' => AwardsSummitRegistration::MAX_SLOTS,
            'region' => $region,
        ]);
    }

    /**
     * Admin: list ticket purchase records (every attempt, not just paid ones,
     * so pending/failed Stripe sessions are visible too). Not scoped to an
     * award program — registrations have no award_program_id, they're keyed
     * by region only — the {award_program} route segment is carried along
     * purely so the page sits inside the usual admin nav/breadcrumb context.
     */
    public function adminIndex(Request $request, $award_program)
    {
        $registrations = $this->filteredRegistrations($request)
            ->orderByDesc('created_at')
            ->paginate(25)
            ->withQueryString();

        $stats = [
            'total' => $this->filteredRegistrations($request)->count(),
            'paid' => $this->filteredRegistrations($request)->where('payment_status', 'paid')->count(),
            'pending' => $this->filteredRegistrations($request)->where('payment_status', 'pending')->count(),
            'failed' => $this->filteredRegistrations($request)->where('payment_status', 'failed')->count(),
            'seatsSold' => $this->filteredRegistrations($request)->where('payment_status', 'paid')->sum('quantity'),
            'revenue' => $this->filteredRegistrations($request)->where('payment_status', 'paid')
                ->selectRaw('currency, SUM(amount) as total')
                ->groupBy('currency')
                ->pluck('total', 'currency'),
        ];

        $ticketTypes = AwardsSummitRegistration::select('ticket_type', 'ticket_name')
            ->distinct()
            ->orderBy('ticket_name')
            ->get();

        return view('contents.admin.ticket_sales', [
            'registrations' => $registrations,
            'stats' => $stats,
            'ticketTypes' => $ticketTypes,
            'award_program' => $award_program,
            'filters' => [
                'region' => $request->input('region'),
                'status' => $request->input('status'),
                'ticket_type' => $request->input('ticket_type'),
                'payment_method' => $request->input('payment_method'),
                'search' => $request->input('search'),
            ],
        ]);
    }

    public function adminExport(Request $request, $award_program)
    {
        $registrations = $this->filteredRegistrations($request)->orderByDesc('created_at')->get();

        return Excel::download(
            new TicketSalesExport($registrations),
            'ticket_sales_' . date('Y-m-d_His') . '.xlsx'
        );
    }

    /**
     * Admin: permanently delete a registration (invalid/duplicate/test
     * entries). Requires the admin to re-enter their own password — a
     * confirm() dialog alone is too easy to click through by accident on a
     * destructive, unrecoverable action. Safe to delete regardless of
     * status — seat numbers are assigned by "max existing seat + 1", never
     * reused/renumbered, so removing a row never shifts or corrupts anyone
     * else's seat. If it was 'paid', the seat it held simply becomes
     * available again since remainingSlots() recounts from whatever 'paid'
     * rows still exist.
     */
    public function adminDestroy(Request $request, $award_program, $registration)
    {
        $request->validate([
            'password' => ['required', 'string'],
        ]);

        if (!Hash::check($request->input('password'), Auth::guard('admin')->user()->password)) {
            return redirect()->back()->withErrors(['password' => 'Incorrect password — registration was not deleted.']);
        }

        $reg = AwardsSummitRegistration::findOrFail($registration);
        $reg->delete();

        session()->flash('success', "Registration for {$reg->name} ({$reg->registration_id}) has been deleted.");

        return redirect()->back();
    }

    /**
     * Re-sends the exact same confirmation email a registrant got on
     * successful registration/payment — useful when they say they never
     * received it. Only makes sense for 'paid' rows, since ticket_number
     * and seat_numbers (shown in the email) are only assigned at that point.
     */
    public function adminResendConfirmation($award_program, $registration)
    {
        $reg = AwardsSummitRegistration::findOrFail($registration);

        if ($reg->payment_status !== 'paid') {
            return redirect()->back()->with('error', "Cannot resend — {$reg->name}'s registration is not yet paid/confirmed.");
        }

        try {
            Mail::to($reg->email)->send(new AwardsSummitPaymentConfirmation($reg));
            session()->flash('success', "Confirmation email resent to {$reg->email}.");
        } catch (\Exception $e) {
            Log::error(ucfirst($reg->region) . ' Edition Resend Confirmation Email Error: ' . $e->getMessage());
            session()->flash('error', 'Failed to resend the confirmation email. Please try again.');
        }

        return redirect()->back();
    }

    private function filteredRegistrations(Request $request)
    {
        $search = $request->input('search');

        return AwardsSummitRegistration::query()
            ->when($request->filled('region'), fn ($q) => $q->where('region', $request->input('region')))
            ->when($request->filled('status'), fn ($q) => $q->where('payment_status', $request->input('status')))
            ->when($request->filled('ticket_type'), fn ($q) => $q->where('ticket_type', $request->input('ticket_type')))
            ->when($request->filled('payment_method'), fn ($q) => $q->where('payment_method', $request->input('payment_method')))
            ->when($request->filled('search'), function ($q) use ($search) {
                $q->where(function ($q2) use ($search) {
                    $q2->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('registration_id', 'like', "%{$search}%")
                        ->orWhere('ticket_number', 'like', "%{$search}%");
                });
            });
    }
}
