<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Models\VoteCount;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Traits\{AwardsGroups,JudgeVotes,NomineeResults,NomineesAwards};
class CreateNominessController extends Controller
{
    use NomineesAwards, JudgeVotes, NomineeResults,AwardsGroups;
    
    public function CreateNominessVotes(Request $request, $award_program_id, $award_id)
    {
        $data = $this->getAwardId();
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id);
        // $award_hashids = Hashids::connection('award')->encode($award_id);
        $award_hashid = Hashids::connection('award')->decode($award_id)[0];
        $votes = VoteCount::whereAwardId($award_hashid)->take(4)->orderBy('voteCount', 'DESC')->get();
        if (count($votes) > 0) {
            if (in_array($award_hashid,  $data['award_group_one'])) {
                $data =  $this->BankRiskComplainces($votes, $award_hashid);
                return view('contents.admin.judge.ComBankRiskComplainces')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid,  $data['award_group_two'])) {
                $data = $this->BankFraudAwareness($votes, $award_hashid);
                return view('contents.admin.judge.com_bank_fraud_awarenesses')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid,  $data['award_group_three'])) {
                $data =  $this->BankChiefRiskOfficer($votes, $award_hashid);
                return view('contents.admin.judge.com_bank_chief_risk_officers')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid,  $data['award_group_four'])) {
                $data = $this->GrcEmployers($votes, $award_hashid);
                return view('contents.admin.judge.grc_employers')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid,  $data['award_group_five'])) {
                $data = $this->GrcSolutionProviders($votes, $award_hashid);
                return view('contents.admin.judge.grc_solution_providers')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid,  $data['award_group_six'])) {
                $data =  $this->GrcTrainingProvider($votes, $award_hashid);
                return view('contents.admin.judge.grc_training_providers')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid,  $data['award_group_seven'])) {
                $data = $this->GrcAntiFinCrimReporters($votes, $award_hashid);
                return view('contents.admin.judge.grc_anti_fin_crim_reporters')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            }else if (in_array($award_hashid,  $data['award_group_eight'])) {
                $data = $this->crimePreventionAdvisoryServices($votes, $award_hashid);
                return view('contents.admin.judge.crime_prevention_advisory_service')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if(in_array($award_hashid,  $data['award_group_nine'])){
                    $data =  $this->WomenInGrc($votes, $award_hashid);
                return view('contents.admin.judge.women_in_grcs')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid,  $data['award_group_ten'])) {
                    $data = $this->Medias($votes, $award_hashid);
                    return view('contents.admin.judge.medias')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid,  $data['award_group_eleven'])) {
                $data = $this->GovernorsVotes($votes, $award_hashid);
                return view('contents.admin.judge.com_bank_fraud_awarenesses')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
        }else {
                $request->session()->flash('danger', 'Something went wrong, try again');
                return back();
            }
        //         else if (in_array($award_hashid[0],  $data['award_group_twelve'])) {
        //             $data = $this->NonFiVote($otherVotes, $award_hashid[0]);
        //             return view('contents.admin.judge.nonfi_votes')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
        //         } 

        // }
    }
        $request->session()->flash('danger', 'No Nominee votes for this award yet');
        return back();
        }
    

}
