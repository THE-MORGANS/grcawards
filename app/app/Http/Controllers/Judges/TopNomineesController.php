<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\JudgesVotes;
use App\Models\Nominee;
use App\Models\NomineeEvidence;
use App\Models\VoteCount;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class TopNomineesController extends Controller
{
    public function ViewTopNominees(Request $request, $award_program_id)
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0] ?? null;
        $judgeId = auth('admin')->id();

        $awards = Award::with('sector')
            ->when($award_program, fn ($query) => $query->where('award_program_id', $award_program))
            ->get();

        $categories = [];

        foreach ($awards as $award) {
            $votes = VoteCount::with('nominee')
                ->where('award_id', $award->id)
                ->orderByDesc('voteCount')
                ->get()
                ->filter(fn ($vote) => $vote->nominee)
                ->values();

            if ($votes->isEmpty()) {
                continue;
            }

            $myVotes = JudgesVotes::where(['award_id' => $award->id, 'judge_id' => $judgeId])
                ->get()
                ->keyBy('nominee_id');

            $evidence = NomineeEvidence::where('award_id', $award->id)
                ->orderBy('weight', 'desc')
                ->get()
                ->groupBy('nominee_id');

            $categories[] = [
                'award' => $award,
                'sector' => $award->sector?->name ?? 'Uncategorised',
                'nominees' => $this->topFiveWithTies($votes),
                'already_voted' => $myVotes->isNotEmpty(),
                'my_votes' => $myVotes,
                'evidence' => $evidence,
            ];
        }

        $sectors = collect($categories)
            ->groupBy('sector')
            ->sortKeys();

        $totalCategories = count($categories);
        $votedCategories = collect($categories)->where('already_voted', true)->count();
        $votedPercentage = $totalCategories > 0 ? round(($votedCategories / $totalCategories) * 100) : 0;

        return view('contents.admin.judge.top_nominees', compact('sectors', 'totalCategories', 'votedCategories', 'votedPercentage'))
            ->with(['award_program' => $award_program_id]);
    }

    public function SubmitVote(Request $request, $award_program_id)
    {
        $award_id = (int) $request->award_id;
        $scores = (array) $request->input('scores', []);
        $comments = (array) $request->input('comments', []);
        $judgeId = auth('admin')->id();

        if (JudgesVotes::where(['award_id' => $award_id, 'judge_id' => $judgeId])->exists()) {
            $request->session()->flash('danger', 'You have already voted for this award.');
            return redirect()->back();
        }

        foreach ($scores as $nomineeId => $score) {
            $score = trim((string) $score);
            $comment = trim((string) ($comments[$nomineeId] ?? ''));

            if ($score === '' && $comment === '') {
                $nomineeName = Nominee::find($nomineeId)?->name ?? "nominee #$nomineeId";
                $request->session()->flash('danger', "Please select a score or add a comment for $nomineeName before submitting.");
                return redirect()->back()->withInput();
            }

            // A comment on its own (no score) is a valid, deliberate "skip with reason" —
            // only enforce the 1-10 range when a score was actually given.
            if ($score !== '' && (!ctype_digit($score) || (int) $score < 1 || (int) $score > 10)) {
                $nomineeName = Nominee::find($nomineeId)?->name ?? "nominee #$nomineeId";
                $request->session()->flash('danger', "Score for $nomineeName must be between 1 and 10 (got \"$score\").");
                return redirect()->back()->withInput();
            }
        }

        foreach ($scores as $nomineeId => $score) {
            $score = trim((string) $score);
            $comment = trim((string) ($comments[$nomineeId] ?? ''));

            JudgesVotes::create([
                'judge_id' => $judgeId,
                'award_id' => $award_id,
                'nominee_id' => $nomineeId,
                'nominee_name' => Nominee::find($nomineeId)?->name,
                'votes' => $score !== '' ? $score : null,
                'comment' => $comment !== '' ? $comment : null,
            ]);
        }

        $request->session()->flash('success', 'Your vote has been submitted successfully.');
        return redirect()->back();
    }

    /**
     * Take the top 5 VoteCount rows (by voteCount, already sorted DESC) and
     * extend the cut past 5 to include anyone tied with 5th place.
     */
    private function topFiveWithTies($votes)
    {
        if ($votes->count() <= 5) {
            return $votes->values();
        }

        $fifthPlaceVotes = (int) $votes->slice(0, 5)->last()->voteCount;

        return $votes
            ->filter(fn ($vote) => (int) $vote->voteCount >= $fifthPlaceVotes)
            ->values();
    }
}
