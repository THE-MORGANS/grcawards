<?php
namespace App\Traits;
use App\Models\VoteCount;
use App\Models\{ComBankChiefRiskOfficer, ComBankFraudAwareness,
    ComBankRiskComplaince, GrcAntiFinCrimReporter, GrcEmployer, 
    GrcSolutionProvider, GrcTrainingProvider};


trait NomineesAwards {

    public function BankChiefRiskOfficer($votes, $award_hashid){
        $check = ComBankChiefRiskOfficer::whereAwardId($award_hashid)->get();
        if(!empty($check)){
           foreach($check as $cc => $val){
          $val->fill(['award_id'=> $votes[$cc]->award_id,  'nominee_id'=>$votes[$cc]->nominee_id,'number_of_votes' => $votes[$cc]->voteCount, 
          'percentage_votes' => ($votes[$cc]->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount') ])->save();
           }
        }else{foreach($votes as $vote){
            ComBankChiefRiskOfficer::create([
                'award_id' => $vote->award_id,
                'nominee_id' => $vote->nominee_id,
                'number_of_votes' => $vote->voteCount,
                'percentage_votes' => ($vote->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount')
            ]);
        }
    }
    $data = ComBankChiefRiskOfficer::whereAwardId($award_hashid)->get();
        return $data;
    }

    public function BankFraudAwareness($votes, $award_hashid){
        $check = ComBankFraudAwareness::whereAwardId($award_hashid)->get();
        if(!empty($check)){
           foreach($check as $cc => $val){
          $val->fill(['award_id'=> $votes[$cc]->award_id,  'nominee_id'=>$votes[$cc]->nominee_id,'number_of_votes' => $votes[$cc]->voteCount, 
          'percentage_votes' => ($votes[$cc]->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount') ])->save();
           }
        }else{
        foreach($votes as $vote){
            ComBankFraudAwareness::create([
                'award_id' => $vote->award_id,
                'nominee_id' => $vote->nominee_id,
                'number_of_votes' => $vote->voteCount,
                'percentage_votes' => ($vote->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount')
            ]);
        }
    }
    $data = ComBankFraudAwareness::whereAwardId($award_hashid)->get();
    return $data;
    }

    public function BankRiskComplainces($votes, $award_hashid){
        $check = ComBankRiskComplaince::whereAwardId($award_hashid)->get();
        if(!empty($check)){
           foreach($check as $cc => $val){
           $val->fill(['award_id'=> $votes[$cc]->award_id,  'nominee_id'=>$votes[$cc]->nominee_id,'number_of_votes' => $votes[$cc]->voteCount, 
          'percentage_votes' => ($votes[$cc]->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount') ])->save();
           }
           
        }else {
        foreach($votes as $vote){
            ComBankRiskComplaince::create([
                'award_id' => $vote->award_id,
                'nominee_id' => $vote->nominee_id,
                'number_of_votes' => $vote->voteCount,
                'percentage_votes' => ($vote->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount')
            ]);
        }
    }
    $data = ComBankRiskComplaince::whereAwardId($award_hashid)->get();
    return $data;
    }

    public function GrcAntiFinCrimReporters($votes, $award_hashid){
        $check = GrcAntiFinCrimReporter::whereAwardId($award_hashid)->get();
        if(!empty($check)){
           foreach($check as $cc => $val){
          $val->fill(['award_id'=> $votes[$cc]->award_id,  'nominee_id'=>$votes[$cc]->nominee_id,'number_of_votes' => $votes[$cc]->voteCount, 
          'percentage_votes' => ($votes[$cc]->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount') ])->save();
           }
          
        }else{
        foreach($votes as $vote){
           GrcAntiFinCrimReporter::create([
                'award_id' => $vote->award_id,
                'nominee_id' => $vote->nominee_id,
                'number_of_votes' => $vote->voteCount,
                'percentage_votes' => ($vote->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount')
            ]);
        }
    }
    $data = GrcAntiFinCrimReporter::whereAwardId($award_hashid)->get();
    return $data;
    }

    public function GrcSolutionProviders($votes, $award_hashid){
        $check = GrcSolutionProvider::whereAwardId($award_hashid)->get();
        if(!empty($check)){
           foreach($check as $cc => $val){
           $val->fill(['award_id'=> $votes[$cc]->award_id,  'nominee_id'=>$votes[$cc]->nominee_id,'number_of_votes' => $votes[$cc]->voteCount, 
          'percentage_votes' => ($votes[$cc]->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount') ])->save();
           }
        }else{
        foreach($votes as $vote){
              GrcSolutionProvider::create([
                'award_id' => $vote->award_id,
                'nominee_id' => $vote->nominee_id,
                'number_of_votes' => $vote->voteCount,
                'percentage_votes' => ($vote->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount')
            ]);
        }
        }
        $data = GrcSolutionProvider::whereAwardId($award_hashid)->get();
        return $data;
    }

    public function GrcEmployers($votes, $award_hashid){
        $check =  GrcEmployer::whereAwardId($award_hashid)->get();
        if(!empty($check)){
           foreach($check as $cc => $val){
              $val->fill(['award_id'=> $votes[$cc]->award_id,  'nominee_id'=>$votes[$cc]->nominee_id,'number_of_votes' => $votes[$cc]->voteCount, 
          'percentage_votes' => ($votes[$cc]->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount') ])->save();
           }
        }else{
        foreach($votes as $vote){
               GrcEmployer::create([
                'award_id' => $vote->award_id,
                'nominee_id' => $vote->nominee_id,
                'number_of_votes' => $vote->voteCount,
                'percentage_votes' => ($vote->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount')
            ]);
        }
    }
    $data =  GrcEmployer::whereAwardId($award_hashid)->get();
    return $data;
    }

    public function GrcTrainingProvider($votes, $award_hashid){
        $check =  GrcTrainingProvider::whereAwardId($award_hashid)->get();
        if(!empty($check)){
           foreach($check as $cc => $val){
             $val->fill(['award_id'=> $votes[$cc]->award_id,  'nominee_id'=>$votes[$cc]->nominee_id,'number_of_votes' => $votes[$cc]->voteCount, 
          'percentage_votes' => ($votes[$cc]->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount') ])->save();
           }
        }else{
        foreach($votes as $vote){
           GrcTrainingProvider::create([
                'award_id' => $vote->award_id,
                'nominee_id' => $vote->nominee_id,
                'number_of_votes' => $vote->voteCount,
                'percentage_votes' => ($vote->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount')
            ]);
        }
    }
    $data =  GrcTrainingProvider::whereAwardId($award_hashid)->get();
    return $data;
    }


    ######################## 

}


