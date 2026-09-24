<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\AwardDemotion;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Nominee;
use App\Models\Sector;
use App\Services\AwardResultsCalculator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'currentYear' => AwardProgram::find($award_program),
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
                    'demotions' => $computed['demotions'],
                ];
            }
        }

        return view('contents.admin.award_winners.sectors_awards', [
            'sectors' => $sectors,
            'category' => $category_dets,
            'awardResults' => $awardResults,
            'award_program' => $award_program_id,
            'currentYear' => AwardProgram::find($award_program),
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
            'demotions' => $computed['demotions'],
            'award_program' => $award_program_id,
            'currentYear' => AwardProgram::find($award->award_program_id),
        ]);
    }

    /**
     * Demote a nominee one place — swaps them with whoever is currently
     * ranked directly below, and logs why. Applied live by
     * AwardResultsCalculator on every future computation, so it stays
     * correct even as votes/scores keep changing.
     */
    public function demote(Request $request, $award_program_id, $award_id)
    {
        $request->validate([
            'nominee_id' => ['required', 'integer'],
            'reason' => ['required', 'string', 'max:2000'],
        ]);

        $award = Award::findOrFail(Hashids::connection('award')->decode($award_id)[0]);
        $nominee = Nominee::findOrFail($request->input('nominee_id'));

        AwardDemotion::create([
            'award_id' => $award->id,
            'nominee_id' => $nominee->id,
            'reason' => trim($request->input('reason')),
            'admin_id' => Auth::guard('admin')->id(),
        ]);

        $request->session()->flash('success', "{$nominee->name} has been demoted one position.");

        return redirect()->back();
    }

    /**
     * Undo one demotion — deletes that log entry. Since demotions are
     * replayed in order every time, removing one and recomputing simply
     * restores whatever the ranking would have been without it.
     */
    public function undoDemote($award_program_id, $award_id, $demotion)
    {
        $award = Award::findOrFail(Hashids::connection('award')->decode($award_id)[0]);

        AwardDemotion::where('award_id', $award->id)->where('id', $demotion)->delete();

        session()->flash('success', 'Demotion reversed.');

        return redirect()->back();
    }
}
