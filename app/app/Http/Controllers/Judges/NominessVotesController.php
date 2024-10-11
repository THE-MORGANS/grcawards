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
use App\Models\MediaVotes;
use App\Models\NonfiVotes;
use App\Models\WomenInGrc;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Traits\{AwardsGroups,JudgeVotes,NomineeResults,NomineesAwards};
class NominessVotesController extends Controller
{
    //
    use NomineesAwards, JudgeVotes, NomineeResults,AwardsGroups;
    
    public function ViewNominessVotes(Request $request, $award_program_id, $award_id)
    {
        $award_program = Hashids::connection('awardProgram')->encode(1);
        $award_id = Hashids::connection('award')->decode($award_id)[0];
        $data = $this->getAwardId();
        if (in_array($award_id,  $data['award_group_one'])) {
            $data['awards'] = ComBankRiskComplaince::whereAwardId($award_id)->get();
            return view('contents.admin.table.ComBankRiskComplainces', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_two'])) {
            $data['awards'] = ComBankFraudAwareness::whereAwardId($award_id)->get();
            return view('contents.admin.table.com_bank_fraud_awarenesses', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_three'])) {
            $data['awards'] = ComBankChiefRiskOfficer::whereAwardId($award_id)->get();
            return view('contents.admin.table.com_bank_chief_risk_officers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id, $data['award_group_four'])) {
            $data['awards'] = GrcEmployer::whereAwardId($award_id)->get();
            return view('contents.admin.table.grc_employers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_five'])) {
            $data['awards'] = GrcSolutionProvider::whereAwardId($award_id)->get();
            return view('contents.admin.table.grc_solution_providers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_six'])) {
            $data['awards'] = GrcTrainingProvider::whereAwardId($award_id)->get();
            return view('contents.admin.table.grc_training_providers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data['award_group_seven'])) {
            $data['awards'] = GrcAntiFinCrimReporter::whereAwardId($award_id)->get();
            return view('contents.admin.table.grc_anti_fin_crim_reporters', $data)->with(['award_program' => $award_program]);
        }else if (in_array($award_id,  $data['award_group_eight'])) {
            $data['awards'] = CrimePreventionAdvisoryService::whereAwardId($award_id)->get();
            return view('contents.admin.table.crime_prevention_advisory_service', $data)->with(['award_program' => $award_program]);
        }
        else if (in_array($award_id,  $data['award_group_nine'])) {
            $data['awards'] = WomenInGrc::whereAwardId($award_id)->get();
            return view('contents.admin.table.women_in_grc', $data)->with(['award_program' => $award_program]);
        }
        else if (in_array($award_id,  $data['award_group_ten'])) {
            $data['awards'] = MediaVotes::whereAwardId($award_id)->get();
            return view('contents.admin.table.media_votes', $data)->with(['award_program' => $award_program]);
        }
        else if (in_array($award_id,  $data['award_group_eleven'])) {
            $data['awards'] = GovernorsVotes::whereAwardId($award_id)->get();
            return view('contents.admin.table.governors_votes', $data)->with(['award_program' => $award_program]);
        // }
        // else if (in_array($award_id,  $data['award_group_twelve'])) {
        //     $data['awards'] = NonfiVotes::whereAwardId($award_id)->get();
        //     return view('contents.admin.table.nonfi_votes', $data)->with(['award_program' => $award_program]);
         }else {
            $request->session()->flash('danger', 'No nominees for this awards at the moment');
            return back();
        }
    }

}
