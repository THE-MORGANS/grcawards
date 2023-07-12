<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaVote extends Model
{
    use HasFactory;

    protected $fillable = ['voter', 'ip_address', 'award_id', 'nominee', 'award_program_id'];
}
