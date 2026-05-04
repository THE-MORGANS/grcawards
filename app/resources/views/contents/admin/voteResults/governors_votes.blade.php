@extends('layouts.admin.master')

@section('title', 'Award Results')

@section('style')
<link href="{{asset('assets/css/judges_redesign.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-icons/4.0/line-icons.css" />
<style>
    .results-table td { font-size: 0.85rem; padding: 1.25rem 1rem; }
    .results-table th { white-space: nowrap; background: #f8fafc !important; }
    .winner-badge {
        background: #ecfdf5;
        color: #059669;
        padding: 0.4rem 1rem;
        border-radius: 9999px;
        font-weight: 700;
        font-size: 0.75rem;
        text-transform: uppercase;
        border: 1px solid #10b98133;
    }
    .overall-score { font-weight: 800; color: #ef4444; font-size: 1.1rem; }
    .score-cell { font-weight: 600; color: #475569; }
</style>
@endsection

@section('content')
<div class="judges-container">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between p-4 bg-white rounded-4 shadow-sm">
                <div class="d-flex align-items-center">
                    <div class="avatar-md bg-soft-primary rounded-3 d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; background: #eef2ff;">
                        <i class="lni lni-bar-chart text-primary fs-3"></i>
                    </div>
                    <div>
                        <h4 class="mb-0 fw-bold">Calculated Results</h4>
                        <p class="text-muted mb-0">Award: <span class="fw-bold text-dark">{{ $awards[0]->awards->name }}</span></p>
                    </div>
                </div>
                <div>
                    <a href="{{ url()->previous() }}" class="btn btn-light rounded-pill px-4 fw-bold text-muted border">
                        <i class="lni lni-arrow-left me-1"></i> Back to Overview
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="category-card border-0 shadow-sm">
        <div class="category-header py-3 px-4" style="background: var(--sector-gradient);">
            <h3 class="category-title fs-4">Nominee Rankings</h3>
        </div>
        <div class="category-body p-0">
            <div class="table-responsive">
                <table class="awards-table results-table mb-0">
                    <thead>
                        <tr>
                            <th>Nominee Name</th>
                            <th>Votes Cast</th>
                            <th>Votes %</th>
                            <th>Achievements</th>
                            <th>Adverse Media</th>
                            <th>Judges Total</th>
                            <th>Judges %</th>
                            <th>80% Weight</th>
                            <th>20% Weight</th>
                            <th class="text-center" style="background: #fef2f2 !important; color: #991b1b;">Overall Score</th>
                            <th class="text-end">Final Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($awards as $awp)
                        <tr class="{{ $awp->status == 'WINNER' ? 'bg-soft-success' : '' }}">
                            <td class="fw-bold text-dark">{{ $awp->nominee?->name }}</td>
                            <td class="score-cell">{{ $awp->number_of_votes }}</td>
                            <td class="score-cell">{{ number_format($awp->percentage_votes, 2) }}%</td>
                            <td style="min-width: 300px; max-width: 450px;" class="text-muted small">{{ $awp->Achievements }}</td>
                            <td style="min-width: 300px; max-width: 450px;" class="text-muted small">{{ $awp->adverse_media }}</td>
                            <td class="score-cell">{{ array_sum(json_decode($awp->judges_votes)) }}</td>
                            <td class="score-cell">{{ number_format($awp->total_of_judges_score_converted_to_percentage, 2) }}%</td>
                            <td class="score-cell">{{ number_format($awp->eighty_percent_of_judges_score, 2) }}%</td>
                            <td class="score-cell">{{ number_format($awp->twenty_percent_votes, 2) }}%</td>
                            <td class="text-center">
                                <span class="overall-score">{{ number_format($awp->overall_score, 2) }}%</span>
                            </td>
                            <td class="text-end">
                                @if ($awp->status == 'WINNER')
                                    <span class="winner-badge">
                                        <i class="lni lni-crown me-1"></i> WINNER
                                    </span>
                                @else
                                    <span class="badge bg-light text-muted border fw-normal">{{ $awp->status }}</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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
