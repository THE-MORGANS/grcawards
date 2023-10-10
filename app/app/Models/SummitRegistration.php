<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummitRegistration extends Model
{
    use HasFactory;


    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'company', 'role', 'award', 'reason', 'about_us', 'expectation', 'speaker'];
}
