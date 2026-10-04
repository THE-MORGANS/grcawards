<?php

namespace App\Http\Controllers;

use App\Exports\VoteSummaryExport;
use App\Models\Admin;
use App\Models\Award;
use App\Models\AwardDemotion;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\JudgesVotes;
use App\Models\Nominee;
use App\Models\Sector;
use App\Models\Vote;
use App\Models\Voter;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Vinkla\Hashids\Facades\Hashids;

class VoteSummaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($award_program, Request $request)
    {
        $region = $this->resolveRegion($request);

        return view('contents.admin.vote_summary', $this->buildSummary($award_program, $region));
    }

    public function export($award_program, Request $request)
    {
        $region = $this->resolveRegion($request);
        $data = $this->buildSummary($award_program, $region);
        $name = $data['awardProgram']->name ?? 'award-program';
        $filename = 'vote_summary_' . $region . '_' . Str::slug($name) . '_' . date('Y-m-d_His') . '.xlsx';

        return Excel::download(new VoteSummaryExport($data), $filename);
    }

    public function pdf($award_program, Request $request)
    {
        $region = $this->resolveRegion($request);
        $data = $this->buildSummary($award_program, $region);
        $data['judgingCoverage'] = $data['awardsCount'] > 0
            ? round(($data['awardsJudged'] / $data['awardsCount']) * 100, 1)
            : 0;
        $data['voterTurnout'] = $data['votersCount'] > 0
            ? round(($data['votersWhoVoted'] / $data['votersCount']) * 100, 1)
            : 0;

        $name = $data['awardProgram']->name ?? 'award-program';
        $filename = 'vote_summary_' . $region . '_' . Str::slug($name) . '_' . date('Y-m-d_His') . '.pdf';

        $pdf = Pdf::loadView('contents.admin.vote_summary_pdf', $data)->setPaper('a4', 'portrait');

        return $pdf->download($filename);
    }

    /**
     * Region = database connection, not a column — same convention as
     * LandingPageController::buildRegionData for the public Top 3 Finalists
     * page. Africa is the default connection; Europe is 'grcawards_uk'.
     */
    private function resolveRegion(Request $request)
    {
        return $request->query('region') === 'europe' ? 'europe' : 'africa';
    }

    /**
     * Public votes and judges' votes are scoped through award_id rather than
     * the award_program_id column on votes/judges_votes — legacy vote-capture
     * code hardcodes that column, so award_id (which is always set correctly)
     * is the only reliable way to attribute a vote to an award program. This
     * mirrors how VoteCountController and AwardWinnerController already do it.
     *
     * "Judges" = admins with role_id 3 (the "judge" role) — not the `judges`
     * profile table, which is sparsely/incorrectly populated for most award
     * programs. Since admins has no award_program_id column (judge accounts
     * aren't assigned to a program in the schema), the only reliable way to
     * attribute a judge-role account to *this* program is that they actually
     * scored a nominee here (judge_id on judges_votes is an admins.id), so the
     * count below is judge-role admins who show up in this program's votes,
     * not the global pool of every judge account ever created.
     *
     * Africa keeps the exact behaviour this page always had — the specific
     * award program decoded from the URL, queried on the default connection.
     * Europe has no equivalent hashid for that same program (raw ids can
     * collide across the two independent databases), so — same convention as
     * LandingPageController::buildRegionData for the public Top 3 Finalists
     * page — it always shows the latest active award program on the
     * 'grcawards_uk' connection, whatever that program's id happens to be.
     */
    private function buildSummary($award_program, $region = 'africa')
    {
        $connection = $region === 'europe' ? 'grcawards_uk' : null;

        if ($region === 'europe') {
            try {
                $awardProgram = AwardProgram::on($connection)->where('status', 1)->latest()->first();
            } catch (\Throwable $e) {
                $awardProgram = null;
            }
        } else {
            $awpId = Hashids::connection('awardProgram')->decode($award_program)[0] ?? null;
            $awardProgram = AwardProgram::find($awpId);
        }

        if (!$awardProgram) {
            return $this->emptySummary($award_program, $region);
        }

        $awpId = $awardProgram->id;

        $awardIds = Award::on($connection)->where('award_program_id', $awpId)->pluck('id');

        $nomineesCount = Nominee::on($connection)->where('award_program_id', $awpId)->count();

        $votersCount = Voter::on($connection)->where('award_program_id', $awpId)->count();
        $activeVotersCount = Voter::on($connection)->where('award_program_id', $awpId)->where('active', 1)->count();

        $publicVotesCount = Vote::on($connection)->whereIn('award_id', $awardIds)->count();
        $votersWhoVoted = Vote::on($connection)->whereIn('award_id', $awardIds)->distinct('voter')->count('voter');

        $judgeRoleAdminIds = Admin::on($connection)->where('role_id', 3)->pluck('id');
        $judgesCount = JudgesVotes::on($connection)->whereIn('award_id', $awardIds)
            ->whereIn('judge_id', $judgeRoleAdminIds)
            ->distinct('judge_id')
            ->count('judge_id');
        $totalJudgeAccounts = $judgeRoleAdminIds->count();
        $judgesVotesCount = JudgesVotes::on($connection)->whereIn('award_id', $awardIds)->count();
        $awardsJudged = JudgesVotes::on($connection)->whereIn('award_id', $awardIds)->distinct('award_id')->count('award_id');

        $categoriesCount = Category::on($connection)->where('award_program_id', $awpId)->count();
        $sectorsCount = Sector::on($connection)->where('award_program_id', $awpId)->count();
        $awardsCount = $awardIds->count();

        $categoryBreakdown = $this->categoryBreakdown($awpId, $connection);
        $votesTrend = $this->votesTrend($awardIds, $connection);
        $demotions = AwardDemotion::on($connection)
            ->whereIn('award_id', $awardIds)
            ->with(['nominee', 'award', 'admin'])
            ->latest()
            ->get();

        return [
            'awardProgram' => $awardProgram,
            'award_program' => $award_program,
            'region' => $region,
            'nomineesCount' => $nomineesCount,
            'votersCount' => $votersCount,
            'activeVotersCount' => $activeVotersCount,
            'publicVotesCount' => $publicVotesCount,
            'votersWhoVoted' => $votersWhoVoted,
            'judgesCount' => $judgesCount,
            'totalJudgeAccounts' => $totalJudgeAccounts,
            'judgesVotesCount' => $judgesVotesCount,
            'awardsJudged' => $awardsJudged,
            'categoriesCount' => $categoriesCount,
            'sectorsCount' => $sectorsCount,
            'awardsCount' => $awardsCount,
            'categoryBreakdown' => $categoryBreakdown,
            'votesTrend' => $votesTrend,
            'demotions' => $demotions,
            'demotionsCount' => $demotions->count(),
        ];
    }

    /**
     * Europe having no active award program (or the connection being
     * unreachable) shouldn't error the page — same "just shows no results"
     * fallback the public Top 3 Finalists page uses.
     */
    private function emptySummary($award_program, $region)
    {
        return [
            'awardProgram' => null,
            'award_program' => $award_program,
            'region' => $region,
            'nomineesCount' => 0,
            'votersCount' => 0,
            'activeVotersCount' => 0,
            'publicVotesCount' => 0,
            'votersWhoVoted' => 0,
            'judgesCount' => 0,
            'totalJudgeAccounts' => 0,
            'judgesVotesCount' => 0,
            'awardsJudged' => 0,
            'categoriesCount' => 0,
            'sectorsCount' => 0,
            'awardsCount' => 0,
            'categoryBreakdown' => collect(),
            'votesTrend' => $this->votesTrend(collect(), null),
            'demotions' => collect(),
            'demotionsCount' => 0,
        ];
    }

    private function categoryBreakdown($awpId, $connection)
    {
        $categories = Category::on($connection)->where('award_program_id', $awpId)->get();

        return $categories->map(function ($category) use ($connection) {
            $awardIds = $category->sectors->flatMap(fn ($sector) => $sector->awards->pluck('id'));

            return [
                'name' => $category->name,
                'sectors' => $category->sectors->count(),
                'awards' => $awardIds->count(),
                'public_votes' => Vote::on($connection)->whereIn('award_id', $awardIds)->count(),
                'judges_votes' => JudgesVotes::on($connection)->whereIn('award_id', $awardIds)->count(),
            ];
        })->sortByDesc('public_votes')->values();
    }

    private function votesTrend($awardIds, $connection)
    {
        $start = now()->subDays(13)->startOfDay();

        $raw = Vote::on($connection)->whereIn('award_id', $awardIds)
            ->where('created_at', '>=', $start)
            ->selectRaw('DATE(created_at) as d, COUNT(*) as c')
            ->groupBy('d')
            ->pluck('c', 'd');

        $trend = [];
        for ($i = 13; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $key = $date->format('Y-m-d');
            $trend[] = [
                'label' => $date->format('d M'),
                'count' => (int) ($raw[$key] ?? 0),
            ];
        }

        return $trend;
    }
}
