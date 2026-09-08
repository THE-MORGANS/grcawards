@extends('layouts.admin.master')

@section('title', 'Judges Votes Results')

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
    <div class="row">
        <div class="col-12">
            <div class="page-title-box" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="page-title">
                    <div style="width: 55px;float: left;height: 55px;background: turquoise;margin-right: 15px;"></div>
                    <h4 style="display: block;">Judges Votes Results</h4>
                    <h4 style="display: block;" class="text-muted fw-normal mt-0 mb-0">Award Year {{$currentYear?->year}} &middot; how judges scored nominees, by category</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($categories as $category)
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <a href="{{route('admin.judges_votes_results.sectors', ['award_program'=>$award_program, 'category_id'=>$category->hashid])}}" class="category-card-link">
                <div class="card category-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="category-eyebrow mb-0">Category</h6>
                            <span class="badge badge-outline-primary ms-1" style="padding:4px 8px; font-size:12px; white-space:nowrap;">{{$category->judges_count}} {{ Str::plural('judge', $category->judges_count) }}</span>
                        </div>
                        <h4 class="category-title">{{$category->name}}</h4>
                        <p class="category-desc">{{ \Illuminate\Support\Str::limit($category->description, 130) }}</p>
                        <div class="category-footer">
                            <span class="category-sectors"><i class="mdi mdi-shape-outline me-1"></i>{{$category->sectors()->count()}} Sectors &middot; {{ $category->judges_vote_total }} scores cast</span>
                            <span class="view-link">View Results <i class="mdi mdi-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
