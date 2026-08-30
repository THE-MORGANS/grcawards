<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteCount extends Model
{
    use HasFactory;

    protected $table = "vote_counts";
    protected $fillable = [
        'nominee_id', 'award_id', 'award_program_id', 'voteCount'
    ];

    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id');
    }

    public function award(){
        return $this->belongsTo(Award::class, 'award_id');
    }
}
