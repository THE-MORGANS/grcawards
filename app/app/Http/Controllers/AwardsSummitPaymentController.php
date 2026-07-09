<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AwardsSummitRegistration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\AwardsSummitPaymentConfirmation;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;

class AwardsSummitPaymentController extends Controller
{
    public static $tickets = [
        'summit' => [
            'name' => 'Summit Pass',
            'price' => 100,
            'subtitle' => 'Morning access only',
            'description' => 'Full access to the morning Summit programme — keynotes, panel discussions and networking luncheon.',
        ],
        'full' => [
            'name' => 'Full Delegate Pass',
            'price' => 250,
            'subtitle' => 'Summit + Gala — Full Day',
            'description' => 'The complete experience — full day Summit access plus the evening Gala Awards Ceremony, dinner and reception.',
        ],
        'gala' => [
            'name' => 'Gala Only Pass',
            'price' => 150,
            'subtitle' => 'Evening access only',
            'description' => 'For guests attending only the Gala Awards Ceremony — ideal for VIPs, nominees\' guests and partners.',
        ],
        'student' => [
            'name' => 'Student / Academic',
            'price' => 60,
            'subtitle' => 'Summit access — valid ID required',
            'description' => 'Discounted access for full-time students and academic staff from accredited institutions across East Africa.',
        ],
    ];

    public function showPayment($ticket)
    {
        if (!array_key_exists($ticket, self::$tickets)) {
            abort(404);
        }

        return view('contents.voter.awards_summit.payment', [
            'stripe_key' => env('STRIPE_KEY'),
            'ticket_type' => $ticket,
            'ticket' => self::$tickets[$ticket],
        ]);
    }

    public function initiatePayment(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'organization' => 'nullable|string|max:255',
            'ticket_type' => 'required|string|in:' . implode(',', array_keys(self::$tickets)),
            'quantity' => 'required|integer|min:1|max:20',
        ]);

        $ticket = self::$tickets[$data['ticket_type']];
        $amount = $ticket['price'] * $data['quantity'];

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
                'payment_status' => 'pending',
                'region' => $data['region'] ?? 'africa',
            ]);

            // Stripe Integration
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $checkoutSession = StripeSession::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
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
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Africa Edition Stripe Payment Initiation Error: ' . $e->getMessage());
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
                $registration->update([
                    'payment_status' => 'paid',
                    'ticket_number' => 'TCK-' . strtoupper(Str::random(10)),
                ]);

                try {
                    Mail::to($registration->email)->send(new AwardsSummitPaymentConfirmation($registration));
                } catch (\Exception $e) {
                    Log::error('Africa Edition Confirmation Email Error: ' . $e->getMessage());
                }
            }

            return view('contents.voter.awards_summit.success', compact('registration'));
        } catch (\Exception $e) {
            Log::error('Africa Edition Stripe Payment Success Handling Error: ' . $e->getMessage());
            return redirect()->route('landing.index')->with('error', 'Error processing payment confirmation.');
        }
    }

    public function paymentCancel()
    {
        return redirect()->route('landing.index')->with('error', 'Payment was cancelled.');
    }
}
