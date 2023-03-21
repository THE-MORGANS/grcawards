<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherVote extends Model
{
    use HasFactory;


    protected $table = "other_votes";

    protected $fillable = ['ip_address','voter','award_id','nominee', 'award_program_id'];

    public function awardProgram(){
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function award(){
        return $this->belongsTo(Award::class, 'award_id');
    }

    // public function voter(){
    //     return $this->belongsTo(Voter::class, 'voter_id');
    // }
    
}
