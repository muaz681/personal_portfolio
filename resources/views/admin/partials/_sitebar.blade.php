<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('home') }}">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img light-logo1"
                    alt="logo" style="width: 100%;">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">

                <li class="sub-category">
                    <h3>Main</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link @yield('dashboard')" data-bs-toggle="slide" href=""><i class="side-menu__icon fe fe-home"></i>
                        {{-- {{ route('home') }} --}}
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <li class="sub-category">
                    <h3>Website UI</h3>
                </li>

                {{-- General Settings --}}
                <li class="slide">

                    <a class="side-menu__item @yield('setting')" data-bs-toggle="slide" href="{{ route('general_setting') }}">
                        <i class="side-menu__icon fe fe-settings"></i>
                        <span class="side-menu__label">General Settings</span>
                        <i class="angle fe fe-chevron-right"></i>
                    </a>

                </li>
                {{-- Banner --}}
                <li class="slide">
                    <a class="side-menu__item @yield('banner.index')" data-bs-toggle="slide" href="{{ route('banner.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Banner</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>
                {{-- About --}}
                <li class="slide">
                    <a class="side-menu__item @yield('about')" data-bs-toggle="slide" href="{{ route('about') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">About</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>
                {{-- Research --}}
                <li class="slide">
                    <a class="side-menu__item @yield('research.index')" data-bs-toggle="slide" href="{{ route('research.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Research</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>
                {{-- Research --}}
                <li class="slide">
                    <a class="side-menu__item @yield('schedule_page')" data-bs-toggle="slide" href="{{ route('schedule_page') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Scadule</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>
                {{-- Home Page --}}
                <li class="slide">
                    <a class="side-menu__item @yield('home_page')" data-bs-toggle="slide" href="{{ route('home_page') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Home Page</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Gallery Page --}}
                <li class="slide">
                    <a class="side-menu__item @yield('gallery')" data-bs-toggle="slide" href="{{ route('gallery.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Gallery</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Video Page --}}
                <li class="slide">
                    <a class="side-menu__item @yield('video')" data-bs-toggle="slide" href="{{ route('video.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Video</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>
                {{-- Achive --}}
                <li class="slide">
                    <a class="side-menu__item @yield('achive')" data-bs-toggle="slide" href="{{ route('achive.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Achive</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>
                {{-- Seminar --}}
                <li class="slide">
                    <a class="side-menu__item @yield('seminar.index')" data-bs-toggle="slide" href="{{ route('seminar.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Seminar</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Pepple Send SMS --}}
                <li class="slide">
                    <a class="side-menu__item @yield('apply')" data-bs-toggle="slide" href="{{ route('apply.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Peopel Massage</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

            </ul>

            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>

        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
