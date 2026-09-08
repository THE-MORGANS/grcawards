@extends('layouts.admin.master')

@section('title', 'Judges Votes Results')

@section('style')
<style>
    .sa-header-card {
        border: none;
        border-radius: 14px;
        background: linear-gradient(135deg, #313a46 0%, #3a4453 100%);
        color: #fff;
        overflow: hidden;
        position: relative;
    }
    .sa-header-card::after {
        content: '';
        position: absolute;
        top: -60px;
        right: -60px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: rgba(114, 124, 245, .18);
    }
    .sa-back-link {
        font-size: 12.5px;
        color: rgba(255,255,255,.65);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 12px;
        transition: color .15s ease;
    }
    .sa-back-link:hover { color: #fff; }
    .sa-category-name { font-size: 24px; font-weight: 700; margin-bottom: 8px; position: relative; z-index: 2; }
    .sa-category-desc { color: rgba(255,255,255,.65); font-size: 13.5px; max-width: 640px; margin-bottom: 0; position: relative; z-index: 2; }
    .sa-stats { display: flex; gap: 10px; flex-wrap: wrap; position: relative; z-index: 2; }
    .sa-stat { background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.12); border-radius: 10px; padding: 12px 18px; min-width: 110px; text-align: center; }
    .sa-stat .val { font-size: 22px; font-weight: 700; line-height: 1; color: #fff; }
    .sa-stat .lbl { font-size: 10.5px; letter-spacing: .05em; text-transform: uppercase; color: rgba(255,255,255,.55); margin-top: 4px; }
    .sa-stat.is-votes .val { color: #0acf97; }

    .sa-sector-tabs { border: none; gap: 8px; flex-wrap: wrap; }
    .sa-sector-tabs .nav-link { border-radius: 30px !important; padding: 9px 18px; font-size: 13px; font-weight: 600; color: #6c757d; background: #f1f3fa; border: 1px solid transparent; display: flex; align-items: center; gap: 8px; transition: all .15s ease; }
    .sa-sector-tabs .nav-link .badge { background: rgba(108,117,125,.15); color: #6c757d; font-weight: 700; }
    .sa-sector-tabs .nav-link.active { background: #727cf5; color: #fff; }
    .sa-sector-tabs .nav-link.active .badge { background: rgba(255,255,255,.22); color: #fff; }
    .sa-sector-tabs .nav-link:not(.active):hover { background: #e9ebf7; color: #313a46; }

    .award-card { height: 100%; width: 100%; display: flex; flex-direction: column; border: 1px solid #eef2f7; border-radius: 12px; padding: 20px; background: #fff; }
    .award-card-header { display: flex; justify-content: space-between; align-items: flex-start; gap: 10px; margin-bottom: 12px; }
    .award-card-title { font-size: 15.5px; font-weight: 700; color: #313a46; margin: 0; line-height: 1.35; }
    .award-card-votes { white-space: nowrap; flex-shrink: 0; }
    .award-card-actions { margin-bottom: 14px; }
    .award-card-actions .btn { border-radius: 30px; font-size: 12px; }

    .nominee-list { display: flex; flex-direction: column; gap: 8px; }
    .nominee-row { display: flex; align-items: center; gap: 10px; padding: 8px 10px; border-radius: 8px; background: #fafbfe; }
    .nominee-row.rank-1 { background: rgba(255,188,0,.08); }
    .nominee-row.rank-2 { background: rgba(152,166,173,.10); }
    .nominee-row.rank-3 { background: rgba(253,126,20,.08); }
    .nominee-rank { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 11px; font-weight: 700; color: #98a6ad; background: #eef2f7; }
    .nominee-row.rank-1 .nominee-rank { background: #ffbc00; color: #fff; }
    .nominee-row.rank-2 .nominee-rank { background: #98a6ad; color: #fff; }
    .nominee-row.rank-3 .nominee-rank { background: #fd7e14; color: #fff; }
    .nominee-info { flex: 1 1 auto; min-width: 0; }
    .nominee-name { font-size: 13px; font-weight: 600; color: #313a46; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .nominee-sub { font-size: 11px; color: #98a6ad; }
    .nominee-score { flex-shrink: 0; font-size: 13px; font-weight: 700; color: #313a46; min-width: 66px; text-align: right; }
    .nominee-score small { font-weight: 500; color: #98a6ad; font-size: 10.5px; display: block; }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="page-title">
                    <div style="width: 55px;float: left;height: 55px;background: turquoise;margin-right: 15px;"></div>
                    <h4 style="display: block;">Judges Votes Results</h4>
                    <h4 style="display: block;" class="text-muted fw-normal mt-0 mb-0">Award Year {{$currentYear?->year}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card sa-header-card mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <a href="{{route('admin.judges_votes_results', ['award_program'=>$award_program])}}" class="sa-back-link">
                                <i class="mdi mdi-arrow-left"></i> Back to Categories
                            </a>
                            <h2 class="sa-category-name">{{$category->name}}</h2>
                            <p class="sa-category-desc">{{$category->description}}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="sa-stats justify-content-lg-end">
                                <div class="sa-stat is-votes">
                                    <div class="val">{{$categoryJudgeTotal}}</div>
                                    <div class="lbl">Judges Voted</div>
                                </div>
                                <div class="sa-stat">
                                    <div class="val">{{$sectors->count()}}</div>
                                    <div class="lbl">Sectors</div>
                                </div>
                                <div class="sa-stat">
                                    <div class="val">{{$sectors->flatMap->awards->count()}}</div>
                                    <div class="lbl">Awards</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav sa-sector-tabs mb-4">
                        @foreach($sectors as $sector)
                        <li class="nav-item">
                            <a href="#sector{{$sector->hashid}}" data-bs-toggle="tab" aria-expanded="{{$loop->iteration==1?'true':'false'}}" class="nav-link {{$loop->iteration==1?'active':''}}">
                                {{$sector->name}} <span class="badge">{{$sectorJudgeTotals[$sector->id] ?? 0}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        @foreach($sectors as $sector)
                        <div class="tab-pane show {{$loop->iteration==1 ?'active' : ''}}" id="sector{{$sector->hashid}}">
                            <div class="row">
                                @foreach($sector->awards as $award)
                                @php
                                    $awardNominees = $nomineesByAward[$award->id] ?? [];
                                @endphp
                                <div class="col-lg-6 mb-4 d-flex">
                                    <div class="award-card">
                                        <div class="award-card-header">
                                            <h5 class="award-card-title">{{$award->name}}</h5>
                                            <span class="badge badge-outline-primary award-card-votes" style="padding:4px 8px; font-size:12px;">{{$judgeCounts[$award->id] ?? 0}} {{ Str::plural('judge', $judgeCounts[$award->id] ?? 0) }}</span>
                                        </div>

                                        <div class="award-card-actions">
                                            <a href="{{route('admin.judges_votes_results.award', ['award_program'=>$award_program, 'award_id'=>$award->hashid])}}" class="btn btn-sm btn-outline-primary">
                                                <i class="mdi mdi-format-list-checks me-1"></i> Full Judge Breakdown
                                            </a>
                                        </div>

                                        <div class="nominee-list">
                                            @forelse($awardNominees as $nominee)
                                            @php $rank = $loop->iteration; @endphp
                                            <div class="nominee-row {{ $rank <= 3 ? 'rank-'.$rank : '' }}">
                                                <div class="nominee-rank">{{ $rank }}</div>
                                                <div class="nominee-info">
                                                    <div class="nominee-name" title="{{$nominee['nominee_name']}}">{{$nominee['nominee_name']}}</div>
                                                    <div class="nominee-sub">{{ $nominee['judge_count'] }} {{ Str::plural('score', $nominee['judge_count']) }} recorded</div>
                                                </div>
                                                <div class="nominee-score">
                                                    {{ $nominee['avg_score'] ?? '—' }}
                                                    <small>avg / 10</small>
                                                </div>
                                            </div>
                                            @empty
                                            <p class="text-muted mb-0" style="font-size:13px;">No judge scores recorded for this award yet.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
