<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Judges\
{JudgesController, NomineeVotesResultController, NominessDetailsController, NominessVotesController, AddJudgesController, 
    LoadJudgesController, StoreNominessVotesController, UpdateAdminController, CreateNominessController
};

Route::prefix('judges')->group(function(){
    Route::get('', [JudgesController::class, 'getJudges'])->name('admin.get_judges');
    Route::post('create', [AddJudgesController::class, 'addJudges'])->name('admin.create_judges');
    Route::post('update', [UpdateAdminController::class, 'UpdateJudges'])->name('admin.update_judges');
    Route::get('judgingcategory', [LoadJudgesController::class, 'loadJudgingCategoryPage'])->name('admin.load_judging_category_page');
    Route::get('judgescategory', [JudgesController::class, 'ViewJudgeCategoryPage'])->name('admin.load_judge_category_page');
    Route::get('judgescategoryresults', [LoadJudgesController::class, 'ViewJudgeCategoryPageResults'])->name('admin.load_judge_category_page_results');
    Route::get('judgingsector/{category_id}', [LoadJudgesController::class, 'loadJudgingCategorySectorPage'])->name('admin.load_judging_category_sector_page');
    Route::get('judgesector/{category_id}', [LoadJudgesController::class, 'loadJudgeCategorySectorPage'])->name('admin.load_judge_category_sector_page');
    Route::get('judgesectorresults/{category_id}', [LoadJudgesController::class, 'loadJudgeCategorySectorPageResults'])->name('admin.load_judge_category_sector_page_results');
    Route::get('judging/{category_id}/{sector_id}', [LoadJudgesController::class, 'loadJudgingAwards'])->name('admin.load_judging_awards');
    Route::get('judge/{category_id}/{sector_id}', [LoadJudgesController::class, 'loadJudgeAwards'])->name('admin.load_judge_awards');
    Route::get('judgeresults/{category_id}/{sector_id}', [LoadJudgesController::class, 'loadJudgeAwardsResults'])->name('admin.load_judge_awards_results');
    Route::get('criteria/{category_id}', [CreateNominessController::class, 'CreateNominessVotes'])->name('admin.create_nominess_awards');
    Route::get('index/{id}', [JudgesController::class, 'Index'])->name('judgeVotes.index');
    Route::post('nominess/details', [NominessDetailsController::class, 'getNominessDetails'])->name('admin.getNominessDetails');
    Route::get('nominees/{category_id}', [NominessVotesController::class, 'ViewNominessVotes'])->name('admin.view_nominess_awards'); 
    Route::get('nomineesresults/{award_id}', [NomineeVotesResultController::class, 'ViewNominessVotesResults'])->name('admin.view_nominess_awards_results'); 
    Route::post('nominess/store', [StoreNominessVotesController::class, 'StoreNominessVotes'])->name('admin.StoreNominessVotes');
});