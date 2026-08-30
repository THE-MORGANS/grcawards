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
                    <button class="btn btn-sm btn-outline-secondary view-criteria-btn" data-name="{{ $category['award']->name }}" data-index="{{ $category['award']->id }}" onClick="openCriteriaModal(this)">
                        <i class="mdi mdi-information-outline me-1"></i> View Criteria
                    </button>
                    <template id="criteria-template-{{ $category['award']->id }}">{!! $category['award']->criteria !!}</template>
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
</script>
@endsection
