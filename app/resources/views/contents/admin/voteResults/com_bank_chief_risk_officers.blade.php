@extends('layouts.admin.master')

@section('title', 'Awards')


@section('content')
    <div class="container">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box" style="margin-top: 20px; margin-bottom: 20px;">

                    <div class="page-title">
                        <div style="width: 55px;float: left;height: 55px;background: turquoise;margin-right: 15px;">
                        </div>
                        <h4 style="display: block;">Award Year 2024</h4>
                        <h4 style="display: block;" class=" text-muted fw-normal mt-0 mb-0">
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="header-title mb-4">Results for <span style="color:red">
                                        {{ $awards[0]->awards->name }} Awards </span> </h4>
                            </div>
                            {{-- <div class="col-12 text-end"> 
                            <button type="button" id="add-field" class="btn btn-success btn-sm">
                                <i class="mdi mdi-plus mdi-24px"></i>
                            </button>
                        </div> --}}
                        </div>
                        <form class="needs-validation" method="POST"
                            action="{{ route('admin.StoreNominessVotes', [request()->segment(3)]) }}" id="form1">
                            @csrf
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-responsive  table-striped  table-bordered mb-0">
                                                <thead>
                                                    <tr style="background:yellow;">
                                                        {{-- <th> Award Name</th> --}}
                                                        <th>Nominee Name</th>
                                                        <th>Number of vote </th>
                                                        <th>Percentage votes</th>
                                                        <th>Name</th>
                                                        <th>Title</th>
                                                        <th>Profile on linkedIn</th>
                                                        <th>Recognised professional association membership</th>
                                                        <th>Board committee in place covering risk management</th>
                                                        <th>Evidence of policy on fin crime_prevention</th>
                                                        <th>AML Policy/Framework in Place</th>
                                                        <th>Documentation</th>
                                                        <th>Total Judges Votes</th>
                                                        <th>Total of judges score converted to percentage</th>
                                                        <th>80% of judges score</th>
                                                        <th>20% of Votes Cast</th>
                                                        <th style="background:red; color:#fff">Overall Score</th>
                                                        <th style="background: green; color:#fff">Results</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($awards as $awp)
                                                        <tr>
                                                            {{-- <td style="color:red; font-weight:600;min-width: 250px ">  {{$awp->awards->name}} Awards</td> --}}
                                                            <td style=" min-width: 150px;"> {{ $awp->nominee?->name }}</td>
                                                            <td> {{ $awp->number_of_votes }} </td>
                                                            <td>{{ number_format($awp->percentage_votes, 2) }}% </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->names }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->title }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->profile_on_linkedIn}} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->recognised_professional_association_membership}} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->board_committee_in_place_covering_risk_management}} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->evidence_of_policy_on_fin_crime_prevention}} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->aml_policy }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->documentation}} </td>
                                                                <td style=" min-width: 250px;">
                                                                    {{ array_sum(json_decode($awp->judges_votes)) }} 
                                                                </td>
                                                                <td style=" min-width: 250px;">
                                                                    {{ number_format($awp->total_of_judges_score_converted_to_percentage, 2) }}%
                                                                </td>
                                                                <td style=" min-width: 250px;">
                                                                    {{ number_format($awp->eighty_percent_of_judges_score, 2) }}%
                                                                </td>
                                                                <td style=" min-width: 250px;">
                                                                    {{ number_format($awp->twenty_percent_votes, 2) }}% </td>
                                                                <td style=" min-width: 250px; color:red; font-weight:600">
                                                                    {{ number_format($awp->overall_score, 2) }}%</td>
                                                                <td style=" min-width: 250px;">
                                                                    @if ($awp->status == 'WINNER')
                                                                        <span style="color:green; font-weight:700">
                                                                            {{ $awp->status }}</span>
                                                                    @else
                                                                        {{ $awp->status }}
                                                                    @endif
                                                                </td></tr>
                                                    @endforeach
                                                    <input type="hidden" name="award_id"
                                                        value="{{ $awards[0]->award_id }}">
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                {{-- <div class="col-6 text-end">
                                    <input type="submit" class="btn btn-success" value="Submit Votes for this Awards"
                                        name="submitButton">
                                </div> --}}
                            </div>
                        </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->


        @endsection

        @section('scripts')

            <script>
                // var nominees = $("select[id=nominee_awards]").val();
                // var nominees = $('.nominee_awards').val();
                // alert($('.nominee_awards').val())
                // $('#nominee_awards').on('change', function(){
                //         jQuery.ajax({
                //         url: "{{ url('judges/nominess', '') }}"+nominees,
                //         url: "{{ route('admin.getNominessDetails', '') }}"+222,
                //         type:'get',
                //         cache: false,
                //         success: function(data){
                //             console.log(data)
                //            $("select[id=sector_name]").html(html);
                //            $("select[id=sector_name]").removeAttr('disabled');
                //         },
                //     });
                // })
            </script>


            {{-- <script src="{{asset('assets/js/pages/award.js')}}"></script> --}}

            @if (Session::has('success'))
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "preventDuplicates": true,
                        "preventOpenDuplicates": true
                    }
                    toastr.success("{{ session('success') }}");
                </script>
            @endif

            @if (Session::has('danger'))
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "preventDuplicates": true,
                        "preventOpenDuplicates": true
                    }
                    toastr.error("{{ session('danger') }}");
                </script>
            @endif
        @endsection
