@extends('layouts.admin.master')

@section('title', 'Award Winners')

@section('style')
@include('contents.admin.award_winners.partials._podium_style')
<style>
    .sa-header-card {
        border: none;
        border-radius: 14px;
        background: linear-gradient(135deg, #0f1c3f 0%, #1c2f5c 100%);
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
        background: rgba(201, 162, 39, .18);
    }
    .sa-back-link { font-size: 12.5px; color: rgba(255,255,255,.65); text-decoration: none; display: inline-flex; align-items: center; gap: 4px; margin-bottom: 12px; transition: color .15s ease; }
    .sa-back-link:hover { color: #fff; }
    .sa-category-name { font-size: 24px; font-weight: 700; margin-bottom: 8px; position: relative; z-index: 2; }
    .sa-category-desc { color: rgba(255,255,255,.65); font-size: 13.5px; max-width: 640px; margin-bottom: 0; position: relative; z-index: 2; }
    .sa-stats { display: flex; gap: 10px; flex-wrap: wrap; position: relative; z-index: 2; }
    .sa-stat { background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.12); border-radius: 10px; padding: 12px 18px; min-width: 110px; text-align: center; }
    .sa-stat .val { font-size: 22px; font-weight: 700; line-height: 1; color: #fff; }
    .sa-stat .lbl { font-size: 10.5px; letter-spacing: .05em; text-transform: uppercase; color: rgba(255,255,255,.55); margin-top: 4px; }
    .sa-stat.is-accent .val { color: #e0bb3e; }

    .sa-sector-tabs { border: none; gap: 8px; flex-wrap: wrap; }
    .sa-sector-tabs .nav-link { border-radius: 30px !important; padding: 9px 18px; font-size: 13px; font-weight: 600; color: #6c757d; background: #f1f3fa; border: 1px solid transparent; display: flex; align-items: center; gap: 8px; transition: all .15s ease; }
    .sa-sector-tabs .nav-link .badge { background: rgba(108,117,125,.15); color: #6c757d; font-weight: 700; }
    .sa-sector-tabs .nav-link.active { background: #c9a227; color: #fff; }
    .sa-sector-tabs .nav-link.active .badge { background: rgba(255,255,255,.25); color: #fff; }
    .sa-sector-tabs .nav-link:not(.active):hover { background: #f1e6c8; color: #313a46; }

    .award-card { height: 100%; width: 100%; display: flex; flex-direction: column; border: 1px solid #eef2f7; border-radius: 12px; padding: 20px; background: #fff; }
    .award-card-header { text-align: center; margin: 4px 0 18px; }
    .award-card-title { font-size: 15.5px; font-weight: 700; color: #313a46; margin: 0; line-height: 1.35; }
    .award-card-actions { margin-bottom: 14px; }
    .award-card-actions .btn { border-radius: 30px; font-size: 12px; }
    .award-card-actions .btn-gold { background: #c9a227; border-color: #c9a227; color: #fff; }
    .award-card-actions .btn-gold:hover { background: #a4790f; border-color: #a4790f; color: #fff; }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="page-title">
                    <div style="width: 55px;float: left;height: 55px;background: #c9a227;margin-right: 15px;"></div>
                    <h4 style="display: block;">Award Winners</h4>
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
                            <a href="{{route('admin.winners', ['award_program'=>$award_program])}}" class="sa-back-link">
                                <i class="mdi mdi-arrow-left"></i> Back to Categories
                            </a>
                            <h2 class="sa-category-name">{{$category->name}}</h2>
                            <p class="sa-category-desc">{{$category->description}}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="sa-stats justify-content-lg-end">
                                <div class="sa-stat is-accent">
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
                                {{$sector->name}} <span class="badge">{{$sector->awards->count()}}</span>
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
                                    $awardData = $awardResults[$award->id] ?? ['winners' => collect(), 'total_public_votes' => 0, 'total_judges' => 0];
                                @endphp
                                <div class="col-lg-12 mb-4">
                                    <div class="award-card">
                                        <div class="wn-capture" id="wn-capture-{{ $award->id }}">
                                            <div class="award-card-header">
                                                <h5 class="award-card-title">{{$award->name}}</h5>
                                            </div>

                                            @include('contents.admin.award_winners.partials._podium', [
                                                'award' => $award,
                                                'winners' => $awardData['winners'],
                                                'totalPublicVotes' => $awardData['total_public_votes'],
                                                'totalJudges' => $awardData['total_judges'],
                                                'compact' => true,
                                            ])
                                        </div>

                                        @if($awardData['winners']->isNotEmpty())
                                        <button type="button" class="wn-mini-export" onclick="exportWinnersPodium('wn-capture-{{ $award->id }}', 'winners-{{ \Illuminate\Support\Str::slug($award->name) }}.pdf', this)">
                                            <i class="mdi mdi-file-download-outline"></i> Export this award
                                        </button>
                                        @endif
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

@section('scripts')
@include('contents.admin.award_winners.partials._podium_scripts')
@endsection
