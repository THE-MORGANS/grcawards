<?php 
namespace App\Traits;

trait AwardsGroups{
 
    public function getAwardId()
    {
        // $data['award_group_one'] = [40,43]; ComBankRiskComplainces
        //    $data['award_group_three'] = [41,42,47,51,52,82,83,86,87,90,91]; com_bank_chief_risk_officers
        // $data['award_group_five'] = [97]; grc_solution_providers
        // $data['award_group_seven'] = [12]; grc_anti_fin_crim_reporters
        // $data['award_group_eleven'] = [101]; // Governors award 
        // $data['award_group_twelve']  = [102]; //NonFI

        $data['award_group_two'] = [147]; //ESG Initiative
        $data['award_group_four'] = [125,126, 104,105, 106,107,108,109,110,111,128,129,130,131, 132,133,134,135,137,138]; //grc_employers
        $data['award_group_six'] = [140,141,142,143]; //grc_training_providers
        $data['award_group_eight'] = [96,95]; //Financial Crime Prevention Advisory Service
        $data['award_group_nine'] = [ 138,139]; // women is GRC
        $data['award_group_ten'] = [144]; //Media Votes
        return $data;
    }

}