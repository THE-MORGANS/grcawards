<?php 
namespace App\Traits;

trait AwardsGroups{

    public function getAwardId()
    {
        $data['award_group_one'] = [40,43]; //ComBankRiskComplainces
        $data['award_group_two'] = [55]; //com_bank_fraud_awarenesses
        $data['award_group_three'] = [41,42,47,51,52,54,82,83,86,87,90,91]; //com_bank_chief_risk_officers
        $data['award_group_four'] = [44,45,46,49,53,54,84,85,88,89,92,93]; //grc_employers
        $data['award_group_five'] = [97]; //grc_solution_providers
        $data['award_group_six'] = [94]; //grc_training_providers
        $data['award_group_seven'] = [12]; //grc_anti_fin_crim_reporters
        $data['award_group_eight'] = [96,95]; //Financial Crime Prevention Advisory Service
        $data['award_group_nine'] = [ 98,99]; // women is GRC
        $data['award_group_ten'] = [100]; //Media Votes
        $data['award_group_eleven'] = [101]; // Governors award 
        $data['award_group_twelve']  = [102]; //NonFI
        return $data;
    }

}