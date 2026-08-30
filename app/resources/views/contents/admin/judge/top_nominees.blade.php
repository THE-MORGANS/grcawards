@extends('layouts.admin.master')

@section('title', 'Top Nominees')

@section('style')
<link href="{{asset('assets/css/nominees_redesign.css')}}" rel="stylesheet" type="text/css" />
<style>
    .cat-card { margin-bottom: 1.5rem; }
    .cat-card .card-header {
        background: #f7f8fc; border-bottom: 1px solid #eef2f7; padding: 14px 20px;
        display: flex; align-items: center; justify-content: space-between; gap: 10px; flex-wrap: wrap;
    }
    .cat-card .card-header h5 { margin: 0; font-size: 15px; font-weight: 700; color: #313a46; }
    .view-criteria-btn { border-radius: 30px; font-size: 12px; flex-shrink: 0; }

    /* Criteria modal */
    .criteria-html-content h1,
    .criteria-html-content h2,
    .criteria-html-content h3 {
        color: #313a46;
        font-weight: 700;
        margin-top: 1.25rem;
        margin-bottom: 0.6rem;
    }
    .criteria-html-content ul,
    .criteria-html-content ol {
        padding-left: 1.4rem;
        margin-bottom: 1.2rem;
    }
    .criteria-html-content strong {
        color: #727cf5;
        font-weight: 700;
    }
    .rank-badge {
        display: inline-flex; align-items: center; justify-content: center;
        width: 26px; height: 26px; border-radius: 50%;
        background: #f1f3fa; color: #6c757d; font-weight: 700; font-size: 12px;
    }
    .rank-badge.top3 { background: rgba(114,124,245,.12); color: #727cf5; }
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
    .you-voted-badge {
        display: inline-flex; align-items: center; gap: 4px;
        padding: 4px 10px; border-radius: 30px; font-weight: 700; font-size: 12px;
    }
    .you-voted-badge.pending { background: #f1f3fa; color: #98a6ad; }
    .you-voted-badge.scored { background: rgba(10,207,151,.1); color: #0acf97; }
    .you-voted-badge.commented { background: rgba(255,188,0,.1); color: #b58a00; }
    .score-select { min-width: 90px; }
    .comment-btn { white-space: nowrap; }
    .comment-btn.has-comment {
        background: rgba(114,124,245,.1); color: #727cf5; border-color: rgba(114,124,245,.3);
    }
    .clear-btn {
        border: none; background: none; color: #98a6ad; font-size: 15px;
        line-height: 1; padding: 0 2px; flex-shrink: 0;
    }
    .clear-btn:hover { color: #fa3a58; }
    tr.row-incomplete { background: rgba(250,58,88,.06); }
    tr.row-voted { background: rgba(10,207,151,.04); }
    .vote-footer {
        padding: 16px 20px; border-top: 1px solid #eef2f7;
        display: flex; justify-content: flex-end; align-items: center;
    }
    .btn-submit-vote { border-radius: 30px; font-weight: 700; letter-spacing: .03em; }
    .btn-submit-vote:disabled { opacity: .75; }
    .nom-stat.is-complete .val { color: #0acf97; }
    .already-voted-badge {
        display: inline-flex; align-items: center; gap: 6px;
        background: rgba(10,207,151,.1); color: #0acf97; border: 1px solid rgba(10,207,151,.25);
        padding: 6px 14px; border-radius: 30px; font-weight: 700; font-size: 12.5px;
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
                            <div class="d-flex justify-content-lg-end gap-2 flex-wrap">
                                <div class="nom-stat">
                                    <div class="val">{{ count($sectors) }}</div>
                                    <div class="lbl">Sectors</div>
                                </div>
                                <div class="nom-stat @if($votedPercentage == 100) is-complete @endif">
                                    <div class="val">{{ $votedPercentage }}%</div>
                                    <div class="lbl">Voted &middot; {{ $votedCategories }}/{{ $totalCategories }}</div>
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
                    <button class="btn btn-sm btn-outline-secondary view-criteria-btn" data-name="{{ $category['award']->name }}" data-index="{{ $category['award']->id }}" onClick="openCriteriaModal(this)">
                        <i class="mdi mdi-information-outline me-1"></i> View Criteria
                    </button>
                    <template id="criteria-template-{{ $category['award']->id }}">{!! $category['award']->criteria !!}</template>
                </div>
                <form class="vote-form" method="POST" action="{{ route('admin.top_nominees.vote', $award_program) }}">
                    @csrf
                    <input type="hidden" name="award_id" value="{{ $category['award']->id }}">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="nominees-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width: 6%">Rank</th>
                                        <th>Nominee Name</th>
                                        <th style="width: 12%">Public Votes</th>
                                        <th style="width: 10%">You Voted</th>
                                        <th style="width: 12%">Score (1-10)</th>
                                        <th style="width: 15%">Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $rank = 0; @endphp
                                    @foreach ($category['nominees'] as $nominee)
                                    @php $rank++; @endphp
                                    <tr class="nominee-row @if($category['already_voted']) row-voted @endif">
                                        <td>
                                            <span class="rank-badge @if($rank <= 3) top3 @endif">{{ $rank }}</span>
                                        </td>
                                        <td class="nominee-name-cell">
                                            {{ $nominee->nominee?->name }}
                                        </td>
                                        <td><span class="votes-badge">{{ $nominee->voteCount }}</span></td>
                                        @php
                                            $oldScore = old('scores.'.$nominee->nominee_id);
                                            $oldComment = old('comments.'.$nominee->nominee_id);
                                            $myVote = $category['already_voted'] ? ($category['my_votes'][$nominee->nominee_id] ?? null) : null;
                                        @endphp
                                        <td>
                                            @if ($myVote && $myVote->votes !== null)
                                            <span class="you-voted-badge scored">{{ $myVote->votes }}</span>
                                            @elseif ($myVote && $myVote->comment)
                                            <span class="you-voted-badge commented"><i class="mdi mdi-comment-outline"></i> Comment</span>
                                            @else
                                            <span class="you-voted-badge pending">&mdash;</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <select name="scores[{{ $nominee->nominee_id }}]" id="score-{{ $category['award']->id }}-{{ $nominee->nominee_id }}" class="form-select form-select-sm score-select" @if($category['already_voted']) disabled @endif>
                                                    <option value="">Select</option>
                                                    @for ($i = 1; $i <= 10; $i++)
                                                    <option value="{{ $i }}" {{ (string) $oldScore === (string) $i ? 'selected' : '' }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                <button type="button" class="clear-btn" title="Clear score" onClick="clearScore(this)" @if($category['already_voted']) disabled @endif>
                                                    <i class="mdi mdi-close-circle-outline"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="comments[{{ $nominee->nominee_id }}]" id="comment-input-{{ $category['award']->id }}-{{ $nominee->nominee_id }}" class="comment-input" value="{{ $oldComment }}">
                                            <div class="d-flex align-items-center gap-1">
                                                <button type="button" class="btn btn-sm btn-outline-secondary comment-btn {{ $oldComment ? 'has-comment' : '' }}" id="comment-btn-{{ $category['award']->id }}-{{ $nominee->nominee_id }}"
                                                    data-award-id="{{ $category['award']->id }}"
                                                    data-nominee-id="{{ $nominee->nominee_id }}"
                                                    data-nominee-name="{{ $nominee->nominee?->name }}"
                                                    onClick="openCommentModal(this)"
                                                    @if($category['already_voted']) disabled @endif>
                                                    <i class="mdi mdi-comment-{{ $oldComment ? 'check-outline' : 'outline' }} me-1"></i> {{ $oldComment ? 'Comment Added' : 'Add Comment' }}
                                                </button>
                                                <button type="button" class="clear-btn" title="Clear comment" onClick="clearComment(this)" @if($category['already_voted']) disabled @endif>
                                                    <i class="mdi mdi-close-circle-outline"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="vote-footer">
                        @if ($category['already_voted'])
                        <span class="already-voted-badge"><i class="mdi mdi-check-circle"></i> You already voted for this award</span>
                        @else
                        <button type="submit" class="btn btn-primary btn-submit-vote">
                            <i class="mdi mdi-check-circle-outline me-1"></i> <span class="btn-label">SUBMIT VOTE</span>
                        </button>
                        @endif
                    </div>
                </form>
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

<!-- Criteria Modal -->
<div class="modal fade" id="criteriaModal" tabindex="-1" aria-labelledby="criteriaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="criteriaModalLabel">Award Criteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 id="modalAwardName" class="mb-4 fw-bold text-primary"></h4>
                <div id="modalCriteriaBody" class="criteria-html-content">
                    <!-- Content injected via JS -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Comment Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentModalLabel">Comment on Nominee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 id="commentModalNomineeName" class="mb-3 fw-bold"></h6>
                <label for="commentTextarea" class="form-label text-muted small">Reason for not scoring this nominee (or any other note):</label>
                <textarea id="commentTextarea" class="form-control" rows="4" placeholder="e.g. Insufficient information provided for evaluation"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onClick="saveComment()">Save Comment</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function openCriteriaModal(element) {
    const awardName = element.getAttribute('data-name');
    const index = element.getAttribute('data-index');

    const template = document.getElementById(`criteria-template-${index}`);
    const modalBody = document.getElementById('modalCriteriaBody');
    const modalTitle = document.getElementById('modalAwardName');

    modalTitle.innerText = awardName;
    modalBody.innerHTML = template.innerHTML;

    const myModal = new bootstrap.Modal(document.getElementById('criteriaModal'));
    myModal.show();
}

let currentCommentTarget = null;

function openCommentModal(element) {
    const awardId = element.getAttribute('data-award-id');
    const nomineeId = element.getAttribute('data-nominee-id');
    const nomineeName = element.getAttribute('data-nominee-name');
    currentCommentTarget = { awardId, nomineeId };

    const input = document.getElementById(`comment-input-${awardId}-${nomineeId}`);
    document.getElementById('commentModalNomineeName').innerText = nomineeName;
    document.getElementById('commentTextarea').value = input.value;

    const myModal = new bootstrap.Modal(document.getElementById('commentModal'));
    myModal.show();
}

function saveComment() {
    if (!currentCommentTarget) return;

    const { awardId, nomineeId } = currentCommentTarget;
    const text = document.getElementById('commentTextarea').value.trim();

    document.getElementById(`comment-input-${awardId}-${nomineeId}`).value = text;

    const btn = document.getElementById(`comment-btn-${awardId}-${nomineeId}`);
    if (text !== '') {
        btn.classList.add('has-comment');
        btn.innerHTML = '<i class="mdi mdi-comment-check-outline me-1"></i> Comment Added';
    } else {
        btn.classList.remove('has-comment');
        btn.innerHTML = '<i class="mdi mdi-comment-outline me-1"></i> Add Comment';
    }

    bootstrap.Modal.getInstance(document.getElementById('commentModal')).hide();
    updateRowState(btn.closest('tr.nominee-row'));
}

function clearScore(button) {
    const row = button.closest('tr.nominee-row');
    const select = row.querySelector('select.score-select');
    select.value = '';
    updateRowState(row);
}

function clearComment(button) {
    const row = button.closest('tr.nominee-row');
    const commentInput = row.querySelector('input.comment-input');
    const commentBtn = row.querySelector('.comment-btn');

    commentInput.value = '';
    commentBtn.classList.remove('has-comment');
    commentBtn.innerHTML = '<i class="mdi mdi-comment-outline me-1"></i> Add Comment';

    updateRowState(row);
}

// A nominee only needs ONE of {score, comment} — a comment is treated as a
// judge's reason for deliberately not scoring that nominee, not an addition
// to a score. Re-run after every score/comment change so the incomplete
// highlight (and the submit-time check) always reflect the current state.
// Rows in an already-voted award are disabled and always blank here (their
// real submitted values live in the "You Voted" column) — never flag those
// as incomplete, that highlight is only for votes still pending action.
function updateRowState(row) {
    if (!row) return;
    const select = row.querySelector('select.score-select');
    if (select.disabled) {
        row.classList.remove('row-incomplete');
        return;
    }
    const hasScore = select.value !== '';
    const hasComment = row.querySelector('input.comment-input').value.trim() !== '';
    row.classList.toggle('row-incomplete', !hasScore && !hasComment);
}

document.querySelectorAll('select.score-select').forEach(function (select) {
    select.addEventListener('change', function () {
        updateRowState(select.closest('tr.nominee-row'));
    });
});

// Highlight any row still incomplete after a failed submit brought the judge
// back here with previously entered scores/comments restored.
document.querySelectorAll('tr.nominee-row').forEach(updateRowState);

document.querySelectorAll('.vote-form').forEach(function (form) {
    form.addEventListener('submit', function (e) {
        const rows = form.querySelectorAll('.nominee-row');
        let missing = 0;

        rows.forEach(function (row) {
            updateRowState(row);
            if (row.classList.contains('row-incomplete')) missing++;
        });

        if (missing > 0) {
            e.preventDefault();
            toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
            toastr.error('Please select a score or add a comment for every nominee before submitting.');
            return;
        }

        const submitBtn = form.querySelector('.btn-submit-vote');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.querySelector('.btn-label').innerText = 'Submitting...';
            submitBtn.querySelector('i').className = 'spinner-border spinner-border-sm me-1';
        }
    });
});
</script>

@if (Session::has('success'))
<script>
    toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
    toastr.success("{{ session('success') }}");
</script>
@endif

@if (Session::has('danger'))
<script>
    toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
    toastr.error("{{ session('danger') }}");
</script>
@endif
@endsection
