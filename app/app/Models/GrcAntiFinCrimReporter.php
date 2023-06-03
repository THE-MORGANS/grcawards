<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrcAntiFinCrimReporter extends Model
{
    use HasFactory;

    protected $table = 'grc_anti_fin_crim_reporters';
    protected $fillable = ['award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'profile_of_the_reporter', 'areas_anti_fincrime_the_reporter_covers', 'evidence_of_reporter_work', 'achievements', 'adverse_media', '80_percent_score', '20_percent_votes', 'overall_core', 'Status', 'judges_votes'];

    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
}
