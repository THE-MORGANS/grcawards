<?php

namespace App\Services;

use App\Models\Award;
use App\Models\JudgesVotes;
use App\Models\Nominee;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;

class AwardResultsCalculator
{
    /**
     * Overall Score = (Judges' Avg / 10 x 75%) + (Public Vote Share x 25%),
     * computed per nominee within a single award. Nominees with no judge
     * score and/or no public votes simply score 0% on that side rather
     * than being excluded.
     *
     * Shared by the admin Award Winners pages (AwardWinnerController) and the
     * public Top 3 Finalists page (LandingPageController) so both always show
     * the exact same ranking, computed once, one way.
     *
     * Region-aware: whatever connection $award was fetched on (e.g. Award::on
     * ('grcawards_uk')->find(...)) is the connection every related query below
     * runs on too, so an Award from the UK/Europe database is scored entirely
     * against that database's own nominees/votes/judges_votes, never mixed
     * with the main one. $award->getConnectionName() is null for the default
     * connection, which Nominee::on(null) etc. treat as "use the default" —
     * so this is a no-op change for existing (single-database) callers.
     */
    public static function computeAwardResults(Award $award)
    {
        $connection = $award->getConnectionName();

        $nominees = Nominee::on($connection)->where('award_program_id', $award->award_program_id)
            ->get()
            ->filter(function ($nominee) use ($award) {
                $awardIds = json_decode($nominee->award_ids) ?? [];
                return in_array($award->id, $awardIds) && $award->sector_id == $nominee->sector_id;
            })
            ->values();

        $judgesVotes = JudgesVotes::on($connection)->where('award_id', $award->id)->get()->groupBy('nominee_id');

        $publicCounts = Vote::on($connection)->where('award_id', $award->id)
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
}
