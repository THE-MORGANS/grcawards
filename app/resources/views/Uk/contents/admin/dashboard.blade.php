@extends('layouts.admin.master')

@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid">
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
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Voters</h6>
                    <h2 class="my-2" id="active-users-count">{{count($voters)}}</h2>
                    <p class="mb-0 text-muted">
                        {{--<span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span> --}}
                        {{-- <span class="text-nowrap">Since last month</span> --}}
                    </p>
                </div> <!-- end card-body-->
            </div>
        </div> 

        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='mdi mdi-vote-outline float-end'></i>
                    <h6 class="text-uppercase mt-0">Votes</h6>
                    <h2 class="my-2" id="active-users-count">{{count($votes)}}</h2>
                    <p class="mb-0 text-muted">
                        {{-- <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span>
                            5.27%</span>
                        <span class="text-nowrap">Since last month</span> --}}
                    </p>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Categories</h6>
                    <h2 class="my-2" id="active-users-count">{{count($category)}}</h2>
                    <div class="row">
                        {{-- <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-danger-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Inactive</span>
                        </p>
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-success-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Active</span>
                        </p> --}}
                    </div>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Sectors</h6>
                    <h2 class="my-2" id="active-users-count">{{count($sector)}}</h2>
                    <div class="row">
                        {{-- <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-danger-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Inactive</span>
                        </p>
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-success-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Active</span>
                        </p> --}}
                    </div>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Awards</h6>
                    <h2 class="my-2" id="active-users-count">{{count($awards)}}</h2>
                    <div class="row">
                        {{-- <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-danger-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Inactive</span>
                        </p>
                        <p class="mb-0 text-muted col-sm-6">
                            <span class="badge badge-success-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Active</span>
                        </p> --}}
                    </div>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Nominees</h6>
                    <h2 class="my-2" id="active-users-count">{{count($nominees)}}</h2>
                    <div class="row">
                        {{-- <p class="mb-0 text-muted">
                            <span class="badge badge-success-lighten me-1">
                                5</span>
                            <span class="text-nowrap">Shortlisted</span>
                        </p> --}}

                    </div>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <a href="#" class="p-0 float-end">Export <i class="mdi mdi-download ms-1"></i></a> --}}
                    <h4 class="header-title mt-1 mb-3">Recent Votes</h4>

                    <div class="table-responsive">
                        <table class="table table-sm table-centered mb-0 font-14">
                            <thead class="table-light">
                                <tr>
                                    <th> Email</th>
                                    <th>Location</th>
                                    <th>Date Voted</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                @forelse ($voters_pg as $item)
                                <tr>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        {{-- @php $details = json_decode(file_get_contents("http://ipinfo.io/$item->ip_address/json"));
                                      echo $details->city.", ".$details->country; 
                                     @endphp --}}
                                    </td>
                                    <td>{{$item->created_at->diffForHumans()}}</td>
                                </tr>
                                @empty
                                    
                                @endforelse
                           
                            </tbody>
                        </table>
                        <p> {{$voters_pg->links()}}</p>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- demo app -->
<script src="assets/js/pages/demo.dashboard-analytics.js"></script>
<!-- end demo js-->
@endsection