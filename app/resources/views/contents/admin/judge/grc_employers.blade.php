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
                            <h4 class="header-title mb-4">Add Awards Nominee Judging Criteria for {{$awards[0]->awards->name}} Awards</h4>
                        </div>
                        {{-- <div class="col-12 text-end">
                            <button type="button" id="add-field" class="btn btn-success btn-sm">
                                <i class="mdi mdi-plus mdi-24px"></i>
                            </button>
                        </div> --}}
                    </div>
                    <form class="needs-validation" method="POST" action="{{route('admin.getNominessDetails',[request()->segment(3)])}}"  id="form1">
                        @csrf
                        <div class="row" id="create-form-row">
                            <div class="col-12">
                                <div class="mb-3">
                                    {{-- {{dd($awards[2]->nominee)}} --}}
                                    <label class="control-label form-label">Select the Nominee</label>
                                    <select class="form-select nominee_awards @error('nominees') is-invalid @enderror" value="" name="nominess" id="nominee_awards" onchange="form1.submit()">
                                        <option id="init" value="">Please select...</option>
                                        @foreach($awards as $award)
                                       
                                        <option value="{{$award->id}}" @if(!empty($nominessDetails) && $nominessDetails->id == $award->id) selected @endif >{{$award?->nominee?->name}}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="award_id" value="{{$awards[0]->award_id}}"> 
                                    @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> select an Award</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 p-2 ">
                               
                                <table class="table table-responsive  table-bordered mt-2 mb-4">
                                    <tr >
                                        <th style="background:green; color:#fff">Nominee Name</th>
                                        <th style="background:green; color:#fff"> Number of Votes</th>
                                        <th style="background:green; color:#fff"> Vote Percentage </th>
                                    </tr>
                                   
                                    @if($nominessDetails)
                                    <tr>
                                        <td>
                                          {{$nominessDetails->nominee->name}}
                                        </td>
                                        <td>
                                       {{$nominessDetails->number_of_votes}}
                                        </td>
                                        <td>
                                        {{number_format($nominessDetails->percentage_votes,2)}}%
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td>Select Nominee to display information</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @endif

                                   </table>
                                
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">No of employees who rated</label>
                                    <input class="form-control @error('No_of_employees_who_rated') is-invalid @enderror"  @if(isset($nominessDetails->No_of_employees_who_rated)) value="{{$nominessDetails->No_of_employees_who_rated}}" @endif placeholder="No of employees who rated" type="text" name="No_of_employees_who_rated"  />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Worklife Balance</label>
                                    <input class="form-control @error('worklife_balance') is-invalid @enderror"  @if(isset($nominessDetails->worklife_balance)) value="{{$nominessDetails->worklife_balance}}" @endif placeholder="worklife balance" type="text" name="worklife_balance"  />
                                   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Pay and benefits</label>
                                    <input class="form-control @error('pay_and_benefits') is-invalid @enderror" @if(isset($nominessDetails->pay_and_benefits)) value="{{$nominessDetails->pay_and_benefits}}" @endif placeholder="pay and benefits" type="text" name="pay_and_benefits"  />
                                   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Job security and advancement</label> 
                                    <input class="form-control @error('job_security_and_advancement') is-invalid @enderror" @if(isset($nominessDetails->job_security_and_advancement)) value="{{$nominessDetails->job_security_and_advancement}}" @endif  placeholder="job security and advancement" type="text" name="job_security_and_advancement"  />
                                   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Management</label> 
                                    <input class="form-control @error('management') is-invalid @enderror" @if(isset($nominessDetails->management)) value="{{$nominessDetails->management}}" @endif  placeholder="management" type="text" name="management"  />
                                   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Culture</label> 
                                    <input class="form-control @error('culture') is-invalid @enderror" @if(isset($nominessDetails->culture)) value="{{$nominessDetails->culture}}" @endif  placeholder="culture" type="text" name="culture"  />
                                   
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Average Rating</label> 
                                    <input class="form-control @error('average_rating') is-invalid @enderror" @if(isset($nominessDetails->average_rating)) value="{{$nominessDetails->average_rating}}" @endif  placeholder="average_rating" type="text" name="average_rating"  />
                                   
                                </div>
                            </div>
                            
                            
                          
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{route('admin.load_judging_category_page', request()->segment(3))}}"> Return Back</a>
                            </div>
                            <div class="col-6 text-end">
                                <input type="submit" class="btn btn-success" value="Update Nominee information" name="submitButton">
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
        //         url: "{{url('judges/nominess',"")}}"+nominees,
        //         url: "{{route('admin.getNominessDetails','')}}"+222,
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

        @if(Session::has('success'))
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

        @if(Session::has('danger'))
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