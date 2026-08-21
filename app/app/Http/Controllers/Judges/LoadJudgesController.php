<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Sector;
use App\Models\JudgesVotes;
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
use App\Models\WomenInGrc;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Traits\AwardsGroups;

class LoadJudgesController extends Controller
{
    use AwardsGroups;

    private function nomineeCriteriaModel($awardId)
    {
        $groups = $this->getAwardId();
        $map = [
            'award_group_one' => ComBankRiskComplaince::class,
            'award_group_two' => ComBankFraudAwareness::class,
            'award_group_three' => ComBankChiefRiskOfficer::class,
            'award_group_four' => GrcEmployer::class,
            'award_group_five' => GrcSolutionProvider::class,
            'award_group_six' => GrcTrainingProvider::class,
            'award_group_seven' => GrcAntiFinCrimReporter::class,
            'award_group_eight' => CrimePreventionAdvisoryService::class,
            'award_group_nine' => WomenInGrc::class,
            'award_group_ten' => MediaVotes::class,
            'award_group_eleven' => GovernorsVotes::class,
        ];
        foreach ($map as $group => $model) {
            if (in_array($awardId, $groups[$group])) {
                return $model;
            }
        }
        return null;
    }

    // --------------------sdksjksd ---------------
    public function loadJudgingCategoryPages(Request $request, $award_program)
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

    // -----------------------loader -------------------
    public function loadJudgingCategoryPage(Request $request, $award_program)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (!isset($award_program_id[0]) || !AwardProgram::where('id', $award_program_id[0])->exists()) {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('award.programs');
        }

        $award_program_id = $award_program_id[0];
        $categories = Category::where(['award_program_id' => $award_program_id])->simplePaginate(1);

        foreach ($categories as $category) {
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $totalAwards = 0;
            $readyAwards = 0;
            foreach ($category->sectors as $sectors) {
                $sectors->hashid = Hashids::connection('sector')->encode($sectors->id);
                foreach ($sectors->awards as $sec) {
                    $sec->hashid = Hashids::connection('award')->encode($sec->id);
                    $model = $this->nomineeCriteriaModel($sec->id);
                    $sec->has_criteria = $model ? $model::where('award_id', $sec->id)->exists() : false;
                    $totalAwards++;
                    if ($sec->has_criteria) {
                        $readyAwards++;
                    }
                }
            }
            $category->total_awards = $totalAwards;
            $category->ready_awards = $readyAwards;
        }

        return view('contents.admin.judgingCategories')->with([
            'categories' => $categories,
            'award_program' => $award_program,
            'award_program_id' => $award_program_id,
        ]);
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

    // --------------------------this ---------------------
      public function ViewJudgeCategoryPageResult(Request $request, $award_program)
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
  
    //   ---------------------------loader -------------------------
       public function ViewJudgeCategoryPageResults(Request $request, $award_program)
      {

            $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (!isset($award_program_id[0]) || !AwardProgram::where('id', $award_program_id[0])->exists()) {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('award.programs');
        }

        $award_program_id = $award_program_id[0];
        $categories = Category::where(['award_program_id' => $award_program_id])->simplePaginate(1);

        foreach ($categories as $category) {
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $totalAwards = 0;
            $resultsAwards = 0;
            foreach ($category->sectors as $sectors) {
                $sectors->hashid = Hashids::connection('sector')->encode($sectors->id);
                foreach ($sectors->awards as $sec) {
                    $sec->hashid = Hashids::connection('award')->encode($sec->id);
                    $sec->has_results = JudgesVotes::where('award_id', $sec->id)->exists();
                    $totalAwards++;
                    if ($sec->has_results) {
                        $resultsAwards++;
                    }
                }
            }
            $category->total_awards = $totalAwards;
            $category->results_awards = $resultsAwards;
        }

        return view('contents.admin.voteResults.judgeCategories')->with([
            'categories' => $categories,
            'award_program' => $award_program,
            'award_program_id' => $award_program_id,
        ]);
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
}
