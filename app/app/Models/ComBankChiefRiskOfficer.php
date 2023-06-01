<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComBankChiefRiskOfficer extends Model
{
    use HasFactory;

    protected $table = 'com_bank_chief_risk_officers';
    protected $fillable = [
        'award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'names', 'title', 'profile_on_linkedIn', 'recognised_professional_association_membership', 'number_of_independent_non_executive_directors', 'board_committee_in_place_covering_risk_management', 'evidence_of_policy_on_fin_crime_prevention', 'aml_policy', 'documentation', 'adverse_media', '80_percent_score', '20_percent_votes', 'overall_core', 'Status'
    ];

}
