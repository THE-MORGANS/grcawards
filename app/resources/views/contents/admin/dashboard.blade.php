@extends('layouts.admin.master')
@php 
use Illuminate\Support\Facades\Http;
@endphp 
@section('title', 'Admin Dashboard')

@section('style')
<link href="{{asset('assets/css/dashboard_redesign.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-icons/4.0/line-icons.css" />
@endsection

@section('content')
<div class="dashboard-wrapper">
    <!-- Hero Section -->
    <div class="row">
        <div class="col-12">
            <div class="hero-section">
                <div class="hero-content">
                    <h1 class="hero-title">Award Program Dashboard</h1>
                    <p class="hero-subtitle">Monitoring Award Year: <span class="fw-bold">{{$currentYear?->year ?? 'N/A'}}</span> | Management Console</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Grid -->
    <div class="stat-grid">
        <!-- Voters -->
        <div class="modern-card">
            <div>
                <div class="card-icon-container icon-voters">
                    <i class="lni lni-users"></i>
                </div>
                <h6 class="card-label">Total Voters</h6>
                <h2 class="card-value">{{count($voters)}}</h2>
            </div>
        </div>

        <!-- Votes -->
        <div class="modern-card">
            <div>
                <div class="card-icon-container icon-votes">
                    <i class="lni lni-thumbs-up"></i>
                </div>
                <h6 class="card-label">Total Votes</h6>
                <h2 class="card-value">{{count($votes)}}</h2>
            </div>
        </div>

        <!-- Categories -->
        <div class="modern-card">
            <div>
                <div class="card-icon-container icon-categories">
                    <i class="lni lni-grid-alt"></i>
                </div>
                <h6 class="card-label">Categories</h6>
                <h2 class="card-value">{{count($category)}}</h2>
            </div>
        </div>

        <!-- Sectors -->
        <div class="modern-card">
            <div>
                <div class="card-icon-container icon-sectors">
                    <i class="lni lni-layers"></i>
                </div>
                <h6 class="card-label">Sectors</h6>
                <h2 class="card-value">{{count($sector)}}</h2>
            </div>
        </div>

        <!-- Awards -->
        <div class="modern-card">
            <div>
                <div class="card-icon-container icon-awards">
                    <i class="lni lni-investment"></i>
                </div>
                <h6 class="card-label">Awards</h6>
                <h2 class="card-value">{{count($awards)}}</h2>
            </div>
        </div>

        <!-- Nominees -->
        <div class="modern-card">
            <div>
                <div class="card-icon-container icon-nominees">
                    <i class="lni lni-user"></i>
                </div>
                <h6 class="card-label">Nominees</h6>
                <h2 class="card-value">{{count($nominees)}}</h2>
            </div>
        </div>
    </div>

    <!-- Data Table Section -->
    <div class="row">
        <div class="col-12">
            <div class="table-container">
                <div class="table-header">
                    <h2 class="table-title">Recent Voters Participation</h2>
                    <div class="badge bg-soft-primary text-primary px-3 py-2 rounded-pill">
                        Total Records: {{count($voters)}}
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="modern-table">
                        <thead>
                            <tr>
                                <th>Voter Identifier</th>
                                <th>Email Address</th>
                                <th>Registration Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($voters_pg as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                            <span class="text-primary fw-bold">{{strtoupper(substr($item->email, 0, 1))}}</span>
                                        </div>
                                        <div>
                                            <span class="text-muted small">UID: {{substr($item->id ?? '...', 0, 8)}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="email-pill">{{$item->email}}</span>
                                </td>
                                <td>
                                    <span class="badge bg-success-lighten text-success">
                                        <i class="mdi mdi-check-circle-outline me-1"></i> Active
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="lni lni-empty-file d-block mb-2" style="font-size: 2rem;"></i>
                                        No recent voters found
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="pagination-wrapper mt-4">
                    {{$voters_pg->links()}}
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