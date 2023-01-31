@extends('layouts.guest')
@section('content')
    <div class="container">

        <div class="row">
            <!-- Section Title Left -->
            <div class="col-md-12">
                <h2 class="res-h2 py-4">
                   <span class="res-span">My</span> Gallery
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item brd_cl"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row photo-ger pt-4">
            @foreach($gallerys as $spc)
            <div class="col-md-3 col-sm-12 py-1">
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
@endsection
