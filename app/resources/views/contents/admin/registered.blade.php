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
                                <h4 class="header-title mb-4">Summit Registered  Users - <span style="color:red">
                                    Total Registered: {{count($registered)}}
                                    </span>
                                  </h4>
                            </div>
                            <div class="col-12 text-end"> 
                     
                        </div>
                        </div>
                        {{-- <form class="needs-validation" method="POST"
                            action="{{ route('admin.StoreNominessVotes', [request()->segment(3)]) }}" id="form1">
                            @csrf --}}
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-responsive  table-striped  table-bordered ">
                                                <thead>
                                                    <tr >
                                                        {{-- <th> Award Name</th> --}}
                                                        <th style=" min-width: 150px;" >First Name</th>
                                                        <th style=" min-width: 150px;">Last Name </th>
                                                        <th style=" min-width: 150px;">Email</th>
                                                        <th style=" min-width: 150px;">Phone</th>
                                                        <th style=" min-width: 150px;">Company</th>
                                                        <th style=" min-width: 150px;">Designated role</th>
                                                        <th style=" min-width: 150px;">Did you nominate your firm for any award? </th>
                                                        <th style=" min-width: 150px;">(If No,) Why?</th>
                                                        <th style=" min-width: 150px;">How did you hear about the Summit/Awards</th>
                                                        <th style=" min-width: 150px;">What’re your expectations for the Summit/Awards </th>
                                                        <th style=" min-width: 400px;">Are you interested in being a Speaker/ Contributor/ Partner for next years Summit & Awards? (Yes/No)-</th>
                                                        
                                                       <th>Date Registered</th>
                                                    {{--  <th>20% votes</th>
                                                    <th>Overall Score</th> --}}
                                                   
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($registered as $awp)
                                                        <tr>
                                                            {{-- <td style="color:red; font-weight:600;min-width: 250px ">  {{$awp->awards->name}} Awards</td> --}}
                                                            <td style=" min-width: 150px;"> {{ $awp->first_name }}</td>
                                                            <td> {{ $awp->last_name }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->email }} </td>
                                                                <td style=" min-width: 450px;">
                                                                    {{ $awp->phone }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->company }} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->role}} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->award}} </td>
                                                                <td style=" min-width: 450px;">
                                                                    {{ $awp->reason}} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->about_us}} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->expectation}} </td>
                                                            <td style=" min-width: 450px;">
                                                                {{ $awp->speaker }} </td>
                                                                <td style=" min-width: 450px;">
                                                                    {{ $awp->created_at->diffForHumans() }} </td>
                                                           
                                                          
                                            
                                                            {{-- <td>   {{$awp->eight_percent_score}} </td>
                                                     <td>   {{$awp->twenty_percent_votes}} </td>
                                                     <td>   {{$awp->overall_core}} </td>
                                                     <td>   {{$awp->number_of_votes}} </td> --}}
                                                        </tr>
                                                    @endforeach
                                                   
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                              
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
