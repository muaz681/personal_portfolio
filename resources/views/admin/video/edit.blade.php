@extends('layouts.admin')

@section('video') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card col-lg-6 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <div class="card-body">

                <form action="{{ route('video.update') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{ $video->id }}">
                        <input type="hidden" name="old_photo" value="{{ $video->photo }}">

                        <div class="row">

                            {{-- Link --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Link<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="link" placeholder="Link" value="{{ $video->link }}">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </section>

    </div>

@endsection
