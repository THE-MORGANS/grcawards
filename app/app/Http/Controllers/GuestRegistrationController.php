<?php

namespace App\Http\Controllers;

use App\Mail\AwardsSummitPaymentConfirmation;
use App\Models\AwardsSummitRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

/**
 * Free guest registration for the Awards & Summit — no payment, just a name
 * on the list and a seat. Draws from the exact same 200-seat pool as paid
 * delegates (AwardsSummitRegistration::remainingSlots) since guests occupy
 * the same physical seats, and reuses the same seat-assignment + confirmation
 * email machinery as the paid flows.
 */
class GuestRegistrationController extends Controller
{
    const REGION = 'africa';

    public function showForm()
    {
        return view('contents.voter.awards_summit.guest_registration', [
            'remaining' => AwardsSummitRegistration::remainingSlots(self::REGION),
        ]);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'organization' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('awards_summit_registrations', 'email'),
            ],
            'phone' => ['required', 'string', 'max:50'],
        ]);

        if (AwardsSummitRegistration::remainingSlots(self::REGION) < 1) {
            return redirect()->back()->withInput()->with('error', 'Sorry, this edition is fully booked — no seats remain.');
        }

        $registration = AwardsSummitRegistration::create([
            'registration_id' => 'GRC-' . strtoupper(Str::random(8)),
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'organization' => $data['organization'],
            'role' => $data['role'],
            'ticket_type' => 'guest',
            'ticket_name' => 'Guest Pass',
            'quantity' => 1,
            'amount' => 0,
            'currency' => 'USD',
            'payment_status' => 'pending',
            'payment_method' => 'guest',
            'region' => self::REGION,
        ]);

        $registration = $registration->assignSeatAndMarkPaid();

        try {
            Mail::to($registration->email)->send(new AwardsSummitPaymentConfirmation($registration));
        } catch (\Exception $e) {
            Log::error('Guest registration confirmation email failed for ' . $registration->email . ': ' . $e->getMessage());
        }

        return view('contents.voter.awards_summit.success', compact('registration'));
    }
}
