@extends('layouts.admin.master')

@section('title', 'Judges Votes Results')

@section('style')
<style>
    .ar-header-card {
        border: none;
        border-radius: 14px;
        background: linear-gradient(135deg, #313a46 0%, #3a4453 100%);
        color: #fff;
        overflow: hidden;
        position: relative;
    }
    .ar-header-card::after {
        content: '';
        position: absolute;
        top: -60px;
        right: -60px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: rgba(114, 124, 245, .18);
    }
    .ar-back-link { font-size: 12.5px; color: rgba(255,255,255,.65); text-decoration: none; display: inline-flex; align-items: center; gap: 4px; margin-bottom: 12px; }
    .ar-back-link:hover { color: #fff; }
    .ar-breadcrumb { font-size: 11.5px; color: rgba(255,255,255,.5); margin-bottom: 6px; position: relative; z-index: 2; }
    .ar-title { font-size: 22px; font-weight: 700; margin-bottom: 0; position: relative; z-index: 2; }
    .ar-stats { display: flex; gap: 10px; flex-wrap: wrap; position: relative; z-index: 2; }
    .ar-stat { background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.12); border-radius: 10px; padding: 12px 18px; min-width: 110px; text-align: center; }
    .ar-stat .val { font-size: 22px; font-weight: 700; line-height: 1; color: #fff; }
    .ar-stat .lbl { font-size: 10.5px; letter-spacing: .05em; text-transform: uppercase; color: rgba(255,255,255,.55); margin-top: 4px; }
    .ar-stat.is-accent .val { color: #0acf97; }

    .ar-nominee-card { border: 1px solid #eef2f7; border-radius: 12px; margin-bottom: 14px; overflow: hidden; background: #fff; }
    .ar-nominee-head {
        display: flex; align-items: center; gap: 14px; padding: 16px 20px; cursor: pointer;
        transition: background .15s ease;
    }
    .ar-nominee-head:hover { background: #fafbfe; }
    .ar-nominee-head[aria-expanded="true"] { background: #f7f8fc; border-bottom: 1px solid #eef2f7; }
    .ar-rank { flex-shrink: 0; width: 34px; height: 34px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 13px; font-weight: 700; color: #98a6ad; background: #eef2f7; }
    .ar-rank.rank-1 { background: #ffbc00; color: #fff; }
    .ar-rank.rank-2 { background: #98a6ad; color: #fff; }
    .ar-rank.rank-3 { background: #fd7e14; color: #fff; }
    .ar-nominee-info { flex: 1 1 auto; min-width: 0; }
    .ar-nominee-name { font-size: 14.5px; font-weight: 700; color: #313a46; }
    .ar-nominee-sub { font-size: 12px; color: #98a6ad; margin-top: 2px; }
    .ar-nominee-sub i { margin-right: 3px; }
    .ar-avg-score { flex-shrink: 0; text-align: center; }
    .ar-avg-score .num { font-size: 20px; font-weight: 700; color: #727cf5; line-height: 1; }
    .ar-avg-score .lbl { font-size: 10px; color: #98a6ad; text-transform: uppercase; letter-spacing: .04em; }
    .ar-chevron { flex-shrink: 0; color: #98a6ad; transition: transform .2s ease; }
    .ar-nominee-head[aria-expanded="true"] .ar-chevron { transform: rotate(180deg); }

    .ar-judge-table { width: 100%; }
    .ar-judge-table th { background: #f7f8fc; font-size: 10.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .03em; color: #98a6ad; padding: 10px 20px; text-align: left; border-bottom: 1px solid #eef2f7; }
    .ar-judge-table td { padding: 12px 20px; border-bottom: 1px solid #f4f5f9; font-size: 13px; vertical-align: top; }
    .ar-judge-table tr:last-child td { border-bottom: none; }
    .ar-judge-name { font-weight: 600; color: #313a46; }
    .ar-judge-email { font-size: 11.5px; color: #98a6ad; }
    .ar-score-badge { display: inline-block; font-size: 12.5px; font-weight: 700; color: #fff; background: #727cf5; padding: 2px 11px; border-radius: 30px; }
    .ar-score-badge.none { background: #eef2f7; color: #98a6ad; }
    .ar-comment { color: #495057; line-height: 1.5; }
    .ar-comment.empty { color: #c3cbd4; font-style: italic; }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card ar-header-card mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <a href="{{route('admin.judges_votes_results.sectors', ['award_program'=>$award_program, 'category_id'=>Vinkla\Hashids\Facades\Hashids::connection('category')->encode($award->sector->category_id)])}}" class="ar-back-link">
                                <i class="mdi mdi-arrow-left"></i> Back to {{ $award->sector->name }}
                            </a>
                            <div class="ar-breadcrumb">{{ $award->sector->category->name ?? '' }} &rsaquo; {{ $award->sector->name }}</div>
                            <h2 class="ar-title">{{ $award->name }}</h2>
                        </div>
                        <div class="col-lg-4">
                            <div class="ar-stats justify-content-lg-end">
                                <div class="ar-stat is-accent">
                                    <div class="val">{{ $totalJudges }}</div>
                                    <div class="lbl">{{ Str::plural('Judge', $totalJudges) }} Voted</div>
                                </div>
                                <div class="ar-stat">
                                    <div class="val">{{ $nominees->count() }}</div>
                                    <div class="lbl">Nominees Scored</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @forelse($nominees as $nominee)
    @php $rank = $loop->iteration; @endphp
    <div class="ar-nominee-card">
        <div class="ar-nominee-head" data-bs-toggle="collapse" data-bs-target="#nominee-{{ $nominee['nominee_id'] }}" aria-expanded="false" aria-controls="nominee-{{ $nominee['nominee_id'] }}">
            <div class="ar-rank {{ $rank <= 3 ? 'rank-'.$rank : '' }}">{{ $rank }}</div>
            <div class="ar-nominee-info">
                <div class="ar-nominee-name">{{ $nominee['nominee_name'] }}</div>
                <div class="ar-nominee-sub">
                    <i class="mdi mdi-account-check-outline"></i>{{ $nominee['scored_count'] }}/{{ $nominee['judge_count'] }} scored
                    &middot;
                    <i class="mdi mdi-comment-text-outline"></i>{{ $nominee['comment_count'] }} {{ Str::plural('comment', $nominee['comment_count']) }}
                </div>
            </div>
            <div class="ar-avg-score">
                <div class="num">{{ $nominee['avg_score'] ?? '—' }}</div>
                <div class="lbl">avg / 10</div>
            </div>
            <i class="mdi mdi-chevron-down ar-chevron" style="font-size:20px;"></i>
        </div>
        <div class="collapse" id="nominee-{{ $nominee['nominee_id'] }}">
            <div class="table-responsive">
                <table class="ar-judge-table">
                    <thead>
                        <tr>
                            <th>Judge</th>
                            <th>Score</th>
                            <th>Comment</th>
                            <th>Submitted</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nominee['rows'] as $row)
                        <tr>
                            <td>
                                <div class="ar-judge-name">{{ $row['judge_name'] }}</div>
                                @if($row['judge_email'])<div class="ar-judge-email">{{ $row['judge_email'] }}</div>@endif
                            </td>
                            <td>
                                @if($row['score'] !== null)
                                <span class="ar-score-badge">{{ $row['score'] }}</span>
                                @else
                                <span class="ar-score-badge none">—</span>
                                @endif
                            </td>
                            <td>
                                <div class="ar-comment @if(!$row['comment']) empty @endif">{{ $row['comment'] ?: 'No comment' }}</div>
                            </td>
                            <td class="text-muted">{{ $row['submitted_at']?->format('d M Y, h:i A') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @empty
    <div class="card">
        <div class="card-body text-center text-muted py-5">
            <i class="mdi mdi-clipboard-text-search-outline" style="font-size:40px; display:block; margin-bottom:10px; opacity:.5;"></i>
            No judges have scored nominees in this award yet.
        </div>
    </div>
    @endforelse
</div>
@endsection
