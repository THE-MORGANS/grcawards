@extends('layouts.admin.master')

@section('title', 'categories & Sectors')

@section('style')
<style>
    .category-card-link {
        display: block;
        height: 100%;
        text-decoration: none;
    }
    .category-card {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #eef2f7;
        border-left: 3px solid transparent;
        transition: border-left-color .18s ease;
    }
    .category-card:hover {
        border-left-color: #727cf5;
    }
    .category-card .card-body {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
    }
    .category-card .category-eyebrow {
        font-size: 11px;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: #98a6ad;
        margin-bottom: 8px;
    }
    .category-card .category-title {
        font-size: 17px;
        font-weight: 700;
        color: #313a46;
        margin-bottom: 10px;
    }
    .category-card .category-desc {
        color: #6c757d;
        font-size: 13.5px;
        line-height: 1.6;
        margin-bottom: 16px;
    }
    .category-card .category-footer {
        margin-top: auto;
        padding-top: 14px;
        border-top: 1px solid #eef2f7;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 13px;
    }
    .category-card .category-sectors {
        color: #6c757d;
    }
    .category-card .view-link {
        font-weight: 600;
        color: #727cf5;
        display: inline-flex;
        align-items: center;
        gap: 3px;
        transition: gap .18s ease;
    }
    .category-card:hover .view-link {
        gap: 7px;
    }
</style>
@endsection

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
            @foreach($categories as $category)
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <a href="{{route('admin.get_sectors_awards', ['award_program'=>$award_program, 'category'=>$category->hashid])}}" class="category-card-link">
                <div class="card category-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="category-eyebrow mb-0">Category</h6>
                            <span class="badge badge-outline-success ms-1" style="padding:4px 8px; font-size:12px; white-space:nowrap;">{{$category->vote_total}} Votes</span>
                        </div>
                        <h4 class="category-title">{{$category->name}}</h4>
                        <p class="category-desc">{{ \Illuminate\Support\Str::limit($category->description, 130) }}</p>
                        <div class="category-footer">
                            <span class="category-sectors"><i class="mdi mdi-shape-outline me-1"></i>{{$category->sectors()->count()}} Sectors</span>
                            <span class="view-link">View Details <i class="mdi mdi-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        {{--
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="p-0 float-end">Export <i class="mdi mdi-download ms-1"></i></a>
                    <h4 class="header-title mt-1 mb-3">Activity Logs</h4>

                    <div class="table-responsive">
                        <table class="table table-sm table-centered mb-0 font-14">
                            <thead class="table-light">
                                <tr>
                                    <th>Activity</th>
                                    <th>initiated by</th>
                                    <th> Role</th>
                                    <th>initiated on</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Shorlisted a Nominee</td>
                                    <td>Chukwudi Ezeh</td>
                                    <td>Super admin</td>
                                    <td>19th-september-2021</td>
                                </tr>
                                <tr>
                                    <td>Shorlisted a Nominee</td>
                                    <td>Chukwudi Ezeh</td>
                                    <td>Super admin</td>
                                    <td>19th-september-2021</td>
                                </tr>
                                <tr>
                                    <td>Shorlisted a Nominee</td>
                                    <td>Chukwudi Ezeh</td>
                                    <td>Super admin</td>
                                    <td>19th-september-2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        --}}
        <!-- </div> end col -->
    </div>
</div>
@endsection