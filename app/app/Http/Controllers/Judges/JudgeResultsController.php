<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Award;
use App\Models\Category;
use App\Models\JudgesVotes;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;

class JudgeResultsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Category list — mirrors VoteCountController::getCatSec, but counts judges'
     * scoring activity instead of public votes.
     */
    public function categories($award_program_id)
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0];

        $categories = Category::where('award_program_id', $award_program)->get();

        foreach ($categories as $category) {
            $category->hashid = Hashids::connection('category')->encode($category->id);

            $award_ids = $category->sectors->flatMap(function ($sector) {
                return $sector->awards->pluck('id');
            });

            $category->judges_vote_total = JudgesVotes::whereIn('award_id', $award_ids)->count();
            $category->judges_count = JudgesVotes::whereIn('award_id', $award_ids)->distinct('judge_id')->count('judge_id');
        }

        return view('contents.admin.judges_votes_results.categories', [
            'categories' => $categories,
            'award_program' => $award_program_id,
        ]);
    }

    /**
     * Sectors + awards within a category — mirrors VoteCountController::getSectorsAwards,
     * but the nominee leaderboard is ranked by average judge score instead of public votes.
     */
    public function sectorsAwards($award_program_id, $category_id)
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0];
        $category = Hashids::connection('category')->decode($category_id)[0];

        $sectors = Sector::where([['award_program_id', '=', $award_program], ['category_id', '=', $category]])->get();
        $category_dets = Category::find($category);

        foreach ($sectors as $sector) {
            $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            foreach ($sector->awards as $award) {
                $award->hashid = Hashids::connection('award')->encode($award->id);
            }
        }

        $award_ids = $sectors->flatMap(function ($sector) {
            return $sector->awards->pluck('id');
        });

        $scoreRows = JudgesVotes::whereIn('award_id', $award_ids)
            ->select('award_id', 'nominee_id', 'nominee_name', DB::raw('COUNT(*) as judge_count'))
            ->selectRaw('AVG(CAST(votes AS DECIMAL(4,1))) as avg_score')
            ->groupBy('award_id', 'nominee_id', 'nominee_name')
            ->get();

        $nomineesByAward = [];
        $awardJudgeTotals = [];
        foreach ($scoreRows as $row) {
            $nomineesByAward[$row->award_id][] = [
                'nominee_id' => $row->nominee_id,
                'nominee_name' => $row->nominee_name,
                'avg_score' => $row->avg_score !== null ? round($row->avg_score, 2) : null,
                'judge_count' => $row->judge_count,
            ];
        }
        foreach ($nomineesByAward as $awardId => $rows) {
            usort($rows, fn ($a, $b) => ($b['avg_score'] ?? -1) <=> ($a['avg_score'] ?? -1));
            $nomineesByAward[$awardId] = $rows;
        }

        $judgeCounts = JudgesVotes::whereIn('award_id', $award_ids)
            ->select('award_id', DB::raw('COUNT(DISTINCT judge_id) as judge_count'))
            ->groupBy('award_id')
            ->pluck('judge_count', 'award_id');

        $sectorJudgeTotals = [];
        foreach ($sectors as $sector) {
            $sectorJudgeTotals[$sector->id] = 0;
            foreach ($sector->awards as $award) {
                $sectorJudgeTotals[$sector->id] = max($sectorJudgeTotals[$sector->id], $judgeCounts[$award->id] ?? 0);
            }
        }
        $categoryJudgeTotal = JudgesVotes::whereIn('award_id', $award_ids)->distinct('judge_id')->count('judge_id');

        return view('contents.admin.judges_votes_results.sectors_awards', [
            'sectors' => $sectors,
            'category' => $category_dets,
            'nomineesByAward' => $nomineesByAward,
            'judgeCounts' => $judgeCounts,
            'sectorJudgeTotals' => $sectorJudgeTotals,
            'categoryJudgeTotal' => $categoryJudgeTotal,
            'award_program' => $award_program_id,
        ]);
    }

    /**
     * Full judge-by-judge breakdown for a single award — the piece that didn't
     * exist anywhere before: every nominee judges scored, ranked by average score,
     * each expandable to show exactly which judge gave which score/comment.
     */
    public function awardResults($award_program_id, $award_id)
    {
        $award = Award::with('sector.category')->findOrFail(Hashids::connection('award')->decode($award_id)[0]);

        $votes = JudgesVotes::where('award_id', $award->id)->orderBy('nominee_name')->get();

        $judges = Admin::whereIn('id', $votes->pluck('judge_id')->unique())->get()->keyBy('id');

        $nominees = $votes->groupBy('nominee_id')->map(function ($group) use ($judges) {
            $numeric = $group->filter(fn ($v) => is_numeric($v->votes));

            $rows = $group->map(function ($v) use ($judges) {
                $judge = $judges->get($v->judge_id);
                return [
                    'judge_name' => $judge?->fullname ?? "Judge #{$v->judge_id}",
                    'judge_email' => $judge?->email,
                    'score' => is_numeric($v->votes) ? (int) $v->votes : null,
                    'comment' => $v->comment,
                    'submitted_at' => $v->created_at,
                ];
            })->sortBy('judge_name')->values();

            return [
                'nominee_id' => $group->first()->nominee_id,
                'nominee_name' => $group->first()->nominee_name,
                'avg_score' => $numeric->count() ? round($numeric->avg(fn ($v) => (float) $v->votes), 2) : null,
                'scored_count' => $numeric->count(),
                'judge_count' => $group->count(),
                'comment_count' => $group->filter(fn ($v) => !empty($v->comment))->count(),
                'rows' => $rows,
            ];
        })->sortByDesc(fn ($n) => $n['avg_score'] ?? -1)->values();

        return view('contents.admin.judges_votes_results.award', [
            'award' => $award,
            'nominees' => $nominees,
            'totalJudges' => $judges->count(),
            'award_program' => $award_program_id,
        ]);
    }
}
