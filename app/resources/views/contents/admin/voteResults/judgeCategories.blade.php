@extends('layouts.admin.master')

@section('title', 'Judging Results')

@section('style')
<style>
    .jcr-hero {
        border: none;
        border-radius: 14px;
        background: linear-gradient(135deg, #313a46 0%, #3a4453 100%);
        color: #fff;
        overflow: hidden;
        position: relative;
    }
    .jcr-hero::after {
        content: '';
        position: absolute;
        top: -60px;
        right: -60px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: rgba(10, 207, 151, .18);
    }
    .jcr-back-link {
        font-size: 12.5px;
        color: rgba(255,255,255,.65);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 12px;
        transition: color .15s ease;
    }
    .jcr-back-link:hover {
        color: #fff;
    }
    .jcr-category-name {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 8px;
        position: relative;
        z-index: 2;
    }
    .jcr-category-desc {
        color: rgba(255,255,255,.65);
        font-size: 13.5px;
        max-width: 640px;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
    }
    .jcr-stats {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        position: relative;
        z-index: 2;
    }
    .jcr-stat {
        background: rgba(255,255,255,.08);
        border: 1px solid rgba(255,255,255,.12);
        border-radius: 10px;
        padding: 12px 18px;
        min-width: 110px;
        text-align: center;
    }
    .jcr-stat .val {
        font-size: 22px;
        font-weight: 700;
        line-height: 1;
        color: #fff;
    }
    .jcr-stat .lbl {
        font-size: 10.5px;
        letter-spacing: .05em;
        text-transform: uppercase;
        color: rgba(255,255,255,.55);
        margin-top: 4px;
    }
    .jcr-stat.is-progress .val {
        color: #0acf97;
    }

    /* Sector sections */
    .jcr-sector {
        margin-bottom: 28px;
    }
    .jcr-sector-title {
        font-size: 15px;
        font-weight: 700;
        color: #313a46;
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
    }
    .jcr-sector-title::before {
        content: '';
        width: 4px;
        height: 18px;
        background: #0acf97;
        border-radius: 4px;
    }
    .jcr-sector-title .badge {
        background: rgba(10,207,151,.1);
        color: #0acf97;
        font-weight: 600;
    }

    /* Award cards */
    .jcr-award-card {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #eef2f7;
        border-radius: 12px;
        padding: 20px;
        background: #fff;
    }
    .jcr-award-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 8px;
    }
    .jcr-award-title {
        font-size: 15px;
        font-weight: 700;
        color: #313a46;
        margin: 0;
        line-height: 1.35;
    }
    .jcr-award-status {
        flex-shrink: 0;
        white-space: nowrap;
    }
    .jcr-award-desc {
        font-size: 13px;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 14px;
    }
    .jcr-read-more-btn {
        border: none;
        background: none;
        color: #727cf5;
        font-weight: 600;
        font-size: 12.5px;
        padding: 0;
        margin-left: 3px;
        cursor: pointer;
    }
    .jcr-read-more-btn:hover {
        text-decoration: underline;
    }
    .jcr-award-actions {
        margin-top: auto;
        padding-top: 14px;
        border-top: 1px solid #eef2f7;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        flex-wrap: wrap;
    }
    .jcr-award-actions .btn {
        border-radius: 30px;
        font-size: 12px;
    }
    .results-ready-indicator {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-weight: 700;
        font-size: 11.5px;
        color: #0acf97;
    }
    .results-pending-indicator {
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
        background: #0acf97;
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
        color: #0acf97;
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
                    <h4>Judging Results &middot; Award Year {{$currentYear?->year ?? 'N/A'}}</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @forelse ($categories as $category)
    <div class="row">
        <div class="col-12">
            <div class="card jcr-hero mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <a href="{{route('admin.get_judges', $award_program)}}" class="jcr-back-link">
                                <i class="mdi mdi-arrow-left"></i> Back to Judges
                            </a>
                            <h2 class="jcr-category-name">{{$category->name}}</h2>
                            <p class="jcr-category-desc">{{$category->description}}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="jcr-stats justify-content-lg-end">
                                <div class="jcr-stat is-progress">
                                    <div class="val">{{$category->results_awards}}/{{$category->total_awards}}</div>
                                    <div class="lbl">Results Ready</div>
                                </div>
                                <div class="jcr-stat">
                                    <div class="val">{{$category->sectors->count()}}</div>
                                    <div class="lbl">Sectors</div>
                                </div>
                                <div class="jcr-stat">
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

                    <div class="judge-pagination mb-3">
                        {{$categories->links()}}
                    </div>

                    @foreach ($category->sectors as $sector)
                    <div class="jcr-sector">
                        <h3 class="jcr-sector-title">
                            {{$sector->name}}
                            <span class="badge rounded-pill px-3">{{ count($sector->awards) }} Awards</span>
                        </h3>

                        <div class="row">
                            @foreach ($sector->awards as $award)
                            @php
                                $index = $award->id;
                            @endphp
                            <div class="col-lg-6 mb-4 d-flex">
                                <div class="jcr-award-card">
                                    <div class="jcr-award-header">
                                        <h5 class="jcr-award-title">{{$award->name}}</h5>
                                        <span class="jcr-award-status">
                                            @if($award->has_results)
                                                <span class="results-ready-indicator"><i class="mdi mdi-check-circle"></i> Results Ready</span>
                                            @else
                                                <span class="results-pending-indicator"><i class="mdi mdi-clock-outline"></i> Pending</span>
                                            @endif
                                        </span>
                                    </div>

                                    <div class="jcr-award-desc">
                                        @if(strlen($award->description) > 100)
                                            {{ substr($award->description, 0, 100) }}...
                                            <button class="jcr-read-more-btn" onClick="toggleReadMore('desc', {{$index}})" id="btn-desc-{{$index}}">View Details</button>
                                            <span id="detail-desc-{{$index}}" style="display:none">{{ substr($award->description, 100) }}</span>
                                        @else
                                            {{ $award->description }}
                                        @endif
                                    </div>

                                    <div class="jcr-award-actions">
                                        <button class="btn btn-sm btn-outline-secondary" data-name="{{ $award->name }}" data-index="{{ $index }}" onClick="openCriteriaModal(this)">
                                            <i class="mdi mdi-information-outline me-1"></i> View Criteria
                                        </button>
                                        <template id="criteria-template-{{$index}}">{!! $award->criteria !!}</template>

                                        @if($award->has_results)
                                        <a href="{{route('admin.view_nominess_awards_results',[$award_program, $award->hashid])}}" class="btn btn-sm btn-success">
                                            <i class="mdi mdi-pie-chart-outline me-1"></i> View Results
                                        </a>
                                        @else
                                        <button type="button" class="btn btn-sm btn-light text-muted" disabled title="No judges have voted for this award yet">
                                            <i class="mdi mdi-pie-chart-outline me-1"></i> No Results Yet
                                        </button>
                                        @endif
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
                <h5 class="fw-bold mb-1">No categories to show results for yet</h5>
                <p class="text-muted mb-0">Categories for this award programme haven't been set up, or judging hasn't opened.</p>
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
                <h4 id="modalAwardName" class="mb-4 fw-bold text-success"></h4>
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
