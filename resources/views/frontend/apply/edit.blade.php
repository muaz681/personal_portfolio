@extends('layouts.admin')

@section('bestpartner') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card col-lg-10 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{ $apply->id }}">
                        <input type="hidden" name="old_photo" value="{{ $apply->photo }}">

                        <div class="row">

                            {{-- Name --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Name<span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Header" value="{{ $apply->name }}">
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Email<span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="email" placeholder="Header" value="{{ $apply->email }}">
                                </div>
                            </div>

                            {{-- Message --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Message<span class="text-red"></span></label>
                                    <textarea class="form-control" name="msg" placeholder="description" rows="5">{{ $apply->msg }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <a href="{{ route('apply.index') }}" class="btn btn-primary mt-4 mb-0 w-100">Back</a>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </section>

    </div>

@endsection
