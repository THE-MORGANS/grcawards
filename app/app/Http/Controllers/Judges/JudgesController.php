<?php

namespace App\Http\Controllers\Judges;

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
use App\Http\Controllers\Controller;
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
