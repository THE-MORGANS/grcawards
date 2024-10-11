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

class NominessDetailsController extends Controller
{
    //

    use NomineesAwards, JudgeVotes, NomineeResults,AwardsGroups;
    
    public function getNominessDetails(Request $request, $award_program_id)
    {
        $id = $request->nominess;
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id);
       // $award_id  = Hashids::connection('award')->decode($request->award_id);
        $data_item = $this->getAwardId();
        $award_id = $request->award_id;
        if (in_array($award_id,  $data_item['award_group_one'])) {
            $data['awards'] = ComBankRiskComplaince::whereAwardId($award_id)->get();
            $data['nominessDetails'] = ComBankRiskComplaince::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.ComBankRiskComplainces', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data_item['award_group_two'])) {
            $data['awards'] = ComBankFraudAwareness::whereAwardId($award_id)->get();
            $data['nominessDetails'] = ComBankFraudAwareness::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.com_bank_fraud_awarenesses', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data_item['award_group_three'])) {
            $data['awards'] = ComBankChiefRiskOfficer::whereAwardId($award_id)->get();
            $data['nominessDetails'] = ComBankChiefRiskOfficer::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.com_bank_chief_risk_officers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data_item['award_group_four'])) {
         
            $data['awards'] = GrcEmployer::whereAwardId($award_id)->get();
            $data['nominessDetails'] = GrcEmployer::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.grc_employers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data_item['award_group_five'])) {
            $data['awards'] = GrcSolutionProvider::whereAwardId($award_id)->get();
            $data['nominessDetails'] = GrcSolutionProvider::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.grc_solution_providers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data_item['award_group_six'])) {
            $data['awards'] = GrcTrainingProvider::whereAwardId($award_id)->get();
            $data['nominessDetails'] = GrcTrainingProvider::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.grc_training_providers', $data)->with(['award_program' => $award_program]);
        } else if (in_array($award_id,  $data_item['award_group_seven'])) {
            $data['awards'] = GrcAntiFinCrimReporter::whereAwardId($award_id)->get();
            $data['nominessDetails'] = GrcAntiFinCrimReporter::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.grc_anti_fin_crim_reporters', $data)->with(['award_program' => $award_program]);
        } 
        else if (in_array($award_id,  $data_item['award_group_eight'])) {
            $data['awards'] = CrimePreventionAdvisoryService::whereAwardId($award_id)->get();
            $data['nominessDetails'] = CrimePreventionAdvisoryService::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.crime_prevention_advisory_service', $data)->with(['award_program' => $award_program]);
        }else if (in_array($award_id,  $data_item['award_group_nine'])) {
            $data['awards'] = WomenInGrc::whereAwardId($award_id)->get();
            $data['nominessDetails'] = WomenInGrc::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.women_in_grcs', $data)->with(['award_program' => $award_program]);
        }else if (in_array($award_id,  $data_item['award_group_ten'])) {
            $data['awards'] = MediaVotes::whereAwardId($award_id)->get();
            $data['nominessDetails'] = MediaVotes::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.medias', $data)->with(['award_program' => $award_program]);
        } 
        else if (in_array($award_id,  $data_item['award_group_eleven'])) {
            $data['awards'] = GovernorsVotes::whereAwardId($award_id)->get();
            $data['nominessDetails'] = GovernorsVotes::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.governors_vote', $data)->with(['award_program' => $award_program]);
        // else if (in_array($award_id,  $data_item['award_group_twelve'])) {
        //     $data['awards'] = NonfiVotes::whereAwardId($award_id)->get();
        //     $data['nominessDetails'] = NonfiVotes::whereId($id)->first();
        //     if ($request->submitButton) {
        //         $data['nominessDetails']->fill($request->all())->save();
        //         $request->session()->flash('success', 'Requested Updated Successfully');
        //     }
        //     return view('contents.admin.judge.nonfi_votes', $data)->with(['award_program' => $award_program]);
         }   else {
            $request->session()->flash('danger', 'No votes for this awards yet');
            return back();
        }
    }

}
