<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernorsVotes extends Model
{
    use HasFactory;
    protected $table = 'governors_votes';
    protected $fillable = ['award_id', 'nominee_name', 'nominee_id','sector_id', 'number_of_votes', 'percentage_votes', 'Achievements', 'adverse_media', 'judges_votes', 'total_of_judges_score_converted_to_percentage', 'eighty_percent_of_judges_score', 'twenty_percent_votes', 'overall_score', 'status'];

    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    } 
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
}
