@extends('layouts.admin.master')

@section('title', 'Award Winners')

@section('style')
@include('contents.admin.award_winners.partials._podium_style')
<style>
    .wn-header-card {
        border: none;
        border-radius: 14px;
        background: linear-gradient(135deg, #0b1730 0%, #14264d 55%, #1c2f5c 100%);
        color: #fff;
        overflow: hidden;
        position: relative;
        padding: 34px 30px;
    }
    .wn-header-card::before {
        content: '';
        position: absolute;
        top: -80px;
        left: -80px;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(201, 162, 39, .14);
    }
    .wn-header-card::after {
        content: '';
        position: absolute;
        bottom: -100px;
        right: -60px;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(201, 162, 39, .10);
    }
    .wn-back-link { position: relative; z-index: 2; font-size: 12.5px; color: rgba(255,255,255,.6); text-decoration: none; display: inline-flex; align-items: center; gap: 4px; margin-bottom: 14px; }
    .wn-back-link:hover { color: #fff; }
    .wn-breadcrumb { position: relative; z-index: 2; font-size: 11px; letter-spacing: .08em; text-transform: uppercase; color: #d9b64d; margin-bottom: 8px; }
    .wn-eyebrow { position: relative; z-index: 2; font-size: 11px; letter-spacing: .18em; text-transform: uppercase; color: rgba(255,255,255,.45); margin-bottom: 6px; }
    .wn-title { position: relative; z-index: 2; font-size: 26px; font-weight: 700; margin-bottom: 4px; text-wrap: balance; }
    .wn-sub { position: relative; z-index: 2; font-size: 12.5px; color: rgba(255,255,255,.55); }
    .wn-export-row { position: relative; z-index: 2; display: flex; gap: 8px; flex-wrap: wrap; justify-content: flex-end; }
    .wn-btn { border-radius: 30px; font-size: 12.5px; font-weight: 600; padding: 8px 18px; border: 1px solid rgba(255,255,255,.2); background: rgba(255,255,255,.08); color: #fff; transition: background .15s ease; }
    .wn-btn:hover { background: rgba(255,255,255,.16); color: #fff; }
    .wn-btn.wn-btn-gold { background: linear-gradient(135deg, #e0bb3e, #b6871a); border-color: transparent; color: #1a1200; }
    .wn-btn.wn-btn-gold:hover { filter: brightness(1.08); color: #1a1200; }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="wn-capture" id="wn-capture">
                <div class="card wn-header-card mb-0">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <a href="{{route('admin.winners.sectors', ['award_program'=>$award_program, 'category_id'=>Vinkla\Hashids\Facades\Hashids::connection('category')->encode($award->sector->category_id)])}}" class="wn-back-link">
                                <i class="mdi mdi-arrow-left"></i> Back to {{ $award->sector->name }}
                            </a>
                            <div class="wn-breadcrumb"><i class="mdi mdi-trophy-award me-1"></i>{{ $award->sector->category->name ?? '' }} &rsaquo; {{ $award->sector->name }}</div>
                            <div class="wn-eyebrow">Winners Ceremony &middot; Award Year {{ $currentYear?->year }}</div>
                            <h2 class="wn-title">{{ $award->name }}</h2>
                            <div class="wn-sub">{{ $totalJudges }} {{ Str::plural('judge', $totalJudges) }} scored &middot; {{ $totalPublicVotes }} public {{ Str::plural('vote', $totalPublicVotes) }} cast &middot; Overall = (Judges&nbsp;&times;&nbsp;75%) + (Public&nbsp;&times;&nbsp;25%)</div>
                        </div>
                        <div class="col-lg-4">
                            <div class="wn-export-row">
                                <button type="button" class="wn-btn wn-btn-gold" onclick="exportWinnersPodium('wn-capture', 'winners-{{ \Illuminate\Support\Str::slug($award->name) }}.pdf', this)">
                                    <i class="mdi mdi-file-download-outline me-1"></i> Export PDF
                                </button>
                                <button type="button" class="wn-btn" onclick="window.print()">
                                    <i class="mdi mdi-printer-outline me-1"></i> Print
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                @include('contents.admin.award_winners.partials._podium', ['award' => $award, 'winners' => $winners, 'totalPublicVotes' => $totalPublicVotes, 'totalJudges' => $totalJudges, 'compact' => false])
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('contents.admin.award_winners.partials._podium_scripts')
@endsection
