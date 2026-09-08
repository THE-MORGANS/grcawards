<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Category;
use App\Models\JudgesVotes;
use App\Models\Nominee;
use App\Models\Sector;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;

class AwardWinnerController extends Controller
{
    /**
     * Overall Score = (Judges' Avg / 10 x 75%) + (Public Vote Share x 25%),
     * computed per nominee within a single award. Nominees with no judge
     * score and/or no public votes simply score 0% on that side rather
     * than being excluded.
     */
    private function computeAwardResults(Award $award)
    {
        $nominees = Nominee::where('award_program_id', $award->award_program_id)
            ->get()
            ->filter(function ($nominee) use ($award) {
                $awardIds = json_decode($nominee->award_ids) ?? [];
                return in_array($award->id, $awardIds) && $award->sector_id == $nominee->sector_id;
            })
            ->values();

        $judgesVotes = JudgesVotes::where('award_id', $award->id)->get()->groupBy('nominee_id');

        $publicCounts = Vote::where('award_id', $award->id)
            ->select('nominee_id', DB::raw('count(*) as total'))
            ->groupBy('nominee_id')
            ->pluck('total', 'nominee_id');

        $totalPublicVotes = (int) $publicCounts->sum();

        $results = $nominees->map(function ($nominee) use ($judgesVotes, $publicCounts, $totalPublicVotes) {
            $rows = $judgesVotes->get($nominee->id, collect());
            $numeric = $rows->filter(fn ($v) => is_numeric($v->votes));
            $judgesAvg = $numeric->count() ? round($numeric->avg(fn ($v) => (float) $v->votes), 2) : null;
            $judgesPct = $judgesAvg !== null ? round(($judgesAvg / 10) * 100, 2) : 0;

            $publicCount = (int) ($publicCounts[$nominee->id] ?? 0);
            $publicPct = $totalPublicVotes > 0 ? round(($publicCount / $totalPublicVotes) * 100, 2) : 0;

            $overall = round(($judgesPct * 0.75) + ($publicPct * 0.25), 2);

            return [
                'nominee_id' => $nominee->id,
                'nominee_name' => $nominee->name,
                'judges_avg' => $judgesAvg,
                'judges_scored_count' => $numeric->count(),
                'judges_pct' => $judgesPct,
                'public_votes' => $publicCount,
                'public_pct' => $publicPct,
                'overall' => $overall,
            ];
        })->sortByDesc('overall')->values();

        return [
            'results' => $results,
            'total_public_votes' => $totalPublicVotes,
            'total_judges' => $judgesVotes->flatten()->pluck('judge_id')->unique()->count(),
        ];
    }

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
                $computed = $this->computeAwardResults($award);
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

        $computed = $this->computeAwardResults($award);

        return view('contents.admin.award_winners.show', [
            'award' => $award,
            'winners' => $computed['results']->take(3)->values(),
            'totalPublicVotes' => $computed['total_public_votes'],
            'totalJudges' => $computed['total_judges'],
            'award_program' => $award_program_id,
        ]);
    }
}
