@extends('layouts.admin.master')

@section('title', 'Judgesphp congif clear')


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
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Add Judge</h4>
                    <form class="needs-validation" method="POST" action="{{route('admin.create_judges', $award_program)}}" name="add-judge-form" id="add-judge-form">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Judge Full Name</label>
                                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" placeholder="John Doe" name="fullname" id="judge_fullname" required autocomplete="off" />
                                    @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Judge Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Judge Mail Address" name="email" id="judge_email" required autocomplete="off" />
                                    @error('judge_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Position</label>
                                    <textarea name="position"  class="form-control @error('position') is-invalid  @enderror"  cols="30" rows="10"></textarea>
                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Profile</label>
                                    <textarea name="profile" class="form-control @error('profile') is-invalid  @enderror" id="" cols="30" rows="10"></textarea>
                                    @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Judge Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="judge_password" required autocomplete="off" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>  
                        </div>

                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-6 text-end">
                                <button type="submit" class="btn btn-success" id="btn-save-category">Register Judge</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Judges</h4>

                    <div class="table-responsive">
                        <table class="table table-centered w-100 dt-responsive nowrap" id="categories-datatable">
                            <thead class="table-light">
                                <tr>
                                    <th>S/N</th>
                                    <th class="all">Name</th>
                                    <th class="all">Email</th>

                                    <th class="all">Awards Voted</th>
                                    <th class="all">Postion</th>
                                    <th class="all">Profile</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($judges as $judge)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    
                                    <td>
                                        {{$judge->name}}
                                    </td>
                                    <td>
                                        {{$judge->email}}
                                    </td>
                                    <td>
                                       {{count($judge->judges_votes($judge->admin_id))}}
                                    </td>
                                  
                                    <td>
                                        {{$judge->position}}
                                    </td>
                                    <td class="">
                                        @php
                                            $profile = substr($judge->profile,0,50).'...';
                                        @endphp
                                        {{$profile}}
                                    </td>
                                    <td class="table-action">
                                        <a href="{{route('admin.get_judges', $award_program)}}" class="action-icon" data-action="edit" data-id="{{$judge->hashid}}" data-name="{{$judge->name}}" data-desc="{{$judge->profile}}" data-bs-toggle="modal" data-bs-target="#edit-judge-modal{{$judge->id}}"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        {{-- <a href="{{route('admin.get_judges', $award_program)}}" class="action-icon" data-action="delete" data-id="{{$judge->hashid}}" data-bs-toggle="modal" data-bs-target="#delete-alert-modal"> <i class="mdi mdi-delete"></i></a> --}}
                                    </td>
                                </tr>
                                <form class="needs-validation" method="POST" action="{{route('admin.update_judges', $award_program)}}">
                                    @csrf
                                <div class="modal fade" id="edit-judge-modal{{$judge->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                                <div class="modal-header py-3 px-4 border-bottom-0">
                                                    <h5 class="modal-title" id="modal-title">Edit Judges</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body px-4 pb-4 pt-0">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="hidden" name="judge_id" value="{{$judge->id}}">
                                                            <div class="mb-3">
                                                                <label class="control-label form-label">Judge Full Name</label>
                                                                <input type="text" value="{{$judge->name}}" class="form-control @error('judge_fullname') is-invalid @enderror" placeholder="John Doe" name="judge_fullname" id="judge_fullname" required autocomplete="off" />
                                                                @error('judge_fullname')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="control-label form-label">Judge Email</label>
                                                                <input type="email" name="judge_email" value="{{$judge->email}}" class="form-control @error('judge_email') is-invalid @enderror" placeholder="Judge Mail Address"  id="judge_email" required autocomplete="off" />
                                                                @error('judge_email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="control-label form-label">Position</label>
                                                                <textarea name="position" value=""  class="form-control @error('position') is-invalid  @enderror"  cols="30" rows="10"> {{$judge->position}}</textarea>
                                                                @error('position')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="control-label form-label">Profile</label>
                                                                <textarea name="profile"  value="" class="form-control @error('profile') is-invalid  @enderror" id="" cols="30" rows="10"> {{$judge->profile}}</textarea>
                                                                @error('profile')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="control-label form-label">Judge Password</label>
                                                                <input type="password" class="form-control @error('judge_password') is-invalid @enderror" placeholder="Password" name="judge_password" id="judge_password" required autocomplete="off" />
                                                                @error('judge_password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div> 
                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6"></div>
                                                        <div class="col-6 text-end">
                                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="btn-save-category">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                                @endforeach 
                            </tbody>
                        </table>
                       
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
        <!-- Update Sector MODAL -->
       
        <div id="delete-alert-modal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-3 pt-4">
                        <div class="text-center">
                            <form class="needs-validation" method="POST" action="" name="delete-category-form" id="delete-category-form">
                                @csrf
                                @method('DELETE')
                                <i class="dripicons-warning h1 text-danger" style="font-size: xxx-large;"></i>
                                <h4 class="mt-2">Are you sure?</h4>
                                <p class="mt-3">You won't be able to recover this data once deleted.</p>
                                <div style="display: flex;justify-content:space-between;flex-direction: row;">
                                    <button type="button" class="btn btn-light my-2" data-close data-bs-dismiss="modal">No, cancel it!</button>
                                    <button class="btn btn-danger my-2" data-submit data-bs-dismiss="modal">Yes, delete it!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
    @endsection

    @section('scripts')
    <script src="{{asset('public/assets/js/pages/sector.js')}}"></script>

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