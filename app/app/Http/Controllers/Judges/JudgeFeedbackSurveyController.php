<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Models\JudgeFeedbackSurvey;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class JudgeFeedbackSurveyController extends Controller
{
    public function show(Request $request, $award_program_id)
    {
        $awardProgramId = Hashids::connection('awardProgram')->decode($award_program_id)[0] ?? null;
        $judgeId = auth('admin')->id();

        $existing = JudgeFeedbackSurvey::where(['admin_id' => $judgeId, 'award_program_id' => $awardProgramId])->first();

        $sections = config('judge_feedback_survey.sections');

        return view('contents.admin.judge.feedback_survey', [
            'sections' => $sections,
            'existing' => $existing,
            'award_program' => $award_program_id,
        ]);
    }

    public function submit(Request $request, $award_program_id)
    {
        $awardProgramId = Hashids::connection('awardProgram')->decode($award_program_id)[0] ?? null;
        $judgeId = auth('admin')->id();

        if (JudgeFeedbackSurvey::where(['admin_id' => $judgeId, 'award_program_id' => $awardProgramId])->exists()) {
            $request->session()->flash('danger', 'You have already submitted the feedback survey for this edition.');
            return redirect()->route('admin.judge_feedback_survey', $award_program_id);
        }

        $sections = config('judge_feedback_survey.sections');
        $answers = (array) $request->input('answers', []);

        // Server-side enforcement of the required questions, driven by the same config
        // the form was rendered from — never trust the client-side required attribute alone.
        foreach ($sections as $section) {
            foreach ($section['questions'] as $number => $question) {
                if (!($question['required'] ?? false)) {
                    continue;
                }
                $value = trim((string) ($answers[$number] ?? ''));
                if ($value === '') {
                    $request->session()->flash('danger', "Please answer question {$number} before submitting: \"{$question['text']}\"");
                    return redirect()->route('admin.judge_feedback_survey', $award_program_id)->withInput();
                }
            }
        }

        // Q60/Q61 (testimonial) get their own columns so the secretariat can query/export
        // testimonials without digging through the JSON blob.
        $testimonialText = trim((string) ($answers[60] ?? ''));
        $testimonialConsent = trim((string) ($answers[61] ?? ''));
        $region = trim((string) ($answers[1] ?? ''));

        unset($answers[60], $answers[61]);

        JudgeFeedbackSurvey::create([
            'admin_id' => $judgeId,
            'award_program_id' => $awardProgramId,
            'region' => $region !== '' ? $region : null,
            'answers' => $answers,
            'testimonial_text' => $testimonialText !== '' ? $testimonialText : null,
            'testimonial_consent' => $testimonialConsent !== '' ? $testimonialConsent : null,
        ]);

        $request->session()->flash('success', 'Thank you — your feedback has been recorded.');
        return redirect()->route('admin.judge_feedback_survey', $award_program_id);
    }
}
