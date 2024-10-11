<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaVotes extends Model
{
    use HasFactory;

    protected $table = 'media_votes';
    protected $fillable = ['award_id', 'nominee_name', 'sector_id','nominee_id', 'number_of_votes', 'percentage_votes', 'profile_of_the_reporter', 'areas_of_GRC_and_anti_FinCrime_the_Reporter_Covers', 'Evidence_of_Reporter_Work', 'judges_votes', 'total_of_judges_score_converted_to_percentage', 'eighty_percent_of_judges_score', 'twenty_percent_votes', 'overall_score', 'status'];

    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
    
}
