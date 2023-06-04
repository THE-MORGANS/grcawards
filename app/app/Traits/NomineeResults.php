<?php
namespace App\Traits;
use App\Models\{ComBankChiefRiskOfficer, ComBankFraudAwareness,
    ComBankRiskComplaince, GrcAntiFinCrimReporter, GrcEmployer, 
    GrcSolutionProvider, GrcTrainingProvider};


trait NomineeResults{

    public function BankChiefRiskOfficerResults($award_id){

        $awards = ComBankChiefRiskOfficer::where('award_id', $award_id)->get();
        $total_votes = ComBankChiefRiskOfficer::where('award_id', $award_id)->sum('number_of_votes');
        $check = ComBankChiefRiskOfficer::where('status', 'WINNER')->first();
        if($check){
            $check->update(['status' => '']);
        }
        foreach($awards as $award){
            $judge_votes = json_decode($award->judges_votes);
            $total_judges_votes = array_sum($judge_votes);
            $judge_votes_to_percentage = ($total_judges_votes * 100)/(count($judge_votes) * 10);
            $eighty_percent_of_judges_score = ($total_judges_votes * 80)/(count($judge_votes) * 10);
            $twenty_percent_of_votes_score  = ($award->number_of_votes * 20)/($total_votes); 
            $overall_score = $eighty_percent_of_judges_score + $twenty_percent_of_votes_score;
            $award->fill(['total_of_judges_score_converted_to_percentage' => $judge_votes_to_percentage, 
            'eighty_percent_of_judges_score' => $eighty_percent_of_judges_score, 'twenty_percent_votes' => $twenty_percent_of_votes_score,
            'overall_score' => $overall_score])->save();
        }
        $total_votes = ComBankChiefRiskOfficer::where('award_id', $award_id)->take(1)->orderBy('overall_score', 'DESC')->first();
        $total_votes->update(['status' => 'WINNER']);
    }

    public function BankFraudAwarenessResults($award_id){

        $awards = ComBankFraudAwareness::where('award_id', $award_id)->get();
        $total_votes = ComBankFraudAwareness::where('award_id', $award_id)->sum('number_of_votes');
        $check = ComBankFraudAwareness::where('status', 'WINNER')->first();
        if($check){
            $check->update(['status' => '']);
        }
        foreach($awards as $award){
            $judge_votes = json_decode($award->judges_votes);
            $total_judges_votes = array_sum($judge_votes);
            $judge_votes_to_percentage = ($total_judges_votes * 100)/(count($judge_votes) * 10);
            $eighty_percent_of_judges_score = ($total_judges_votes * 80)/(count($judge_votes) * 10);
            $twenty_percent_of_votes_score  = ($award->number_of_votes * 20)/($total_votes); 
            $overall_score = $eighty_percent_of_judges_score + $twenty_percent_of_votes_score;
            $award->fill(['total_of_judges_score_converted_to_percentage' => $judge_votes_to_percentage, 
            'eighty_percent_of_judges_score' => $eighty_percent_of_judges_score, 'twenty_percent_votes' => $twenty_percent_of_votes_score,
            'overall_score' => $overall_score])->save();
        }
        $total_votes = ComBankFraudAwareness::where('award_id', $award_id)->take(1)->orderBy('overall_score', 'DESC')->first();
        $total_votes->update(['status' => 'WINNER']);
    }


    public function BankRiskComplaincesResults($award_id){

        $awards = ComBankRiskComplaince::where('award_id', $award_id)->get();
        $total_votes = ComBankRiskComplaince::where('award_id', $award_id)->sum('number_of_votes');
        $check = ComBankRiskComplaince::where('status', 'WINNER')->first();
        if($check){
            $check->update(['status' => '']);
        }
        foreach($awards as $award){
            $judge_votes = json_decode($award->judges_votes);
            $total_judges_votes = array_sum($judge_votes);
            $judge_votes_to_percentage = ($total_judges_votes * 100)/(count($judge_votes) * 10);
            $eighty_percent_of_judges_score = ($total_judges_votes * 80)/(count($judge_votes) * 10);
            $twenty_percent_of_votes_score  = ($award->number_of_votes * 20)/($total_votes); 
            $overall_score = $eighty_percent_of_judges_score + $twenty_percent_of_votes_score;
            $award->fill(['total_of_judges_score_converted_to_percentage' => $judge_votes_to_percentage, 
            'eighty_percent_of_judges_score' => $eighty_percent_of_judges_score, 'twenty_percent_votes' => $twenty_percent_of_votes_score,
            'overall_score' => $overall_score])->save();
        }
        $total_votes = ComBankRiskComplaince::where('award_id', $award_id)->take(1)->orderBy('overall_score', 'DESC')->first();
        $total_votes->update(['status' => 'WINNER']);
    }

    public function GrcAntiFinCrimReportersResults($award_id){
        $awards = GrcAntiFinCrimReporter::where('award_id', $award_id)->get();
        $total_votes = GrcAntiFinCrimReporter::where('award_id', $award_id)->sum('number_of_votes');
        $check = GrcAntiFinCrimReporter::where('status', 'WINNER')->first();
        if($check){
            $check->update(['status' => '']);
        }
        foreach($awards as $award){
            $judge_votes = json_decode($award->judges_votes);
            $total_judges_votes = array_sum($judge_votes);
            $judge_votes_to_percentage = ($total_judges_votes * 100)/(count($judge_votes) * 10);
            $eighty_percent_of_judges_score = ($total_judges_votes * 80)/(count($judge_votes) * 10);
            $twenty_percent_of_votes_score  = ($award->number_of_votes * 20)/($total_votes); 
            $overall_score = $eighty_percent_of_judges_score + $twenty_percent_of_votes_score;
            $award->fill(['total_of_judges_score_converted_to_percentage' => $judge_votes_to_percentage, 
            'eighty_percent_of_judges_score' => $eighty_percent_of_judges_score, 'twenty_percent_votes' => $twenty_percent_of_votes_score,
            'overall_score' => $overall_score])->save();
        }
        $total_votes = GrcAntiFinCrimReporter::where('award_id', $award_id)->take(1)->orderBy('overall_score', 'DESC')->first();
        $total_votes->update(['status' => 'WINNER']);
    }


    public function GrcSolutionProviderResults($award_id){

        $awards = GrcSolutionProvider::where('award_id', $award_id)->get();
        $total_votes = GrcSolutionProvider::where('award_id', $award_id)->sum('number_of_votes');
        $check = GrcSolutionProvider::where('status', 'WINNER')->first();
        if($check){
            $check->update(['status' => '']);
        }
        foreach($awards as $award){
            $judge_votes = json_decode($award->judges_votes);
            $total_judges_votes = array_sum($judge_votes);
            $judge_votes_to_percentage = ($total_judges_votes * 100)/(count($judge_votes) * 10);
            $eighty_percent_of_judges_score = ($total_judges_votes * 80)/(count($judge_votes) * 10);
            $twenty_percent_of_votes_score  = ($award->number_of_votes * 20)/($total_votes); 
            $overall_score = $eighty_percent_of_judges_score + $twenty_percent_of_votes_score;
            $award->fill(['total_of_judges_score_converted_to_percentage' => $judge_votes_to_percentage, 
            'eighty_percent_of_judges_score' => $eighty_percent_of_judges_score, 'twenty_percent_votes' => $twenty_percent_of_votes_score,
            'overall_score' => $overall_score])->save();
        }
        $total_votes = GrcSolutionProvider::where('award_id', $award_id)->take(1)->orderBy('overall_score', 'DESC')->first();
        $total_votes->update(['status' => 'WINNER']);
    }

    public function GrcEmployersResults($award_id){
        $awards = GrcEmployer::where('award_id', $award_id)->get();
        $total_votes = GrcEmployer::where('award_id', $award_id)->sum('number_of_votes');
        $check = GrcEmployer::where('status', 'WINNER')->first();
        if($check){
            $check->update(['status' => '']);
        }
        foreach($awards as $award){
            $judge_votes = json_decode($award->judges_votes);
            $total_judges_votes = array_sum($judge_votes);
            $judge_votes_to_percentage = ($total_judges_votes * 100)/(count($judge_votes) * 10);
            $eighty_percent_of_judges_score = ($total_judges_votes * 80)/(count($judge_votes) * 10);
            $twenty_percent_of_votes_score  = ($award->number_of_votes * 20)/($total_votes); 
            $overall_score = $eighty_percent_of_judges_score + $twenty_percent_of_votes_score;
            $award->fill(['total_of_judges_score_converted_to_percentage' => $judge_votes_to_percentage, 
            'eighty_percent_of_judges_score' => $eighty_percent_of_judges_score, 'twenty_percent_votes' => $twenty_percent_of_votes_score,
            'overall_score' => $overall_score])->save();
        }
        $total_votes = GrcEmployer::where('award_id', $award_id)->take(1)->orderBy('overall_score', 'DESC')->first();
        $total_votes->update(['status' => 'WINNER']);
    }


    public function GrcTrainingProviderResults($award_id){
        $awards = GrcTrainingProvider::where('award_id', $award_id)->get();
        $total_votes = GrcTrainingProvider::where('award_id', $award_id)->sum('number_of_votes');
        $check = GrcTrainingProvider::where('status', 'WINNER')->first();
        if($check){
            $check->update(['status' => '']);
        }
        foreach($awards as $award){
            $judge_votes = json_decode($award->judges_votes);
            $total_judges_votes = array_sum($judge_votes);
            $judge_votes_to_percentage = ($total_judges_votes * 100)/(count($judge_votes) * 10);
            $eighty_percent_of_judges_score = ($total_judges_votes * 80)/(count($judge_votes) * 10);
            $twenty_percent_of_votes_score  = ($award->number_of_votes * 20)/($total_votes); 
            $overall_score = $eighty_percent_of_judges_score + $twenty_percent_of_votes_score;
            $award->fill(['total_of_judges_score_converted_to_percentage' => $judge_votes_to_percentage, 
            'eighty_percent_of_judges_score' => $eighty_percent_of_judges_score, 'twenty_percent_votes' => $twenty_percent_of_votes_score,
            'overall_score' => $overall_score])->save();
        }
        $total_votes = GrcTrainingProvider::where('award_id', $award_id)->take(1)->orderBy('overall_score', 'DESC')->first();
        $total_votes->update(['status' => 'WINNER']);
    }




}