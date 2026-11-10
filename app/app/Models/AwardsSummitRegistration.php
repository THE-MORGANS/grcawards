<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AwardsSummitRegistration extends Model
{
    use HasFactory;

    const MAX_SLOTS = 200;

    protected $fillable = [
        'registration_id',
        'name',
        'email',
        'phone',
        'organization',
        'role',
        'ticket_type',
        'ticket_name',
        'quantity',
        'amount',
        'currency',
        'region',
        'payment_status',
        'payment_method',
        'stripe_session_id',
        'paypal_order_id',
        'ticket_number',
        'seat_numbers',
    ];

    protected $casts = [
        'seat_numbers' => 'array',
    ];

    /**
     * Remaining available slots for an edition (each region has its own
     * 200-seat pool, shared across every payment method — paid, PayPal,
     * complimentary and guest registrations all draw from the same pool
     * since they occupy the same physical seats).
     */
    public static function remainingSlots($region = 'africa')
    {
        $confirmedSlots = static::where('payment_status', 'paid')
            ->where('region', $region)
            ->sum('quantity');

        return max(0, static::MAX_SLOTS - $confirmedSlots);
    }

    /**
     * Mark this registration paid and assign it the next free seat number(s)
     * for its region — locks the table to avoid a race with a concurrent
     * registration landing on the same seat. Shared by every path that can
     * turn a registration into a real seat: Stripe/PayPal capture, admin-issued
     * complimentary tickets, and guest self-registration.
     */
    public function assignSeatAndMarkPaid()
    {
        DB::transaction(function () {
            $highestSeat = static::where('payment_status', 'paid')
                ->where('region', $this->region)
                ->whereNotNull('seat_numbers')
                ->lockForUpdate()
                ->get()
                ->flatMap(fn ($reg) => $reg->seat_numbers ?? [])
                ->map(fn ($seat) => (int) str_replace('SEAT-', '', $seat))
                ->max();

            $nextSeatNumber = ($highestSeat ?? 0) + 1;

            $seatNumbers = [];
            for ($i = 0; $i < $this->quantity; $i++) {
                $seatNumbers[] = 'SEAT-' . str_pad($nextSeatNumber + $i, 3, '0', STR_PAD_LEFT);
            }

            $this->update([
                'payment_status' => 'paid',
                'ticket_number' => 'TCK-' . strtoupper(Str::random(10)),
                'seat_numbers' => $seatNumbers,
            ]);
        });

        return $this->fresh();
    }
}
