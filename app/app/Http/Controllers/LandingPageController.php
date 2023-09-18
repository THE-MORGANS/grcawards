<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\AwardProgram;
use Illuminate\Support\Facades\Mail;
use App\Mail\GrcRegister;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Models\Judge;
use Illuminate\Support\Facades\Session;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\Award;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{

    public function showLandingIndex()
    {

        $judges = Judge::where('award_program_id', 1)->get();
        return view('contents.voter.index')->with(['judges'=>$judges]);
    }

    public function showAboutTheAward()
    {
        
        return view('contents.voter.about_the_award');
    }

    public function showSectorsAndCategories()
    {
        
        $current_award_program = AwardProgram::where('status', 1)->latest()->first();
        $categories = Category::where('award_program_id', $current_award_program->id)->get();

        foreach($categories as $category){
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->sectors;
            foreach($category->sectors as $sector){
                $sector->awards;
            }
        }
        return view('contents.voter.sectors_categories')->with(['categories'=>$categories]);
    }

    public function showTheOrganizers()
    {
        return view('contents.voter.organizers');
    }

    public function showContactUs()
    {
        return view('contents.voter.contact');
    }

    public function showVote()
    {
        if(!Auth::check()){
            return redirect()->route('register');
        }
        
        $current_award_program = AwardProgram::where('status', 1)->latest()->first();
        $categories = Category::where('award_program_id', $current_award_program->id)->get();

        foreach($categories as $category){
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->sectors;
            foreach($category->sectors as $sector){
                $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            }
        }
        return view('contents.voter.vote')->with(['categories'=>$categories]);
    }

    public function showJudges(){
        $judges = Judge::where('award_program_id',2)->get();
        foreach($judges as $judge){
            $judge->hashid = Hashids::connection('email')->encode($judge->id);
        }

        
        return view('contents.voter.meet_judges')->with(['judges'=>$judges]);
    }

    public function showJudgingProcess()
    {
        return view('contents.voter.judging_process');
    }

    public function showSponsors()
    {
        return view('contents.voter.sponsors');
    }

    public function showFaqs()
    {
        return view('contents.voter.faqs');
    }

    public function showPolicy()
    {
        return view('contents.voter.privacy_policy');
    }
    public function showTc()
    {
        return view('contents.voter.t_c');
    }

    public function showPress()
    {
        return view('contents.voter.press_announcements');
    }

    public function showShortlistedNominees(){
        return view('contents.voter.shortlisted_nominees');
    }

    public function showWinners(){
        return view('contents.voter.winners');
    }
    public function showWinners2022(){
        return view('contents.voter.winners2');
    }
    public function showPicturesCategories(){
        $awardPrograms = [];
        $award_programs = AwardProgram::all();
        foreach($award_programs as $award_program){
            $gallery = Gallery::where(['award_program_id'=> $award_program->id,'type'=> 'image' ])->inRandomOrder()->limit(1)->first();
            $award_program->hashid = Hashids::connection('awardProgram')->encode($award_program->id);
            if ($gallery->count() > 0){
                $award_program->random_gallery = $gallery;
                $awardProgram = $award_program;
                
                array_push($awardPrograms, $awardProgram);
            }
        }
        // return response()->json($awardPrograms);
        return view('contents.voter.pictures_categories', ['award_programs' => $awardPrograms]);
    }

    public function showPictures($award_program){
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program)[0];
        $award_program = AwardProgram::where('id', $award_program_id)->first();
        // $gallery = Gallery::where('award_program_id', $award_program->id)->get();
        $award_program->gallery;
        // return response()->json($award_program);
        return view('contents.voter.pictures')->with(['award_program' => $award_program]);
    }

    public function showSummit(){
        return view('contents.voter.summit');
    } 
    public function showSumitOld(){
        return view('contents.voter.summit_2022');
    }
 
    public function Programme(){
        return view('contents.voter.programme');
    }


    public function SummitRegister(){
        return view('contents.voter.form_register');
    }

    public function SubmitRegisterForm(Request $req){

    
            $valid = validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'message' => 'required',
                'job_title' => 'required',
                'organisation' => 'required',
                'industry' => 'required'

            ]);
          //  dd($valid->errors());
            if($valid->fails()){
                Session::flash('msg',$valid->errors()->first());
                return back()->withErrors($valid->errors())->withInput($req->all());
            }

            $data = [
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'email' => $req->email,
                'phone' => $req->phone,
                'city' => $req->city,
                'state' => $req->state,
                'country' =>$req->country,
                'message' => $req->message,
                'job_title' => $req->job_title,
                'organisation' =>  $req->organisation,
                'industry' =>  $req->industry,
            ];

            if($data){
                Mail::to(['festus.uwabor@morgansconsortium.com', 'michael.ozoudeh@morgansconsortium.com'])->send(new GrcRegister($data));
                Session::flash('msg','Registration Completed Successfully');
                return back();
            }

            return back();
          
    }

}
