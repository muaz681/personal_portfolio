@extends('layouts.admin')

@section('home_page') active @endsection


@section('admin_content')
<div class="main-container container-fluid">
    {{-- About Me --}}
    <div class="card col-lg-10 mx-auto mb-6">
        <div class="card-header">
            <h3 class="card-title text-primary">About Me</h3>
        </div>
        <div class="card-body">

            <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    {{-- Bannner --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">About Image <span class="text-red">*</span></label>
                            <input type="file" class="dropify" name="about_img" data-bs-height="180" data-default-file="{{ asset(home_content('about_img')) }}"/>
                            <input type="hidden" name="types[]" value="about_img">
                        </div>
                    </div>

                    {{-- Name --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Name<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="about_name" value="{{ home_content('about_name') }}" placeholder="Name">
                            <input type="hidden" name="types[]" value="about_name">
                        </div>
                    </div>

                    {{-- title --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ home_content('title') }}" placeholder="Title">
                            <input type="hidden" name="types[]" value="title">
                        </div>
                    </div>

                    {{-- description --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Description<span class="text-red">*</span></label>
                            <textarea class="form-control" name="about_description" placeholder="Description" rows="5">{{ home_content('about_description') }}</textarea>
                            <input type="hidden" name="types[]" value="about_description">
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                    </div>

                </div>

            </form>

        </div>

    </div>
</div>

@endsection
