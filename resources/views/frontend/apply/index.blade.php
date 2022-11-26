@extends('layouts.admin')

@section('apply') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">apply</h3>
                </div>
                <div class="card-body">
                    {{-- Add New --}}
                    {{-- <div class="text-end">
                        <a href="{{ route('apply.create') }}" class="btn btn-primary mb-4"> Add New</a>
                    </div> --}}

                    {{-- Table Part --}}
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom table-striped" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">SL</th>
                                    <th class="wd-10p border-bottom-0">Name</th>
                                    <th class="wd-5p border-bottom-0">Email</th>
                                    <th class="wd-5p border-bottom-0">Message</th>
                                    <th class="wd-10p border-bottom-0">Created At</th>
                                    <th class="wd-15p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($applys as $apply)

                                    <tr>

                                        <td>{{ $loop->index+1 }}</td>

                                        <td>{{ $apply->name }} </td>
                                        <td>{{ $apply->email }} </td>
                                        <td>{{ $apply->msg }} </td>

                                        <td>{{ $apply->created_at->diffForHumans() }}</td>

                                        <td>
                                            <a href="{{ route('apply.edit', $apply->id) }}" class="btn btn-sm btn-primary p-2 ms-2">
                                                view
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
