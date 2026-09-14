<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vote Summary Report</title>
<style>
    @page { margin: 26px 34px 40px 34px; }

    * { box-sizing: border-box; }
    body { font-family: 'DejaVu Sans', sans-serif; color: #2c3350; font-size: 11px; margin: 0; }

    .header-band {
        background-color: #423a7d;
        color: #ffffff;
        padding: 18px 22px;
        border-radius: 8px;
        margin-bottom: 16px;
    }
    .header-title { font-size: 20px; font-weight: 700; margin: 0 0 4px 0; }
    .header-sub { font-size: 11px; color: #d9d6f2; margin: 0; }
    .header-meta { font-size: 9px; color: #c3bfe8; margin-top: 8px; }

    .section-title {
        font-size: 13px; font-weight: 700; color: #202a44;
        margin: 18px 0 4px 0; padding-bottom: 4px; border-bottom: 1.5px solid #e6e4f4;
    }
    .section-desc { font-size: 9.5px; color: #7a8199; margin: 0 0 8px 0; }

    /* KPI grid via table */
    table.kpi-table { width: 100%; border-collapse: separate; border-spacing: 6px 0; margin-bottom: 4px; }
    table.kpi-table td {
        width: 20%; background-color: #f7f7fb; border: 1px solid #ececf6; border-radius: 6px;
        padding: 8px 9px; vertical-align: top;
    }
    .kpi-bar { height: 4px; width: 26px; border-radius: 3px; margin-bottom: 6px; }
    .kpi-label { font-size: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: .03em; color: #8891a5; }
    .kpi-value { font-size: 16px; font-weight: 700; color: #202a44; margin-top: 2px; }
    .kpi-sub { font-size: 7.5px; color: #a3abbd; margin-top: 3px; }

    .c-purple { background-color: #6a5ec7; }
    .c-blue { background-color: #00a3d9; }
    .c-pink { background-color: #ea4c7a; }
    .c-green { background-color: #2fb768; }
    .c-orange { background-color: #f5a15c; }

    /* Participation blocks */
    table.part-table { width: 100%; border-collapse: separate; border-spacing: 8px 0; }
    table.part-table td {
        width: 50%; background-color: #ffffff; border: 1px solid #ececf6; border-radius: 6px; padding: 10px 12px;
    }
    .part-label { font-size: 9.5px; font-weight: 700; color: #202a44; }
    .part-frac { font-size: 8px; color: #a3abbd; margin-bottom: 6px; }
    .track { background-color: #eef0f7; border-radius: 6px; height: 9px; width: 100%; }
    .fill { height: 9px; border-radius: 6px; }
    .part-pct { font-size: 8.5px; font-weight: 700; color: #202a44; margin-top: 4px; }

    /* Formula */
    table.formula-bar { width: 100%; border-collapse: collapse; margin-bottom: 8px; }
    table.formula-bar td { height: 22px; color: #fff; font-weight: 700; font-size: 9.5px; text-align: center; vertical-align: middle; }
    .formula-note {
        background-color: #f7f8fc; border-radius: 6px; padding: 8px 10px; font-size: 9px; color: #6c7488; margin-top: 6px;
    }
    ul.formula-list { margin: 6px 0 0 0; padding: 0 0 0 14px; }
    ul.formula-list li { font-size: 9.5px; margin-bottom: 5px; line-height: 1.4; color: #414a63; }
    ul.formula-list b { color: #202a44; }

    /* Category table */
    table.cat-table { width: 100%; border-collapse: collapse; margin-top: 4px; }
    table.cat-table th {
        background-color: #f7f7fb; text-align: left; font-size: 8.5px; text-transform: uppercase; letter-spacing: .03em;
        color: #8891a5; padding: 6px 8px; border-bottom: 1.5px solid #ececf6;
    }
    table.cat-table td { padding: 7px 8px; font-size: 9.5px; border-bottom: 1px solid #f1f1f7; color: #333c53; }
    table.cat-table tr { page-break-inside: avoid; }
    .cat-name { font-weight: 700; color: #202a44; }
    .share-track { background-color: #eef0f7; border-radius: 6px; height: 7px; width: 100px; }
    .share-fill { background-color: #6a5ec7; height: 7px; border-radius: 6px; }

    .footer-note { margin-top: 18px; font-size: 8px; color: #b3b8c6; text-align: center; }
</style>
</head>
<body>

    <div class="header-band">
        <p class="header-title">Vote Summary Report</p>
        <p class="header-sub">{{ $awardProgram->name ?? 'Award Program' }} &middot; {{ $awardProgram->year ?? '' }}</p>
        <p class="header-meta">
            {{ $categoriesCount }} Categories &nbsp;&bull;&nbsp; {{ $sectorsCount }} Sectors &nbsp;&bull;&nbsp;
            {{ $awardsCount }} Awards &nbsp;&bull;&nbsp; Generated {{ now()->format('d M Y, h:i A') }}
        </p>
    </div>

    <table class="kpi-table">
        <tr>
            <td>
                <div class="kpi-bar c-purple"></div>
                <div class="kpi-label">Nominees</div>
                <div class="kpi-value">{{ number_format($nomineesCount) }}</div>
            </td>
            <td>
                <div class="kpi-bar c-blue"></div>
                <div class="kpi-label">Voters</div>
                <div class="kpi-value">{{ number_format($votersCount) }}</div>
                <div class="kpi-sub">{{ number_format($activeVotersCount) }} active</div>
            </td>
            <td>
                <div class="kpi-bar c-pink"></div>
                <div class="kpi-label">Public Votes</div>
                <div class="kpi-value">{{ number_format($publicVotesCount) }}</div>
                <div class="kpi-sub">{{ number_format($votersWhoVoted) }} distinct voters</div>
            </td>
            <td>
                <div class="kpi-bar c-green"></div>
                <div class="kpi-label">Judges</div>
                <div class="kpi-value">{{ number_format($judgesCount) }}</div>
                <div class="kpi-sub">of {{ number_format($totalJudgeAccounts) }} accounts system-wide</div>
            </td>
            <td>
                <div class="kpi-bar c-orange"></div>
                <div class="kpi-label">Judges' Votes</div>
                <div class="kpi-value">{{ number_format($judgesVotesCount) }}</div>
                <div class="kpi-sub">score entries submitted</div>
            </td>
        </tr>
    </table>

    <div class="section-title">Participation</div>
    <div class="section-desc">Completion rate across judging and public voting</div>
    <table class="part-table">
        <tr>
            <td>
                <div class="part-label">Judging Coverage</div>
                <div class="part-frac">{{ $awardsJudged }} of {{ $awardsCount }} awards have at least one judge score</div>
                <div class="track"><div class="fill c-green" style="width: {{ $judgingCoverage ?? ($awardsCount > 0 ? round(($awardsJudged / $awardsCount) * 100, 1) : 0) }}%;"></div></div>
                <div class="part-pct">{{ $judgingCoverage ?? ($awardsCount > 0 ? round(($awardsJudged / $awardsCount) * 100, 1) : 0) }}%</div>
            </td>
            <td>
                <div class="part-label">Voter Turnout</div>
                <div class="part-frac">{{ $votersWhoVoted }} of {{ $votersCount }} registered voters cast a vote</div>
                <div class="track"><div class="fill c-blue" style="width: {{ $voterTurnout ?? ($votersCount > 0 ? round(($votersWhoVoted / $votersCount) * 100, 1) : 0) }}%;"></div></div>
                <div class="part-pct">{{ $voterTurnout ?? ($votersCount > 0 ? round(($votersWhoVoted / $votersCount) * 100, 1) : 0) }}%</div>
            </td>
        </tr>
    </table>

    <div class="section-title">How Votes Are Calculated</div>
    <div class="section-desc">Every nominee's final ranking blends two independent inputs</div>
    <table class="formula-bar">
        <tr>
            <td style="background-color:#2fb768; width:75%;">Judges 75%</td>
            <td style="background-color:#ea4c7a; width:25%;">Public 25%</td>
        </tr>
    </table>
    <ul class="formula-list">
        <li><b>Judges' score (75%)</b> &mdash; each judge rates a nominee 1&ndash;10. The scores are averaged, then converted to a percentage of the maximum (avg &divide; 10 &times; 100).</li>
        <li><b>Public vote share (25%)</b> &mdash; a nominee's share of all public votes cast within their award (their votes &divide; total votes in that award &times; 100).</li>
        <li><b>Overall score</b> = (Judges % &times; 0.75) + (Public % &times; 0.25). Nominees are ranked highest to lowest within each award.</li>
    </ul>
    <div class="formula-note">A nominee with no judge scores or no public votes simply scores 0% on that side — they are never excluded from ranking.</div>

    <div class="section-title">Category Breakdown</div>
    <div class="section-desc">Sectors, awards and voting volume per category</div>

    @if($categoryBreakdown->isEmpty())
        <p style="color:#a3abbd;">No categories found for this award program yet.</p>
    @else
    @php $maxCatVotes = $categoryBreakdown->max('public_votes') ?: 1; @endphp
    <table class="cat-table">
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
                <td class="cat-name">{{ $row['name'] }}</td>
                <td>{{ $row['sectors'] }}</td>
                <td>{{ $row['awards'] }}</td>
                <td>{{ number_format($row['public_votes']) }}</td>
                <td>{{ number_format($row['judges_votes']) }}</td>
                <td>
                    <div class="share-track"><div class="share-fill" style="width: {{ round(($row['public_votes'] / $maxCatVotes) * 100) }}%;"></div></div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    <p class="footer-note">GRC Awards &mdash; Vote Summary Report &mdash; Generated {{ now()->format('d M Y, h:i A') }}</p>

</body>
</html>
