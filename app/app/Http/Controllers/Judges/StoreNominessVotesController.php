<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Traits\{AwardsGroups,JudgeVotes,NomineeResults,NomineesAwards};
class StoreNominessVotesController extends Controller
{
    use NomineesAwards, JudgeVotes, NomineeResults,AwardsGroups;
    
    public function StoreNominessVotes(Request $request, $award_id, $award_program_id=2)
    {
        $id = $request->nominess;
        $award_program = Hashids::connection('awardProgram')->decode(2);
       // $award_id = Hashids::connection('award')->decode($award_id);
        // dd($request->all());
         $award_id = $request->award_id;
        $data = $this->getAwardId();
       // $award_id = $data['award_id'];
       if(array_sum($request->judges_votes) > 40){
        $request->session()->flash('danger', 'Vote Must be between 1 - 10');
        return back()->withInput($request->all());
       } 

       foreach($request->judges_votes as  $key => $vt){
        if($vt == null){
            $request->session()->flash('danger', 'Please vote for all Nominees');
            return back()->withInput($request->all());  
        }
       }
        if (in_array($award_id,  $data['award_group_one'])) {

            $data = $this->BankRiskComplaincesVote($request->judges_votes, $request->nominee_ids, $award_id);

            if ($data == false) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back()->withInput($request->all());
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back()->withInput($request->all());
        } else if (in_array($award_id,  $data['award_group_two'])) {
            $data = $this->BankFraudAwarenessVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == false) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        } else if (in_array($award_id,  $data['award_group_three'])) {
            $data = $this->BankChiefRiskOfficerVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == false) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        } else if (in_array($award_id,  $data['award_group_four'])) {
            $data = $this->GrcEmployersVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == false) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        } else if (in_array($award_id,  $data['award_group_five'])) {
            $data = $this->GrcSolutionProvidersVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == false) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        } else if (in_array($award_id,  $data['award_group_six'])) {
            $data = $this->GrcTrainingProviderVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == false) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        } else if (in_array($award_id,  $data['award_group_seven'])) {
            $data = $this->GrcAntiFinCrimReportersVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == null) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
        } else if (in_array($award_id,  $data['award_group_eight'])) {
            $data = $this->crimePreventionAdvisoryServicesVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == null) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        }else if (in_array($award_id,  $data['award_group_nine'])) {
            $data = $this->WomenInGrcJudgeVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == null) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        }
        else if (in_array($award_id,  $data['award_group_ten'])) {
            $data = $this->MediasJudgeVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == null) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        }
        
        else if (in_array($award_id,  $data['award_group_eleven'])) {
            $data = $this->GovernorsJudgeVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == null) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        }
        // else if (in_array($award_id,  $data['award_group_twelve'])) {
        //     $data = $this->NonfiJudgeVote($request->judges_votes, $request->nominee_ids, $award_id);
        //     if ($data == null) {
        //         $request->session()->flash('danger', 'You have voted for this category already');
        //         return back();
        //     }
        //     $request->session()->flash('success', 'Vote Updated Successfully');
        //     return back();
        // }
          else {
            return back();
        }
    }
}
