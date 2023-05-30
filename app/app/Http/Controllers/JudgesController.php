<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Award;
use App\Models\Judge;
use App\Models\Sector;
use App\Models\Category;
use App\Models\AwardProgram;
use App\Models\CommBanksAwards;
use App\Models\Vote;
use App\Models\VoteCount;
use App\Models\{ComBankChiefRiskOfficer, ComBankFraudAwareness,
ComBankRiskComplaince, GrcAntiFinCrimReporter, GrcEmployer, 
GrcSolutionProvider, GrcTrainingProvider};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Hash;

class JudgesController extends Controller
{
    public function getJudges(Request $request, $award_program){
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

    public function addJudges(Request $request, $award_program){
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
            $name = explode(" ",$request->judge_fullname);
            $judgeAdmin = new Admin;
            $judgeAdmin->firstname = $name[0];
            $judgeAdmin->lastname = $name[1];
            $judgeAdmin->email = $request->judge_email;
            $judgeAdmin->password = Hash::make($request->judge_password);
            $judgeAdmin->role_id  = 3;
            $judgeAdmin->is_super  = 0;

                //save judge data to admin table
            if ($judgeAdmin->save()) {
            //send the judge an email ************************TODO***************
            //get recently added judge (so we can add to Judge DB with the admin_id)
            $latestjudge = Admin::where(['email'=>$request->judge_email])->first();
            // $latestjudge = DB::table('admins')->select('id')->where('email', $request->judge_email)->get();
            //add judge details to judge DB
            $judge = new Judge;
            $judge->admin_id = $latestjudge->id;
            $judge->name = $request->judge_fullname;
            $judge->award_program_id  = $award_program_id[0];
            $judge->position = ''; //***********TODO************** */
            $judge->profile = ''; //***********TODO************** */
            $judge->save();
            if ($request->ajax()){
                //return json response
                return response()->json(['data'=>[$judgeAdmin, $award_program]]);
            }else{
                //set flash message
                $request->session()->flash('success', 'Judge Added Successfully');
                //reload page
                return redirect()->route('admin.get_judges', $award_program);
            }
        }else{
                $request->session()->flash('danger', 'Error. Pleae Try Again!'); // return error
                return redirect()->route('admin.get_judges', $award_program);
            }
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
    }

    public function loadJudgingCategoryPage(Request $request, $award_program){ 
        
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['categories'] = AwardProgram::find($award_program_id[0])->categories;
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        
        // echo 'This is the Judging Page';
        return view('contents.admin.judgingCategories', $data);

    }

    public function loadJudgingCategorySectorPage(Request $request, $award_program, $category_id){ 
        //=============todo===================//
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category = Hashids::connection('category')->decode($category_id);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['sectors'] = Category::find($category[0])->sectors()->where('award_program_id', $award_program_id[0])->get();
            $data['category']= Category::find($category[0]);
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.judgingCategoriesSectors', $data);

    }

    public function loadJudgingAwards(Request $request, $award_program, $category_id, $sector_id){ 
        //=============todo===================//
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category = Hashids::connection('category')->decode($category_id);
        $sector = Hashids::connection('sector')->decode($sector_id);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['awards'] = Sector::find($sector[0])->awards()->where('award_program_id', $award_program_id[0])->get();
            $data['sectors'] = Category::find($category[0])->sectors()->where('award_program_id', $award_program_id[0])->get();
            $data['category']= Category::find($category[0]);
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
        return view('contents.admin.judgingCategoriesSectors', $data);
    }

    // public function loadJudgingAwards(){
    //     return 'That was a BANG !!!';
    // }


    public function Index(Request $request, $award_program = 2){
        // $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        
        $categories = Category::where('award_program_id', $award_program)->get();

        foreach ($categories as $category) {
            $category->hashid = Hashids::connection('category')->encode($category->id);
        
            return view('contents.admin.judges.category')->with(['categories' => $categories, 'award_program'=> $award_program]);
        }
            $request->session()->flash('danger', 'Could not the data you requested!');
            return redirect()->back();
    }

    public function CreateNominessVotes(Request $request, $award_program_id = 2,$award_id = 2){
    
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id);
       $award_hashids = Hashids::connection('award')->encode(54);
        $award_hashid = Hashids::connection('award')->decode($award_hashids);
    

       $votes = VoteCount::whereAwardId($award_hashid)->take(4)->orderBy('voteCount', 'DESC')->get();
       if(count($votes) > 0){

    $award_group_one = [1, 2, 3,9,]; //ComBankRiskComplainces
    $award_group_two = [4,16]; //com_bank_fraud_awarenesses
    $award_group_three = [10, 11, 12, 13,15,18,20,22,23,24,26,27,28,30,31,32]; //com_bank_chief_risk_officers
    $award_group_four = [14,18,5,14,17,21,25,29]; //grc_employers
    $award_group_five = [37,38]; //grc_training_providers
    $award_group_six = [35,36]; //grc_solution_providers
    $award_group_seven = [34]; //grc_anti_fin_crim_reporters

    
        // foreach($votes  as $vote){
        //     CommBanksAwards::create([
        //     'award_id' => $vote->award_id,
        //     'nominee_id' =>  $vote->nominee_id,
        //     'number_of_votes' => $vote->voteCount, 
        //     'percentage_votes' => ($vote->voteCount * 100)/VoteCount::whereAwardId($award_hashid)->sum('voteCount'),
        // ]);
        // }
       }
       if (isset($award_program)){
           $categories = Category::where('award_program_id', $award_program[0])->get();
       foreach ($categories as $category){ 
                   $category->hashid = Hashids::connection('category')->encode($category->id);
           foreach($category->sectors as $sector){
               $sector->hashid = Hashids::connection('sector')->encode($sector->id);
               foreach($sector->awards as $award){
               $award->hashid = Hashids::connection('award')->encode($award->id);
               }
           }
           }
       return view('contents.admin.create_vote_criteria')->with(['categories' => $categories,'award_program'=>$award_program]);
       }
           $request->session()->flash('danger', 'Could not find the data requested');
           return redirect()->back();

    }  
}
