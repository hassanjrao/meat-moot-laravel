@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('front-assets/css/about.css') }}" />
@endsection

@php
    $settings = \App\Models\Setting::first();
@endphp

@section('page-title', 'About Us')

@section('content')
    <!-- Main-section -->
    <div class="about-image" style="background-image: url('{{ $aboutPage->hero_bg_image_url }}')">
        <div class="black">
            <div class="heading">
                <h1>
                    {{ $aboutPage->hero_title }}
                </h1>
                <div class="heading-hr"></div>
            </div>
        </div>
    </div>

    <!-- second portion -->
    <div class="sec-portion">
        <div class="container second-portion">
            <div class="row align-items-center">
                <!-- Use a row for the layout -->
                <div class="col-md-6">
                    <!-- First column for text and icons -->
                    <div class="hr-text">
                        <div class="hr-top"></div>
                        <div class="text-light">
                            {{ $aboutPage->description }}
                        </div>
                        <div class="icons">
                            @if ($settings->instagram)
                                <a target='_blank' href="{{ $settings->instagram }}">
                                    <img src="{{ asset('front-assets/media/images/download (8).svg') }}" class=""
                                        alt="" />
                                </a>
                            @endif
                            @if ($settings->facebook)
                                <a target='_blank' href="{{ $settings->facebook }}">
                                    <img src="{{ asset('front-assets/media/images/download (12).svg') }}" class=""
                                        alt="" />
                                </a>
                            @endif
                            @if ($settings->tripadvisor)
                                <a target='_blank' href="{{ $settings->tripadvisor }}">
                                    <img src="{{ asset('front-assets/media/images/download (3).svg') }}" class=""
                                        alt="" /></a>
                            @endif
                            @if ($settings->tiktok)
                                <a target='_blank' href="{{ $settings->tiktok }}">
                                    <img src="{{ asset('front-assets/media/images/download (4).svg') }}" class=""
                                        alt="" /></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center pt-5">
                    <!-- Second column for the image -->
                    <div class="violt-image">
                        <img src="{{ $aboutPage->image_url }}" alt="piano-image" class="img-fluid" />
                        <!-- Use img-fluid for responsive images -->
                    </div>
                    <div class="additional-image">
                        <img src="{{ asset('front-assets/media/images/medium.png') }}" alt="second-image"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Third-Portion dark">
        <div class="third-portion-container">
            <h1 class="p-5">
                {{ $aboutPage->history_heading }}
            </h1>
            <p class="text-light container">
                {{ $aboutPage->history_description }}
            </p>

        </div>
        <div class="container text-center mt-5">
            {{-- <button class="btn btn-transparent">FIND CLOSEST LOCATION</button> --}}
        </div>
        <!--
                              /*five column with one row -->
        <div>
            <div class="d-flex flex-wrap justify-content-between pt-5">

                @foreach ($aboutPage->about_images_url as $img)
                    <div class="box">
                        <img src="{{ $img }}" class="img-fluid" />
                    </div>
                @endforeach



            </div>
        </div>
    </div>

    <!-- /* Atmosphere of our resturent /* -->

    <div class="parallax" style="background-image: url('{{ $aboutPage->atmosphere_bg_image_url }}')">
        <div class="p-3 background">
            <div style="height: auto; background-color: rgba(24, 23, 23, 0.8)" class="black-background py-3">
                <h1 class="text-center py-3">
                    {{ $aboutPage->atmosphere_heading }}
                </h1>
                <p class="px-5">
                    {{ $aboutPage->atmosphere_description }}
                </p>

                <div class="container text-center mt-5">
                    <a href="{{ route('our-menu') }}" class="btn btn-transparent">DISCOVER OUR MENU</a>
                </div>
            </div>
        </div>
        <!--
                            Recommeded By -->

        <div class="container-fluid last-section pb-5">
            {{-- <h1 class="text-center p-5 recomded-heading">Recommended By</h1>
            <div class="container py-5">
                <div class="row justify-content-between align-items-center">
                    @foreach ($aboutPage->recommendated_by_images_url as $img)
                        <div class="col-12 col-md-3 d-flex justify-content-center py-2">
                            <img src="{{ $img }}" class="img-fluid border-img" alt="Image 1" />
                        </div>
                    @endforeach


                </div>
            </div> --}}

            <div class="container">
                <div class="row justify-content-center text-center">
                    @foreach ($aboutPage->celebrate_images_url as $img)
                        <div class="col-12 col-md-3 d-flex justify-content-center py-2">
                            <img src="{{ $img }}"
                                class="img-fluid border-img" alt="Image 1" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('front-assets/js/about.js') }}"></script>
@endpush
