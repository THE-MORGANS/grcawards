@extends('layouts.admin.master')

@section('title', 'Top Nominees')

@section('style')
<link href="{{asset('assets/css/nominees_redesign.css')}}" rel="stylesheet" type="text/css" />
<style>
    .cat-card { margin-bottom: 1.5rem; }
    .cat-card .card-header { background: #f7f8fc; border-bottom: 1px solid #eef2f7; padding: 14px 20px; }
    .cat-card .card-header h5 { margin: 0; font-size: 15px; font-weight: 700; color: #313a46; }
    .rank-badge {
        display: inline-flex; align-items: center; justify-content: center;
        width: 26px; height: 26px; border-radius: 50%;
        background: #f1f3fa; color: #6c757d; font-weight: 700; font-size: 12px;
    }
    .rank-badge.top3 { background: rgba(114,124,245,.12); color: #727cf5; }
    .tie-badge {
        background: rgba(255,188,0,.1); color: #b58a00; border: 1px solid rgba(255,188,0,.25);
        padding: 2px 8px; border-radius: 30px; font-size: 10.5px; font-weight: 700;
        text-transform: uppercase; letter-spacing: .03em; margin-left: 8px;
    }
    .sector-heading {
        display: flex; align-items: center; gap: 10px;
        margin: 28px 0 14px;
    }
    .sector-heading:first-of-type { margin-top: 0; }
    .sector-heading h4 {
        margin: 0; font-size: 19px; font-weight: 800; color: #727cf5;
        text-transform: uppercase; letter-spacing: .03em;
    }
    .sector-heading .sector-count {
        background: #eef2f7; color: #6c757d; padding: 2px 10px;
        border-radius: 30px; font-size: 11px; font-weight: 700;
    }
    .sector-heading::after {
        content: ''; flex: 1; height: 1px; background: #eef2f7;
    }
    /* This page has no "action" column, so the last header shouldn't get
       the shared nominees-table treatment reserved for a voting-input column. */
    .nominees-table thead th:last-child {
        background: #f7f8fc !important;
        color: #98a6ad !important;
        text-align: left !important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card nom-hero mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="nom-title">Top Nominees <span style="color:#c9cff6">by Category</span></h2>
                            <p class="nom-subtitle">Top 5 nominees by public votes in each award category &middot; ties at 5th place are included</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-lg-end">
                                <div class="nom-stat">
                                    <div class="val">{{ count($sectors) }}</div>
                                    <div class="lbl">Sectors</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @forelse ($sectors as $sectorName => $categories)
    <div class="sector-heading">
        <h4>{{ $sectorName }}</h4>
        <span class="sector-count">{{ count($categories) }} {{ Str::plural('award', count($categories)) }}</span>
    </div>

    @foreach ($categories as $category)
    <div class="row">
        <div class="col-12">
            <div class="card cat-card">
                <div class="card-header">
                    <h5>{{ $category['award']->name ?? 'Untitled Award' }}</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="nominees-table mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 8%">Rank</th>
                                    <th>Nominee Name</th>
                                    <th style="width: 15%">Public Votes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $rank = 0; @endphp
                                @foreach ($category['nominees'] as $nominee)
                                @php $rank++; @endphp
                                <tr>
                                    <td>
                                        <span class="rank-badge @if($rank <= 3) top3 @endif">{{ $rank }}</span>
                                    </td>
                                    <td class="nominee-name-cell">
                                        {{ $nominee->nominee?->name }}
                                        @if ($rank > 5)
                                        <span class="tie-badge">Tied for 5th</span>
                                        @endif
                                    </td>
                                    <td><span class="votes-badge">{{ $nominee->voteCount }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @empty
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center text-muted py-5">
                    No votes have been recorded for any award category yet.
                </div>
            </div>
        </div>
    </div>
    @endforelse
</div>
@endsection
