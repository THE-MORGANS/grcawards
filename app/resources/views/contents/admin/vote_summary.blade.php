@extends('layouts.admin.master')

@section('title', 'Vote Summary Report')

@section('style')
<link href="{{asset('assets/css/dashboard_redesign.css')}}" rel="stylesheet" type="text/css" />
<style>
    .vs-wrapper { padding: 0 0 2rem; animation: fadeIn .5s ease-out; }

    .vs-hero {
        background: linear-gradient(135deg, #1e2a5e 0%, #4b3f8f 50%, #764ba2 100%);
        border-radius: 20px;
        padding: 2.25rem 2.5rem;
        margin-bottom: 1.75rem;
        color: #fff;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(75, 63, 143, .25);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.5rem;
        flex-wrap: wrap;
    }
    .vs-hero::before {
        content: ""; position: absolute; top: -60%; right: -8%; width: 320px; height: 320px;
        background: rgba(255,255,255,.08); border-radius: 50%;
    }
    .vs-hero::after {
        content: ""; position: absolute; bottom: -70%; left: 10%; width: 260px; height: 260px;
        background: rgba(255,255,255,.05); border-radius: 50%;
    }
    .vs-hero-content { position: relative; z-index: 1; }
    .vs-hero-title { font-size: 1.9rem; font-weight: 800; letter-spacing: -.5px; margin-bottom: .35rem; }
    .vs-hero-sub { opacity: .88; font-size: .95rem; margin: 0; }
    .vs-hero-chips { display: flex; gap: .5rem; margin-top: .9rem; flex-wrap: wrap; position: relative; z-index: 1; }
    .vs-chip {
        background: rgba(255,255,255,.14); border: 1px solid rgba(255,255,255,.2);
        padding: .35rem .85rem; border-radius: 30px; font-size: .78rem; font-weight: 600;
        backdrop-filter: blur(4px);
    }
    .vs-export-group { position: relative; z-index: 1; display: flex; gap: .6rem; flex-wrap: wrap; }
    .vs-export-btn {
        background: #fff; color: #4b3f8f; font-weight: 700; font-size: .85rem;
        padding: .7rem 1.4rem; border-radius: 12px; border: none;
        display: inline-flex; align-items: center; gap: .5rem; text-decoration: none;
        box-shadow: 0 6px 16px rgba(0,0,0,.15); transition: transform .2s, box-shadow .2s;
        white-space: nowrap;
    }
    .vs-export-btn:hover { transform: translateY(-2px); color: #4b3f8f; box-shadow: 0 8px 20px rgba(0,0,0,.2); }
    .vs-export-btn-pdf { background: #ea4c7a; color: #fff; }
    .vs-export-btn-pdf:hover { color: #fff; }

    .vs-kpi-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); gap: 1.1rem; margin-bottom: 1.75rem; }
    .vs-kpi {
        background: #fff; border: 1px solid #eef0f7; border-radius: 16px; padding: 1.4rem 1.5rem;
        box-shadow: 0 1px 3px rgba(20,20,50,.05); transition: transform .2s, box-shadow .2s;
        display: flex; align-items: center; gap: 1rem;
    }
    .vs-kpi:hover { transform: translateY(-4px); box-shadow: 0 10px 24px rgba(20,20,50,.08); }
    .vs-kpi-icon {
        width: 50px; height: 50px; min-width: 50px; border-radius: 14px; display: flex; align-items: center;
        justify-content: center; font-size: 1.35rem; color: #fff;
    }
    .vs-kpi-nominees { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
    .vs-kpi-voters { background: linear-gradient(135deg, #00c6fb 0%, #005bea 100%); }
    .vs-kpi-public { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
    .vs-kpi-judges { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
    .vs-kpi-jvotes { background: linear-gradient(135deg, #f6d365 0%, #fda085 100%); }
    .vs-kpi-label { color: #8891a5; font-size: .76rem; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; margin-bottom: .2rem; }
    .vs-kpi-value { color: #202a44; font-size: 1.65rem; font-weight: 800; line-height: 1; }
    .vs-kpi-sub { color: #a3abbd; font-size: .72rem; font-weight: 600; margin-top: .3rem; }

    .vs-card {
        background: #fff; border: 1px solid #eef0f7; border-radius: 18px; padding: 1.6rem 1.75rem;
        box-shadow: 0 1px 3px rgba(20,20,50,.05); height: 100%;
    }
    .vs-card-title { font-size: 1.05rem; font-weight: 700; color: #202a44; margin-bottom: .2rem; }
    .vs-card-desc { font-size: .8rem; color: #8891a5; margin-bottom: 1.1rem; }

    .vs-row { display: grid; gap: 1.5rem; margin-bottom: 1.5rem; }
    .vs-row-trend { grid-template-columns: 1.65fr 1fr; }
    .vs-row-formula { grid-template-columns: 1fr 1fr; }
    @media (max-width: 992px) { .vs-row-trend, .vs-row-formula { grid-template-columns: 1fr; } }

    .vs-gauge-pair { display: flex; flex-direction: column; gap: 1.25rem; height: 100%; justify-content: center; }
    .vs-gauge-item { display: flex; align-items: center; gap: 1rem; }
    .vs-gauge-chart { width: 110px; min-width: 110px; }
    .vs-gauge-info .vs-gauge-num { font-size: 1.4rem; font-weight: 800; color: #202a44; }
    .vs-gauge-info .vs-gauge-lbl { font-size: .78rem; color: #8891a5; font-weight: 600; }
    .vs-gauge-info .vs-gauge-frac { font-size: .72rem; color: #b6bccb; margin-top: 2px; }

    /* Calculation explainer */
    .vs-formula-visual { display: flex; align-items: center; height: 34px; border-radius: 10px; overflow: hidden; margin-bottom: 1.1rem; }
    .vs-formula-seg { display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: .78rem; height: 100%; }
    .vs-formula-judges { background: linear-gradient(135deg, #43e97b 0%, #2fb768 100%); width: 75%; }
    .vs-formula-public { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); width: 25%; }
    .vs-formula-steps { list-style: none; margin: 0; padding: 0; }
    .vs-formula-steps li { display: flex; gap: .75rem; padding: .6rem 0; border-bottom: 1px dashed #eef0f7; font-size: .84rem; color: #4a5268; }
    .vs-formula-steps li:last-child { border-bottom: none; }
    .vs-formula-steps b { color: #202a44; }
    .vs-formula-dot { width: 10px; height: 10px; border-radius: 50%; margin-top: 5px; flex-shrink: 0; }
    .vs-formula-note {
        margin-top: 1rem; background: #f7f8fc; border-radius: 10px; padding: .8rem 1rem;
        font-size: .78rem; color: #6c7488; display: flex; gap: .6rem; align-items: flex-start;
    }
    .vs-formula-note i { color: #727cf5; font-size: 1rem; }

    /* Category table */
    .vs-table-wrap { background: #fff; border: 1px solid #eef0f7; border-radius: 18px; padding: 1.6rem 1.75rem; box-shadow: 0 1px 3px rgba(20,20,50,.05); }
    .vs-cat-table { width: 100%; border-collapse: collapse; }
    .vs-cat-table thead th {
        text-align: left; font-size: .72rem; font-weight: 700; text-transform: uppercase; letter-spacing: .05em;
        color: #8891a5; padding: .8rem 1rem; border-bottom: 2px solid #f3f4f8;
    }
    .vs-cat-table tbody td { padding: 1rem; border-bottom: 1px solid #f3f4f8; font-size: .86rem; color: #333c53; vertical-align: middle; }
    .vs-cat-table tbody tr:last-child td { border-bottom: none; }
    .vs-cat-table tbody tr:hover td { background: #fbfbfe; }
    .vs-cat-name { font-weight: 700; color: #202a44; }
    .vs-share-bar-track { background: #f0f1f7; border-radius: 30px; height: 7px; width: 100%; min-width: 90px; overflow: hidden; }
    .vs-share-bar-fill { height: 100%; border-radius: 30px; background: linear-gradient(90deg, #727cf5, #6a3ce8); }
    .vs-empty { text-align: center; padding: 3rem 1rem; color: #a3abbd; }
    .vs-empty i { font-size: 2.2rem; display: block; margin-bottom: .6rem; opacity: .5; }
</style>
@endsection

@section('content')
@php
    $judgingCoverage = $awardsCount > 0 ? round(($awardsJudged / $awardsCount) * 100, 1) : 0;
    $voterTurnout = $votersCount > 0 ? round(($votersWhoVoted / $votersCount) * 100, 1) : 0;
    $maxCatVotes = $categoryBreakdown->max('public_votes') ?: 1;
@endphp

<div class="vs-wrapper">

    <div class="vs-hero">
        <div class="vs-hero-content">
            <div class="vs-hero-title">Vote Summary Report</div>
            <p class="vs-hero-sub">{{ $awardProgram->name ?? 'Award Program' }} &middot; {{ $awardProgram->year ?? '' }}</p>
            <div class="vs-hero-chips">
                <span class="vs-chip"><i class="mdi mdi-shape-outline"></i> {{ $categoriesCount }} Categories</span>
                <span class="vs-chip"><i class="mdi mdi-layers-outline"></i> {{ $sectorsCount }} Sectors</span>
                <span class="vs-chip"><i class="mdi mdi-trophy-outline"></i> {{ $awardsCount }} Awards</span>
                <span class="vs-chip"><i class="mdi mdi-clock-outline"></i> Generated {{ now()->format('d M Y, h:i A') }}</span>
            </div>
        </div>
        <div class="vs-export-group">
            <a href="{{ route('admin.vote_summary.pdf', $award_program) }}" class="vs-export-btn vs-export-btn-pdf">
                <i class="mdi mdi-file-pdf-box"></i> Export PDF
            </a>
            <a href="{{ route('admin.vote_summary.export', $award_program) }}" class="vs-export-btn">
                <i class="mdi mdi-file-excel-outline"></i> Export Excel
            </a>
        </div>
    </div>

    <!-- KPI Grid -->
    <div class="vs-kpi-grid">
        <div class="vs-kpi">
            <div class="vs-kpi-icon vs-kpi-nominees"><i class="mdi mdi-account-star-outline"></i></div>
            <div>
                <div class="vs-kpi-label">Nominees</div>
                <div class="vs-kpi-value">{{ number_format($nomineesCount) }}</div>
            </div>
        </div>
        <div class="vs-kpi">
            <div class="vs-kpi-icon vs-kpi-voters"><i class="mdi mdi-account-group-outline"></i></div>
            <div>
                <div class="vs-kpi-label">Voters</div>
                <div class="vs-kpi-value">{{ number_format($votersCount) }}</div>
                <div class="vs-kpi-sub">{{ number_format($activeVotersCount) }} active</div>
            </div>
        </div>
        <div class="vs-kpi">
            <div class="vs-kpi-icon vs-kpi-public"><i class="mdi mdi-thumb-up-outline"></i></div>
            <div>
                <div class="vs-kpi-label">Public Votes</div>
                <div class="vs-kpi-value">{{ number_format($publicVotesCount) }}</div>
                <div class="vs-kpi-sub">{{ number_format($votersWhoVoted) }} distinct voters</div>
            </div>
        </div>
        <div class="vs-kpi">
            <div class="vs-kpi-icon vs-kpi-judges"><i class="mdi mdi-gavel"></i></div>
            <div>
                <div class="vs-kpi-label">Judges</div>
                <div class="vs-kpi-value">{{ number_format($judgesCount) }}</div>
                <div class="vs-kpi-sub">of {{ number_format($totalJudgeAccounts) }} judge accounts system-wide</div>
            </div>
        </div>
        <div class="vs-kpi">
            <div class="vs-kpi-icon vs-kpi-jvotes"><i class="mdi mdi-clipboard-check-outline"></i></div>
            <div>
                <div class="vs-kpi-label">Judges' Votes</div>
                <div class="vs-kpi-value">{{ number_format($judgesVotesCount) }}</div>
                <div class="vs-kpi-sub">score entries submitted</div>
            </div>
        </div>
    </div>

    <!-- Trend + Turnout -->
    <div class="vs-row vs-row-trend">
        <div class="vs-card">
            <div class="vs-card-title">Public Voting Activity</div>
            <div class="vs-card-desc">Votes cast per day over the last 14 days</div>
            <div id="vs-trend-chart"></div>
        </div>
        <div class="vs-card">
            <div class="vs-card-title">Participation</div>
            <div class="vs-card-desc">Completion rate across judges and voters</div>
            <div class="vs-gauge-pair">
                <div class="vs-gauge-item">
                    <div id="vs-judges-gauge" class="vs-gauge-chart"></div>
                    <div class="vs-gauge-info">
                        <div class="vs-gauge-num">{{ $judgingCoverage }}%</div>
                        <div class="vs-gauge-lbl">Judging coverage</div>
                        <div class="vs-gauge-frac">{{ $awardsJudged }} of {{ $awardsCount }} awards scored</div>
                    </div>
                </div>
                <div class="vs-gauge-item">
                    <div id="vs-voters-gauge" class="vs-gauge-chart"></div>
                    <div class="vs-gauge-info">
                        <div class="vs-gauge-num">{{ $voterTurnout }}%</div>
                        <div class="vs-gauge-lbl">Voter turnout</div>
                        <div class="vs-gauge-frac">{{ $votersWhoVoted }} of {{ $votersCount }} voters</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Category chart + Calculation explainer -->
    <div class="vs-row vs-row-formula">
        <div class="vs-card">
            <div class="vs-card-title">Public Votes by Category</div>
            <div class="vs-card-desc">Where voter engagement is concentrated</div>
            <div id="vs-category-chart"></div>
        </div>

        <div class="vs-card">
            <div class="vs-card-title">How Votes Are Calculated</div>
            <div class="vs-card-desc">Every nominee's final ranking blends two independent inputs</div>

            <div class="vs-formula-visual">
                <div class="vs-formula-seg vs-formula-judges">Judges 75%</div>
                <div class="vs-formula-seg vs-formula-public">Public 25%</div>
            </div>

            <ul class="vs-formula-steps">
                <li>
                    <span class="vs-formula-dot" style="background:#2fb768"></span>
                    <span><b>Judges' score (75%)</b> &mdash; each judge rates a nominee 1&ndash;10. The scores are averaged, then converted to a percentage of the maximum (avg &divide; 10 &times; 100).</span>
                </li>
                <li>
                    <span class="vs-formula-dot" style="background:#f5576c"></span>
                    <span><b>Public vote share (25%)</b> &mdash; a nominee's share of all public votes cast within their award (their votes &divide; total votes in that award &times; 100).</span>
                </li>
                <li>
                    <span class="vs-formula-dot" style="background:#727cf5"></span>
                    <span><b>Overall score</b> = (Judges % &times; 0.75) + (Public % &times; 0.25). Nominees are ranked highest to lowest within each award.</span>
                </li>
            </ul>

            <div class="vs-formula-note">
                <i class="mdi mdi-information-outline"></i>
                <span>A nominee with no judge scores or no public votes simply scores 0% on that side — they are never excluded from ranking.</span>
            </div>
        </div>
    </div>

    <!-- Category breakdown table -->
    <div class="vs-table-wrap">
        <div class="vs-card-title mb-1">Category Breakdown</div>
        <div class="vs-card-desc">Sectors, awards and voting volume per category</div>

        @if($categoryBreakdown->isEmpty())
        <div class="vs-empty">
            <i class="mdi mdi-database-search-outline"></i>
            No categories found for this award program yet.
        </div>
        @else
        <div class="table-responsive">
            <table class="vs-cat-table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Sectors</th>
                        <th>Awards</th>
                        <th>Public Votes</th>
                        <th>Judges' Votes</th>
                        <th>Vote Share</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoryBreakdown as $row)
                    <tr>
                        <td class="vs-cat-name">{{ $row['name'] }}</td>
                        <td>{{ $row['sectors'] }}</td>
                        <td>{{ $row['awards'] }}</td>
                        <td>{{ number_format($row['public_votes']) }}</td>
                        <td>{{ number_format($row['judges_votes']) }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="vs-share-bar-track">
                                    <div class="vs-share-bar-fill" style="width: {{ round(($row['public_votes'] / $maxCatVotes) * 100) }}%"></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>

</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
<script>
    (function () {
        var trendLabels = @json(collect($votesTrend)->pluck('label'));
        var trendData = @json(collect($votesTrend)->pluck('count'));
        var catLabels = @json($categoryBreakdown->pluck('name'));
        var catData = @json($categoryBreakdown->pluck('public_votes'));

        // Voting activity trend
        new ApexCharts(document.querySelector('#vs-trend-chart'), {
            chart: { type: 'area', height: 260, toolbar: { show: false }, fontFamily: 'inherit' },
            series: [{ name: 'Votes', data: trendData }],
            xaxis: { categories: trendLabels, labels: { style: { fontSize: '11px' } } },
            yaxis: { labels: { formatter: function (v) { return Math.round(v); } } },
            dataLabels: { enabled: false },
            stroke: { curve: 'smooth', width: 2.5 },
            colors: ['#727cf5'],
            fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: .45, opacityTo: .05, stops: [0, 90, 100] } },
            grid: { borderColor: '#f1f3fa', strokeDashArray: 4 },
            tooltip: { theme: 'light' },
        }).render();

        // Category bar chart
        new ApexCharts(document.querySelector('#vs-category-chart'), {
            chart: { type: 'bar', height: 280, toolbar: { show: false }, fontFamily: 'inherit' },
            series: [{ name: 'Public Votes', data: catData }],
            plotOptions: { bar: { horizontal: true, borderRadius: 5, barHeight: '55%', distributed: true } },
            xaxis: { categories: catLabels, labels: { style: { fontSize: '11px' } } },
            legend: { show: false },
            dataLabels: { enabled: true, style: { fontSize: '11px' } },
            colors: ['#667eea', '#00c6fb', '#f5576c', '#43e97b', '#fda085', '#a18cd1', '#f6d365', '#005bea'],
            grid: { borderColor: '#f1f3fa', strokeDashArray: 4 },
            tooltip: { theme: 'light' },
        }).render();

        function gauge(sel, value, color) {
            new ApexCharts(document.querySelector(sel), {
                chart: { type: 'radialBar', height: 110, sparkline: { enabled: true } },
                series: [value],
                colors: [color],
                plotOptions: {
                    radialBar: {
                        hollow: { size: '55%' },
                        track: { background: '#f0f1f7' },
                        dataLabels: {
                            name: { show: false },
                            value: { show: true, fontSize: '13px', fontWeight: 700, offsetY: 6 }
                        }
                    }
                },
            }).render();
        }

        gauge('#vs-judges-gauge', {{ $judgingCoverage }}, '#43e97b');
        gauge('#vs-voters-gauge', {{ $voterTurnout }}, '#00c6fb');
    })();
</script>
@endsection
