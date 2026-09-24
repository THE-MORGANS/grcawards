@php
$compact = $compact ?? false;
$demotions = $demotions ?? collect();
$ordinals = [1 => '1st', 2 => '2nd', 3 => '3rd'];
$demoteModalId = 'demote-modal-' . $award->id;
@endphp
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
                @if(!empty($n['demoted']))
                <div class="wn-demoted-badge"
                    title="Demoted from {{ $ordinals[$n['natural_rank']] ?? $n['natural_rank'] }} &middot; demoted by {{ $n['demotion']['admin_name'] ?? 'an admin' }} on {{ optional($n['demotion']['created_at'])->format('d M Y') }}: {{ $n['demotion']['reason'] }}">
                    <i class="mdi mdi-arrow-down-bold-circle-outline"></i> Demoted from {{ $ordinals[$n['natural_rank']] ?? $n['natural_rank'] }}
                </div>
                @endif
                <div class="wn-pod-actions">
                    <a href="#" class="wn-demote-trigger" data-action="demote"
                        data-nominee-id="{{ $n['nominee_id'] }}" data-nominee-name="{{ $n['nominee_name'] }}"
                        data-bs-toggle="modal" data-bs-target="#{{ $demoteModalId }}">
                        <i class="mdi mdi-arrow-down-bold-circle-outline"></i> Demote
                    </a>
                </div>
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

@if($demotions->isNotEmpty())
<div class="wn-demotion-history {{ $compact ? 'is-compact' : '' }}">
    <h6>Demotion History</h6>
    @foreach($demotions as $d)
    <div class="wn-demotion-row">
        <div>
            <div class="nm">{{ optional($d->nominee)->name ?? 'Unknown nominee' }}</div>
            <div class="meta">Demoted by {{ optional($d->admin)->fullname ?? 'an admin' }} &middot; {{ $d->created_at->format('d M Y, h:i A') }}</div>
            <div class="reason">{{ $d->reason }}</div>
        </div>
        <form method="POST" action="{{ route('admin.winners.demote.undo', ['award_program' => $award_program, 'award_id' => \Vinkla\Hashids\Facades\Hashids::connection('award')->encode($award->id), 'demotion' => $d->id]) }}" onsubmit="return confirm('Undo this demotion? {{ optional($d->nominee)->name }} will move back up.');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-light">Undo</button>
        </form>
    </div>
    @endforeach
</div>
@endif

<div class="modal fade" id="{{ $demoteModalId }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" class="wn-demote-confirm-form" action="{{ route('admin.winners.demote', ['award_program' => $award_program, 'award_id' => \Vinkla\Hashids\Facades\Hashids::connection('award')->encode($award->id)]) }}">
                @csrf
                <input type="hidden" name="nominee_id" data-field="nominee-id">
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title">Demote <span data-field="nominee-name"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-2 pt-0">
                    <p class="text-muted small mb-3">This moves them down one position — whoever is currently ranked
                        just below will move up to take their place.</p>
                    <label class="form-label">Reason <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="reason" rows="3" required></textarea>
                </div>
                <div class="modal-footer px-4 pb-4">
                    <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">
                        <span class="wn-btn-label">Confirm Demotion</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
