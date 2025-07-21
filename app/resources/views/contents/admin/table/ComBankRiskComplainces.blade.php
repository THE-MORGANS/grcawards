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
                        <h4 style="display: block;">Award Year {{$currentYear?->year}}</h4>
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
                                <h4 class="header-title mb-4">Add Judges Votes for <span style="color:red">
                                        {{ $awards[0]->awards->name }} Awards </span> </h4>
                            </div>
                            {{-- <div class="col-12 text-end"> 
                            <button type="button" id="add-field" class="btn btn-success btn-sm">
                                <i class="mdi mdi-plus mdi-24px"></i>
                            </button>
                        </div> --}}
                        </div>
                        <form class="needs-validation" method="POST" action="{{route('admin.StoreNominessVotes',[request()->segment(3)])}}"  id="form1">
                            @csrf
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-responsive table-hover table-striped  table-bordered mb-0">
                                                <thead>
                                                    <tr style="background:yellow;">
                                                        {{-- <th> Award Name</th> --}}
                                                        <th>Nominee Name</th>
                                                        <th>Number of vote </th>
                                                        <th>Percentage votes</th>
                                                        <th>Board Composition - Number of independent non-executive directors and board committees in place covering Risk & Compliance</th>
                                                        <th>Policies and Framework in place enhancing Customer Experience (Evidence of process in place to oversee complaints handling system & Treating Customers Fairly)</th>
                                                        <th>Additional Information (If any) </th>
                                                        <th>Adverse Media </th>
                                                        {{-- <th>80% score</th>
                                                    <th>20% votes</th>
                                                    <th>Overall Score</th> --}}
                                                        <th style="background: green; color:#fff">Judges Votes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($awards as $awp)
                                                        <tr>
                                                            {{-- <td style="color:red; font-weight:600;min-width: 250px ">  {{$awp->awards->name}} Awards</td> --}}
                                                            <td style=" min-width: 150px;"> {{ $awp->nominee->name }}</td>
                                                            <td> {{ $awp->number_of_votes }} </td>
                                                            <td>{{ number_format($awp->percentage_votes, 2) }}% </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->board_composition }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->policies_and_framework_in_place_enhancing_customer_experience }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->additional_information }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->adverse_media}} </td>
                                                            <td style=" min-width: 450px;">
                                                            <input type="text" name="judges_votes[]" placeholder="Enter Vote">
                                                            <small>Enter Vote betweeen 1 - 10</small> </td>
                                                            <input type="hidden" name="nominee_ids[]" value="{{$awp->nominee_id}}">  
                                                            
                                                            {{-- <td>   {{$awp->eight_percent_score}} </td>
                                                     <td>   {{$awp->twenty_percent_votes}} </td>
                                                     <td>   {{$awp->overall_core}} </td>
                                                     <td>   {{$awp->number_of_votes}} </td> --}}
                                                        </tr>
                                                    @endforeach
                                                    <input type="hidden" name="award_id" value="{{$awards[0]->award_id}}">
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('admin.load_judge_category_page',request()->segment(3))}}"> Return Back</a>
                                </div>
                                <div class="col-6 text-end">
                                    <input type="submit" class="btn btn-success" value="Submit Votes for this Awards" name="submitButton">
                                </div>
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
