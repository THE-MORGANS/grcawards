@extends('layouts.admin.master')

@section('title', 'Judging Results')

@section('style')
<link href="{{asset('assets/css/judges_redesign.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-icons/4.0/line-icons.css" />
@endsection

@section('content')
<div class="judges-container">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between p-4 bg-white rounded-4 shadow-sm">
                <div class="d-flex align-items-center">
                    <div class="avatar-md bg-soft-success rounded-3 d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; background: #ecfdf5;">
                        <i class="lni lni-stats-up text-success fs-3"></i>
                    </div>
                    <div>
                        <h4 class="mb-0 fw-bold">Judging Results Overview</h4>
                        <p class="text-muted mb-0">Award Year: <span class="fw-bold text-dark">{{$currentYear?->year ?? 'N/A'}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($categories as $category)
    <div class="category-wrapper">
        <!-- Category Card -->
        <div class="category-card">
            <div class="category-header" style="background: linear-gradient(135deg, #059669 0%, #10b981 100%);">
                <div>
                    <h2 class="category-title">{{$category->name}}</h2>
                </div>
                <div>
                    <div class="completion-badge voted">
                        <i class="lni lni-checkmark-circle me-2"></i>
                        Results Available
                    </div>
                </div>
            </div>
            <div class="category-body">
                <p class="category-description">{{ $category->description }}</p>
            </div>
        </div>

        <!-- Sectors under Category -->
        <div class="ps-md-5">
            <div class="judge-pagination mb-3">
                {{$categories->links()}}
            </div>

            @foreach ($category->sectors as $sector)
            <div class="sector-card">
                <div class="sector-header">
                    <h3 class="sector-name">
                        {{$sector->name}}
                        <span class="badge bg-soft-success text-success fs-6 fw-normal rounded-pill px-3 ms-2" style="background: #f0fdf4;">
                            {{ count($sector->awards) }} Awards
                        </span>
                    </h3>
                </div>
                
                <div class="awards-table-container">
                    <div class="table-responsive">
                        <table class="awards-table">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th style="width: 20%">Award Name</th>
                                    <th style="width: 25%">Description</th>
                                    <th style="width: 25%">Criteria</th>
                                    <th style="width: 25%; text-align: right;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sector->awards as $award)
                                @php
                                    $award->hashid = Hashids::connection('award')->encode($award->id);
                                    $index = $award->id;
                                @endphp
                                <tr>
                                    <td class="fw-bold text-muted">{{$loop->iteration}}</td>
                                    <td>
                                        <div class="award-name">{{$award->name}}</div>
                                    </td>
                                    <td>
                                        <div class="award-desc">
                                            @if(strlen($award->description) > 100)
                                                {{ substr($award->description, 0, 100) }}...
                                                <button class="read-more-btn" onClick="toggleReadMore('desc', {{$index}})" id="btn-desc-{{$index}}">View Details</button>
                                                <span id="detail-desc-{{$index}}" style="display:none">{{ substr($award->description, 100) }}</span>
                                            @else
                                                {{ $award->description }}
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="award-criteria">
                                            <button class="read-more-btn" data-name="{{ $award->name }}" data-index="{{ $index }}" onClick="openCriteriaModal(this)">
                                                <i class="lni lni-eye me-1"></i> View Criteria
                                            </button>
                                            <template id="criteria-template-{{$index}}">{!! $award->criteria !!}</template>
                                        </div>
                                    </td>
                                    <td style="text-align: right;">
                                        <a href="{{route('admin.view_nominess_awards_results',[request()->segment(3), $award->hashid])}}" class="vote-nominee-btn" style="background: linear-gradient(135deg, #059669 0%, #10b981 100%);">
                                            <i class="lni lni-pie-chart me-1"></i> View Results
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="judge-pagination mt-4">
                {{$categories->links()}}
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Criteria Modal -->
<div class="modal fade" id="criteriaModal" tabindex="-1" aria-labelledby="criteriaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(135deg, #059669 0%, #10b981 100%);">
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
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal">Close Window</button>
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
@endsection