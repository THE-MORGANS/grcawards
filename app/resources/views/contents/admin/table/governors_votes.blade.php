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

                    <form class="needs-validation" method="POST" action="{{route('admin.StoreNominessVotes',[request()->segment(3)])}}" id="form1">
                        @csrf
                        <div class="nom-table-wrap">
                        <div class="table-responsive">
                            <table class="nominees-table">
                                <thead>
                                    <tr>
                                        <th style="width: 20%">Nominee Name</th>
                                        <th style="width: 10%">Votes</th>
                                        <th style="width: 10%">Percentage</th>
                                        <th style="width: 25%">Achievements</th>
                                        <th style="width: 20%">Adverse Media</th>
                                        <th style="width: 15%">Judges Votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($awards as $awp)
                                    <tr>
                                        <td class="nominee-name-cell">{{ $awp->nominee?->name }}</td>
                                        <td><span class="votes-badge">{{ $awp->number_of_votes }}</span></td>
                                        <td><span class="percentage-badge">{{ number_format($awp->percentage_votes, 2) }}%</span></td>
                                        <td class="data-cell">{{ $awp->Achievements }}</td>
                                        <td class="data-cell">{{ $awp->adverse_media }}</td>
                                        <td>
                                            <div class="voting-input-wrapper">
                                                <input type="number" name="judges_votes[]" class="voting-input" placeholder="0" min="1" max="10" required>
                                                <span class="voting-hint">Score (1-10)</span>
                                                <input type="hidden" name="nominee_ids[]" value="{{$awp->nominee_id}}">
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <input type="hidden" name="award_id" value="{{$awards[0]->award_id}}">
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
