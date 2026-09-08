@php $compact = $compact ?? false; @endphp
<div class="wn-podium-wrap {{ $compact ? 'is-compact' : '' }}">
    @if($winners->isEmpty())
    <div class="text-center text-muted py-{{ $compact ? '4' : '5' }}">
        <i class="mdi mdi-clipboard-text-search-outline" style="font-size:{{ $compact ? '28' : '40' }}px; display:block; margin-bottom:8px; opacity:.5;"></i>
        No nominees in this award yet.
    </div>
    @else
    <div class="wn-podium">
        @foreach([1,2,3] as $place)
            @php $n = $winners->get($place - 1); @endphp
            @if($n)
            <div class="wn-pod-col wn-pod-{{ $place }}">
                @if($place == 1)<i class="mdi mdi-crown wn-pod-crown"></i>@endif
                <div class="wn-pod-medal">{{ $place }}</div>
                <div class="wn-pod-name" title="{{ $n['nominee_name'] }}">{{ $n['nominee_name'] }}</div>
                <div class="wn-pod-score">{{ $n['overall'] }}%</div>
                <div class="wn-pod-score-lbl">Overall Score</div>
                <div class="wn-pod-stand">{{ $place }}</div>
            </div>
            @else
            <div class="wn-pod-empty">—</div>
            @endif
        @endforeach
    </div>
    @endif
</div>

@if($winners->isNotEmpty())
<div class="wn-breakdown {{ $compact ? 'is-compact' : '' }}">
    <div class="row g-2">
        @foreach($winners as $n)
        @php $rank = $loop->iteration; @endphp
        <div class="col-lg-4 col-md-6 mb-2 d-flex">
            <div class="wn-bd-card">
                <div class="wn-bd-head">
                    <div class="wn-bd-rank r{{ $rank }}">{{ $rank }}</div>
                    <div class="wn-bd-name">{{ $n['nominee_name'] }}</div>
                </div>
                <div class="wn-bd-row">
                    <span class="lbl">Judges' Score</span>
                    <span class="expr">{{ $n['judges_avg'] ?? '—' }}/10 &rarr; {{ $n['judges_pct'] }}%</span>
                </div>
                <div class="wn-bd-row">
                    <span class="lbl">&times; 75% weighting</span>
                    <span class="expr">{{ round($n['judges_pct'] * 0.75, 2) }}</span>
                </div>
                <div class="wn-bd-row">
                    <span class="lbl">Public Vote Share</span>
                    <span class="expr">{{ $n['public_votes'] }} of {{ $totalPublicVotes }} &rarr; {{ $n['public_pct'] }}%</span>
                </div>
                <div class="wn-bd-row">
                    <span class="lbl">&times; 25% weighting</span>
                    <span class="expr">{{ round($n['public_pct'] * 0.25, 2) }}</span>
                </div>
                <div class="wn-bd-total">
                    <span class="lbl">Overall Score</span>
                    <span class="val">{{ $n['overall'] }}%</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
