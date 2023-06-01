<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComBankRiskComplaince extends Model
{
    use HasFactory;

    protected $table = 'compliance_team_of_the_years';
    protected $fillable = [
        'award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'names', 'board_committee_in_place_covering_governance', 'profile_on_linkedIn', 'documentations', 'adverse_media', '80_percent_score', '20_percent_votes', 'overall_core', 'Status'
    ];
}
