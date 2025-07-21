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
                    <h4 style="display: block;">Award Year {{$currentYear?->year}}</h4>
                    <h4 style="display: block;" class=" text-muted fw-normal mt-0 mb-0">
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Send Email</h4>
                    <form class="needs-validation" method="POST" action="{{route('admin.sendUserEmail', 3)}}" name="add-judge-form" id="add-judge-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Enter Emails</label>
                                    <textarea name="emails"  class="form-control @error('emails') is-invalid  @enderror"  cols="10" rows="3"></textarea>
                                    <small> Enter Email Address separated by (,) </small>
                                    @error('emails')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Email Subject</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="email subject" name="subject" id="subject" required autocomplete="off" />
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Content</label>
                                    <textarea name="content"  class="form-control @error('content') is-invalid  @enderror"  cols="30" rows="10"></textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Upload File</label>
                                    <input type="file" class="form-control @error('attachment') is-invalid @enderror" name="attachment" id=""  autocomplete="off" />
                                    @error('attachment')
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
                                <button type="submit" class="btn btn-success" id="btn-save-category">Send Email</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->


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