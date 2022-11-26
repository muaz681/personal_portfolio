@extends('layouts.admin')

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card col-lg-10 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Update Data</h3>
                </div>
                <div class="card-body">

                <form action="{{ route('achive.update') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" name="id" value="{{ $achive->id }}">
                        <input type="hidden" name="old_photo" value="{{ $achive->photo }}">

                        <div class="row">

                            {{-- Photo --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Photo <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="photo" data-bs-height="180" data-default-file="{{ asset($achive->photo) }}"/>
                                </div>
                            </div>

                            {{-- Achive Title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Achive Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Achive Title" value="{{ $achive->title }}">
                                </div>
                            </div>

                            {{-- Achive Description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Achive Description<span class="text-red">*</span></label>
                                    <input type="text" cols="30" rows="10" class="form-control" name="description" placeholder="Description" value="{{ $achive->description }}">

                                </div>
                            </div>

                            {{-- Achive Title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Date<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="date" placeholder="Date" value="{{ $achive->date }}">
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
