@extends('layouts.admin.master')

@section('title', 'Judges Management')

@section('style')
<link href="{{asset('assets/css/judges_list_redesign.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-icons/4.0/line-icons.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
@endsection

@section('content')
<div class="judges-management-wrapper">
    <!-- Modern Header -->
    <div class="judges-header">
        <div class="header-content">
            <h1>Judges Management</h1>
            <p class="mb-0 opacity-75">Award Year: <span class="fw-bold">{{$currentYear?->year ?? 'N/A'}}</span></p>
        </div>
        <div class="header-stats">
            <div class="stat-item text-end">
                <span class="stat-value">{{ count($judges) }}</span>
                <span class="stat-label">Total Judges</span>
            </div>
            <div class="stat-item text-end">
                @php
                    $totalVotes = 0;
                    foreach($judges as $j) {
                        $totalVotes += count($j->judges_votes($j->admin_id));
                    }
                @endphp
                <span class="stat-value text-success text-opacity-100">{{ $totalVotes }}</span>
                <span class="stat-label">Votes Cast</span>
            </div>
        </div>
    </div>

    <div class="judges-grid">
        <!-- Add Judge Sidebar -->
        <div class="glass-card">
            <h4 class="card-title-modern">
                <i class="lni lni-user-plus"></i> Add New Judge
            </h4>
            <form class="needs-validation modern-form" method="POST" action="{{route('admin.create_judges', $award_program)}}" enctype="multipart/form-data" name="add-judge-form" id="add-judge-form">
                @csrf
                <div class="mb-3">
                    <label class="form-label-modern">Full Name</label>
                    <input type="text" class="form-control form-control-modern @error('fullname') is-invalid @enderror" placeholder="e.g. John Doe" name="fullname" id="judge_fullname" required autocomplete="off" />
                    @error('fullname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label-modern">Email Address</label>
                    <input type="email" class="form-control form-control-modern @error('email') is-invalid @enderror" placeholder="judge@example.com" name="email" id="judge_email" required autocomplete="off" />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label-modern">Position/Title</label>
                    <input type="text" name="position" class="form-control form-control-modern @error('position') is-invalid @enderror" placeholder="e.g. CEO, Senior Partner" required />
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label-modern">Profile Bio</label>
                    <textarea name="profile" class="form-control form-control-modern @error('profile') is-invalid @enderror" placeholder="Brief professional background..." rows="4" required></textarea>
                    @error('profile')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label-modern">Profile Image</label>
                    <input type="file" class="form-control form-control-modern @error('image') is-invalid @enderror" name="image" accept="image/*" id="judgeImageInput">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="text-center">
                        <img id="imagePreview" src="#" alt="Preview" style="display: none; max-width: 120px; height: 120px; object-fit: cover; margin: 15px auto; border-radius: 12px;" />
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label-modern">Access Password</label>
                    <input type="password" class="form-control form-control-modern @error('password') is-invalid @enderror" placeholder="••••••••" name="password" id="judge_password" required />
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-register-judge">
                    <i class="lni lni-save me-2"></i> Register Judge
                </button>
            </form>
        </div>

        <!-- Judges Table List -->
        <div class="glass-card" style="overflow: hidden;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title-modern mb-0">
                    <i class="lni lni-users"></i> Registered Judges
                </h4>
            </div>

            <div class="table-responsive">
                <table class="judges-table">
                    <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th style="width: 30%">Judge Info</th>
                            <th style="width: 15%">Prog/Year</th>
                            <th style="width: 15%">Participation</th>
                            <th style="width: 25%">Professional Background</th>
                            <th style="width: 10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($judges as $judge)
                        <tr>
                            <td class="text-muted fw-bold">{{ $loop->iteration }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="judge-avatar-wrapper me-3">
                                        @if($judge->path_to_image)
                                            <img src="{{ asset($judge->path_to_image) }}" class="judge-profile-img">
                                        @else
                                            <div class="bg-soft-primary d-flex align-items-center justify-content-center h-100 text-primary fw-bold" style="background: #eef2ff;">
                                                {{ substr($judge->name, 0, 1) }}
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="judge-name">{{ $judge->name }}</div>
                                        <div class="judge-email-cell">{{ $judge->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-soft-info text-info rounded-pill px-3 py-1" style="background: #ecfeff;">
                                    {{ $judge->awardProgram->year ?? 'N/A' }}
                                </span>
                            </td>
                            <td>
                                <div class="votes-badge-pill">
                                    <i class="lni lni-check-box"></i>
                                    {{ count($judge->judges_votes($judge->admin_id)) }} Awards
                                </div>
                            </td>
                            <td>
                                <div class="small fw-semibold text-dark mb-1">{{ $judge->position }}</div>
                                <div class="text-muted small text-truncate" style="max-width: 200px;">
                                    {{ Str::limit($judge->profile, 60) }}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <button class="action-btn btn-edit" data-bs-toggle="modal" data-bs-target="#edit-judge-modal{{$judge->id}}" title="Edit Judge">
                                        <i class="mdi mdi-square-edit-outline"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="edit-judge-modal{{$judge->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content modal-content-glass">
                                    <div class="modal-header modal-header-modern">
                                        <h5 class="modal-title fw-bold"><i class="lni lni-pencil-alt me-2"></i>Edit Judge: {{ $judge->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{route('admin.update_judges', $award_program)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body modal-body-modern">
                                            <input type="hidden" name="judge_id" value="{{$judge->id}}">
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label-modern">Full Name</label>
                                                    <input type="text" value="{{$judge->name}}" class="form-control form-control-modern" name="judge_fullname" required />
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label-modern">Email Address</label>
                                                    <input type="email" name="judge_email" value="{{$judge->email}}" class="form-control form-control-modern" required />
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern">Position</label>
                                                <input type="text" name="position" value="{{$judge->position}}" class="form-control form-control-modern" required />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern">Profile Bio</label>
                                                <textarea name="profile" class="form-control form-control-modern" rows="4" required>{{$judge->profile}}</textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label-modern">Update Image</label>
                                                    <input type="file" class="form-control form-control-modern" name="image" accept="image/*">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label-modern">New Password (Optional)</label>
                                                    <input type="password" class="form-control form-control-modern" name="judge_password" placeholder="Leave blank to keep current" />
                                                </div>
                                            </div>

                                            @if($judge->path_to_image)
                                            <div class="mt-2 text-center p-2 bg-light rounded-3">
                                                <p class="small text-muted mb-2">Current Image</p>
                                                <img src="{{ asset($judge->path_to_image) }}" class="rounded-circle shadow-sm" width="80" height="80" style="object-fit: cover;">
                                            </div>
                                            @endif
                                        </div>
                                        <div class="modal-footer border-0 p-4">
                                            <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary rounded-pill px-4" style="background: var(--primary-gradient); border: none;">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('judgeImageInput').addEventListener('change', function (event) {
        const [file] = event.target.files;
        if (file) {
            const preview = document.getElementById('imagePreview');
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });
</script>

@if(Session::has('success'))
<script>
    toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
    toastr.success("{{ session('success') }}");
</script>
@endif

@if(Session::has('danger'))
<script>
    toastr.options = { "closeButton": true, "progressBar": true, "preventDuplicates": true };
    toastr.error("{{ session('danger') }}");
</script>
@endif
@endsection