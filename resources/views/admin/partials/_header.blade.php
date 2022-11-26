<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index.html">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">

                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="dropdown d-lg-none d-flex">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                    <img src="{{ asset('uploads/profiles/') }}/{{ Auth::user()->photo }}" alt="profile-user"
                                        class="avatar  profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ Auth::user()->name }}</h5>
                                        </div>
                                    </div>

                                    <div class="dropdown-divider m-0"></div>

                                    <a class="dropdown-item" href="{{ route('profile.view') }}">
                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                    </a>

                                    <a class="dropdown-item" href="{{ route('profile.password') }}">
                                        <i class="dropdown-icon fe fe-eye" aria-hidden="true"></i> Change Password
                                    </a>

                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('form-logout').submit()" >
                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                    </a>

                                </div>

                                <form id="form-logout" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
