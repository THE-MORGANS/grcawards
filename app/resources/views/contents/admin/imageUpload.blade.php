@extends('layouts.admin.master')

@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid">

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
        <div class="col-12">
            <div class="card">
                
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <label> Upload Awards Images</label>
        <form action="{{route('admin.UploadFiles')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
            <input class="form-control" type="file" name="images[]" multiple> 
        </div>
        <div class="mb-3">
            <label> Select Award year</label>
            <select class="form-control" name="award_program">
                @foreach($awardProgram as $awards)
                <option value="{{$awards->id}}">  {{$awards->name}}</option>
                @endforeach
            </select>
        </div>
           <div class="mb-3 float-end">
             <button type="submit"  class="btn btn-lg btn-primary" > Upload Images </button>
            </div>
        </form>
          </form>
                </div>
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