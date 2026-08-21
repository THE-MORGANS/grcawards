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
                            <div class="crit-field is-full">
                                <label>Achievements</label>
                                <input class="form-control @error('Achievements') is-invalid @enderror" @if(isset($nominessDetails->Achievements)) value="{{$nominessDetails->Achievements}}" @endif placeholder="Achievements" type="text" name="Achievements" />
                            </div>
                            <div class="crit-field is-full">
                                <label>Adverse Media</label>
                                <input class="form-control @error('adverse_media') is-invalid @enderror" @if(isset($nominessDetails->adverse_media)) value="{{$nominessDetails->adverse_media}}" @endif placeholder="adverse_media" type="text" name="adverse_media" />
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
