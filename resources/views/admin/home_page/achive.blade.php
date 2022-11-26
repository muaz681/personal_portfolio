@extends('layouts.admin')

@section('home_page') active @endsection


@section('admin_content')
<div class="main-container container-fluid">
    {{-- Achive --}}
    <div class="card col-lg-10 mx-auto mb-6">
        <div class="card-header">
            <h3 class="card-title text-primary">My Achivement</h3>
        </div>
        <div class="card-body">

            <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    {{-- Heading 1--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Heading<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_heading" value="{{ home_content('rajniti_heading') }}" placeholder="title">
                            <input type="hidden" name="types[]" value="rajniti_heading">
                        </div>
                    </div>

                    {{-- description --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Description<span class="text-red">*</span></label>
                            <textarea class="form-control" name="rajniti_description" placeholder="Description" rows="5">{{ home_content('rajniti_description') }}</textarea>
                            <input type="hidden" name="types[]" value="rajniti_description">
                        </div>
                    </div>

                    {{-- Title 1 img --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Image 1<span class="text-red">*</span></label>
                            <input type="file" class="dropify" name="rajniti_img_one" data-bs-height="180" data-default-file="{{ asset(home_content('rajniti_img_one')) }}"/>
                            <input type="hidden" name="types[]" value="rajniti_img_one">
                        </div>
                    </div>

                    {{-- Title 1--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 1<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_title_one" value="{{ home_content('rajniti_title_one') }}" placeholder="title">
                            <input type="hidden" name="types[]" value="rajniti_title_one">
                        </div>
                    </div>

                    {{-- date 1--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Date 1<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_date_one" value="{{ home_content('rajniti_date_one') }}" placeholder="date">
                            <input type="hidden" name="types[]" value="rajniti_date_one">
                        </div>
                    </div>

                    {{-- description 1--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 1 Description<span class="text-red">*</span></label>
                            <textarea class="form-control" name="rajniti_one_des" placeholder="Description" rows="5">{{ home_content('rajniti_one_des') }}</textarea>
                            <input type="hidden" name="types[]" value="rajniti_one_des">
                        </div>
                    </div>

                    {{-- Title 2 img --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Image 2<span class="text-red">*</span></label>
                            <input type="file" class="dropify" name="rajniti_img_two" data-bs-height="180" data-default-file="{{ asset(home_content('rajniti_img_two')) }}"/>
                            <input type="hidden" name="types[]" value="rajniti_img_two">
                        </div>
                    </div>

                    {{-- Title 2--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 2<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_title_two" value="{{ home_content('rajniti_title_two') }}" placeholder="title">
                            <input type="hidden" name="types[]" value="rajniti_title_two">
                        </div>
                    </div>

                    {{-- date 2--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Date 2<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_date_two" value="{{ home_content('rajniti_date_two') }}" placeholder="date">
                            <input type="hidden" name="types[]" value="rajniti_date_two">
                        </div>
                    </div>

                    {{-- description 2--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 2 Description<span class="text-red">*</span></label>
                            <textarea class="form-control" name="rajniti_two_des" placeholder="Description" rows="5">{{ home_content('rajniti_two_des') }}</textarea>
                            <input type="hidden" name="types[]" value="rajniti_two_des">
                        </div>
                    </div>

                    {{-- Title 3 img --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Image 3<span class="text-red">*</span></label>
                            <input type="file" class="dropify" name="rajniti_img_three" data-bs-height="180" data-default-file="{{ asset(home_content('rajniti_img_three')) }}"/>
                            <input type="hidden" name="types[]" value="rajniti_img_three">
                        </div>
                    </div>

                    {{-- Title 3--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 3<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_title_three" value="{{ home_content('rajniti_title_three') }}" placeholder="title">
                            <input type="hidden" name="types[]" value="rajniti_title_three">
                        </div>
                    </div>

                    {{-- date 3--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Date 3<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_date_three" value="{{ home_content('rajniti_date_three') }}" placeholder="date">
                            <input type="hidden" name="types[]" value="rajniti_date_three">
                        </div>
                    </div>

                    {{-- description 3--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 3 Description<span class="text-red">*</span></label>
                            <textarea class="form-control" name="rajniti_three_des" placeholder="Description" rows="5">{{ home_content('rajniti_three_des') }}</textarea>
                            <input type="hidden" name="types[]" value="rajniti_three_des">
                        </div>
                    </div>

                    {{-- Title 4 img --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Image 4<span class="text-red">*</span></label>
                            <input type="file" class="dropify" name="rajniti_img_four" data-bs-height="180" data-default-file="{{ asset(home_content('rajniti_img_four')) }}"/>
                            <input type="hidden" name="types[]" value="rajniti_img_four">
                        </div>
                    </div>

                    {{-- Title 4--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 4<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_title_four" value="{{ home_content('rajniti_title_four') }}" placeholder="title">
                            <input type="hidden" name="types[]" value="rajniti_title_four">
                        </div>
                    </div>

                    {{-- date 4--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Date 4<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_date_four" value="{{ home_content('rajniti_date_four') }}" placeholder="date">
                            <input type="hidden" name="types[]" value="rajniti_date_four">
                        </div>
                    </div>

                    {{-- description 4--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 4 Description<span class="text-red">*</span></label>
                            <textarea class="form-control" name="rajniti_four_des" placeholder="Description" rows="5">{{ home_content('rajniti_four_des') }}</textarea>
                            <input type="hidden" name="types[]" value="rajniti_four_des">
                        </div>
                    </div>

                    {{-- Title 5 img --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Image 5<span class="text-red">*</span></label>
                            <input type="file" class="dropify" name="rajniti_img_five" data-bs-height="180" data-default-file="{{ asset(home_content('rajniti_img_five')) }}"/>
                            <input type="hidden" name="types[]" value="rajniti_img_five">
                        </div>
                    </div>

                    {{-- Title 5--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 5<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_title_five" value="{{ home_content('rajniti_title_five') }}" placeholder="title">
                            <input type="hidden" name="types[]" value="rajniti_title_five">
                        </div>
                    </div>

                    {{-- date 5--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Date 5<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_date_five" value="{{ home_content('rajniti_date_five') }}" placeholder="date">
                            <input type="hidden" name="types[]" value="rajniti_date_five">
                        </div>
                    </div>

                    {{-- description 5--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 5 Description<span class="text-red">*</span></label>
                            <textarea class="form-control" name="rajniti_five_des" placeholder="Description" rows="5">{{ home_content('rajniti_five_des') }}</textarea>
                            <input type="hidden" name="types[]" value="rajniti_five_des">
                        </div>
                    </div>

                    {{-- Title 6 img --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Image 6<span class="text-red">*</span></label>
                            <input type="file" class="dropify" name="rajniti_img_six" data-bs-height="180" data-default-file="{{ asset(home_content('rajniti_img_six')) }}"/>
                            <input type="hidden" name="types[]" value="rajniti_img_six">
                        </div>
                    </div>

                    {{-- Title 6--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 6<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_title_six" value="{{ home_content('rajniti_title_six') }}" placeholder="title">
                            <input type="hidden" name="types[]" value="rajniti_title_six">
                        </div>
                    </div>

                    {{-- date 6--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Date 6<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="rajniti_date_six" value="{{ home_content('rajniti_date_six') }}" placeholder="date">
                            <input type="hidden" name="types[]" value="rajniti_date_six">
                        </div>
                    </div>

                    {{-- description 6--}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Title 6 Description<span class="text-red">*</span></label>
                            <textarea class="form-control" name="rajniti_six_des" placeholder="Description" rows="5">{{ home_content('rajniti_six_des') }}</textarea>
                            <input type="hidden" name="types[]" value="rajniti_six_des">
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
