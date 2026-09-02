<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomineeEvidence extends Model
{
    use HasFactory;

    protected $table = 'nominee_evidence';

    protected $fillable = [
        'nominee_id', 'award_id', 'criterion', 'weight', 'evidence', 'assessment', 'strength',
        'primary_source', 'primary_url', 'authority_source', 'authority_url',
        'secondary_source', 'secondary_url', 'verification_note',
        'eligibility_treatment', 'vote_tie_note', 'competition_status',
        'adverse_screen', 'adverse_materiality', 'adverse_summary', 'adverse_event_date',
        'adverse_source_1', 'adverse_source_2', 'judge_materiality_treatment',
    ];

    public function nominee()
    {
        return $this->belongsTo(Nominee::class, 'nominee_id');
    }

    public function award()
    {
        return $this->belongsTo(Award::class, 'award_id');
    }
}
