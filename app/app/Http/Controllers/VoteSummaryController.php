<?php

namespace App\Http\Controllers;

use App\Exports\VoteSummaryExport;
use App\Models\Admin;
use App\Models\Award;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\JudgesVotes;
use App\Models\Nominee;
use App\Models\Sector;
use App\Models\Vote;
use App\Models\Voter;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Vinkla\Hashids\Facades\Hashids;

class VoteSummaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($award_program)
    {
        return view('contents.admin.vote_summary', $this->buildSummary($award_program));
    }

    public function export($award_program)
    {
        $data = $this->buildSummary($award_program);
        $name = $data['awardProgram']->name ?? 'award-program';
        $filename = 'vote_summary_' . Str::slug($name) . '_' . date('Y-m-d_His') . '.xlsx';

        return Excel::download(new VoteSummaryExport($data), $filename);
    }

    public function pdf($award_program)
    {
        $data = $this->buildSummary($award_program);
        $data['judgingCoverage'] = $data['awardsCount'] > 0
            ? round(($data['awardsJudged'] / $data['awardsCount']) * 100, 1)
            : 0;
        $data['voterTurnout'] = $data['votersCount'] > 0
            ? round(($data['votersWhoVoted'] / $data['votersCount']) * 100, 1)
            : 0;

        $name = $data['awardProgram']->name ?? 'award-program';
        $filename = 'vote_summary_' . Str::slug($name) . '_' . date('Y-m-d_His') . '.pdf';

        $pdf = Pdf::loadView('contents.admin.vote_summary_pdf', $data)->setPaper('a4', 'portrait');

        return $pdf->download($filename);
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
     */
    private function buildSummary($award_program)
    {
        $awpId = Hashids::connection('awardProgram')->decode($award_program)[0] ?? null;
        $awardProgram = AwardProgram::find($awpId);

        $awardIds = Award::where('award_program_id', $awpId)->pluck('id');

        $nomineesCount = Nominee::where('award_program_id', $awpId)->count();

        $votersCount = Voter::where('award_program_id', $awpId)->count();
        $activeVotersCount = Voter::where('award_program_id', $awpId)->where('active', 1)->count();

        $publicVotesCount = Vote::whereIn('award_id', $awardIds)->count();
        $votersWhoVoted = Vote::whereIn('award_id', $awardIds)->distinct('voter')->count('voter');

        $judgeRoleAdminIds = Admin::where('role_id', 3)->pluck('id');
        $judgesCount = JudgesVotes::whereIn('award_id', $awardIds)
            ->whereIn('judge_id', $judgeRoleAdminIds)
            ->distinct('judge_id')
            ->count('judge_id');
        $totalJudgeAccounts = $judgeRoleAdminIds->count();
        $judgesVotesCount = JudgesVotes::whereIn('award_id', $awardIds)->count();
        $awardsJudged = JudgesVotes::whereIn('award_id', $awardIds)->distinct('award_id')->count('award_id');

        $categoriesCount = Category::where('award_program_id', $awpId)->count();
        $sectorsCount = Sector::where('award_program_id', $awpId)->count();
        $awardsCount = $awardIds->count();

        $categoryBreakdown = $this->categoryBreakdown($awpId);
        $votesTrend = $this->votesTrend($awardIds);

        return [
            'awardProgram' => $awardProgram,
            'award_program' => $award_program,
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
        ];
    }

    private function categoryBreakdown($awpId)
    {
        $categories = Category::where('award_program_id', $awpId)->get();

        return $categories->map(function ($category) {
            $awardIds = $category->sectors->flatMap(fn ($sector) => $sector->awards->pluck('id'));

            return [
                'name' => $category->name,
                'sectors' => $category->sectors->count(),
                'awards' => $awardIds->count(),
                'public_votes' => Vote::whereIn('award_id', $awardIds)->count(),
                'judges_votes' => JudgesVotes::whereIn('award_id', $awardIds)->count(),
            ];
        })->sortByDesc('public_votes')->values();
    }

    private function votesTrend($awardIds)
    {
        $start = now()->subDays(13)->startOfDay();

        $raw = Vote::whereIn('award_id', $awardIds)
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
