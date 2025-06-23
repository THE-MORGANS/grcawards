<?php

namespace App\Http\Controllers\Judges;

use App\Traits\NomineesAwards;
use App\Models\Judge;
use App\Models\Category;
use App\Models\AwardProgram;
// use App\Traits\OtherVotesResults;
// use App\Traits\JudgeOtherVotes;

use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Traits\NomineeResults;
use App\Traits\JudgeVotes;
use App\Traits\AwardsGroups;
// use App\Traits\OtherVotes;
use App\Http\Controllers\Controller;


class JudgesController extends Controller
{

    use NomineesAwards;
    use JudgeVotes;
    use NomineeResults;
    use AwardsGroups;
    // use OtherVotes;
    // use JudgeOtherVotes;
    // OtherVotesResults;

    public function __construct() {
     return $this->middleware('auth:admin');
    }


    public function getJudges(Request $request, $award_program)
    {
        //not sure what this does
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0])) {
            //get judges
            $data['judges'] = Judge::where('award_program_id', 5)->get();
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

   
    public function ViewJudgeCategoryPage(Request $request, $award_program)
    {
      
        $current_award_program = AwardProgram::where('status', 1)->latest()->first();
        $categories = Category::where(['award_program_id' => $current_award_program->id])->simplePaginate(1);
       foreach($categories  as $category){
        $category->hashid = Hashids::connection('category')->encode($category->id);
        // $sector = Sector::where(['category_id' => $category->id])->get();
        foreach($category->sectors as $sectors){
            $sectors->hashid = Hashids::connection('sector')->encode($sectors->id);
        foreach($sectors->awards as $sec){
            $sec->hashid = Hashids::connection('award')->encode($sec->id);
        }
    } 
    }
    return view('contents.admin.judge.judgeCategories')
    ->with('categories', $categories);



    // -----------------old files --------------------------
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            $data['categories'] = AwardProgram::find($award_program_id[0])->categories;
        } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.judge.get_judges', $award_program);
        }
        return view('contents.admin.judge.judgeCategories', $data);
    }

   

  
  



  

}
