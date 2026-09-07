<?php

namespace App\Http\Controllers;

use App\Models\JudgeFeedbackSurvey;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class JudgeFeedbackSurveyAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request, $award_program)
    {
        $awardProgramId = Hashids::connection('awardProgram')->decode($award_program)[0] ?? null;

        $submissions = JudgeFeedbackSurvey::with('judge')
            ->when($awardProgramId, fn ($query) => $query->where('award_program_id', $awardProgramId))
            ->orderByDesc('created_at')
            ->paginate(20)
            ->withQueryString();

        return view('contents.admin.judge_feedback_admin_list', [
            'submissions' => $submissions,
            'award_program' => $award_program,
        ]);
    }

    public function show(Request $request, $award_program, JudgeFeedbackSurvey $submission)
    {
        $sections = config('judge_feedback_survey.sections');

        return view('contents.admin.judge_feedback_admin_detail', [
            'submission' => $submission,
            'sections' => $sections,
            'award_program' => $award_program,
        ]);
    }
}
