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
                    <h4 style="display: block;">Award Year 2022</h4>
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
                            <h4 class="header-title mb-4">Add Awards Criteria</h4>
                        </div>
                        <div class="col-12 text-end">
                            <button type="button" id="add-field" class="btn btn-success btn-sm">
                                <i class="mdi mdi-plus mdi-24px"></i>
                            </button>
                        </div>
                    </div>
                    <form class="needs-validation" method="POST" action="{{route('admin.create_award', $award_program)}}" name="add-award-form" id="add-award-form">
                        @csrf
                        <div class="row" id="create-form-row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Category</label>
                                    <select class="form-select @error('category_name') is-invalid @enderror" name="category_name" id="category_name" data-url="{{route('admin.show_categories', $award_program)}}" required>
                                        <option id="init" value="">Please select...</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->hashid}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> select a valid event category</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Sector</label>
                                    <select class="form-select @error('sector_name') is-invalid @enderror" name="sector_name" id="sector_name" required disabled>
                                        <option id="init" value="">Select a Category first...</option>

                                    </select>
                                    @error('sector_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> select a valid event category</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Award Name</label>
                                    <input class="form-control @error('award_name') is-invalid @enderror" placeholder="Select a Sector first..." type="text" name="award_name" id="award_name" value required autocomplete="off" disabled />
                                    @error('award_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Award Description</label>
                                    <textarea class="form-control @error('award_description') is-invalid @enderror" placeholder="Select a Sector first..." name="award_description" id="award_description" required style="min-height: 100px;" disabled></textarea>
                                    @error('award_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Award Criteria</label>
                                    <textarea class="form-control @error('award_criteria') is-invalid @enderror" placeholder="Select a Sector first..." name="award_criteria" id="award_criteria" required style="min-height: 100px;" disabled></textarea>
                                    @error('award_criteria')
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
                                <button type="submit" class="btn btn-success" id="btn-save-award">Create</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

      
        @endsection

        @section('scripts')
        <script src="{{asset('assets/js/pages/award.js')}}"></script>

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