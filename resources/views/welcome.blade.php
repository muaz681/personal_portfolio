@extends('layouts.guest')

@section('content')
<div class="page-wraper" id="main-home">
    <!-- Header Area Start -->
    <header>

        <!-- Header Menu Area Start -->
        <div class="menu-area-main" id="sticky-header">
            <div class="container">
                <div class="row">
                    <!-- Logo Area Start -->
                    <div class="col-md-2">
                        @if(general_setting('app_logo'))
                        <div class="logo-area">
                            <a href="{{ route('home') }}"><img src="{{ asset(general_setting('app_logo')) }}" alt="" /></a>
                        </div>
                        @endif
                    </div>
                    <!-- Logo Area End -->
                    <!-- Main Menu Start -->
                    <div class="col-md-10 col-sm-9">
                        <div class="main-menu text-right">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li><a href="#about_part">ABOUT US</a></li>
                                    <li><a href="#Research_part">Research</a>
                                    </li>
                                    <li><a href="#Shedule_part">Shedule</a>
                                    </li>
                                    <li><a href="#Gallery_part">Gallery</a>
                                    </li>
                                    <li><a href="#Achivement_part">Achivement</a>
                                    </li>
                                    <li><a href="#Seminar_part">Seminar</a>
                                    </li>
                                    <li><a href="#contact_part">CONTACT US</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Main Menu End -->
                </div>
            </div>
        </div>
        <!-- Header Menu Area End -->
    </header>
    <!-- Header Area End -->
    <!-- Slider Area Start -->
    <div class="slider-area professor-slider">
        <div class="slider-active owl-carousel owl-theme">
            <!-- Slider Single -->
            @foreach($banners as $banner)
            {{-- {{ $banner }} --}}
            {{-- background-image: url({!! asset('uploads/banner_images') !!}/{{ $banner_image->banner_photo }}); --}}
            <div class="slider-item" style="background-image: url({{ $banner->photo }});" >
                <div class="color-gr">
                    <div class="container">
                        <div class="row">
                            <div class="slide-content col-lg-6 col-md-6 col-xs-12">
                                <h1>{{ $banner->banner_description }}</h1>
                                <p>
                                    Associate Professor and Head, Department of computer Science & Engineering, Facculty of Science, Engineering & Technology, Bangladesh University, Dhaka
                                    </p>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="follow_me">
                                    @if(general_setting('app_fb'))
                                    <div class="contact_lc my-2">
                                        <a href="{{ general_setting('app_fb') }}">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </div>
                                    @endif
                                    @if(general_setting('app_instagram'))
                                    <div class="contact_lc my-2">
                                        <a href="{{ general_setting('app_instagram') }}">
                                            <i class="zmdi zmdi-linkedin"></i>
                                        </a>
                                    </div>
                                    @endif
                                    @if(general_setting('app_youtube'))
                                    <div class="contact_lc my-2">
                                        <a href="{{ general_setting('app_youtube') }}">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Slider Area End -->
    <!-- Page Content Start -->
    <div class="page-content">
        <!-- About Us Area Start -->
        <section class="professor-about ptb-110" id="about_part">
            <div class="container">
                <div class="row align-items-center">
                    {{-- data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500"
                    data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" --}}
                    <div class="col-md-7 col-12">
                        <div class="about-image">
                            <img class="img-fluid" src="{{ url( asset(home_content('about_img'))) }}" alt="About Image">
                        </div>
                    </div>

                    <div class="col-md-5 col-12">
                        <div class="about-content">
                            <span class="subtitle">Hello There</span>
                            <h2 class="title">I AM {{ home_content('about_name') }}</h2>
                            <h5 class="content-title">Knowledge is the main factor for beign a Human</h5>
                            <p>{!! home_content('about_description') !!}</p>
                            <div class="slide-btn">
                                <!--<a href="#contact_part">Contact Now</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End -->
        <!--  Research Start -->
        <section class="research-area" id="Research_part">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="res-h2">
                           <span class="res-span">My</span> Research
                        </h2>
                    </div>
                </div>
                <div class="row rese-row">
                    {{-- {{ $researches }} --}}
                    @foreach($researches as $key => $research)
                    @if($key == 0 || $key <= 3)

                    <div class="col-md-3 py-1 col-sm-12">
                        <div class="rese-bg-image" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500" style="position: relative; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#example{{ $research->id }}">
                            <img src="{{ asset($research->photo) }}" class="img-fluid" />
                            <div class="mask text-light d-flex flex-column text-center">
                              <div class="rscr_icon">
                                <i class="zmdi zmdi-tune"></i>
                              </div>
                              <h4 class="pt-4">{{ $research->title }}</h4>
                              <p class="m-0">{{ $research->description }}</p>
                              <div class="rscr_arr_icon">
                                <i class="zmdi zmdi-arrow-right"></i>
                              </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="modal fade" id="example{{ $research->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header mdl_hdr_md">
                                      <h1 class="modal-title fs-5" id="exampleModalScrollableTitle">{{ $research->title }}</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>{{ $research->description }}</p>
                                    </div>
                                    <div class="modal-footer-resc">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ $research->url }}" target="_blank" class="btn btn-outline-primary">
                                                    Research Link
                                                </a>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <button type="button" class="btn btn-secondary mdl_ft_btn" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                  </div>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="row pt-4">
                    <div class="col-md-12">
                        <div class="see_more_btn text-center">
                            <a href="{{ route('research_page') }}" class="btn btn-outline-warning">
                                See More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Research Area End -->
        <!-- Upcoming Event Area Start -->
        <section class="upcoming-event" id="Shedule_part">
            <div class="container">
                <div class="row">
                    <!-- Section Title Left -->
                    <div class="col-md-12">
                        <h2 class="res-h2">
                           <span class="res-span">My</span> Shedule
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="upcoming-event-section">
            <div class="container">
                <div class="row py-2">
                    <!-- Section Title Left -->
                    <!-- Event Single Content Start -->
                    <div class="col-lg-6">
                        <div class="tab-content upcom-tab-content">

                            <div class="about-content" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
                                <div class="content-title">{{ home_content('program_title') }}</div>
                                <p>{{ home_content('program_description') }}</p>
                                <div class="slide-btn">
                                    <a href="#contact_part">Contact Now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Event Single Content End -->
                    <!-- Event Tab Top Menu Start -->
                    <div class="col-lg-6">
                        {{-- {{ $schedules }} --}}
                        <div class="row">
                            <div class="col-lg-12 py-5">
                                <div class="tab-content">
                                    <!-- Event Top Single Strat -->
                                    <div class="tab-pane fade show active" id="event-one">
                                        <div class="row">
                                            <!-- Event Single Tab Menu Start -->
                                            <div class="col-lg-12">
                                                <div class="event-single-tab" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="500">
                                                    <ul class="nav-tabs" role="tablist">
                                                        @foreach($schedules as $key => $schedule)
                                                        <?php $date = Date::make($schedule->date)->format('l'); ?>
                                                        <?php $day = Lang::get('date.day.'.$date); ?>
                                                        @if(App\Models\Schedule::where('date', '<', Carbon\Carbon::now())->each(function ($schedule) {
                                                            $schedule->delete();
                                                        }) && $key == 0 || $key <= 3 )
                                                        <li class="nav-item d-block" role="presentation">
                                                            <a href="#/" class="nav-link active" data-bs-toggle="tab" data-bs-target="#m1">
                                                                <div class="eventtab-single-content">
                                                                    <div class="event-single-date f-left">
                                                                        <span class="event-post-no">{{ $loop->index+1 }}</span>
                                                                        <span class="evnet-post-time">{{Date::make($schedule->date)->format('h:i A')}}</span>
                                                                    </div>
                                                                    <div class="event-single-content">
                                                                        <h5>{{ $schedule->description }}</h5>
                                                                        <p>Date : {{ Date::make($schedule->date)->format('d - M') }} Time: {{Date::make($schedule->date)->format('h:i A')}}</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                @if($schedules)
                                                <div class="see_more_btn text-center mt-4">
                                                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        All Shedule
                                                    </button>
                                                </div>
                                                @endif
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header mdl_hdr_md">
                                                              <h1 class="modal-title fs-5" id="exampleModalScrollableTitle">My Shedule</h1>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="nav-tabs" role="tablist">
                                                                    @foreach($schedules as $key => $schedule)
                                                                    <?php $date = Date::make($schedule->date)->format('l'); ?>
                                                                    <?php $day = Lang::get('date.day.'.$date); ?>
                                                                    @if(App\Models\Schedule::where('date', '<', Carbon\Carbon::now())->each(function ($schedule) {
                                                                        $schedule->delete();
                                                                    }))
                                                                    <li class="nav-item d-block" role="presentation">
                                                                        <a href="#/" class="nav-link active" data-bs-toggle="tab" data-bs-target="#m1">
                                                                            <div class="eventtab-single-content">
                                                                                <div class="event-single-date f-left">
                                                                                    <span class="event-post-no">{{ $loop->index+1 }}</span>
                                                                                    <span class="evnet-post-time">{{Date::make($schedule->date)->format('h:i A')}}</span>
                                                                                </div>
                                                                                <div class="event-single-content">
                                                                                    <h5>{{ $schedule->description }}</h5>
                                                                                    <p>Date : {{ Date::make($schedule->date)->format('d - M') }} Time: {{Date::make($schedule->date)->format('h:i A')}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary mdl_ft_btn" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Event Single Tab Menu Start -->
                                        </div>
                                    </div>
                                    <!-- Event Top Single End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Event Tab Top Menu End -->
                </div>
            </div>
        </section>
        <!-- Upcoming Event Area End -->
        <!-- Photo Gallery Area Start -->
        <section class="photo-gallery-area pt-110 pb-100" id="Gallery_part">
            <div class="container">
                <div class="row">
                    <!-- Section Title Left -->
                    <div class="col-md-12">
                        <h2 class="res-h2">
                           <span class="res-span">My</span> Gallery
                        </h2>
                    </div>
                </div>
                <div class="row">
                    {{--  --}}
                    <div class="col-lg-12 py-1 events-tab-top">
                        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a href="#" class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <span class="event-date">Photo</span>
                              </a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a href="#" class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <span class="event-date">Video</span>
                              </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                {{-- <div class="row video-ger">
                                    @foreach($gallerys as $key => $spc)
                                    @if($key == 0 || $key <= 5 )
                                    <div class="col-md-4 py-1">
                                        <div class="grid-item">
                                            <div class="gallery-single" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500">
                                                <img src="{{ asset($spc->photo) }}" alt="" />
                                                <a href="{{ asset($spc->photo) }}" class="popup-gallery"><i class="zmdi zmdi-filter-center-focus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div> --}}
                                {{-- Experiment --}}
                                <div class="row video-ger">
                                    <div class="col-md-4">
                                        <div class="row">
                                            @foreach($gallerys as $key => $spc)
                                            @if($key == 0 )
                                            <div class="col-md-12 py-1">
                                                <div class="grid-item">
                                                    <div class="gallery-single" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500">
                                                        <img src="{{ asset($spc->photo) }}" class="img-fluid img_left" alt="" />
                                                        <a href="{{ asset($spc->photo) }}" class="popup-gallery"><i class="zmdi zmdi-filter-center-focus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            @foreach($gallerys as $key => $spc)
                                            @if($key == 1 )
                                            <div class="col-md-12 py-1">
                                                <div class="grid-item">
                                                    <div class="gallery-single" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500">
                                                        <img src="{{ asset($spc->photo) }}" class="img-fluid img_mdle" alt="" />
                                                        <a href="{{ asset($spc->photo) }}" class="popup-gallery"><i class="zmdi zmdi-filter-center-focus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            @foreach($gallerys as $key => $spc)
                                            @if($key == 2 )
                                            <div class="col-md-12 py-1">
                                                <div class="grid-item">
                                                    <div class="gallery-single" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500">
                                                        <img src="{{ asset($spc->photo) }}" class="img-fluid img_mdle" alt="" />
                                                        <a href="{{ asset($spc->photo) }}" class="popup-gallery"><i class="zmdi zmdi-filter-center-focus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            @foreach($gallerys as $key => $spc)
                                            @if($key == 2 )
                                            <div class="col-md-12 py-1">
                                                <div class="grid-item">
                                                    <div class="gallery-single" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500">
                                                        <img src="{{ asset($spc->photo) }}" class="img-fluid img_right" alt="" />
                                                        <a href="{{ asset($spc->photo) }}" class="popup-gallery"><i class="zmdi zmdi-filter-center-focus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                {{-- Experiment end --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        @if($gallerys)
                                        <div class="see_more_btn text-center mt-4">
                                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleGallery">
                                                See More
                                            </button>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="exampleGallery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header mdl_hdr_md">
                                                      <h1 class="modal-title fs-5" id="exampleModalScrollableTitle">Gallery</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row video-ger">
                                                            @foreach($gallerys as $spc)
                                                            <div class="col-md-4 py-1">
                                                                <div class="grid-item">
                                                                    <div class="gallery-single" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500">
                                                                        <img src="{{ asset($spc->photo) }}" alt="" />
                                                                        <a href="{{ asset($spc->photo) }}" class="popup-gallery"><i class="zmdi zmdi-filter-center-focus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary mdl_ft_btn" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row video-ger">
                                    @foreach($videos as $key => $video)
                                    @if($key == 0 || $key <= 5 )
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="embed-responsive embed-responsive-16by9" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500">
                                                <iframe
                                                    src="{{ $video->link }}">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        @if(count($videos) == 6 )
                                        <div class="see_more_btn text-center mt-4">
                                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleVideo">
                                                See More
                                            </button>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="exampleVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header mdl_hdr_md">
                                                      <h1 class="modal-title fs-5" id="exampleModalScrollableTitle">Videos</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row video-ger">
                                                            @foreach($videos as $video)
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <div class="embed-responsive embed-responsive-16by9" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="1000">
                                                                        <iframe
                                                                            src="{{ $video->link }}">
                                                                        </iframe>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary mdl_ft_btn" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Photo Gallery Area End -->

        <!-- Achivement Area Start -->
        <section class="subcribe-area" id="Achivement_part">
            <div class="container">
                <div class="row">
                    <!-- Section Title Left -->
                    <div class="col-md-12">
                        <h2 class="res-h2">
                           <span class="res-span">My</span> Achivement
                        </h2>
                    </div>
                </div>
                <div class="row res_ms res_just">
                    <div class="col-md-5 res_col">
                        <div class="c-timeline">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item">
                                <div class="row px-3">
                                    <div class="col-md-10">

                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 res_col marg_ach">
                        <header class="c-timeline__header">
                            <span class="c-timeline__line"></span>
                          </header>
                    </div>
                    <div class="col-md-5 res_col">
                        <div class="c-timeline py-5">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item">
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        {{-- <span class="c-timeline__time">{{ $achive->date }}</span> --}}
                                    </div>
                                </div>

                              </li>

                            </ul>
                        </div>
                    </div>
                    @foreach($achives as $key => $achive)
                    @if($key == 0)
                    <div class="col-md-5 col-sm-12 res_col_bottom">
                        <div class="c-timeline" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item pe-3">
                                <div class="row px-3 res_px">
                                    <div class="col-md-10 col-8">
                                        <div class="rec_text text-right">
                                            <h4 class="c-timeline__heading">{{ $achive->title }}</h4>
                                        <p class="c-timeline__body">{{ $achive->description }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-4">
                                        <div class="rec_img">
                                            <img src="{{ asset($achive->photo) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 marg_ach">
                        <header class="c-timeline__header">
                            <span class="c-timeline__line" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000"></span>
                          </header>
                    </div>
                    <div class="col-md-5 col-sm-12 res_col_top">
                        <div class="c-timeline" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item tmln_mdfy">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="c-timeline__time">{{ $achive->date }}</span>
                                    </div>
                                </div>

                              </li>

                            </ul>
                        </div>
                    </div>
                    @endif
                    @if($key == 1)
                    <div class="col-md-5 text-right col-sm-12 res_col_top">
                        <div class="c-timeline" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item tmln_mdfy">
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <span class="c-timeline__time">{{ $achive->date }}</span>
                                    </div>
                                </div>

                              </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 marg_ach">
                        <header class="c-timeline__header">
                            <span class="c-timeline__line" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000"></span>
                          </header>
                    </div>
                    <div class="col-md-5 col-sm-12 res_col_bottom">
                        <div class="c-timeline" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item pe-3">
                                <div class="row">
                                    <div class="col-md-2 col-4">
                                        <div class="rec_img">
                                            <img src="{{ asset($achive->photo) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-8">
                                        <div class="rec_text text-left">
                                            <h4 class="c-timeline__heading">{{ $achive->title }}</h4>
                                        <p class="c-timeline__body">{{ $achive->description }}</p>
                                        </div>
                                    </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    @if($key == 2)
                    <div class="col-md-5 col-sm-12 res_col_bottom">
                        <div class="c-timeline" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item pe-3">
                                <div class="row px-3">
                                    <div class="col-md-10 col-8">
                                        <div class="rec_text text-right">
                                            <h4 class="c-timeline__heading">{{ $achive->title }}</h4>
                                        <p class="c-timeline__body">{{ $achive->description }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-4">
                                        <div class="rec_img">
                                            <img src="{{ asset($achive->photo) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 marg_ach">
                        <header class="c-timeline__header">
                            <span class="c-timeline__line" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000"></span>
                          </header>
                    </div>
                    <div class="col-md-5 col-sm-12 res_col_top">
                        <div class="c-timeline" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item tmln_mdfy">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="c-timeline__time">{{ $achive->date }}</span>
                                    </div>
                                </div>

                              </li>

                            </ul>
                        </div>
                    </div>
                    @endif
                    @if($key == 3)
                    <div class="col-md-5 text-right col-sm-12 res_col_top">
                        <div class="c-timeline" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item tmln_mdfy">
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <span class="c-timeline__time">{{ $achive->date }}</span>
                                    </div>
                                </div>

                              </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 marg_ach">
                        <header class="c-timeline__header">
                            <span class="c-timeline__line" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000"></span>
                          </header>
                    </div>
                    <div class="col-md-5 col-sm-12 res_col_bottom">
                        <div class="c-timeline" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item pe-3">
                                <div class="row">
                                    <div class="col-md-2 col-4">
                                        <div class="rec_img">
                                            <img src="{{ asset($achive->photo) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-8">
                                        <div class="rec_text text-left">
                                            <h4 class="c-timeline__heading">{{ $achive->title }}</h4>
                                        <p class="c-timeline__body">{{ $achive->description }}</p>
                                        </div>
                                    </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    @if($key == 4)
                    <div class="col-md-5 col-sm-12 res_col_bottom">
                        <div class="c-timeline" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item pe-3">
                                <div class="row px-3">
                                    <div class="col-md-10 col-8">
                                        <div class="rec_text text-right">
                                            <h4 class="c-timeline__heading">{{ $achive->title }}</h4>
                                        <p class="c-timeline__body">{{ $achive->description }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-4">
                                        <div class="rec_img">
                                            <img src="{{ asset($achive->photo) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 marg_ach">
                        <header class="c-timeline__header">
                            <span class="c-timeline__line" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000"></span>
                          </header>
                    </div>
                    <div class="col-md-5 col-sm-12 res_col_top">
                        <div class="c-timeline" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="500">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item tmln_mdfy">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="c-timeline__time">{{ $achive->date }}</span>
                                    </div>
                                </div>

                              </li>

                            </ul>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="col-md-5 res_col">
                        <div class="c-timeline">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item">
                                <div class="row px-3">
                                    <div class="col-md-10">

                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 res_col marg_ach">
                        <header class="c-timeline__header">
                            <span class="c-timeline__line cut_tml_brdr"></span>
                          </header>
                    </div>
                    <div class="col-md-5 res_col">
                        <div class="c-timeline py-4">
                            <ul class="c-timeline__list">
                              <li class="c-timeline__item">
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        {{-- <span class="c-timeline__time">{{ $achive->date }}</span> --}}
                                    </div>
                                </div>

                              </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Achivement Area End -->
        <!-- Seminar News Area Start -->

        <div class="container" id="Seminar_part">
            <!-- Section Title Right -->
            <div class="row">
                <!-- Section Title Left -->
                <div class="col-md-12">
                    <h2 class="res-h2">
                        <span class="res-span">My</span> Seminar
                    </h2>
                </div>
            </div>
        </div>
                <!-- Section Title Right -->
                <!-- Seminar News Main Area Start -->
        <section class="edu-news-area ptb-110">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($seminars as $key => $seminar)
                            @if($key == 0)
                            <button class="nav-link active" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <div class="flex">
                                    <i class="zmdi zmdi-card-travel"></i>
                                    <span class="seminar_spa">{{ $seminar->title }}</span>
                                    <i class="zmdi zmdi-chevron-right"></i>
                                </div>
                            </button>
                            @endif
                            @if($key != 0)
                            <button class="nav-link" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500" id="v-pills-{{ $seminar->id }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $seminar->id }}" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="flex">
                                    <i class="zmdi zmdi-card-travel"></i>
                                    <span class="seminar_spa">{{ $seminar->title }}</span>
                                    <i class="zmdi zmdi-chevron-right"></i>
                                </div>
                            </button>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="tab-content" id="v-pills-tabContent">
                            @foreach($seminars as $key => $seminar)
                            @if($key == 0)
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="seminar_img" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
                                            <img src="{{ asset($seminar->photo) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="seminar_des pt-5" data-aos="flip-right" data-aos-easing="linear" data-aos-duration="500">
                                            <p>
                                                {{ $seminar->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($key != 0)
                            <div class="tab-pane fade" id="v-pills-{{ $seminar->id }}" role="tabpanel" aria-labelledby="v-pills-{{ $seminar->id }}-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="seminar_img" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
                                            <img src="{{ asset($seminar->photo) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="seminar_des pt-5" data-aos="flip-right" data-aos-easing="linear" data-aos-duration="500">
                                            <p>
                                                {{ $seminar->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Education News Main Area Start -->
            </div>
        </section>
        <!-- Education News Area End -->
    </div>
    <!-- Page Content End -->
    <!-- Footer Area Start -->
    <footer class="theme-color-bg">
        <!-- Footer Top Arae Start -->
        <div class="footer-top pt-80 pb-65" id="contact_part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <!-- Section Title Left -->
                            <div class="col-md-12">
                                <h2 class="res-h2">
                                    <span class="res-span">Connect</span> With Me
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            @if(general_setting('app_phone'))
                            <div class="col-md-12 py-2">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="contact_ic">
                                            <i class="zmdi zmdi-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="contact_text">
                                            <a href="">{{ general_setting('app_phone') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(general_setting('app_email'))
                            <div class="col-md-12 py-2">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="contact_ic">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="contact_text">
                                            <a href="">{{ general_setting('app_email') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if( general_setting('app_instagram') )
                            <div class="col-md-12 py-2">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="contact_ic">
                                            <i class="zmdi zmdi-linkedin"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="contact_text">
                                            <a href="{{ general_setting('app_instagram') }}" target="_blank">@sadiq_iqbal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if( general_setting('app_youtube') )
                            <div class="col-md-12 py-2">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="contact_ic">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="contact_text">
                                            <a href="{{ general_setting('app_youtube') }}" target="_blank">@sadiq_iqbal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if( general_setting('app_fb') )
                            <div class="col-md-12 py-2">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="contact_ic">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="contact_text">
                                            <a href="{{ general_setting('app_fb') }}" target="_blank">@sadiq_iqbal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if( general_setting('app_address') )
                            <div class="col-md-12 py-2">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="contact_ic">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="contact_text">
                                            <a href="">{{ general_setting('app_address') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card msg_car p-5" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">
                            <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="name" class="form-label">Name</label>
                                  <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                  <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top Arae End -->
        <!-- Footer Bottom Area Start -->
        <div class="footer-bottom">
            <p>&copy; 2022 <b class="text-white">All</b> Right reserved by  <i class="fa fa-heart text-danger"></i> by <b>Sadiq Iqbal</b></p>
        </div>
        <!-- Footer Bottom Area End -->
    </footer>
    <!-- Footer Area End -->
</div>
@endsection
