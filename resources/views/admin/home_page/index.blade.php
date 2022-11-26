@extends('layouts.admin')

@section('home_page') active @endsection


@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">





            {{-- আমার শক্তি --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">আমার শক্তি</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Bannner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="amar_img" data-bs-height="180" data-default-file="{{ asset(home_content('amar_img')) }}"/>
                                    <input type="hidden" name="types[]" value="amar_img">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="amar_description" placeholder="Description" rows="5">{{ home_content('amar_description') }}</textarea>
                                    <input type="hidden" name="types[]" value="amar_description">
                                </div>
                            </div>

                            {{-- Title 1--}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 1<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="amar_title_one" value="{{ home_content('amar_title_one') }}" placeholder="title">
                                    <input type="hidden" name="types[]" value="amar_title_one">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 1 Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="amar_title_one_des" placeholder="Description" rows="5">{{ home_content('amar_title_one_des') }}</textarea>
                                    <input type="hidden" name="types[]" value="amar_title_one_des">
                                </div>
                            </div>

                            {{-- Title 2--}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 2<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="amar_title_two" value="{{ home_content('amar_title_two') }}" placeholder="title">
                                    <input type="hidden" name="types[]" value="amar_title_two">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 2 Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="amar_title_two_des" placeholder="Description" rows="5">{{ home_content('amar_title_two_des') }}</textarea>
                                    <input type="hidden" name="types[]" value="amar_title_two_des">
                                </div>
                            </div>

                            {{-- Title 3--}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 3<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="amar_title_three" value="{{ home_content('amar_title_three') }}" placeholder="title">
                                    <input type="hidden" name="types[]" value="amar_title_three">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 3 Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="amar_title_three_des" placeholder="Description" rows="5">{{ home_content('amar_title_three_des') }}</textarea>
                                    <input type="hidden" name="types[]" value="amar_title_three_des">
                                </div>
                            </div>

                            {{-- Title 4--}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 4<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="amar_title_four" value="{{ home_content('amar_title_four') }}" placeholder="title">
                                    <input type="hidden" name="types[]" value="amar_title_four">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 4 Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="amar_title_four_des" placeholder="Description" rows="5">{{ home_content('amar_title_four_des') }}</textarea>
                                    <input type="hidden" name="types[]" value="amar_title_four_des">
                                </div>
                            </div>

                            {{-- Title 5--}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 5<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="amar_title_five" value="{{ home_content('amar_title_five') }}" placeholder="title">
                                    <input type="hidden" name="types[]" value="amar_title_five">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 5 Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="amar_title_five_des" placeholder="Description" rows="5">{{ home_content('amar_title_five_des') }}</textarea>
                                    <input type="hidden" name="types[]" value="amar_title_five_des">
                                </div>
                            </div>

                            {{-- Title 6--}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 6<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="amar_title_six" value="{{ home_content('amar_title_six') }}" placeholder="title">
                                    <input type="hidden" name="types[]" value="amar_title_six">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 6 Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="amar_title_six_des" placeholder="Description" rows="5">{{ home_content('amar_title_six_des') }}</textarea>
                                    <input type="hidden" name="types[]" value="amar_title_six_des">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>



            {{-- আমার রাজনীতিক যাত্রা --}}


            {{-- আমার সামাজিক কর্মকান্ড --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">আমার সামাজিক কর্মকান্ড</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Heading 1--}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Heading<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="samajik_kormo_heading" value="{{ home_content('samajik_kormo_heading') }}" placeholder="title">
                                    <input type="hidden" name="types[]" value="samajik_kormo_heading">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="samajik_kormo_description" placeholder="Description" rows="5">{{ home_content('samajik_kormo_description') }}</textarea>
                                    <input type="hidden" name="types[]" value="samajik_kormo_description">
                                </div>
                            </div>

                            {{-- Youtube 1--}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Youtube Link<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="samajik_kormo_link" value="{{ home_content('samajik_kormo_link') }}" placeholder="Youtube Link">
                                    <input type="hidden" name="types[]" value="samajik_kormo_link">
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
