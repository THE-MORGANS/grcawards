<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Sector;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class LoadJudgesController extends Controller
{

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
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()){
        $current_award_program = AwardProgram::where('id', $award_program_id[0])->latest()->first();
        $categories = Category::where(['award_program_id' => $current_award_program->id])->simplePaginate(1);
       foreach($categories  as $category){
        $category->hashid = Hashids::connection('category')->encode($category->id);
        foreach($category->sectors as $sectors){
            $sectors->hashid = Hashids::connection('sector')->encode($sectors->id);
        foreach($sectors->awards as $sec){
            $sec->hashid = Hashids::connection('award')->encode($sec->id);
        }
    } 
    }
    return view('contents.admin.judgingCategories')
    ->with('categories', $categories);
    } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
    
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
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()){
        $current_award_program = AwardProgram::where('id', $award_program_id[0])->latest()->first();
        $categories = Category::where(['award_program_id' => $current_award_program->id])->simplePaginate(1);
       foreach($categories  as $category){
        $category->hashid = Hashids::connection('category')->encode($category->id);
        foreach($category->sectors as $sectors){
            $sectors->hashid = Hashids::connection('sector')->encode($sectors->id);
        foreach($sectors->awards as $sec){
            $sec->hashid = Hashids::connection('award')->encode($sec->id);
        }
    } 
    }
          return view('contents.admin.voteResults.judgeCategories')
           ->with('categories', $categories);
    } else {
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.get_judges', $award_program);
        }
    
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
