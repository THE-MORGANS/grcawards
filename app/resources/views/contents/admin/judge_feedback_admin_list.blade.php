@extends('layouts.admin.master')

@section('title', 'Judge Feedback Survey')

@section('style')
<style>
    .jf-wrapper { max-width: 1100px; }
    .jf-header { margin-bottom: 1.5rem; }
    .jf-header h1 { font-size: 22px; font-weight: 700; color: #313a46; margin-bottom: 4px; }
    .jf-header p { color: #6c757d; font-size: 13.5px; margin: 0; }

    .jf-card { background: #fff; border-radius: 10px; box-shadow: 0 1px 3px rgba(0,0,0,.06); border: 1px solid #eef2f7; }
    .jf-table { width: 100%; border-collapse: collapse; }
    .jf-table thead th {
        background: #f7f8fc; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .03em;
        color: #6c757d; padding: 12px 20px; text-align: left; border-bottom: 1px solid #eef2f7;
    }
    .jf-table tbody td { padding: 14px 20px; border-bottom: 1px solid #f4f5f9; font-size: 13.5px; vertical-align: middle; }
    .jf-table tbody tr:last-child td { border-bottom: none; }
    .jf-table tbody tr:hover { background: #fbfbfe; }

    .jf-judge { font-weight: 600; color: #313a46; }
    .jf-region { display: inline-block; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .03em; padding: 3px 10px; border-radius: 30px; background: rgba(114,124,245,.1); color: #727cf5; }
    .jf-testimonial { display: inline-flex; align-items: center; gap: 4px; font-size: 11px; color: #0acf97; font-weight: 600; }
    .jf-empty { padding: 60px 20px; text-align: center; color: #98a6ad; }
    .jf-pagination { padding: 16px 20px; }
</style>
@endsection

@section('content')
<div class="jf-wrapper">
    <div class="jf-header">
        <h1>Judges Post-Evaluation Feedback</h1>
        <p>Responses to the 2026 judges' post-evaluation survey.</p>
    </div>

    <div class="jf-card">
        @if($submissions->isEmpty())
        <div class="jf-empty">
            <i class="mdi mdi-clipboard-text-search-outline" style="font-size:40px; display:block; margin-bottom:10px; opacity:.5;"></i>
            No feedback submissions yet.
        </div>
        @else
        <div class="table-responsive">
            <table class="jf-table">
                <thead>
                    <tr>
                        <th>Judge</th>
                        <th>Region</th>
                        <th>Submitted</th>
                        <th>Testimonial</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                    <tr>
                        <td>
                            <div class="jf-judge">{{ $submission->judge?->fullname ?? 'Unknown judge' }}</div>
                            <div class="text-muted" style="font-size:12px;">{{ $submission->judge?->email }}</div>
                        </td>
                        <td>@if($submission->region)<span class="jf-region">{{ $submission->region }}</span>@endif</td>
                        <td>{{ $submission->created_at->format('d M Y, h:i A') }}</td>
                        <td>
                            @if($submission->testimonial_text)
                            <span class="jf-testimonial"><i class="mdi mdi-comment-quote-outline"></i> {{ $submission->testimonial_consent ?: 'Given' }}</span>
                            @else
                            <span class="text-muted">&mdash;</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.judge_feedback.show', [$award_program, $submission->id]) }}" class="btn btn-sm btn-outline-primary">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="jf-pagination">
            {{ $submissions->links('pagination::bootstrap-4') }}
        </div>
        @endif
    </div>
</div>
@endsection
