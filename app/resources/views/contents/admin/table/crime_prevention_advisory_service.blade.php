@extends('layouts.admin.master')

@section('title', 'Awards')

@section('style')
<link href="{{asset('assets/css/nominees_redesign.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-icons/4.0/line-icons.css" />
@endsection

@section('content')
<div class="nominees-container">
    <!-- Header Section -->
    <div class="nominees-header">
        <div>
            <h1 class="award-title">Judges Voting System</h1>
            <p class="text-muted mb-0">Award Year: <span class="fw-bold text-dark">{{$currentYear?->year ?? 'N/A'}}</span></p>
        </div>
        <div class="text-end">
            <h4 class="mb-0 fw-bold">Nominees for <span class="award-highlight">{{ $awards[0]->awards->name }} Awards</span></h4>
        </div>
    </div>

    <!-- Table Card -->
    <div class="nominees-card">
        <form class="needs-validation" method="POST" action="{{route('admin.StoreNominessVotes',[request()->segment(3)])}}" id="form1">
            @csrf
            <div class="table-responsive">
                <table class="nominees-table">
                    <thead>
                        <tr>
                            <th style="width: 12%">Nominee Name</th>
                            <th style="width: 5%">Votes</th>
                            <th style="width: 5%">%</th>
                            <th style="width: 15%">Service Profile</th>
                            <th style="width: 15%">Innovation & Leadership</th>
                            <th style="width: 12%">Clients</th>
                            <th style="width: 10%">Client Rating</th>
                            <th style="width: 10%">Affiliations</th>
                            <th style="width: 10%">Judges Votes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($awards as $awp)
                        <tr>
                            <td class="nominee-name-cell">{{ $awp->nominee?->name }}</td>
                            <td><span class="votes-badge">{{ $awp->number_of_votes }}</span></td>
                            <td><span class="percentage-badge">{{ number_format($awp->percentage_votes, 2) }}%</span></td>
                            <td class="data-cell small text-muted">{{ $awp->profile_of_the_advisory_service_provider }}</td>
                            <td class="data-cell small text-muted">{{ $awp->evidence_of_innovative_ways_of_promoting }}</td>
                            <td class="data-cell small text-muted">{{ $awp->clients_of_advisory_services }}</td>
                            <td class="data-cell small text-muted">{{ $awp->client_rating_of_advisory_service_provide }}</td>
                            <td class="data-cell small text-muted">{{ $awp->affiliations }}</td>
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

            <!-- Footer Actions -->
            <div class="p-4 bg-white nominees-footer">
                <a href="{{route('admin.load_judge_category_page',request()->segment(3))}}" class="btn-back">
                    <i class="lni lni-arrow-left"></i> Return Back
                </a>
                <button type="submit" class="btn-submit-votes" name="submitButton">
                    <i class="lni lni-checkmark-circle me-1"></i> Submit Awards Votes
                </button>
            </div>
        </form>
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
