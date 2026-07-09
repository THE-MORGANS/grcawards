<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardsSummitRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'name',
        'email',
        'phone',
        'organization',
        'ticket_type',
        'ticket_name',
        'quantity',
        'amount',
        'currency',
        'region',
        'payment_status',
        'stripe_session_id',
        'ticket_number',
    ];
}
