@extends('layouts.backend')

@php
    $addEdit = isset($fullCourseMeal) ? 'Edit' : 'Add';
    $addUpdate = isset($fullCourseMeal) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Full Course Meal ')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Full Course Meal </h3>

            </div>
            <div class="block-content">

                @if ($fullCourseMeal)
                    <form action="{{ route('admin.full-course-meal.update', $fullCourseMeal->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.full-course-meal.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('title', $fullCourseMeal ? $fullCourseMeal->title : null);

                                ?>
                                <label class="form-label" for="label"> Title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="title" name="title" placeholder="Enter title">
                                @error('title')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('description', $fullCourseMeal ? $fullCourseMeal->description : null);

                                ?>
                                <label class="form-label" for="label"> Description <span class="text-danger">*</span></label>

                                <textarea required class="form-control" id="description" name="description"
                                    placeholder="Enter description">{{ $value }}</textarea>

                                @error('description')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">

                                @if ($fullCourseMeal && $fullCourseMeal->image_path)
                                    <img src="{{ $fullCourseMeal->image_url }}" alt="image" class="img-fluid" style="width: 100px">
                                @endif

                                <label class="form-label" for="label">Image <span class="text-danger">*</span></label>
                                <input type="file" accept="image/*" class="form-control" id="image"
                                    {{ $fullCourseMeal ? '' : 'required' }} name="image">
                                @error('image')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>





                        </div>



                    </div>



                    <div class="d-flex justify-content-end mt-4">

                        <button type="submit" id="submitBtn" class="btn btn-primary text-white">{{ $addUpdate }}</button>

                    </div>

                </div>


                </form>


            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
