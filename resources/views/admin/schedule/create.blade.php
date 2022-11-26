@extends('layouts.admin')

@section('schedule') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card col-lg-6 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Store Data</h3>
                </div>
                <div class="card-body">

                <form action="{{ route('schedule.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Date --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Date<span class="text-red">*</span></label>
                                    <input type="datetime-local" class="form-control" name="date" placeholder="Description" value="">
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="description" placeholder="Description" value="">
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