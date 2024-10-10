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
    <div class="about-image">
        <div class="black">
            <div class="heading">
                <h1>About Our Restaurant</h1>
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
                        <div>
                            <p>
                                Founded in 2021, <strong>Meat Moot</strong>, has
                                successfully established 39 locations across 14
                                <strong>countries worldwide</strong>, and we continue to
                                diligently pursue the execution of our growth strategy, aiming
                                to penetrate new markets.
                            </p>
                            <p class="text-light">
                                We are headquartered in <strong>Istanbul, Turkey</strong>. At
                                <strong>{{ config('app.name') }}</strong>, you will sit at a
                                king’s banquet, you will be presented with a feast of
                                garnished <strong>meat</strong> cooked following world-class
                                recipes that will always leave you wanting more. Traditional
                                continues to meet modern in our kitchen, where a
                                state-of-the-art cooking facility lies next to a meat curing
                                facility.
                            </p>
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
                        <img src="{{ asset('front-assets/media/images/violt-image.png') }}" alt="piano-image"
                            class="img-fluid" />
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
            <h1 class="p-5">Our History</h1>
            <p class="text-light container">
                Established in 2021, we now have <strong>Meat Moot</strong> locations
                in <strong>14 countries</strong> around the world. We are
                headquartered in Istanbul, Turkey. Meat Moot is an exciting rather
                newly established restaurant brand, which expands very successfully
                and rapidly internationally. We are introducing a whole new concept of
                great smoked meat to the market and combining casual dining with great
                and fast service.
            </p>

        </div>
        <div class="container text-center mt-5">
            {{-- <button class="btn btn-transparent">FIND CLOSEST LOCATION</button> --}}
        </div>
        <!--
                      /*five column with one row -->
        <div>
            <div class="d-flex flex-wrap justify-content-between pt-5">
                <div class="box">
                    <img src="{{ asset('front-assets/media/images/First-col-pic.webp') }}" />
                </div>
                <div class="box">
                    <img src="{{ asset('front-assets/media/images/instagram.png') }}" />
                </div>
                <div class="box box2">
                    <img src="{{ asset('front-assets/media/images/Third-col-pic.webp') }}" />
                </div>
                <div class="box box2">
                    <img src="{{ asset('front-assets/media/images/First-col-pic.webp') }}" />
                </div>
                <div class="box box2">
                    <img src="{{ asset('front-assets/media/images/five-image.png') }}" />
                </div>
            </div>
        </div>
    </div>

    <!-- /* Atmosphere of our resturent /* -->

    <div class="parallax">
        <div class="p-3 background">
            <div style="height: auto; background-color: rgba(24, 23, 23, 0.8)" class="black-background py-3">
                <h1 class="text-center py-3">Atmosphere Of Our Restaurant</h1>
                <p class="px-5">
                    The warm, industrial decor draws on cues from traditional Istanbul
                    butcher shops, and the usage of warm wood, stainless steel, and dark
                    marble.
                </p>

                <p class="px-5">
                    The space succeeds in being simultaneously rustic, inviting, and
                    luxurious with rich details. Interior details include an homage to a
                    traditional “<strong>meat locker</strong>” interior with finished
                    walnut planks covering the length of the dining room wall.
                </p>

                <p class="px-5">
                    The unique experience for guests is complemented by the creative
                    interior design of all branches of
                    <strong>Meat Moot</strong> restaurants, which accentuates the
                    restaurant’s warm atmosphere and integrates the iconic wooden
                    material inspired by the restaurant’s identity that provides
                    relaxation and tranquility.
                </p>

                <p class="px-5">
                    The soothing quiet music brings comfort while the guests indulge and
                    unwind. From big details down to the small intricate ones have been
                    given a thoughtful consideration to provide a wonderful and
                    unforgettable dining experience.
                </p>

                <div class="container text-center mt-5">
                    <button class="btn btn-transparent">DISCOVER OUR MENU</button>
                </div>
            </div>
        </div>
        <!--
                    Recommeded By -->

        <div class="container-fluid last-section pb-5">
            <h1 class="text-center p-5 recomded-heading">Recommended By</h1>
            <div class="container py-5">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-2 d-flex justify-content-center mb-5">
                        <div class="logo-container">
                            <img src="{{ asset('front-assets/media/images/about/darkol.png') }}"
                                class="img-fluid mx-2 dark-logo" alt="Image 1" />
                            <img src="{{ asset('front-assets/media/images/about/tripadvisor-meatmoot.png') }}"
                                class="img-fluid mx-2 dark-logo hover-image image-ol" alt="Image 1" />
                        </div>
                    </div>
                    <div class="col-12 col-md-2 d-flex justify-content-center mb-5">
                        <div class="logo-container">
                            <img src="{{ asset('front-assets/media/images/about/darkyelp.png') }}"
                                class="img-fluid dark-logo mx-2" alt="Image 2" />
                            <img src="{{ asset('front-assets/media/images/about/yelp-meatmoot-img.png') }}"
                                class="img-fluid dark-logo mx-2 hover-image image-yelp" alt="Image 2" />
                        </div>
                    </div>
                    <div class="col-12 col-md-2 d-flex justify-content-center mb-5">
                        <div class="logo-container">
                            <img src="{{ asset('front-assets/media/images/about/darkgoogle.png') }}"
                                class="img-fluid dark-logo mx-2" alt="Image 3" />
                            <img src="{{ asset('front-assets/media/images/about/g-google-logo.png') }}"
                                class="img-fluid dark-logo mx-2 hover-image image-google" alt="Image 3" />
                        </div>
                    </div>
                    <div class="col-12 col-md-2 d-flex justify-content-center mb-5">
                        <div class="logo-container">
                            <img src="{{ asset('front-assets/media/images/about/darkfb.png') }}"
                                class="img-fluid dark-logo mx-2" alt="Image 4" />
                            <img src="{{ asset('front-assets/media/images/about/fb-log0-2024.png') }}"
                                class="img-fluid dark-logo mx-2 hover-image image-fb" alt="Image 4" />
                        </div>
                    </div>
                    <div class="col-12 col-md-2 d-flex justify-content-center mb-5">
                        <div class="logo-container">
                            <img src="{{ asset('front-assets/media/images/about/darkX-twitter.png') }}"
                                class="img-fluid dark-logo mx-2" alt="Image 5" />
                            <img src="{{ asset('front-assets/media/images/about/x-twitter.png') }}"
                                class="img-fluid dark-logo mx-2 hover-image image-twitter" alt="Image 5" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-3 d-flex justify-content-center py-2">
                        <img src="{{ asset('front-assets/media/images/celeberation.jpeg') }}"
                            class="img-fluid border-img" alt="Image 1" />
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-center py-2">
                        <img src="{{ asset('front-assets/media/images/celebration-2.jpeg') }}"
                            class="img-fluid border-img" alt="Image 2" />
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-center py-2">
                        <img src="{{ asset('front-assets/media/images/celebration-3.jpeg') }}"
                            class="img-fluid border-img" alt="Image 3" />
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-center py-2">
                        <img src="{{ asset('front-assets/media/images/meat-moot-happy-customers-1024x683.jpeg') }}"
                            class="img-fluid border-img" alt="Image 4" />
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('front-assets/js/about.js') }}"></script>
@endpush
