<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JudgesVotes extends Model
{
    use HasFactory;

    protected $fillable = ['judge_id', 'nominee_name', 'votes', 'award_id', 'nominee_id'];
}
