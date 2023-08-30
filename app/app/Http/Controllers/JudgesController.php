<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Award;
use App\Traits\NomineesAwards;
use App\Models\Judge;
use App\Models\Sector;
use App\Models\Category;
use App\Models\AwardProgram;
use App\Models\CommBanksAwards;
use App\Models\Vote;
use App\Models\VoteCount;
use App\Models\{
    ComBankChiefRiskOfficer,
    ComBankFraudAwareness,
    ComBankRiskComplaince,
    GrcAntiFinCrimReporter,
    GrcEmployer,
    GrcSolutionProvider,
    GrcTrainingProvider,
    JudgesVotes
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;
use App\Traits\NomineeResults;
use App\Traits\JudgeVotes;
use Illuminate\Support\Facades\Hash;

class JudgesController extends Controller
{

    use NomineesAwards;
    use JudgeVotes;
    use NomineeResults;


    public function getJudges(Request $request, $award_program)
    {
        //not sure what this does
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0])) {
            //get judges
            $data['judges'] = DB::table('judges')->get();
            $data['award_program'] = $award_program;
            //mask the id for each judge
            foreach ($data['judges'] as $judge) {
                $judge->hashid = Hashids::connection('judge')->encode($judge->id);
            }
            //load view
            return view('contents.admin.judges', $data);
        }
        //if we get an invalid award program id, just go back to previous page
        $request->session()->flash('danger', 'Could not the data you requested!');
        return redirect()->back();
    }

    public function addJudges(Request $request, $award_program)
    {
        //validate input
        $validated = $request->validate([
            'judge_fullname' => 'required',
            'judge_email' => 'required|unique:admins,email',
            'judge_password' => 'required|min:5',
        ]);
        //not sure what this does
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            //add judge details to admin DB
            $name = explode(" ", $request->judge_fullname);
            $judgeAdmin = new Admin;
            $judgeAdmin->firstname = $name[0];
            $judgeAdmin->lastname = $name[1];
            $judgeAdmin->email = $request->judge_email;
            $judgeAdmin->password = Hash::make($request->judge_password);
            $judgeAdmin->role_id  = 3;
            $judgeAdmin->is_super  = 0;

            //save judge data to admin table
            if ($judgeAdmin->save()) {
                $latestjudge = Admin::where(['email' => $request->judge_email])->first();
                // $latestjudge = DB::table('admins')->select('id')->where('email', $request->judge_email)->get();
                //add judge details to judge DB
                $judge = new Judge;
                $judge->admin_id = $latestjudge->id;
                $judge->name = $request->judge_fullname;
                $judge->award_program_id  = $award_program_id[0];
                $judge->position = ''; 
                $judge->profile = ''; 
                $judge->save();
                if ($request->ajax()) {
                    //return json response
                    return response()->json(['data' => [$judgeAdmin, $award_program]]);
                } else {
                    //set flash message
                    $request->session()->flash('success', 'Judge Added Successfully');
                    //reload page
                    return redirect()->route('admin.get_judges', $award_program);
                }
            } else {
                $request->session()->flash('danger', 'Error. Pleae Try Again!'); // return error
                return redirect()->route('admin.get_judges', $award_program);
            }
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
    }

    public function loadJudgingCategoryPage(Request $request, $award_program)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['categories'] = AwardProgram::find($award_program_id[0])->categories;
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.judgingCategories', $data);
    }

    public function loadJudgingCategorySectorPage(Request $request, $award_program, $category_id)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category = Hashids::connection('category')->decode($category_id);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['sectors'] = Category::find($category[0])->sectors()->where('award_program_id', $award_program_id[0])->get();
            $data['category'] = Category::find($category[0]);
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.judgingCategoriesSectors', $data);
    }

    public function loadJudgingAwards(Request $request, $award_program, $category_id, $sector_id)
    {

        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category = Hashids::connection('category')->decode($category_id);
        $sector = Hashids::connection('sector')->decode($sector_id);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['awards'] = Sector::find($sector[0])->awards()->where('award_program_id', $award_program_id[0])->get();
            $data['sectors'] = Category::find($category[0])->sectors()->where('award_program_id', $award_program_id[0])->get();
            $data['category'] = Category::find($category[0]);
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.judgingCategoriesSectors', $data);
    }


    public function Index(Request $request, $award_program)
    {
        // $award_program_id = Hashids::connection('awardProgram')->decode($award_program);

        $categories = Category::where('award_program_id', $award_program)->get();

        foreach ($categories as $category) {
            $category->hashid = Hashids::connection('category')->encode($category->id);

            return view('contents.admin.judges.category')->with(['categories' => $categories, 'award_program' => $award_program]);
        }
        $request->session()->flash('danger', 'Could not the data you requested!');
        return redirect()->back();
    }

    public function CreateNominessVotes(Request $request, $award_program_id, $award_id)
    {
        $data = $this->getAwardId();
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id);
        // $award_hashids = Hashids::connection('award')->encode($award_id);
        $award_hashid = Hashids::connection('award')->decode($award_id);

        $votes = VoteCount::whereAwardId($award_hashid)->take(4)->orderBy('voteCount', 'DESC')->get();
        if (count($votes) > 0) {
            if (in_array($award_hashid[0],  $data['award_group_one'])) {
                $data =  $this->BankRiskComplainces($votes, $award_hashid);
                return view('contents.admin.judge.ComBankRiskComplainces')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid[0],  $data['award_group_two'])) {
                $data = $this->BankFraudAwareness($votes, $award_hashid);
                return view('contents.admin.judge.com_bank_fraud_awarenesses')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid[0],  $data['award_group_three'])) {
                $data =  $this->BankChiefRiskOfficer($votes, $award_hashid);
                return view('contents.admin.judge.com_bank_chief_risk_officers')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid[0],  $data['award_group_four'])) {
                $data = $this->GrcEmployers($votes, $award_hashid);
                return view('contents.admin.judge.grc_employers')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid[0],  $data['award_group_five'])) {
                $data = $this->GrcSolutionProviders($votes, $award_hashid);
                return view('contents.admin.judge.grc_solution_providers')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid[0],  $data['award_group_six'])) {
                $data =  $this->GrcTrainingProvider($votes, $award_hashid);
                return view('contents.admin.judge.grc_training_providers')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else if (in_array($award_hashid[0],  $data['award_group_seven'])) {
                $data = $this->GrcAntiFinCrimReporters($votes, $award_hashid);
                return view('contents.admin.judge.grc_anti_fin_crim_reporters')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            }else if (in_array($award_hashid[0],  $data['award_group_eight'])) {
                $data = $this->GrcAntiFinCrimReporters($votes, $award_hashid);
                return view('contents.admin.judge.grc_anti_fin_crim_reporters')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else {
                $request->session()->flash('danger', 'Something went wrong, try again');
                return back();
            }
        }
        $request->session()->flash('danger', 'No Nominee votes for this award yet');
        return back();
    }

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
        } else {


            $request->session()->flash('danger', 'No votes for this awards yet');
            return back();
        }
    }

    public function ViewJudgeCategoryPage(Request $request, $award_program)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['categories'] = AwardProgram::find($award_program_id[0])->categories;
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.judge.get_judges', $award_program);
        }
        return view('contents.admin.judge.judgeCategories', $data);
    }

    public function loadJudgeCategorySectorPage(Request $request, $award_program, $category_id)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category = Hashids::connection('category')->decode($category_id);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['sectors'] = Category::find($category[0])->sectors()->where('award_program_id', $award_program_id[0])->get();
            $data['category'] = Category::find($category[0]);
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.judge.judgeCategoriesSectors', $data);
    }
    public function loadJudgeAwards(Request $request, $award_program, $category_id, $sector_id)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category = Hashids::connection('category')->decode($category_id);
        $sector = Hashids::connection('sector')->decode($sector_id);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['awards'] = Sector::find($sector[0])->awards()->where('award_program_id', $award_program_id[0])->get();
            $data['sectors'] = Category::find($category[0])->sectors()->where('award_program_id', $award_program_id[0])->get();
            $data['category'] = Category::find($category[0]);
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.judge.judgeCategoriesSectors', $data);
    }

    public function ViewNominessVotes(Request $request, $award_program_id, $award_id)
    {
        $award_program = Hashids::connection('awardProgram')->encode(1);
        $data = $this->getAwardId();
        $award_id = $request->award_id;

     //   dd($award_id.$award_program_id );

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
        } else {
            $request->session()->flash('danger', 'No nominees for this awards at the moment');
            return back();
        }
    }

    public function StoreNominessVotes(Request $request, $award_program_id, $award_id =2)
    {
        $id = $request->nominess;
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id);
       // $award_id = Hashids::connection('award')->decode($award_id);
        // dd($request->all());
         $award_id = $request->award_id;
        $data = $this->getAwardId();
       // $award_id = $data['award_id'];

        if (in_array($award_id,  $data['award_group_one'])) {
            $data = $this->BankRiskComplaincesVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == false) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
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
            $data = $this->GrcEmployers($request->judges_votes, $request->nominee_ids, $award_id);
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
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        } else {
            return back();
        }
    }



    #============== calculating voting results and choose winner =============

    public function ViewJudgeCategoryPageResults(Request $request, $award_program)
    {

        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['categories'] = AwardProgram::find($award_program_id[0])->categories;
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.judge.get_judges', $award_program);
        }

        // echo 'This is the Judging Page';
        return view('contents.admin.voteResults.judgeCategories', $data);
    }


    public function loadJudgeCategorySectorPageResults(Request $request, $award_program, $category_id)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category = Hashids::connection('category')->decode($category_id);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['sectors'] = Category::find($category[0])->sectors()->where('award_program_id', $award_program_id[0])->get();
            $data['category'] = Category::find($category[0]);
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.voteResults.judgeCategoriesSectors', $data);
    }

    public function loadJudgeAwardsResults(Request $request, $award_program, $category_id, $sector_id)
    {
        //=============todo===================//
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category = Hashids::connection('category')->decode($category_id);
        $sector = Hashids::connection('sector')->decode($sector_id);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['awards'] = Sector::find($sector[0])->awards()->where('award_program_id', $award_program_id[0])->get();
            $data['sectors'] = Category::find($category[0])->sectors()->where('award_program_id', $award_program_id[0])->get();
            $data['category'] = Category::find($category[0]);
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.voteResults.judgeCategoriesSectors', $data);
    }

    public function ViewNominessVotesResults(Request $request, $award_program_id = 1, $award_id = 2)
    {
        $id = $request->nominess;
        $award_program = Hashids::connection('awardProgram')->encode(1);
        // dd($id);
        $award_id = $request->award_id;
        $data = $this->getAwardId();
        
        $votes = JudgesVotes::where('award_id', $award_id)->first();
        if (!$votes) {
            $request->session()->flash('danger', 'Judges have not voted for this award, please check back later');
            return back();
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
        } else {
            return back();
        }
    }


    public function getAwardId()
    {
        $data['award_group_one'] = [40,43]; //ComBankRiskComplainces
        $data['award_group_two'] = [555]; //com_bank_fraud_awarenesses
        $data['award_group_three'] = [41,42,47,51,52,54,82,83,86,87,90,91]; //com_bank_chief_risk_officers
        $data['award_group_four'] = [44,45,49,53,54,84,85,88,89,92,93]; //grc_employers
        $data['award_group_five'] = [97]; //grc_solution_providers
        $data['award_group_six'] = [94]; //grc_training_providers
        $data['award_group_seven'] = [100,102]; //grc_anti_fin_crim_reporters
        $data['award_group_eight'] = [100,102]; //Financial Crime Prevention Advisory Service
        return $data;
    }
}
