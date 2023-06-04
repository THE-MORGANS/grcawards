<?php
namespace App\Traits;
use App\Models\GrcSolutionProvider;


trait NomineeResults{

    public function GrcSolutionProviderResults($award_id){

        $awards = GrcSolutionProvider::where('award_id', $award_id)->get();
        $total_votes = GrcSolutionProvider::where('award_id', $award_id)->sum('number_of_votes');
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



}