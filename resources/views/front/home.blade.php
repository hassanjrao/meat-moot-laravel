@extends('layouts.front')

@section('page-title', 'Home')


@section('content')
    <!-- Hero Section -->
    <div class="container-fluid p-0 hero-section d-flex justify-content-center align-items-center">
        <div class="overlay"></div>
        <div class="content mt-5 text-center container justify-content-start d-flex flex-column">
            <div class="row">
                <h1 class="custom-heading offset-2 text-start">
                    The Real Taste of Smoked Meat & a Unique Adventure Awaits
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
                <img src="{{ asset('front-assets/media/images/home-meatmoot-smoked-meat-.webp') }}" alt="Menu Image"
                    class="menu-image-meat position-absolute" />
            </div>
            <!-- Text Section -->
            <div class="menu-content d-flex flex-column justify-content-start align-items-start">
                <img src="{{ asset('front-assets/media/images/download (14).svg') }}" class="fork-image m-auto m-lg-0"
                    alt="" />
                <h2 class="menu-heading">Menu Concept</h2>
                <h3 class="menu-subheading">The unique Taste</h3>
                <p class="menu-description">
                    What distinguishes our menu and the concept behind it are the modern
                    interpretations of familiar dishes and flavor combinations they
                    create, resulting in unique tastes, innovative presentations, and a
                    distinctive Quality Meats style.
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
                    <img src="{{ asset('front-assets/media/images/cropped-meatmoot-logo-170x58.jpg') }}" alt="Meat Moot"
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
                        At Meat Moot, we give you the kingly presentation of great meat
                        garnished with a world-class recipe that will always leave you
                        wanting more.
                    </p>

                    <!-- Author -->
                    <p class="testimonial-author">Istanbul Headquarters CEO</p>
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
                    <!-- Menu Item 5 -->
                    <div class="menu-item w-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('front-assets/media/images/Lamb_ribs.png') }}" alt="Beef Brisket"
                            class="img-fluid w-75" />
                        <p class="menu-item-name text-start ps-4 w-75">LAMB RIBS</p>
                    </div>
                    <!-- Menu Item 6 -->
                    <div class="menu-item w-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('front-assets/media/images/Beef_ribs.png') }}" alt="Beef Ribs"
                            class="img-fluid w-75" />
                        <p class="menu-item-name text-start ps-4 w-75">BEEF RIBS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Info -->
    <section class="container-fluid section-banner d-flex align-items-center justify-content-center">
        <div
            class="container-fluid p-0 text-center text-white d-flex flex-column align-content-center justify-content-center gap-4">
            <h1 class="title">WE ARE GROWING EVERY DAY</h1>
            <h2 class="subtitle container">
                Hankering For More Information About Having Your Own Meat Moot
                Restaurant?
            </h2>
            <a href="#connect" class="btn-contact mx-auto">Let's Connect</a>
            <p class="info-text">The success of our franchisees drives us.</p>
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
            <div class="celebration-heading flex-column d-flex gap-3 me-auto">
                <div class="border-celebrations"></div>
                <h1>Celebrities Favorite Meat Restaurant</h1>
                <div>
                    <img src="{{ asset('front-assets/media/images/download (6).svg') }}" class=""
                        alt="" />
                    <p>
                        Each of our meals has its own unique story that we want to share
                        with you.
                    </p>
                </div>
                <button class="btn btn-contact">Discover More</button>
            </div>

            <!-- Gallery -->
            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center flex-column">
                    <img src="{{ asset('front-assets/media/images/meat-moot-new-cairo-opening3-300x200.jpeg') }}"
                        class="image-1-gallery rounded mb-4 img-fluid" alt="Boat on Calm Water" />

                    <img src="{{ asset('front-assets/media/images/meat-moot-happy-customerss-300x200.webp') }}"
                        class="image-2-gallery rounded m-0 img-fluid" alt="Wintry Mountain Landscape" />
                </div>
                <div class="d-flex">
                    <div class="mb-4 mb-md-0 ms-4 p-0 mx-0 justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('front-assets/media/images/meat-moot-happy-customers-5-218x300.webp') }}"
                            class="image-3-gallery img-fluid rounded pt-4 m-0" alt="Mountains in the Clouds" />

                        <img src="{{ asset('front-assets/media/images/meatmoot-egypt-smoked-meat-1-150x150.jpeg') }}"
                            class="image-4-gallery img-fluid rounded mt-5" alt="Boat on Calm Water" />
                    </div>

                    <div class="mb-4 mb-md-0 justify-content-end d-flex flex-column align-items-start">
                        <img src="{{ asset('front-assets/media/images/meat-moot-happy-customers3-200x300.jpeg') }}"
                            class="img-fluid rounded" alt="Waves at Sea" />

                        <img src="{{ asset('front-assets/media/images/meat-moot-happy-customers-300x200.jpeg') }}"
                            class="img-fluid rounded mb-4 image-end" alt="Yosemite National Park" />
                    </div>
                </div>
            </div>
            <!-- Gallery -->
        </div>
    </section>
@endsection
