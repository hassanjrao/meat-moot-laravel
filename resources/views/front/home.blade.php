@extends('layouts.front')

@section('page-title', 'Home')


@section('content')
    <!-- Hero Section -->
    <div class="container-fluid p-0 hero-section d-flex justify-content-center align-items-center">
        <div class="overlay"></div>
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ $homePage->hero_bg_video_url }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content mt-5 text-center container justify-content-start d-flex flex-column">
            <div class="row">
                <h1 class="custom-heading offset-2 text-start">
                    {{ $homePage->hero_title }}
                </h1>
            </div>
            <div class="row mt-4">
                <a href="{{ route('contact') }}" class="btn-location offset-2">Find Location</a>
            </div>
            <div class="social-icons d-flex align-items-center justify-content-center mt-5 gap-3 gap-md-4 gap-lg-5">

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

    <!-- New Menu Section -->
    <section class="menu-section-concept py-5">
        <div class="menu-main d-flex flex-column flex-lg-row align-items-center justify-content-evenly">
            <!-- Image Section -->
            <div class="menu-image-container mb-4 position-relative">
                <div class="image-card"></div>
                <img src="{{ $homePage->concept_image_url }}" alt="Menu Image" class="menu-image-meat position-absolute" />
            </div>
            <!-- Text Section -->
            <div class="menu-content d-flex flex-column justify-content-start align-items-start">
                <img src="{{ asset('front-assets/media/images/download (14).svg') }}" class="fork-image m-auto m-lg-0"
                    alt="" />
                <h2 class="menu-heading">
                    {{ $homePage->concept_heading }}
                </h2>
                <h3 class="menu-subheading">
                    {{ $homePage->concept_subheading }}
                </h3>
                <p class="menu-description">
                    {{ $homePage->concept_description }}
                </p>
            </div>
            <div class="image-container mb-4 mb-lg-0">
                <img src="{{ asset('front-assets/media/images/download (13).svg') }}" alt="Menu Image"
                    class="knife-image" />
            </div>
        </div>
    </section>
    <!--Testimonial section  -->

    <section class="container-fluid testimonial-section">
        <div class="container w-100">
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 d-flex flex-row-reverse">
                    <!-- Knife logo -->
                    <img src="{{ asset('front-assets/media/images/cropped-meatmoot-logo-170x58.jpg') }}" alt="lamb"
                        class="testimonial-logo" />
                </div>
                <div class="col-lg-6 ps-5">
                    <div class="testimonial-content">
                        <!-- Quote -->
                        <div class="quote-icon"></div>
                        <img src="{{ asset('front-assets/media/images/download (6).svg') }}" class=""
                            alt="" />
                    </div>
                    <!-- Divider -->
                    <div class="divider my-5"></div>
                    <p class="testimonial-quote">
                        {{ $homePage->ceo_message }}
                    </p>

                    <!-- Author -->
                    <p class="testimonial-author">
                        {{ $homePage->ceo_location }}
                    </p>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- Mneu Item Section -->
    <section class="menu-section container-fluid">
        <div class="container-fluid d-flex flex-column">
            <!-- Menu Title -->
            <div class="w-100">
                <div class="col-2 offset-2 w-75">
                    <h2 class="menu-title">The Menu</h2>
                </div>
            </div>

            <!-- Menu Grid -->
            <div class="d-flex flex-column flex-lg-row justify-content-center gap-">
                <div class="d-flex flex-column w-100">
                    <!-- Menu Item 1 -->

                    @foreach ($menuHighlightsFirst as $menu)
                        <div class="menu-item d-flex flex-column align-items-center justify-content-center">
                            <!-- <div> -->
                            <img src="{{ $menu->image_url }}" alt="Lamb Neck" class="img-fluid w-75" />
                            <!-- </div> -->
                            <p class="menu-item-name text-end w-75 pe-4">
                                {{ $menu->title }}
                            </p>
                        </div>
                    @endforeach

                </div>
                <div class="d-flex flex-column w-100">

                    <div class="menu-knife-image d-flex align-items-center justify-content-center mb-5">
                        <img src="{{ asset('front-assets/media/images/download.svg') }}" alt=""
                            class="w-75 mx-auto" />
                    </div>
                    <!-- Menu Item 4 -->

                    @foreach ($menuHighlightsSecond as $menu)
                        <div class="menu-item w-100 d-flex flex-column align-items-center justify-content-center">
                            <img src="{{ $menu->image_url }}" alt="Lamb Ribs" class="img-fluid w-75" />
                            <p class="menu-item-name text-start ps-4 w-75">{{ $menu->title }}</p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Section Info -->
    <section class="container-fluid section-banner d-flex align-items-center justify-content-center"
        style="background: url('{{ $homePage->connect_bg_image_url }}') no-repeat center center/cover;">
        <div
            class="container-fluid p-0 text-center text-white d-flex flex-column align-content-center justify-content-center gap-4">
            <h1 class="title">
                {{ $homePage->connect_heading }}
            </h1>
            <h2 class="subtitle container">
                {{ $homePage->connect_subheading }}
            </h2>
            <a href="{{ route('contact') }}" class="btn-contact mx-auto">Let's Connect</a>
            <p class="info-text">
                {{ $homePage->connect_message }}
            </p>
        </div>
    </section>

    <!-- Map Section -->
    <section class="d-flex flex-column map-section align-items-center justify-content-center text-center gap py-5">
        <div class="map-border mb-4"></div>
        <h2 class="map-title mb-5">LET'S MEAT HERE!</h2>
        <div class="map-container container position-relative mx-auto">
            <img id="world-map" src="{{ asset('front-assets/media/images/Map.png') }}" alt="World Map"
                class="image-container" />
            <div class="zoom-controls">
                <button id="zoom-in" class="btn btn-outline-light mb-2">+</button><br />
                <button id="zoom-out" class="btn btn-outline-light">-</button>
            </div>
        </div>
        <p class="map-paragraph">
            Find the nearest {{ config('app.name') }} and join us for lunch or dinner
            today!
        </p>
    </section>
    <!-- Rating section -->
    <section class="container-fluid section-review d-flex align-items-center justify-content-center">
        <div
            class="container text-center text-white d-flex flex-column flex-lg-row align-content-center justify-content-between w-100 gap-4">
            <div class="stats-section rating w-100">
                <h1 data-number="4.8">0</h1>
                <h2 class="stars">★★★★★</h2>
                <p>5150 Ratings</p>
                <p>Google Reviews</p>
            </div>
            <div class="stats-section customers w-100">
                <div class="d-flex align-items-center justify-content-center">
                    <h1 data-number="23325">0</h1>
                    <div class="rating-plus">+</div>
                </div>
                <p>Daily Customers</p>
                <h2>in our branches</h2>
            </div>
            <div class="stats-section branches w-100">
                <div class="d-flex align-items-center justify-content-center">
                    <h1 data-number="39">0</h1>
                    <div class="rating-plus">+</div>
                </div>
                <p>Branches</p>
                <h2>in more than 14 countries</h2>
            </div>
        </div>
    </section>

    <!-- Celebrations Section -->
    <section class="container-fluid celebrations-section">
        <div
            class="container w-100 d-lg-flex flex-lg-row flex-md-column d-md-flex align-items-center justify-content-between py-5 gap-lg-5">

            <div class="row">
                <div class="col-lg-4">
                    <div class="celebration-heading  flex-column d-flex gap-3 me-auto" style="width: 100%">
                        <div class="border-celebrations"></div>
                        <h1>
                            {{ $homePage->celebrate_heading }}
                        </h1>
                        <div>
                            <img src="{{ asset('front-assets/media/images/download (6).svg') }}" class=""
                                alt="" />
                            <p>
                                {{ $homePage->celebrate_subheading }}
                            </p>
                        </div>
                        <button class="btn btn-contact">Discover More</button>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">


                        @foreach ($homePage->celebrate_images_url as $image)
                            <div class="col-lg-6">


                                <img src="{{ $image }}" class=" rounded mb-4 img-fluid" alt="celebrate image" />
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>


            <!-- Gallery -->
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('front-assets/js/common.js') }}"></script>
    <script src="{{ asset('front-assets/js/script.js') }}"></script>
@endpush
