<?php 
namespace App\Traits;
use App\Models\GrcSolutionProvider;
use App\Models\VoteCount;
use App\Models\JudgesVotes;

trait JudgeVotes {


    public function GrcSolutionProvidersVote($judges_votes, $nominee_ids, $award_hashid){
        $check = JudgesVotes::where(['award_id'=>$award_hashid, 'judge_id' => auth('admin')->user()->id])->first();
       // dd($nominee_ids);
       $vote = [];
        if($check){
            $data = false;
        }else{ 
        foreach($nominee_ids as $nominess => $value){
               $nominee = GrcSolutionProvider::where(['nominee_id' => $value, 'award_id'=>$award_hashid])->first();
               if($nominee->judges_votes != null){    
               $vote =  json_decode($nominee->judges_votes);
                array_push($vote, $judges_votes[$nominess]);
                $nominee->update(['judges_votes' => json_encode($vote)]);
                JudgesVotes::create([
                    'judge_id' => auth('admin')->user()->id,
                     'votes' => $judges_votes[$nominess],
                    'award_id' => $award_hashid, 
                    'nominee_id' => $value,
                ]);
               }else{
                 array_push($vote,$judges_votes[$nominess]);
                 JudgesVotes::create([
                    'judge_id' => auth('admin')->user()->id,
                     'votes' => $judges_votes[$nominess],
                    'award_id' => $award_hashid, 
                    'nominee_id' => $value,
                ]);
                 $nominee->update(['judges_votes' => json_encode($vote)]);
                
               }
               array_pop($vote);
            }
        $data = true;
        }
        return $data;
    }

}


