<?php 
namespace App\Traits;

trait AwardsGroups{
 
    public function getAwardId()
    {
        $data['award_group_one'] = []; //ComBankRiskComplainces
        $data['award_group_five'] = []; //rc_solution_providers - profile_of_the_software_provider, areas_of_grc_the_software_covers
        $data['award_group_seven'] = []; //grc_anti_fin_crim_reporters
        $data['award_group_eleven'] = [119,127,130,131,132,133,134,135,136,137]; // Governors award 
        $data['award_group_twelve']  = []; //NonFI
        $data['award_group_two'] = [121]; //ESG Initiative
        $data['award_group_three'] = [105,109,111,113,115]; //com_bank_chief_risk_officers - recognised_professional_association_membership, number_of_independent_non_executive_directors, board_committee_in_place_covering_risk_management
        $data['award_group_four'] = [104,106,107,108,110,112,114,116,117,118,120]; //grc_employers - worklife_balance, pay_and_benefits, No_of_employees_who_rated
        $data['award_group_six'] = [123,124,125,126]; //grc_training_providers - profile_of_the_training_provider_and_areas_of_grc_covered, evidence_of_innovative_ways_of_teaching
        $data['award_group_eight'] = []; //Financial Crime Prevention Advisory Service - profile_of_the_advisory_service_provider, evidence_of_innovative_ways_of_promoting
        $data['award_group_nine'] = [128,129]; // women is GRC
        $data['award_group_ten'] = [122]; //Media Votes
        $data['award_group_eleven'] = []; //Special Recog
        return $data;
    }

    
}