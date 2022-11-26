@extends('layouts.admin')

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">My Seminar</h3>
                </div>
                <div class="card-body">
                    {{-- Add New --}}
                    <div class="text-end">
                        <a href="{{ route('seminar.create') }}" class="btn btn-primary mb-4"> Add New</a>
                    </div>

                    {{-- Table Part --}}
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom table-striped" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL</th>
                                    <th class="wd-15p border-bottom-0">Photo</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-15p border-bottom-0">Created At</th>
                                    <th class="wd-15p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($seminars as $seminar)

                                <tr>

                                    <td>{{ $loop->index+1 }}</td>
                                    <td>
                                        <img src="{{ asset($seminar->photo) }}" alt="" style="height: 100px">
                                    </td>

                                    <td>{{ $seminar->title }}</td>

                                    <td>{{ $seminar->created_at->diffForHumans() }}</td>

                                    <td>
                                        <a href="{{ route('seminar.edit', $seminar->id) }}" class="btn btn-sm btn-primary p-2 ms-2">
                                            <span class="fe fe-edit"> </span>
                                        </a>
                                        <a href="{{ route('research.destroy', $seminar->id) }}" class="btn btn-sm btn-danger p-2 ms-2">
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


        </section>

    </div>


@endsection
