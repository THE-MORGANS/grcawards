<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommBanksAwards extends Model
{
    use HasFactory;

    protected $table = 'comm_banks_awards';
    protected $fillable = ['award_id', 'nominee_id', 'number_of_votes', 'percentage_votes', 'names', 'title', 'board_composition', 'policies_framework', 'fraud_awareness', 'additional_information', 'adverse_media', 'judges_scores', 'linkedin_profile', 'board_committee_in_risk_management', 'no_of_independent_non_executive_directors', 'board_committee_in_governance_compliance', 'total_judges_score', 'documentations', 'management', 'average_rating', 'No_of_employee_rated', 'job_security_advancement', 'culture', 'worklife_balance', 'pay_benefits', 'fraud_prevention_policies', 'aml_policy', '80_percent_score', '20_percent_votes', 'overall_core', 'Status'];
}
