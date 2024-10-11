<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Models\ComBankChiefRiskOfficer;
use App\Models\ComBankFraudAwareness;
use App\Models\ComBankRiskComplaince;
use App\Models\CrimePreventionAdvisoryService;
use App\Models\GovernorsVotes;
use App\Models\GrcAntiFinCrimReporter;
use App\Models\GrcEmployer;
use App\Models\GrcSolutionProvider;
use App\Models\GrcTrainingProvider;
use App\Models\JudgesVotes;
use App\Models\MediaVotes;
use App\Models\NonfiVotes;
use App\Models\WomenInGrc;
use Illuminate\Http\Request;
use App\Traits\{AwardsGroups,JudgeVotes,NomineeResults,NomineesAwards};
use Vinkla\Hashids\Facades\Hashids;

class NomineeVotesResultController extends Controller
{
    //
    use NomineesAwards, JudgeVotes, NomineeResults,AwardsGroups;
    
    public function ViewNominessVotesResults(Request $request,$award_program_id,$award_id,)
    {
     
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id);
        $award_id= Hashids::connection('award')->decode($award_id)[0];
        $data = $this->getAwardId();
        
        $votes = JudgesVotes::where('award_id', $award_id)->first();

 
        if ( empty($votes)) {
            $request->session()->flash('danger', 'Judges have not voted for this award, please check back later');
            return redirect()->back();
        }

        if (in_array($award_id,  $data['award_group_one'])) {
            $this->BankRiskComplaincesResults($award_id);
            $data['awards'] = ComBankRiskComplaince::whereAwardId($award_id)->get();
            return view('contents.admin.voteResults.ComBankRiskComplainces', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_two'])) {
            $this->BankFraudAwarenessResults($award_id);
            $data['awards'] = ComBankFraudAwareness::whereAwardId($award_id)->get();
            return view('contents.admin.voteResults.com_bank_fraud_awarenesses', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_three'])) {
            $this->BankChiefRiskOfficerResults($award_id);
            $data['awards'] = ComBankChiefRiskOfficer::whereAwardId($award_id)->get();
            return view('contents.admin.voteResults.com_bank_chief_risk_officers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id, $data['award_group_four'])) {
            $this->GrcEmployersResults($award_id);
            $data['awards'] = GrcEmployer::whereAwardId($award_id)->get();
            return view('contents.admin.voteResults.grc_employers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_five'])) {
            $this->GrcSolutionProviderResults($award_id);
            $data['awards'] = GrcSolutionProvider::whereAwardId($award_id)->get();
            return view('contents.admin.voteResults.grc_solution_providers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_six'])) {
            $this->GrcTrainingProviderResults($award_id);
            $data['awards'] = GrcTrainingProvider::whereAwardId($award_id)->get();
            return view('contents.admin.voteResults.grc_training_providers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_seven'])) {
            $this->GrcAntiFinCrimReportersResults($award_id);
            $data['awards'] = GrcAntiFinCrimReporter::whereAwardId($award_id)->get();
            return view('contents.admin.voteResults.grc_anti_fin_crim_reporters', $data)->with(['award_program' => $award_program]);
        }else if (in_array($award_id,  $data['award_group_eight'])) {
        $this->crimePreventionAdvisoryResults($award_id);
        $data['awards'] = CrimePreventionAdvisoryService::whereAwardId($award_id)->get();
        return view('contents.admin.voteResults.crime_prevention_advisory_service', $data)->with(['award_program' => $award_program]);
    } 
            else if (in_array($award_id,  $data['award_group_nine'])) {
                $this->WomenInGrcResults($award_id);
                $data['awards'] = WomenInGrc::whereAwardId($award_id)->get();
                return view('contents.admin.voteResults.women_in_grc', $data)->with(['award_program' => $award_program]);
            } 
            else if (in_array($award_id,  $data['award_group_ten'])) {
                $this->MediaVotesResults($award_id);
                $data['awards'] = MediaVotes::whereAwardId($award_id)->get();
                return view('contents.admin.voteResults.media_votes', $data)->with(['award_program' => $award_program]);
            } 
            else if (in_array($award_id,  $data['award_group_eleven'])) {
                $this->GovernorsVotesResults($award_id);
                $data['awards'] = GovernorsVotes::whereAwardId($award_id)->get();
                return view('contents.admin.voteResults.governors_votes', $data)->with(['award_program' => $award_program]);
            }  

    else {
            return back();
        }
    }
}
