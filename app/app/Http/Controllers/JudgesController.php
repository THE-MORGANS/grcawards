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
use Illuminate\Support\Facades\Mail;
use App\Mail\JudgesRegister;
use App\Traits\OtherVotesResults;
use App\Models\VoteCount;
use App\Traits\JudgeOtherVotes;
use App\Models\{
    ComBankChiefRiskOfficer,
    ComBankFraudAwareness,
    ComBankRiskComplaince,
    GrcAntiFinCrimReporter,
    GrcEmployer,
    GrcSolutionProvider,
    GrcTrainingProvider,
    JudgesVotes,
    CrimePreventionAdvisoryService,
    GovernorsVotes,
    MediaVotes,
    NonfiVotes,
    OtherVote,
    WomenInGrc
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;
use App\Traits\NomineeResults;
use App\Traits\JudgeVotes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Traits\AwardsGroups;
use App\Traits\OtherVotes;
class JudgesController extends Controller
{

    use NomineesAwards;
    use JudgeVotes;
    use NomineeResults;
    use AwardsGroups;
    use OtherVotes;
    use JudgeOtherVotes, OtherVotesResults;

 public function __construct() {
 return $this->middleware('auth:admin');
}


    public function getJudges(Request $request, $award_program)
    {
        //not sure what this does
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0])) {
            //get judges
            $data['judges'] = Judge::where('award_program_id', 2)->get();
            $data['award_program'] = $award_program;
            //mask the id for each judge
            foreach ($data['judges'] as $judge) {
                 $judge->hashid = Hashids::connection('judges')->encode($judge->id);
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
        $validated = Validator::make($request->all(),[
            'fullname' => 'required',
            'email' => 'required|unique:admins,email',
            'password' => 'required|min:5',
        ]);
        if($validated->fails()){
            $request->session()->flash('error', 'Some Fields are missing');
            return back()->withInput($request->all())->withErrors($validated);
        }
        $names = explode(' ', $request->judge_fullname);
        if($names[0]){
            $firstName = $names[0];
        }else{
            $firstName = "Admin";
        }

        if($names[1]){
            $LastName = $names[1];
        }else{
            $LastName = "Admin";
        }
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
                 $password = substr(str_replace('','/, =, +, &, %, #, @, !', base64_encode(random_bytes(20), true)), 0,10);
                $admin = new Admin;
                $admin->firstname = $firstName;
                $admin->lastname = $LastName;
                $admin->email = $request->email;
                $admin->role_id = 3;
                $admin->password = bcrypt($request->password);
                $admin->save();

                sleep(2);
                $admins = Admin::latest()->first();
                $judge = new Judge;
                $judge->admin_id = $admins->id;
                $judge->name = $request->fullname;
                $judge->award_program_id  = $award_program_id[0];
                $judge->position = $request->position; 
                $judge->profile = $request->profile; 
                $judge->email = $request->email;
                $judge->password = bcrypt($request->password);
                $judge->save();

                $data = [
                    'name' => $request->fullname,
                    'email' => $request->email,
                    'password' => $request->password
                ];

               $dd = Mail::to($request->email)->send(new JudgesRegister($data));
               if(!$dd){
                $request->session()->flash('error', 'Email Not sent');
                return redirect()->route('admin.get_judges', $award_program);
               }
                    $request->session()->flash('success', 'Judge Added Successfully');
                    return redirect()->route('admin.get_judges', $award_program);
            } else {
                $request->session()->flash('danger', 'Error. Pleae Try Again!'); // return error
                return redirect()->route('admin.get_judges', $award_program);
            }
    }

    public function UpdateJudges(Request $request, $award_program)
    {
        $validated = Validator::make($request->all(),[
            'judge_fullname' => 'required',
            // 'judge_email' => 'required|unique:admins,email',
            'judge_password' => 'required|min:5',
        ]);
        if($validated->fails()){
            $request->session()->flash('danger',$validated->errors()->first());
            return back()->withInput($request->all())->withErrors($validated);
        }
        $names = explode(' ', $request->judge_fullname);
        if($names[0]){
            $firstName = $names[0];
        }else{
            $firstName = "Admin";
        }

        if($names[1]){
            $LastName = $names[1];
        }else{
            $LastName = "Admin";
        }

        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
                // $password = substr(str_replace('','/, =, +, &, %, #, @, !', base64_encode(random_bytes(20), true)), 0,10);
                $judge = Judge::where('id', $request->judge_id)->first();
                if($judge->admin_id == null){
                    $admin = new Admin;
                    $admin->firstname = $firstName;
                    $admin->lastname = $LastName;
                    $admin->email = $request->judge_email;
                    $admin->role_id = 3;
                    $admin->password = bcrypt($request->judge_password);
                    $admin->save();
                    sleep(2);
                    $admin = Admin::latest()->first();
                    $judge->admin_id = $admin->id;   
                }
                $judge->name = $request->judge_fullname;
                $judge->award_program_id  = $award_program_id[0];
                $judge->position = $request->position; 
                $judge->profile = $request->profile; 
                $judge->email = $request->judge_email;
                $judge->password = bcrypt($request->judge_password);
                $judge->save();
                $data = [
                    'name' => $request->judge_fullname,
                    'email' => $request->judge_email,
                    'password' => $request->judge_password
                ];
                $admins = Admin::where('id', $judge->admin_id)->first();
                $admins->update(['email' => $request->judge_email, 'password' =>bcrypt($request->judge_password) ]);

                $dd = Mail::to($request->email)->send(new JudgesRegister($data));
                if(!$dd){
                 $request->session()->flash('error', 'Email Not sent');
                 return redirect()->route('admin.get_judges', $award_program);
                }
                    $request->session()->flash('success', 'Judge Added Successfully');
                    return redirect()->route('admin.get_judges', $award_program);
            } else {
                $request->session()->flash('danger', 'Error. Pleae Try Again!'); // return error
                return redirect()->route('admin.get_judges', $award_program);
            }
            return back();
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
                $data = $this->crimePreventionAdvisoryServices($votes, $award_hashid);
                return view('contents.admin.judge.crime_prevention_advisory_service')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
            } else {
                $request->session()->flash('danger', 'Something went wrong, try again');
                return back();
            }
        }else{

            #============ for other votes =======================

            $otherVotes = OtherVote::where('award_id', $award_hashid)->pluck('nominee')->toArray();
         
            if (count($otherVotes) > 0 ) {
                if (in_array($award_hashid[0],  $data['award_group_nine'])) {
                  
                    $data =  $this->WomenInGrc($otherVotes, $award_hashid[0]);
                    // dd($data);
                    return view('contents.admin.judge.women_in_grcs')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
                } else if (in_array($award_hashid[0],  $data['award_group_ten'])) {
                    $data = $this->Medias($otherVotes, $award_hashid[0]);
                    return view('contents.admin.judge.medias')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
                } 
                else if (in_array($award_hashid[0],  $data['award_group_eleven'])) {
                    $data = $this->GovernorsVotes($otherVotes, $award_hashid[0]);
                    
                    return view('contents.admin.judge.governors_vote')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
                } 
                else if (in_array($award_hashid[0],  $data['award_group_twelve'])) {
                    $data = $this->NonFiVote($otherVotes, $award_hashid[0]);
                    return view('contents.admin.judge.nonfi_votes')->with(['awards' => $data, 'nominessDetails' => '', 'award_program' => $award_program]);
                } 

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
        }
        else if (in_array($award_id,  $data_item['award_group_twelve'])) {
            $data['awards'] = NonfiVotes::whereAwardId($award_id)->get();
            $data['nominessDetails'] = NonfiVotes::whereId($id)->first();
            if ($request->submitButton) {
                $data['nominessDetails']->fill($request->all())->save();
                $request->session()->flash('success', 'Requested Updated Successfully');
            }
            return view('contents.admin.judge.nonfi_votes', $data)->with(['award_program' => $award_program]);
        }   else {
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

        ///None Nominees awarrds -----------------------------------
        
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
        }
        else if (in_array($award_id,  $data['award_group_twelve'])) {
            $data['awards'] = NonfiVotes::whereAwardId($award_id)->get();
            return view('contents.admin.table.nonfi_votes', $data)->with(['award_program' => $award_program]);
        }else {
            $request->session()->flash('danger', 'No nominees for this awards at the moment');
            return back();
        }
    }

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
        }

        #=================== NON NOMINEES AWARDS ========================

        else if (in_array($award_id,  $data['award_group_nine'])) {
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
        else if (in_array($award_id,  $data['award_group_twelve'])) {
            $data = $this->NonfiJudgeVote($request->judges_votes, $request->nominee_ids, $award_id);
            if ($data == null) {
                $request->session()->flash('danger', 'You have voted for this category already');
                return back();
            }
            $request->session()->flash('success', 'Vote Updated Successfully');
            return back();
        }  else {
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
            #===============NONE NOMINEES VOTES RESULTS ========================
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
            else if (in_array($award_id,  $data['award_group_twelve'])) {
                $this->NonFiVotesResults($award_id);
                $data['awards'] = NonfiVotes::whereAwardId($award_id)->get();
                return view('contents.admin.voteResults.nonfi_votes', $data)->with(['award_program' => $award_program]);
            } 

    else {
            return back();
        }
    }
}
