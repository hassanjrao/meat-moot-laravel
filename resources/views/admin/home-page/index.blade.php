@extends('layouts.backend')

@section('page-title', 'Home Page')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">


        <form action="{{ route('admin.home-page.update', $homePage->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="block block-rounded">
                <div class="block-header block-header-default d-flex">
                    <h3 class="block-title">Home Page </h3>

                    <button type="submit" id="submitBtn" class="btn btn-primary text-white">Update</button>


                </div>
                <div class="block-content">


                    <div class="row">

                        <h4>Hero Section</h4>
                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('hero_title', $homePage ? $homePage->hero_title : null);
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


                            @if ($homePage && $homePage->hero_bg_video)
                                <video width="100%" height="240" controls>
                                    <source src="{{ $homePage->hero_bg_video_url }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                            <label class="form-label" for="label"> *Hero BG Video <span
                                    class="text-danger"></span></label>
                            <input required type="file" class="form-control" id="hero_bg_video" name="hero_bg_video"
                                accept="video/mp4">
                            @error('hero_bg_video')
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

                        <h4>Concept Section</h4>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            <?php
                            $value = old('concept_heading', $homePage ? $homePage->concept_heading : null);
                            ?>
                            <label class="form-label" for="label"> *Concept Heading <span
                                    class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="concept_heading" name="concept_heading">
                            @error('concept_heading')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            <?php
                            $value = old('concept_subheading', $homePage ? $homePage->concept_subheading : null);
                            ?>
                            <label class="form-label" for="label"> *Concept SubHeading <span
                                    class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="concept_subheading" name="concept_subheading">
                            @error('concept_subheading')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('concept_description', $homePage ? $homePage->concept_description : null);
                            ?>
                            <label class="form-label" for="label"> *Concept Description <span
                                    class="text-danger"></span></label>
                            <textarea required class="form-control" id="concept_description" name="concept_description" rows="3">{{ $value }}</textarea>
                            @error('concept_description')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">

                            @if ($homePage && $homePage->concept_image)
                                <img src="{{ $homePage->concept_image_url }}" alt="image" class="img-fluid"
                                    style="width: 100px">
                                    <br>
                            @endif
                            <label class="form-label" for="label"> *Concept Image <span
                                    class="text-danger"></span></label>
                            <input required type="file" class="form-control" id="concept_image" name="concept_image"
                                accept="image/*">
                            @error('concept_image')
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

                        <h4>CEO Section</h4>

                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('ceo_message', $homePage ? $homePage->ceo_message : null);
                            ?>
                            <label class="form-label" for="label"> *CEO Message <span class="text-danger"></span></label>
                            <textarea required class="form-control" id="ceo_message" name="ceo_message" rows="3">{{ $value }}</textarea>
                            @error('ceo_message')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                            <?php
                            $value = old('ceo_location', $homePage ? $homePage->ceo_location : null);
                            ?>
                            <label class="form-label" for="label"> *CEO Location <span
                                    class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="ceo_location" name="ceo_location">
                            @error('ceo_location')
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

                        <h4>Connect Section</h4>
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                            <?php
                            $value = old('connect_heading', $homePage ? $homePage->connect_heading : null);
                            ?>
                            <label class="form-label" for="label"> *Connect Heading <span
                                    class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="connect_heading" name="connect_heading">
                            @error('connect_heading')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('connect_subheading', $homePage ? $homePage->connect_subheading : null);
                            ?>
                            <label class="form-label" for="label"> *Connect SubHeading <span
                                    class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="connect_subheading" name="connect_subheading">
                            @error('connect_subheading')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            <?php
                            $value = old('connect_message', $homePage ? $homePage->connect_message : null);
                            ?>
                            <label class="form-label" for="label"> *Connect Message <span
                                    class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="connect_message" name="connect_message">
                            @error('connect_message')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">

                            @if ($homePage && $homePage->connect_bg_image)
                                <img src="{{ $homePage->connect_bg_image_url }}" alt="image" class="img-fluid"
                                    style="width: 100px">
                                    <br>
                            @endif
                            <label class="form-label" for="label"> *Connect BG Image <span
                                    class="text-danger"></span></label>
                            <input required type="file" class="form-control" id="connect_bg_image"
                                name="connect_bg_image" accept="image/*">
                            @error('connect_bg_image')
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

                        <h4>Celebrate Section</h4>
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                            <?php
                            $value = old('celebrate_heading', $homePage ? $homePage->celebrate_heading : null);
                            ?>
                            <label class="form-label" for="label"> *Celebrate Heading <span
                                    class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="celebrate_heading" name="celebrate_heading">
                            @error('celebrate_heading')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                            <?php
                            $value = old('celebrate_subheading', $homePage ? $homePage->celebrate_subheading : null);
                            ?>
                            <label class="form-label" for="label"> *Celebrate SubHeading <span
                                    class="text-danger"></span></label>
                            <input required type="text" value="{{ $value }}" class="form-control"
                                id="celebrate_subheading" name="celebrate_subheading">
                            @error('celebrate_subheading')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                            <div class="row">


                                @foreach ($homePage->celebrate_images_url as $image)
                                    <div class="col-lg-3">
                                        <img src="{{ $image }}" class=" rounded mb-4 img-fluid"
                                            alt="celebrate image" />

                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">

                            <label class="form-label" for="label"> *Celebrate Images <span
                                    class="text-danger"></span></label>
                            <input required type="file" class="form-control" id="celebrate_images"
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
