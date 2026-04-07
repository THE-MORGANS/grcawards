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
                            <th style="width: 8%">Employees Rated</th>
                            <th style="width: 10%">Worklife Balance</th>
                            <th style="width: 10%">Comp. & Benefits</th>
                            <th style="width: 10%">Security & Adv.</th>
                            <th style="width: 10%">Management</th>
                            <th style="width: 10%">Culture</th>
                            <th style="width: 10%">Avg Rating</th>
                            <th style="width: 10%">Judges Votes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($awards as $awp)
                        <tr>
                            <td class="nominee-name-cell">{{ $awp->nominee?->name }}</td>
                            <td><span class="votes-badge">{{ $awp->number_of_votes }}</span></td>
                            <td><span class="percentage-badge">{{ number_format($awp->percentage_votes, 2) }}%</span></td>
                            <td class="data-cell small text-muted">{{ $awp->No_of_employees_who_rated }}</td>
                            <td class="data-cell small text-muted">{{ $awp->worklife_balance }}</td>
                            <td class="data-cell small text-muted">{{ $awp->pay_and_benefits }}</td>
                            <td class="data-cell small text-muted">{{ $awp->job_security_and_advancement }}</td>
                            <td class="data-cell small text-muted">{{ $awp->management }}</td>
                            <td class="data-cell small text-muted">{{ $awp->culture }}</td>
                            <td class="data-cell small text-muted">{{ $awp->average_rating }}</td>
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

        