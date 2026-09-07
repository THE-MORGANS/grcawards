@extends('layouts.admin.master')

@section('title', 'Judge Feedback Response')

@section('style')
<style>
    .jfd-wrapper { max-width: 900px; margin: 0 auto; }
    .jfd-back { display: inline-flex; align-items: center; gap: 5px; font-size: 12.5px; font-weight: 600; color: #727cf5; margin-bottom: 14px; }

    .jfd-summary { background: #fff; border: 1px solid #eef2f7; border-radius: 10px; padding: 22px 26px; margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 14px; }
    .jfd-summary h1 { font-size: 19px; font-weight: 700; color: #313a46; margin-bottom: 4px; }
    .jfd-summary .jfd-meta { font-size: 12.5px; color: #98a6ad; }
    .jfd-region { display: inline-block; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .03em; padding: 3px 10px; border-radius: 30px; background: rgba(114,124,245,.1); color: #727cf5; }

    .jfd-testimonial { background: #fff8e6; border: 1px solid rgba(255,188,0,.25); border-radius: 10px; padding: 18px 22px; margin-bottom: 20px; }
    .jfd-testimonial h4 { font-size: 12.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .03em; color: #96751f; margin-bottom: 8px; }
    .jfd-testimonial p { font-size: 14px; font-style: italic; color: #313a46; margin-bottom: 6px; }
    .jfd-testimonial .consent { font-size: 11.5px; color: #98a6ad; }

    .jfd-section { background: #fff; border: 1px solid #eef2f7; border-radius: 10px; margin-bottom: 16px; overflow: hidden; }
    .jfd-section-head { background: #f7f8fc; border-bottom: 1px solid #eef2f7; padding: 12px 22px; }
    .jfd-section-head h3 { font-size: 13.5px; font-weight: 700; color: #313a46; margin: 0; }
    .jfd-section-body { padding: 4px 22px 16px; }

    .jfd-q { padding: 14px 0; border-bottom: 1px solid #f4f5f9; }
    .jfd-q:last-child { border-bottom: none; }
    .jfd-q-text { font-size: 12.5px; font-weight: 600; color: #6c757d; margin-bottom: 6px; }
    .jfd-q-answer { font-size: 13.5px; color: #313a46; }
    .jfd-q-answer.empty { color: #c3cbd4; font-style: italic; }
    .jfd-scale-answer { display: inline-flex; align-items: center; gap: 8px; }
    .jfd-scale-badge { display: inline-block; font-size: 13px; font-weight: 700; color: #fff; background: #727cf5; padding: 2px 11px; border-radius: 30px; }
</style>
@endsection

@section('content')
<div class="jfd-wrapper">
    <a href="{{ route('admin.judge_feedback.index', $award_program) }}" class="jfd-back"><i class="mdi mdi-arrow-left"></i> Back to all responses</a>

    <div class="jfd-summary">
        <div>
            <h1>{{ $submission->judge?->fullname ?? 'Unknown judge' }}</h1>
            <div class="jfd-meta">{{ $submission->judge?->email }} &middot; submitted {{ $submission->created_at->format('d M Y, h:i A') }}</div>
        </div>
        @if($submission->region)<span class="jfd-region">{{ $submission->region }}</span>@endif
    </div>

    @if($submission->testimonial_text)
    <div class="jfd-testimonial">
        <h4>Testimonial</h4>
        <p>&ldquo;{{ $submission->testimonial_text }}&rdquo;</p>
        <div class="consent">Consent: {{ $submission->testimonial_consent ?: 'Not specified' }}</div>
    </div>
    @endif

    @php $answers = $submission->answers ?? []; @endphp

    @foreach($sections as $section)
    <div class="jfd-section">
        <div class="jfd-section-head"><h3>{{ $section['title'] }}</h3></div>
        <div class="jfd-section-body">
            @foreach($section['questions'] as $number => $question)
            @php
                $value = $number == 60 ? $submission->testimonial_text : ($number == 61 ? $submission->testimonial_consent : ($answers[$number] ?? null));
            @endphp
            <div class="jfd-q">
                <div class="jfd-q-text">{{ $number }}. {{ $question['text'] }}</div>
                @if($value === null || $value === '')
                <div class="jfd-q-answer empty">No answer</div>
                @elseif($question['type'] === 'scale')
                <div class="jfd-scale-answer">
                    <span class="jfd-scale-badge">{{ $value }}</span>
                    @if(!empty($question['labels'][$value]))<span>{{ $question['labels'][$value] }}</span>@endif
                </div>
                @else
                <div class="jfd-q-answer">{{ $value }}</div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection
