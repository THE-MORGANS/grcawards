<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!-- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-item">
                <a href="{{route('award.program', request()->segment(3))}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            @if(Auth::guard('admin')->user()->role_id == 1)
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings" class="side-nav-link">
                    <i class="dripicons-gear"></i>
                    <span> Settings </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="settings">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.show_categories',request()->segment(3))}}">Categories</a>
                        </li>
                        <li>
                            <a href="{{route('admin.show_sectors',request()->segment(3))}}">Sectors</a>
                        </li>
                        <li>
                            <a href="{{route('admin.show_awards',request()->segment(3))}}">Awards</a>
                        </li>
                        <li>
                            <a href="#">Nominees</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#evaluation" aria-expanded="false" aria-controls="evaluation" class="side-nav-link">
                    <i class="mdi mdi-clipboard-text-search-outline"></i>
                    <span> Evaluation </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="evaluation">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.get_cat_sec', request()->segment(3))}}">Votes</a>
                        </li>
                        
                        <li>
                            <a href="#">Shortlisted Nominees</a>
                        </li>
                        @if(Auth::guard('admin')->user()->role_id == 1)
                        <li>
                            <a href="{{route('admin.judging_criteria',request()->segment(3))}}">Judging Criteria</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @if(Auth::guard('admin')->user()->role_id == 1)
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#people" aria-expanded="false" aria-controls="people" class="side-nav-link">
                    <i class="uil uil-users-alt"></i>
                    <span> People </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="people">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="#">Voters</a>
                        </li>
                        <li>
                            <a href="#">Admins</a>
                        </li>
                        <li>
                            <a href="#">Judges</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#data" aria-expanded="false" aria-controls="data" class="side-nav-link">
                    <i class="mdi mdi-database-cog-outline"></i>
                    <span> Data </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="data">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="#">Analytics</a>
                        </li>
                        <li>
                            <a href="#">Exports</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>