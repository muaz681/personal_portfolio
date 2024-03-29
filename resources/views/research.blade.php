@extends('layouts.guest')
@section('content')
    <section class="research-area mt-5" id="Research_part">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="res-h2">
                       <span class="res-span">My</span> Research
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item brd_cl"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Research</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row pt-4 rese-row">
                {{-- {{ $researches }} --}}
                @foreach($researches as $research)
                <div class="col-md-3 py-1 col-sm-12">
                    <div class="rese-bg-image" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="1000" style="position: relative; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#example{{ $research->id }}">
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
                                        <div class="col-md-8 col-8">
                                            <div class="flex">
                                                <a class="btn btn-primary res_pdf_rs" href="{{ route('pdfview', $research->id )}}">Export to PDF</a>
                                                <a href="{{ $research->url }}" target="_blank" class="btn btn-outline-primary res_pdf_rs">
                                                    Research Link
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4 text-right">
                                            <button type="button" class="btn btn-secondary mdl_ft_btn res_pdf_rs" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                              </div>
                        </div>
                      </div>
                    {{--  --}}
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
