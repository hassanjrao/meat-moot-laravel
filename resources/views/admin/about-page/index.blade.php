@extends('layouts.backend')

@section('page-title', 'About Page')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">


        <form action="{{ route('admin.about-page.update', $aboutPage->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="block block-rounded">
                <div class="block-header block-header-default d-flex">
                    <h3 class="block-title">About Page </h3>

                    <button type="submit" id="submitBtn" class="btn btn-primary text-white">Update</button>


                </div>
                <div class="block-content">


                    <div class="row">

                        <h4>Hero Section</h4>
                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('hero_title', $aboutPage ? $aboutPage->hero_title : null);
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


                            @if ($aboutPage && $aboutPage->hero_bg_image)
                                <img src="{{ $aboutPage->hero_bg_image_url }}" alt="image" class="img-fluid"
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


                    <div class="row">

                        <h4>About Section</h4>


                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('description', $aboutPage ? $aboutPage->description : null);
                            ?>
                            <label class="form-label" for="label"> *Description <span
                                    class="text-danger"></span></label>
                            <textarea required class="form-control" id="description" name="description" rows="3">{{ $value }}</textarea>
                            @error('description')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">

                            @if ($aboutPage && $aboutPage->image)
                                <img src="{{ $aboutPage->image_url }}" alt="image" class="img-fluid"
                                    style="width: 100px">
                                    <br>
                            @endif
                            <label class="form-label" for="label"> *Image <span
                                    class="text-danger"></span></label>
                            <input  type="file" class="form-control" id="image" name="image"
                                accept="image/*">
                            @error('image')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>


                    <br>
                    <hr>
                    <br>

                    <div class="row">

                        <h4>History Section</h4>



                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                            <?php
                            $value = old('history_heading', $aboutPage ? $aboutPage->history_heading : null);
                            ?>
                            <label class="form-label" for="label"> *History Heading <span class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="history_heading" name="history_heading">
                            @error('history_heading')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('history_description', $aboutPage ? $aboutPage->history_description : null);
                            ?>
                            <label class="form-label" for="label"> *History Description <span class="text-danger"></span></label>
                            <textarea required class="form-control" id="history_description" name="history_description"
                                rows="3">{{ $value }}</textarea>
                            @error('history_description')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                    </div>



                    <br>
                    <hr>
                    <br>

                    <div class="row">

                        <h4>About Images</h4>

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                            <div class="row">


                                @foreach ($aboutPage->about_images_url as $image)
                                    <div class="col-lg-3">
                                        <img src="{{ $image }}" class=" rounded mb-4 img-fluid"
                                            alt="about image" />

                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">

                            <label class="form-label" for="label"> *About Images <span
                                    class="text-danger"></span></label>
                            <input  type="file" class="form-control" id="about_images"
                                name="about_images[]" accept="image/*" multiple>
                            @error('about_images')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>


                    <br>
                    <hr>
                    <br>



                    <div class="row">

                        <h4>Atmosphere Section</h4>



                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                            <?php
                            $value = old('atmosphere_heading', $aboutPage ? $aboutPage->atmosphere_heading : null);
                            ?>
                            <label class="form-label" for="label"> *Atmosphere Heading <span class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="atmosphere_heading" name="atmosphere_heading">
                            @error('atmosphere_heading')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('atmosphere_description', $aboutPage ? $aboutPage->atmosphere_description : null);
                            ?>
                            <label class="form-label" for="label"> *Atmosphere Description <span class="text-danger"></span></label>
                            <textarea required class="form-control" id="atmosphere_description" name="atmosphere_description"
                                rows="3">{{ $value }}</textarea>
                            @error('atmosphere_description')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">


                            @if ($aboutPage && $aboutPage->atmosphere_bg_image)
                                <img src="{{ $aboutPage->atmosphere_bg_image_url }}" alt="image" class="img-fluid"
                                    style="width: 100px">
                                    <br>

                            @endif
                            <label class="form-label" for="label"> *Atmosphere BG image <span
                                    class="text-danger"></span></label>
                            <input  type="file" class="form-control" id="atmosphere_bg_image" name="atmosphere_bg_image"
                                accept="image/*">
                            @error('atmosphere_bg_image')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                    </div>


                    {{-- <br>
                    <hr>
                    <br>

                    <div class="row">

                        <h4>Recommendated by Images</h4>

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                            <div class="row">


                                @foreach ($aboutPage->recommendated_by_images_url as $image)
                                    <div class="col-lg-3">
                                        <img src="{{ $image }}" class=" rounded mb-4 img-fluid"
                                            alt="about image" />

                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">

                            <label class="form-label" for="label"> *Recommended Images <span
                                    class="text-danger"></span></label>
                            <input  type="file" class="form-control" id="recommendated_by_images"
                                name="recommendated_by_images[]" accept="image/*" multiple>
                            @error('recommendated_by_images')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div> --}}

                    <br>
                    <hr>
                    <br>

                    <div class="row">

                        <h4>Celebrate Images</h4>

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                            <div class="row">


                                @foreach ($aboutPage->celebrate_images_url as $image)
                                    <div class="col-lg-3">
                                        <img src="{{ $image }}" class=" rounded mb-4 img-fluid"
                                            alt="about image" />

                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">

                            <label class="form-label" for="label"> *Celebrate Images <span
                                    class="text-danger"></span></label>
                            <input  type="file" class="form-control" id="celebrate_images"
                                name="celebrate_images[]" accept="image/*" multiple>
                            @error('celebrate_images')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                </div>
            </div>

        </form>






    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
