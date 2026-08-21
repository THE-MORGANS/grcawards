@extends('layouts.admin.master')

@section('title', 'Judging Setup')

@section('style')
<style>
    .jg-hero {
        border: none;
        border-radius: 14px;
        background: linear-gradient(135deg, #313a46 0%, #3a4453 100%);
        color: #fff;
        overflow: hidden;
        position: relative;
    }
    .jg-hero::after {
        content: '';
        position: absolute;
        top: -60px;
        right: -60px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: rgba(114, 124, 245, .18);
    }
    .jg-back-link {
        font-size: 12.5px;
        color: rgba(255,255,255,.65);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 12px;
        transition: color .15s ease;
    }
    .jg-back-link:hover {
        color: #fff;
    }
    .jg-category-name {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 8px;
        position: relative;
        z-index: 2;
    }
    .jg-category-desc {
        color: rgba(255,255,255,.65);
        font-size: 13.5px;
        max-width: 640px;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
    }
    .jg-stats {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        position: relative;
        z-index: 2;
    }
    .jg-stat {
        background: rgba(255,255,255,.08);
        border: 1px solid rgba(255,255,255,.12);
        border-radius: 10px;
        padding: 12px 18px;
        min-width: 110px;
        text-align: center;
    }
    .jg-stat .val {
        font-size: 22px;
        font-weight: 700;
        line-height: 1;
        color: #fff;
    }
    .jg-stat .lbl {
        font-size: 10.5px;
        letter-spacing: .05em;
        text-transform: uppercase;
        color: rgba(255,255,255,.55);
        margin-top: 4px;
    }
    .jg-stat.is-progress .val {
        color: #ffbc00;
    }

    /* Info banner */
    .jg-info-banner {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        background: #fff7e6;
        border: 1px solid #ffe3a3;
        color: #8a6100;
        border-radius: 10px;
        padding: 12px 16px;
        font-size: 13px;
        margin-bottom: 20px;
    }
    .jg-info-banner i {
        font-size: 18px;
        margin-top: 1px;
    }

    /* Sector sections */
    .jg-sector {
        margin-bottom: 28px;
    }
    .jg-sector-title {
        font-size: 15px;
        font-weight: 700;
        color: #313a46;
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
    }
    .jg-sector-title::before {
        content: '';
        width: 4px;
        height: 18px;
        background: #ffbc00;
        border-radius: 4px;
    }
    .jg-sector-title .badge {
        background: rgba(255,188,0,.12);
        color: #b58200;
        font-weight: 600;
    }

    /* Award cards */
    .jg-award-card {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #eef2f7;
        border-radius: 12px;
        padding: 20px;
        background: #fff;
    }
    .jg-award-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 8px;
    }
    .jg-award-title {
        font-size: 15px;
        font-weight: 700;
        color: #313a46;
        margin: 0;
        line-height: 1.35;
    }
    .jg-award-status {
        flex-shrink: 0;
        white-space: nowrap;
    }
    .jg-award-desc {
        font-size: 13px;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 14px;
    }
    .jg-read-more-btn {
        border: none;
        background: none;
        color: #727cf5;
        font-weight: 600;
        font-size: 12.5px;
        padding: 0;
        margin-left: 3px;
        cursor: pointer;
    }
    .jg-read-more-btn:hover {
        text-decoration: underline;
    }
    .jg-award-actions {
        margin-top: auto;
        padding-top: 14px;
        border-top: 1px solid #eef2f7;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        flex-wrap: wrap;
    }
    .jg-award-actions .btn {
        border-radius: 30px;
        font-size: 12px;
    }
    .criteria-ready-indicator {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-weight: 700;
        font-size: 11.5px;
        color: #0acf97;
    }
    .criteria-pending-indicator {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-weight: 600;
        font-size: 11.5px;
        color: #98a6ad;
    }

    /* Pagination */
    .judge-pagination {
        display: flex;
        justify-content: flex-end;
    }
    .judge-pagination .page-link {
        border: none;
        background: #f1f3fa;
        border-radius: 8px;
        margin: 0 3px;
        color: #6c757d;
        font-weight: 600;
    }
    .judge-pagination .page-item.active .page-link {
        background: #727cf5;
        color: #fff;
    }

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
</style>
@endsection

@section('content')
<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="page-title">
                    <h4>Judging Setup &middot; Award Year {{$currentYear?->year ?? 'N/A'}}</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @forelse ($categories as $category)
    <div class="row">
        <div class="col-12">
            <div class="card jg-hero mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <a href="{{route('admin.get_judges', $award_program)}}" class="jg-back-link">
                                <i class="mdi mdi-arrow-left"></i> Back to Judges
                            </a>
                            <h2 class="jg-category-name">{{$category->name}}</h2>
                            <p class="jg-category-desc">{{$category->description}}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="jg-stats justify-content-lg-end">
                                <div class="jg-stat is-progress">
                                    <div class="val">{{$category->ready_awards}}/{{$category->total_awards}}</div>
                                    <div class="lbl">Nominees Set Up</div>
                                </div>
                                <div class="jg-stat">
                                    <div class="val">{{$category->sectors->count()}}</div>
                                    <div class="lbl">Sectors</div>
                                </div>
                                <div class="jg-stat">
                                    <div class="val">Cat. {{$categories->currentPage()}}</div>
                                    <div class="lbl">Page</div>
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

                    <div class="jg-info-banner">
                        <i class="mdi mdi-information-outline"></i>
                        <span>Voting must be closed for an award before nominees can be added here. "Add Nominee Voting Criteria" pulls in the top 4 most-voted nominees so their judging details can be filled in.</span>
                    </div>

                    <div class="judge-pagination mb-3">
                        {{$categories->links()}}
                    </div>

                    @foreach ($category->sectors as $sector)
                    <div class="jg-sector">
                        <h3 class="jg-sector-title">
                            {{$sector->name}}
                            <span class="badge rounded-pill px-3">{{ count($sector->awards) }} Awards</span>
                        </h3>

                        <div class="row">
                            @foreach ($sector->awards as $award)
                            @php
                                $index = $award->id;
                            @endphp
                            <div class="col-lg-6 mb-4 d-flex">
                                <div class="jg-award-card">
                                    <div class="jg-award-header">
                                        <h5 class="jg-award-title">{{$award->name}}</h5>
                                        <span class="jg-award-status">
                                            @if($award->has_criteria)
                                                <span class="criteria-ready-indicator"><i class="mdi mdi-check-circle"></i> Nominees Added</span>
                                            @else
                                                <span class="criteria-pending-indicator"><i class="mdi mdi-clock-outline"></i> Not Started</span>
                                            @endif
                                        </span>
                                    </div>

                                    <div class="jg-award-desc">
                                        @if(strlen($award->description) > 100)
                                            {{ substr($award->description, 0, 100) }}...
                                            <button class="jg-read-more-btn" onClick="toggleReadMore('desc', {{$index}})" id="btn-desc-{{$index}}">View Details</button>
                                            <span id="detail-desc-{{$index}}" style="display:none">{{ substr($award->description, 100) }}</span>
                                        @else
                                            {{ $award->description }}
                                        @endif
                                    </div>

                                    <div class="jg-award-actions">
                                        <button class="btn btn-sm btn-outline-secondary" data-name="{{ $award->name }}" data-index="{{ $index }}" onClick="openCriteriaModal(this)">
                                            <i class="mdi mdi-information-outline me-1"></i> View Criteria
                                        </button>
                                        <template id="criteria-template-{{$index}}">{!! $award->criteria !!}</template>

                                        <a href="{{route('admin.create_nominess_awards',[request()->segment(3), $award->hashid])}}" class="btn btn-sm btn-primary">
                                            <i class="mdi mdi-account-multiple-plus-outline me-1"></i> Add Nominee Voting Criteria
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            @endforeach
                        </div> <!-- end row -->
                    </div>
                    @endforeach

                    <div class="judge-pagination mt-4">
                        {{$categories->links()}}
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    @empty
    <div class="row">
        <div class="col-12">
            <div class="text-center p-5 bg-white rounded-4 shadow-sm">
                <i class="mdi mdi-file-search-outline fs-1 text-muted mb-3 d-block"></i>
                <h5 class="fw-bold mb-1">No categories to set up yet</h5>
                <p class="text-muted mb-0">Categories for this award programme haven't been set up yet.</p>
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
function toggleReadMore(type, index) {
    const detailSpan = document.getElementById(`detail-${type}-${index}`);
    const btn = document.getElementById(`btn-${type}-${index}`);

    if (detailSpan.style.display === "none") {
        detailSpan.style.display = "inline";
        btn.innerHTML = "Show Less";
    } else {
        detailSpan.style.display = "none";
        btn.innerHTML = "View Details";
    }
}

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
