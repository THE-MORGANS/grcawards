<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
   
        

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar" style="height: 2rem;width: 2rem;">
                    <span class="avatar-title bg-primary-lighten text-primary rounded">
                        {{Auth::guard('admin')->user()->initials}}
                    </span>
                </span>
                <span>
                    <span class="account-user-name">{{Auth::guard('admin')->user()->fullname}} </span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
              
                <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="app-search dropdown d-none d-lg-block">
        <form>
            <div class="input-group">
                <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                <span class="mdi mdi-magnify search-icon"></span>
                <button class="input-group-text btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>