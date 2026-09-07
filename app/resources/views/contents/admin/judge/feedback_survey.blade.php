@extends('layouts.admin.master')

@section('title', 'Judges Post-Evaluation Feedback Survey')

@section('style')
<style>
    .survey-wrapper { max-width: 900px; margin: 0 auto; }

    .survey-intro { background: #fff; border: 1px solid #eef2f7; border-radius: 10px; padding: 28px 32px; margin-bottom: 24px; }
    .survey-intro h1 { font-size: 21px; font-weight: 700; color: #313a46; margin-bottom: 4px; }
    .survey-intro h2 { font-size: 14px; font-weight: 600; color: #727cf5; text-transform: uppercase; letter-spacing: .03em; margin-bottom: 16px; }
    .survey-intro p { font-size: 13.5px; color: #6c757d; line-height: 1.7; margin-bottom: 10px; }
    .survey-intro .survey-meta { display: inline-flex; align-items: center; gap: 6px; background: #f1f3fa; color: #727cf5; font-size: 12px; font-weight: 600; padding: 5px 12px; border-radius: 30px; margin-top: 6px; }

    .survey-done { background: #fff; border: 1px solid #eef2f7; border-radius: 10px; padding: 48px 32px; text-align: center; }
    .survey-done i { font-size: 44px; color: #0acf97; margin-bottom: 12px; display: block; }
    .survey-done h3 { font-size: 18px; font-weight: 700; color: #313a46; margin-bottom: 6px; }
    .survey-done p { color: #6c757d; font-size: 13.5px; }

    .survey-section { background: #fff; border: 1px solid #eef2f7; border-radius: 10px; margin-bottom: 20px; overflow: hidden; }
    .survey-section-head { background: #f7f8fc; border-bottom: 1px solid #eef2f7; padding: 14px 24px; }
    .survey-section-head h3 { font-size: 14.5px; font-weight: 700; color: #313a46; margin: 0; }
    .survey-section-head p { font-size: 12.5px; color: #98a6ad; margin: 4px 0 0; }
    .survey-section-body { padding: 6px 24px 20px; }

    .survey-question { padding: 18px 0; border-bottom: 1px solid #f4f5f9; }
    .survey-question:last-child { border-bottom: none; }
    .survey-question-text { font-size: 13.5px; font-weight: 600; color: #313a46; margin-bottom: 12px; line-height: 1.5; }
    .survey-question-text .req { color: #fa4747; margin-left: 3px; }
    .survey-question-text .opt-note { color: #98a6ad; font-weight: 500; font-size: 12px; margin-left: 6px; }

    .survey-mc { display: flex; flex-direction: column; gap: 8px; }
    .survey-mc label { display: flex; align-items: center; gap: 9px; font-size: 13px; color: #495057; cursor: pointer; }
    .survey-mc input[type="radio"] { width: 16px; height: 16px; accent-color: #727cf5; flex-shrink: 0; }

    .survey-scale { display: flex; flex-wrap: wrap; gap: 8px; }
    .survey-scale-item { flex: 1; min-width: 80px; }
    .survey-scale-item input[type="radio"] { position: absolute; opacity: 0; width: 0; height: 0; }
    .survey-scale-item label {
        display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px;
        border: 1.5px solid #eef2f7; border-radius: 8px; padding: 10px 6px; cursor: pointer; text-align: center;
        transition: border-color .15s, background .15s; height: 100%;
    }
    .survey-scale-item input[type="radio"]:checked + label { border-color: #727cf5; background: rgba(114,124,245,.08); }
    .survey-scale-item .scale-num { font-size: 15px; font-weight: 700; color: #313a46; }
    .survey-scale-item .scale-label { font-size: 10.5px; color: #98a6ad; line-height: 1.3; min-height: 26px; }

    .survey-textarea { width: 100%; border: 1px solid #dee2e6; border-radius: 8px; padding: 10px 12px; font-size: 13px; resize: vertical; min-height: 90px; }
    .survey-textarea:focus { outline: none; border-color: #727cf5; box-shadow: 0 0 0 2px rgba(114,124,245,.15); }

    .survey-submit-bar { text-align: right; padding: 20px 4px 60px; }
    .survey-submit-bar .btn { border-radius: 30px; padding: 10px 32px; font-weight: 600; }
</style>
@endsection

@section('content')
<div class="survey-wrapper">

    @if($existing)
    <div class="survey-done">
        <i class="mdi mdi-check-circle-outline"></i>
        <h3>Thank you — your feedback is already on file</h3>
        <p>You submitted your Post-Evaluation Feedback Survey for this edition on {{ $existing->created_at->format('d M Y, h:i A') }}. There's nothing further to do here.</p>
    </div>
    @else

    <div class="survey-intro">
        <h1>2026 GRC & Financial Crime Prevention Awards</h1>
        <h2>Judges Post-Evaluation Feedback Survey</h2>
        <p>Thank you for completing the 2026 GRC & Financial Crime Prevention Awards evaluation process.</p>
        <p>Your feedback is important to us. It will help the Awards Secretariat, Chair of Judges and Organising Committee assess the effectiveness, fairness and overall quality of the judging process and identify improvements for future editions.</p>
        <p>Responses will be treated confidentially and used primarily for internal review and continuous improvement.</p>
        <span class="survey-meta"><i class="mdi mdi-clock-outline"></i> Approximately 5–7 minutes</span>
    </div>

    <form method="POST" action="{{ route('admin.judge_feedback_survey.submit', $award_program) }}" id="feedback-survey-form">
        @csrf

        @foreach($sections as $section)
        <div class="survey-section">
            <div class="survey-section-head">
                <h3>{{ $section['title'] }}</h3>
                @if(!empty($section['intro']))
                <p>{{ $section['intro'] }}</p>
                @endif
            </div>
            <div class="survey-section-body">
                @foreach($section['questions'] as $number => $question)
                <div class="survey-question" @if(!empty($question['show_if'])) data-show-if="{{ json_encode($question['show_if']) }}" style="display:none;" @endif data-question="{{ $number }}">
                    <div class="survey-question-text">
                        {{ $number }}. {{ $question['text'] }}
                        @if($question['required'] ?? false)<span class="req">*</span>@endif
                        @if(!empty($question['optional_label']))<span class="opt-note">(optional)</span>@endif
                    </div>

                    @if($question['type'] === 'multiple_choice')
                    <div class="survey-mc">
                        @foreach($question['options'] as $option)
                        <label>
                            <input type="radio" name="answers[{{ $number }}]" value="{{ $option }}" @if($question['required'] ?? false) required @endif>
                            {{ $option }}
                        </label>
                        @endforeach
                    </div>

                    @elseif($question['type'] === 'scale')
                    <div class="survey-scale">
                        @foreach($question['labels'] as $value => $label)
                        <div class="survey-scale-item">
                            <input type="radio" id="q{{ $number }}_{{ $value }}" name="answers[{{ $number }}]" value="{{ $value }}" @if($question['required'] ?? false) required @endif>
                            <label for="q{{ $number }}_{{ $value }}">
                                <span class="scale-num">{{ $value }}</span>
                                @if($label)<span class="scale-label">{{ $label }}</span>@endif
                            </label>
                        </div>
                        @endforeach
                    </div>

                    @elseif($question['type'] === 'long_answer')
                    <textarea class="survey-textarea" name="answers[{{ $number }}]" rows="3" @if($question['required'] ?? false) required @endif></textarea>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="survey-submit-bar">
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </div>
    </form>

    @endif
</div>
@endsection

@section('scripts')
<script>
    // Conditional reveal for questions with a show_if dependency (e.g. Q24 depends on Q23 = "Yes").
    document.addEventListener('DOMContentLoaded', function () {
        const conditional = document.querySelectorAll('[data-show-if]');

        function evaluate() {
            conditional.forEach(function (el) {
                const rule = JSON.parse(el.dataset.showIf);
                let visible = true;
                Object.keys(rule).forEach(function (qNum) {
                    const checked = document.querySelector('input[name="answers[' + qNum + ']"]:checked');
                    if (!checked || checked.value !== rule[qNum]) visible = false;
                });
                el.style.display = visible ? '' : 'none';
            });
        }

        document.querySelectorAll('input[type="radio"]').forEach(function (input) {
            input.addEventListener('change', evaluate);
        });
        evaluate();
    });
</script>

@if(Session::has('success'))
<script>
    toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
    toastr.success("{{ session('success') }}");
</script>
@endif

@if(Session::has('danger'))
<script>
    toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
    toastr.error("{{ session('danger') }}");
</script>
@endif
@endsection
