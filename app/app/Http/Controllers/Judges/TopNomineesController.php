<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\VoteCount;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class TopNomineesController extends Controller
{
    public function ViewTopNominees(Request $request, $award_program_id)
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0] ?? null;

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

            $categories[] = [
                'award' => $award,
                'sector' => $award->sector?->name ?? 'Uncategorised',
                'nominees' => $this->topFiveWithTies($votes),
            ];
        }

        $sectors = collect($categories)
            ->groupBy('sector')
            ->sortKeys();

        return view('contents.admin.judge.top_nominees', compact('sectors'))
            ->with(['award_program' => $award_program_id]);
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
