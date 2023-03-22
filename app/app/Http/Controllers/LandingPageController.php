<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Judge;
use App\Models\Gallery;
use Vinkla\Hashids\Facades\Hashids;


class LandingPageController extends Controller
{

    public function showLandingIndex()
    {
        $award_program = AwardProgram::where('status',true)->first();
        $judges = Judge::where('award_program_id', $award_program->id)->get();
        return view('contents.voter.index')->with(['judges'=>$judges, 'award_program'=> $award_program]);
    }

    public function showAboutTheAward()
    {
        return view('contents.voter.about_the_award');
    }

    public function showSectorsAndCategories()
    {
        $current_award_program = AwardProgram::where('status', true)->latest()->first();
        $categories = Category::where('award_program_id', $current_award_program->id)->get();

        foreach($categories as $category){
            // $category->hashid = Hashids::connection('category')->encode($category->id);
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
        $current_award_program = AwardProgram::where('status', true)->first();
        $categories = Category::where('award_program_id', $current_award_program->id)->get();

        foreach($categories as $category){
            // $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->sectors;
            
        }
        return view('contents.voter.vote')->with(['categories'=>$categories]);
    }

    public function showJudges(){
        $current_award_program = AwardProgram::where('status',true)->first();
        $judges = Judge::where('award_program_id', $current_award_program->id)->get();
    
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

    public function showWinners($year){
        if ($year == '2021')
            return view('contents.voter.winners');
        elseif ($year == '2022')
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

    // public function uploadPix(Request $request){
    //     foreach($request->images as $image){
    //         $upload = cloudinary()->upload($image->getRealPath(),['folder'=>'grcfincrimeawards/gallery'])->getSecurePath();
    //         Gallery::create([
    //             'path' => $upload,
    //             'type' => 'image',
    //             'award_program_id' => 2,
    //         ]);
            
    //     }
    //     return back();
    // }

    public function showSummitPage(){
        return view('contents.voter.summit');
    }
public function showSummitPageOld(){
    return view('contents.voter.summit_2022');
}

}
