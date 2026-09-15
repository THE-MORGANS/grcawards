<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Category;
use App\Models\Sector;
use App\Services\AwardResultsCalculator;
use Vinkla\Hashids\Facades\Hashids;

class AwardWinnerController extends Controller
{
    public function categories($award_program_id)
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0];

        $categories = Category::where('award_program_id', $award_program)->get();

        foreach ($categories as $category) {
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->award_count = $category->sectors->flatMap->awards->count();
        }

        return view('contents.admin.award_winners.categories', [
            'categories' => $categories,
            'award_program' => $award_program_id,
        ]);
    }

    public function sectorsAwards($award_program_id, $category_id)
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0];
        $category = Hashids::connection('category')->decode($category_id)[0];

        $sectors = Sector::where([['award_program_id', '=', $award_program], ['category_id', '=', $category]])->get();
        $category_dets = Category::find($category);

        $awardResults = [];
        foreach ($sectors as $sector) {
            $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            foreach ($sector->awards as $award) {
                $award->hashid = Hashids::connection('award')->encode($award->id);
                $computed = AwardResultsCalculator::computeAwardResults($award);
                $awardResults[$award->id] = [
                    'winners' => $computed['results']->take(3)->values(),
                    'total_public_votes' => $computed['total_public_votes'],
                    'total_judges' => $computed['total_judges'],
                ];
            }
        }

        return view('contents.admin.award_winners.sectors_awards', [
            'sectors' => $sectors,
            'category' => $category_dets,
            'awardResults' => $awardResults,
            'award_program' => $award_program_id,
        ]);
    }

    public function winners($award_program_id, $award_id)
    {
        $award = Award::with('sector.category')->findOrFail(Hashids::connection('award')->decode($award_id)[0]);

        $computed = AwardResultsCalculator::computeAwardResults($award);

        return view('contents.admin.award_winners.show', [
            'award' => $award,
            'winners' => $computed['results']->take(3)->values(),
            'totalPublicVotes' => $computed['total_public_votes'],
            'totalJudges' => $computed['total_judges'],
            'award_program' => $award_program_id,
        ]);
    }
}
