<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Judge;
use App\Models\Sector;
use App\Models\Category;
use App\Models\AwardProgram;
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
     //   dd( $award_program_id);
        
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
}
