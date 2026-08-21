@extends('layouts.admin.master')

@section('title', 'Awards')

@section('style')
<link href="{{asset('assets/css/nominees_redesign.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card nom-hero mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <a href="{{route('admin.load_judge_category_page',request()->segment(3))}}" class="nom-back-link">
                                <i class="mdi mdi-arrow-left"></i> Return to Judging
                            </a>
                            <h2 class="nom-title">Nominees for <span style="color:#c9cff6">{{ $awards[0]->awards->name }} Awards</span></h2>
                            <p class="nom-subtitle">Judges Voting System &middot; Award Year: {{$currentYear?->year ?? 'N/A'}}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-lg-end">
                                <div class="nom-stat">
                                    <div class="val">{{ count($awards) }}</div>
                                    <div class="lbl">Nominees</div>
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

                    <div class="nom-info-banner">
                        <i class="mdi mdi-information-outline"></i>
                        <span>Score each nominee from <strong>1&ndash;10</strong>. Every nominee must be scored before you can submit.</span>
                    </div>

                    <form class="needs-validation" method="POST" action="{{ route('admin.StoreNominessVotes', [request()->segment(3)]) }}" id="form1">
                        @csrf
                        <div class="nom-table-wrap">
                        <div class="table-responsive">
                            <table class="nominees-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">Nominee Name</th>
                                        <th style="width: 5%">Votes</th>
                                        <th style="width: 5%">%</th>
                                        <th style="width: 10%">Title</th>
                                        <th style="width: 10%">LinkedIn</th>
                                        <th style="width: 10%">Assoc. Membership</th>
                                        <th style="width: 10%">Ind. Directors</th>
                                        <th style="width: 10%">Risk Committee</th>
                                        <th style="width: 10%">Prevention Policy</th>
                                        <th style="width: 10%">AML Policy</th>
                                        <th style="width: 5%">Adverse Media</th>
                                        <th style="width: 5%">Judges Votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($awards as $awp)
                                    <tr>
                                        <td class="nominee-name-cell">{{ $awp->nominee?->name }}</td>
                                        <td><span class="votes-badge">{{ $awp->number_of_votes }}</span></td>
                                        <td><span class="percentage-badge">{{ number_format($awp->percentage_votes, 2) }}%</span></td>
                                        <td class="data-cell">{{ $awp->title }}</td>
                                        <td class="data-cell">
                                            @if($awp->profile_on_linkedIn)
                                                <a href="{{ $awp->profile_on_linkedIn }}" target="_blank">View Profile</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td class="data-cell">{{ $awp->recognised_professional_association_membership }}</td>
                                        <td class="data-cell">{{ $awp->number_of_independent_non_executive_directors }}</td>
                                        <td class="data-cell">{{ $awp->board_committee_in_place_covering_risk_management }}</td>
                                        <td class="data-cell">{{ $awp->evidence_of_policy_on_fin_crime_prevention }}</td>
                                        <td class="data-cell">{{ $awp->aml_policy }}</td>
                                        <td class="data-cell">{{ $awp->adverse_media }}</td>
                                        <td>
                                            <div class="voting-input-wrapper">
                                                <input type="number" name="judges_votes[]" class="voting-input" placeholder="0" min="1" max="10" required>
                                                <span class="voting-hint">Score (1-10)</span>
                                                <input type="hidden" name="nominee_ids[]" value="{{ $awp->nominee_id }}">
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <input type="hidden" name="award_id" value="{{ $awards[0]->award_id }}">
                            </table>
                        </div>
                        </div>

                        <div class="nom-footer">
                            <a href="{{route('admin.load_judge_category_page',request()->segment(3))}}" class="btn btn-outline-secondary">
                                <i class="mdi mdi-arrow-left me-1"></i> Return Back
                            </a>
                            <button type="submit" class="btn btn-primary" name="submitButton">
                                <i class="mdi mdi-check-circle-outline me-1"></i> Submit Awards Votes
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
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
