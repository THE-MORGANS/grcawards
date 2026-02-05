<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LusakaSummitRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'name',
        'email',
        'phone',
        'organization',
        'attendance_option',
        'delegate_count',
        'amount',
        'currency',
        'payment_status',
        'stripe_session_id',
        'ticket_number',
        'delegates_data',
    ];

    protected $casts = [
        'delegates_data' => 'array',
    ];
}
