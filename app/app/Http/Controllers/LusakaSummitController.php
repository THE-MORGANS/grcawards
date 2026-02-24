<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LusakaSummitRegistration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\LusakaSummitConfirmation;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;

class LusakaSummitController extends Controller
{
    const MAX_SLOTS = 150;

    public function initiatePayment(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'organization' => 'nullable|string',
            'attendance_option' => 'required|string',
            'delegate_count' => 'required|integer|min:1',
            'amount' => 'required|numeric',
            'delegates' => 'required|array',
            'referred_by_ssth' => 'nullable|boolean',
        ]);

        // Check availability
        $confirmedSlots = LusakaSummitRegistration::where('payment_status', 'paid')->sum('delegate_count');
        $requestedSlots = $data['delegate_count'];

        if (($confirmedSlots + $requestedSlots) > self::MAX_SLOTS) {
            $remaining = self::MAX_SLOTS - $confirmedSlots;
            return response()->json([
                'status' => 'error',
                'message' => "Only {$remaining} slots remaining. You requested {$requestedSlots} slots."
            ], 400);
        }

        try {
            DB::beginTransaction();

            $registrationId = 'LUS-' . strtoupper(Str::random(8));
            
            $registration = LusakaSummitRegistration::create([
                'registration_id' => $registrationId,
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'organization' => $data['organization'],
                'attendance_option' => $data['attendance_option'],
                'delegate_count' => $data['delegate_count'],
                'amount' => $data['amount'],
                'delegates_data' => $data['delegates'],
                'payment_status' => 'pending',
                'referred_by_ssth' => $data['referred_by_ssth'] ?? false,
            ]);

            // Stripe Integration
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $checkoutSession = StripeSession::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Lusaka Summit 2026 Registration - ' . $data['attendance_option'],
                            'description' => $data['delegate_count'] . ' Delegate(s)',
                        ],
                        'unit_amount' => $data['amount'] * 100 / $data['delegate_count'], // Price per unit in cents
                    ],
                    'quantity' => $data['delegate_count'],
                ]],
                'mode' => 'payment',
                'success_url' => route('summit.payment.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('summit.payment.cancel'),
                'customer_email' => $data['email'],
                'metadata' => [
                    'registration_id' => $registrationId,
                ]
            ]);

            $registration->update(['stripe_session_id' => $checkoutSession->id]);

            DB::commit();

            return response()->json([
                'status' => 'success',
                'checkout_url' => $checkoutSession->url
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Stripe Payment Initiation Error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to initiate payment. Please try again later.'
            ], 500);
        }
    }

    public function paymentSuccess(Request $request)
    {
        $sessionId = $request->query('session_id');

        if (!$sessionId) {
            return redirect()->route('landing.summit_lusaka_2026_register')->with('error', 'Invalid session.');
        }

        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $session = StripeSession::retrieve($sessionId);

            $registration = LusakaSummitRegistration::where('stripe_session_id', $sessionId)->first();

            if (!$registration) {
                return redirect()->route('landing.summit_lusaka_2026_register')->with('error', 'Registration not found.');
            }

            if ($session->payment_status === 'paid' && $registration->payment_status !== 'paid') {
                $registration->update([
                    'payment_status' => 'paid',
                    'ticket_number' => 'TCK-' . strtoupper(Str::random(10)),
                ]);
                
                // Send confirmation email
                try {
                    Mail::to($registration->email)->send(new LusakaSummitConfirmation($registration));
                } catch (\Exception $e) {
                    Log::error('Confirmation Email Error: ' . $e->getMessage());
                }
            }

            return view('contents.voter.summit_lusaka_2026_success', compact('registration'));

        } catch (\Exception $e) {
            Log::error('Stripe Payment Success Handling Error: ' . $e->getMessage());
            return redirect()->route('landing.summit_lusaka_2026_register')->with('error', 'Error processing payment confirmation.');
        }
    }

    public function paymentCancel()
    {
        return redirect()->route('landing.summit_lusaka_2026_register')->with('error', 'Payment was cancelled.');
    }

    public function getRemainingSlots()
    {
        $confirmedSlots = LusakaSummitRegistration::where('payment_status', 'paid')->sum('delegate_count');
        $remaining = max(0, self::MAX_SLOTS - $confirmedSlots);
        
        return response()->json([
            'remaining' => $remaining,
            'total' => self::MAX_SLOTS
        ]);
    }
}
