<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.admin.head')
    <link href="{{asset('assets/css/admin_index_redesign.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-icons/4.0/line-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="wrapper">
        <div class="content-page" style="margin-left:0;">
            <div class="content container">
                @include('partials.admin.topbar')

                <div class="admin-index-wrapper">
                    <!-- Hero Section -->
                    <div class="admin-hero">
                        <div class="hero-content">
                            <h1>Award Programs</h1>
                            <p class="hero-description">Manage and organize your annual award ceremonies, categories, and judging processes from a single high-performance dashboard.</p>
                        </div>
                        <div class="hero-actions">
                            <a href="{{route('award.program.create')}}" data-action="create" class="btn btn-create-program" data-bs-toggle="modal" data-bs-target="#award-modal">
                                <i class="lni lni-plus me-2"></i> Create New Program
                            </a>
                        </div>
                    </div>

                    <!-- Stats Row -->
                    <div class="admin-stats-row">
                        <div class="entry-stat-card">
                            <div class="stat-icon-wrapper icon-blue">
                                <i class="lni lni-library"></i>
                            </div>
                            <div class="stat-info">
                                <span class="value">{{ count($awps) }}</span>
                                <span class="label">Total Programs</span>
                            </div>
                        </div>
                        <div class="entry-stat-card">
                            <div class="stat-icon-wrapper icon-green">
                                <i class="lni lni-checkmark-circle"></i>
                            </div>
                            <div class="stat-info">
                                <span class="value">{{ count($awps->where('status', 1)) }}</span>
                                <span class="label">Active Programs</span>
                            </div>
                        </div>
                        <div class="entry-stat-card">
                            <div class="stat-icon-wrapper icon-purple">
                                <i class="lni lni-calendar"></i>
                            </div>
                            <div class="stat-info">
                                <span class="value">{{ $awps->max('year') ?? 'N/A' }}</span>
                                <span class="label">Latest Year</span>
                            </div>
                        </div>
                    </div>

                    <!-- Program List -->
                    <div class="admin-program-card">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="table-title mb-0">Program Management List</h4>
                        </div>

                        @if($awps->isEmpty())
                        <div class="text-center py-5">
                            <img src="{{asset('public/assets/images/no-result.svg')}}" height="200" alt="no-result">
                            <h3 class="text-muted mt-4">No award programs found</h3>
                            <p>Get started by creating your first award program year.</p>
                        </div>
                        @else
                        <div class="table-responsive">
                            <table class="glass-table">
                                <thead>
                                    <tr>
                                        <th style="width: 30%">Award Program</th>
                                        <th style="width: 10%">Year</th>
                                        <th style="width: 20%">Created On</th>
                                        <th style="width: 20%">Created By</th>
                                        <th style="width: 10%">Status</th>
                                        <th style="width: 10%" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($awps as $awp)
                                    <tr>
                                        <td>
                                            <a href="{{route('award.program', $awp->hashid)}}" class="program-name">
                                                {{$awp->name}}
                                            </a>
                                        </td>
                                        <td><span class="year-pill">{{$awp->year}}</span></td>
                                        <td class="text-muted small">{{ $awp->created_at ? $awp->created_at->format('M d, Y') : 'N/A' }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs me-2">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle small" style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; background: #eef2ff; font-size: 10px;">
                                                        {{ substr($awp->admin->fullname, 0, 1) }}
                                                    </span>
                                                </div>
                                                <span class="small fw-semibold">{{$awp->admin->fullname}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="status-badge {{$awp->status == 1 ? 'status-active' : 'status-inactive'}}">
                                                {{$awp->status == 1 ? 'Active' : 'Inactive'}}
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown">
                                                <button class="action-dot-btn dropdown-toggle arrow-none" data-bs-toggle="dropdown">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated shadow-lg border-0 rounded-3">
                                                    <a class="dropdown-item py-2" href="{{$awp->status == 1 ? route('award.program.deactivate', $awp->hashid) : route('award.program.activate', $awp->hashid) }}">
                                                        <i class="lni {{ $awp->status == 1 ? 'lni-cross-circle' : 'lni-checkmark-circle' }} me-2 text-primary"></i>
                                                        {{$awp->status == 1 ? 'Deactivate' : 'Activate' }}
                                                    </a>
                                                    <a class="dropdown-item py-2" data-action="edit" data-id="{{$awp->hashid}}" data-year="{{$awp->year}}" data-name="{{$awp->name}}" data-loc="{{$awp->location}}" href="{{route('award.program.update',$awp->hashid)}}" data-bs-toggle="modal" data-bs-target="#award-modal">
                                                        <i class="lni lni-pencil me-2 text-primary"></i> Edit
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item py-2 text-danger" href="{{route('award.program.delete',$awp->hashid)}}" onclick="return confirm('Are you sure you want to delete this program?')">
                                                        <i class="lni lni-trash-can me-2"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Award Modal -->
                <div class="modal fade" id="award-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-glass-content shadow-lg">
                            <form method="POST" action="" class="needs-validation" name="award-form" id="form-award">
                                @csrf
                                <div class="modal-header modal-header-modern">
                                    <h5 class="modal-title fw-bold" id="modal-title">Create Award Program</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-body-modern">
                                    <div class="mb-4">
                                        <label class="form-label fw-semibold text-dark">Program Name</label>
                                        <input class="form-control @error('award_name') is-invalid @enderror" style="border-radius: 12px; padding: 0.75rem;" placeholder="e.g. GRCFinCrimeAwardsNigeria" type="text" name="award_name" id="award_name" required autocomplete="off" />
                                        @error('award_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label fw-semibold text-dark">Program Year</label>
                                        <select class="form-select @error('award_year') is-invalid @enderror" style="border-radius: 12px; padding: 0.75rem;" name="award_year" id="award_year" required>
                                            <option id="init" value="#">Please select...</option>
                                        </select>
                                        @error('award_year')
                                            <div class="invalid-feedback">Select a valid event year</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label fw-semibold text-dark">Local Venue/Location</label>
                                        <input class="form-control @error('award_location') is-invalid @enderror" style="border-radius: 12px; padding: 0.75rem;" placeholder="e.g. Lagos, Nigeria" type="text" name="award_location" id="award_location" required autocomplete="off" />
                                        @error('award_location')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer border-0 p-4 pt-0">
                                    <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary rounded-pill px-4" id="btn-save" style="background: var(--primary-gradient); border: none;">Save Details</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @include('partials.admin.footer')
            </div>
        </div>
    </div>

    @include('partials.admin.scripts')
    <script src="{{asset('public/assets/js/pages/index-page.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @if(Session::has('success'))
    <script>
        toastr.options = { "closeButton": true, "progressBar": true };
        toastr.success("{{ session('success') }}");
    </script>
    @endif

    @if(Session::has('danger'))
    <script>
        toastr.options = { "closeButton": true, "progressBar": true };
        toastr.error("{{ session('danger') }}");
    </script>
    @endif
</body>

</html>