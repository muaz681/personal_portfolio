@extends('layouts.admin')

@section('home_page') active @endsection


@section('admin_content')
<div class="main-container container-fluid">
    {{-- My Shedule --}}
    <div class="row">
        <div class="card col-lg-4 ">
            <div class="card-header">
                <h3 class="card-title text-primary">My Shedule</h3>
            </div>
            <div class="card-body">

                <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="row">

                        {{-- Name --}}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Title<span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="program_title" value="{{ home_content('program_title') }}" placeholder="Title">
                                <input type="hidden" name="types[]" value="program_title">
                            </div>
                        </div>

                        {{-- description --}}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Description<span class="text-red">*</span></label>
                                <textarea class="form-control" name="program_description" placeholder="Description" rows="5">{{ home_content('program_description') }}</textarea>
                                <input type="hidden" name="types[]" value="program_description">
                            </div>
                        </div>

                        {{-- Button Text --}}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Button Text<span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="program_btn_text" value="{{ home_content('program_btn_text') }}" placeholder="Title">
                                <input type="hidden" name="types[]" value="program_btn_text">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">schedule</h3>
                </div>
                <div class="card-body">
                    {{-- Add New --}}
                    <div class="text-end">
                        <a href="{{ route('schedule.create') }}" class="btn btn-primary mb-4"> Add New</a>
                    </div>

                    {{-- Table Part --}}
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom table-striped" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL</th>
                                    <th class="wd-15p border-bottom-0">Date</th>
                                    {{-- <th class="wd-15p border-bottom-0">Description</th> --}}
                                    <th class="wd-15p border-bottom-0">Created At</th>
                                    <th class="wd-15p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($schedules as $schedule)

                                    <tr>

                                        <td>{{ $loop->index+1 }}</td>

                                        <td>{{ $schedule->date }}</td>
                                        {{-- <td>{{ $schedule->description }}</td> --}}

                                        <td>{{ $schedule->created_at->diffForHumans() }}</td>

                                        <td>
                                            <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-sm btn-primary p-2 ms-2">
                                                <span class="fe fe-edit"> </span>
                                            </a>
                                            <a href="{{ route('schedule.delete', $schedule->id) }}" class="btn btn-sm btn-danger p-2 ms-2">
                                                <span class="fe fe-trash-2"> </span>
                                            </a>
                                        </td>

                                    </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
