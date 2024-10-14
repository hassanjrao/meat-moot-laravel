@extends('layouts.backend')

@section('page-title', 'Our Menu Page')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">


        <form action="{{ route('admin.our-menu-page.update', $ourMenuPage->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="block block-rounded">
                <div class="block-header block-header-default d-flex">
                    <h3 class="block-title">Our Menu Page </h3>

                    <button type="submit" id="submitBtn" class="btn btn-primary text-white">Update</button>


                </div>
                <div class="block-content">


                    <div class="row">

                        <h4>Hero Section</h4>
                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('hero_title', $ourMenuPage ? $ourMenuPage->hero_title : null);
                            ?>
                            <label class="form-label" for="label"> *Hero title <span class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control" id="hero_title"
                                name="hero_title">
                            @error('hero_title')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">


                            @if ($ourMenuPage && $ourMenuPage->hero_bg_image)
                                <img src="{{ $ourMenuPage->hero_bg_image_url }}" alt="image" class="img-fluid"
                                    style="width: 100px">
                                    <br>

                            @endif
                            <label class="form-label" for="label"> *Hero BG image <span
                                    class="text-danger"></span></label>
                            <input  type="file" class="form-control" id="hero_bg_image" name="hero_bg_image"
                                accept="image/*">
                            @error('hero_bg_image')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                    </div>

                    <br>
                    <hr>
                    <br>

                </div>
            </div>

        </form>






    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
