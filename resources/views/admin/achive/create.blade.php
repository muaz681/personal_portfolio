@extends('layouts.admin')

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card col-lg-10 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Store Data</h3>
                </div>
                <div class="card-body">

                <form action="{{ route('achive.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Photo --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Photo <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="photo" data-bs-height="180" data-default-file=""/>
                                </div>
                            </div>

                            {{-- Achive Title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Achive Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Achive Title" value="">
                                </div>
                            </div>

                            {{-- Achive Description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Achive Description<span class="text-red">*</span></label>
                                    <textarea type="text" cols="30" rows="10" class="form-control" name="description" placeholder="Description" value="">
                                    </textarea>
                                </div>
                            </div>

                            {{-- Achive Date --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Date<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="date" placeholder="Date" value="">
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
