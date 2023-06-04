<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrcAntiFinCrimReporter extends Model
{
    use HasFactory;

    protected $table = 'grc_anti_fin_crim_reporters';
    protected $fillable = ['award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'profile_of_the_reporter', 'areas_anti_fincrime_the_reporter_covers', 'evidence_of_reporter_work', 'achievements', 'adverse_media', 
    'judges_votes', 'total_of_judges_score_converted_to_percentage', 'eighty_percent_of_judges_score', 'twenty_percent_votes', 'overall_score', 'status'];

    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
}
