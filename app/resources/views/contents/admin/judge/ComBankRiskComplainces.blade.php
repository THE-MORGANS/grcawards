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
                                    <label class="control-label form-label">Select the Nominee</label>
                                    <select class="form-select nominee_awards @error('nominees') is-invalid @enderror" value="" name="nominess" id="nominee_awards" onchange="form1.submit()">
                                        <option id="init" value="">Please select...</option>
                                        @foreach($awards as $award)
                                        <option value="{{$award->id}}" @if(!empty($nominessDetails) && $nominessDetails->id == $award->id) selected @endif >{{$award->nominee->name}}</option>
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
                            <div class="col-12 pt-4">
                                <div class="mb-3">
                                    <label class="control-label form-label"> Board Composition - Number of independent non-executive directors and board committees in place covering Risk & Compliance</label>
                                    <input class="form-control @error('board_composition') is-invalid @enderror"  @if(isset($nominessDetails->board_composition)) value="{{$nominessDetails->board_composition}}" @endif placeholder="board composition" type="text" name="board composition" />
                                    @error('board_composition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Policies and framework in place enhancing customer experience</label>
                                    <input class="form-control @error('policies_and_framework_in_place_enhancing_customer_experience') is-invalid @enderror"  @if(isset($nominessDetails->policies_and_framework_in_place_enhancing_customer_experience)) value="{{$nominessDetails->policies_and_framework_in_place_enhancing_customer_experience}}" @endif placeholder="policies and framework in place enhancing customer experience" type="text" name="policies_and_framework_in_place_enhancing_customer_experience"  />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Additional Information</label>
                                    <input class="form-control @error('additional_information') is-invalid @enderror" @if(isset($nominessDetails->additional_information)) value="{{$nominessDetails->additional_information}}" @endif placeholder="additional information" type="text" name="additional_information"  />
                                    @error('additional_information')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Adverse Media</label> 
                                    <input class="form-control @error('award_name') is-invalid @enderror" @if(isset($nominessDetails->adverse_media)) value="{{$nominessDetails->adverse_media}}" @endif  placeholder="adverse media" type="text" name="adverse_media"  />
                                    @error('adverse_media')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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