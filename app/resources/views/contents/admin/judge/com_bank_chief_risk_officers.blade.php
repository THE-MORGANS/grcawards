@extends('layouts.admin.master')

@section('title', 'Awards')

@section('style')
<link href="{{asset('assets/css/criteria_redesign.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card crit-hero mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <a href="{{route('admin.load_judging_category_page', request()->segment(3))}}" class="crit-back-link">
                                <i class="mdi mdi-arrow-left"></i> Back to Judging Setup
                            </a>
                            <h2 class="crit-title">{{$awards[0]->awards->name}} Awards</h2>
                            <p class="crit-subtitle">Add Nominee Voting Criteria &middot; Award Year: {{$currentYear?->year ?? 'N/A'}}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-lg-end">
                                <div class="crit-stat">
                                    <div class="val">{{ count($awards) }}</div>
                                    <div class="lbl">Top Nominees</div>
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

                    <div class="crit-info-banner">
                        <i class="mdi mdi-information-outline"></i>
                        <span>Select a nominee below, then fill in their judging details. Judges will see this information when scoring.</span>
                    </div>

                    <form class="needs-validation" method="POST" action="{{route('admin.getNominessDetails',[request()->segment(3)])}}" id="form1">
                        @csrf
                        <div class="mb-2">
                            <label class="crit-select-label">Select the Nominee</label>
                            <select class="form-select crit-select nominee_awards @error('nominees') is-invalid @enderror" name="nominess" id="nominee_awards" onchange="form1.submit()">
                                <option id="init" value="">Please select...</option>
                                @foreach($awards as $award)
                                <option value="{{$award->id}}" @if(!empty($nominessDetails) && $nominessDetails->id == $award->id) selected @endif>{{$award->nominee->name}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="award_id" value="{{$awards[0]->award_id}}">
                            @error('category_name')
                            <span class="invalid-feedback d-block" role="alert"><strong>Select an award</strong></span>
                            @enderror
                        </div>

                        <div class="crit-summary-card">
                            @if($nominessDetails)
                                <span class="crit-summary-name">{{$nominessDetails->nominee->name}}</span>
                                <span class="crit-votes-badge">{{$nominessDetails->number_of_votes}} Votes</span>
                                <span class="crit-percentage-badge">{{number_format($nominessDetails->percentage_votes,2)}}%</span>
                            @else
                                <span class="crit-summary-empty">Select a nominee above to view their vote details and fill in judging criteria.</span>
                            @endif
                        </div>

                        <div class="crit-field-grid">
                            <div class="crit-field">
                                <label>Name</label>
                                <input class="form-control @error('names') is-invalid @enderror" @if(isset($nominessDetails->names)) value="{{$nominessDetails->names}}" @endif placeholder="Enter Name" type="text" name="names" />
                            </div>
                            <div class="crit-field">
                                <label>Title</label>
                                <input class="form-control @error('title') is-invalid @enderror" @if(isset($nominessDetails->title)) value="{{$nominessDetails->title}}" @endif placeholder="Title" type="text" name="title" />
                            </div>
                            <div class="crit-field is-full">
                                <label>Profile on LinkedIn</label>
                                <input class="form-control @error('profile_on_linkedIn') is-invalid @enderror" @if(isset($nominessDetails->profile_on_linkedIn)) value="{{$nominessDetails->profile_on_linkedIn}}" @endif placeholder="profile on linkedIn" type="text" name="profile_on_linkedIn" />
                            </div>
                            <div class="crit-field is-full">
                                <label>Recognised Professional Association Membership</label>
                                <input class="form-control @error('recognised_professional_association_membership') is-invalid @enderror" @if(isset($nominessDetails->recognised_professional_association_membership)) value="{{$nominessDetails->recognised_professional_association_membership}}" @endif placeholder="recognised professional association membership" type="text" name="recognised_professional_association_membership" />
                            </div>
                            <div class="crit-field is-full">
                                <label>Number of Independent Non Executive Directors</label>
                                <input class="form-control @error('number_of_independent_non_executive_directors') is-invalid @enderror" @if(isset($nominessDetails->number_of_independent_non_executive_directors)) value="{{$nominessDetails->number_of_independent_non_executive_directors}}" @endif placeholder="Number of independent non executive directors" type="text" name="number_of_independent_non_executive_directors" />
                            </div>
                            <div class="crit-field is-full">
                                <label>Board Committee in Place Covering Risk Management</label>
                                <input class="form-control @error('board_committee_in_place_covering_risk_management') is-invalid @enderror" @if(isset($nominessDetails->board_committee_in_place_covering_risk_management)) value="{{$nominessDetails->board_committee_in_place_covering_risk_management}}" @endif placeholder="Board committee in place covering risk management" type="text" name="board_committee_in_place_covering_risk_management" />
                            </div>
                            <div class="crit-field is-full">
                                <label>Evidence of Policy on Fin Crime Prevention</label>
                                <input class="form-control @error('evidence_of_policy_on_fin_crime_prevention') is-invalid @enderror" @if(isset($nominessDetails->evidence_of_policy_on_fin_crime_prevention)) value="{{$nominessDetails->evidence_of_policy_on_fin_crime_prevention}}" @endif placeholder="Evidence of policy on fin crime prevention" type="text" name="evidence_of_policy_on_fin_crime_prevention" />
                            </div>
                            <div class="crit-field">
                                <label>AML Policy/Framework in Place</label>
                                <input class="form-control @error('aml_policy') is-invalid @enderror" @if(isset($nominessDetails->aml_policy)) value="{{$nominessDetails->aml_policy}}" @endif placeholder="aml policy" type="text" name="aml_policy" />
                            </div>
                            <div class="crit-field">
                                <label>Documentations</label>
                                <input class="form-control @error('documentation') is-invalid @enderror" @if(isset($nominessDetails->documentation)) value="{{$nominessDetails->documentation}}" @endif placeholder="Documentation" type="text" name="documentation" />
                            </div>
                            <div class="crit-field is-full">
                                <label>Adverse Media</label>
                                <input class="form-control @error('adverse_media') is-invalid @enderror" @if(isset($nominessDetails->adverse_media)) value="{{$nominessDetails->adverse_media}}" @endif placeholder="adverse media" type="text" name="adverse_media" />
                                @error('adverse_media')
                                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="crit-footer">
                            <a href="{{route('admin.load_judging_category_page', request()->segment(3))}}" class="btn btn-outline-secondary">
                                <i class="mdi mdi-arrow-left me-1"></i> Return Back
                            </a>
                            <input type="submit" class="btn btn-primary" value="Update Nominee Information" name="submitButton">
                        </div>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
</div>
@endsection

@section('scripts')
@if(Session::has('success'))
<script>
    toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
    toastr.success("{{ session('success') }}");
</script>
@endif

@if(Session::has('danger'))
<script>
    toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
    toastr.error("{{ session('danger') }}");
</script>
@endif
@endsection
