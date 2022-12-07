@extends('layouts.admin')

@section('home_page') active @endsection


@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-7">
                        <div class="about-image">
                            <img src="{{ url( asset(home_content('about_img'))) }}" alt="About Image">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="about-content">
                            <span class="subtitle">Hello There</span>
                            <h2 class="title">I AM {{ home_content('about_name') }}</h2>
                            <h5 class="content-title">Knowledge is the main factor for beign a Human</h5>
                            <p>{{ home_content('about_description') }}</p>

                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>


@endsection
