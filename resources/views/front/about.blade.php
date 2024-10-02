@extends('layouts.front')

@section('styles')
<link rel="stylesheet" href="{{  asset('front-assets/css/about.css')}}" />
@endsection

@section('page-title','About Us')

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
                                <strong>Meat Moot Restaurant</strong>, you will sit at a
                                king’s banquet, you will be presented with a feast of
                                garnished <strong>meat</strong> cooked following world-class
                                recipes that will always leave you wanting more. Traditional
                                continues to meet modern in our kitchen, where a
                                state-of-the-art cooking facility lies next to a meat curing
                                facility.
                            </p>
                        </div>
                        <div class="icons">
                            <i class="fa-brands fa-instagram text-light me-2"></i>
                            <i class="fa-brands fa-facebook-f text-light me-2"></i>
                            <i class="fa-brands fa-github-alt text-light"></i>
                            <i class="fa-brands fa-tiktok text-light"></i>
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
            <h1 class="p-5">Branches</h1>
            <p class="text-light container">
                Istanbul - Turkey | Cairo - Egypt | Amman - Jordan | Doha - Qatar |
                Kuwait City - Kuwait | Dubai - United Arab Emirates | Erbil - Iraq |
                Chicago - USA | Manama - Bahrain | Michigan - United States | El Sahel
                El Shamally - Egypt | Ramallah - Palestine | Buraydah - Saudi Arabia |
                Riyadh - Saudi Arabia | Algiers - Algeria | Irbid - Jordan | Abu Dhabi
                - UAE | Daboqu - Jordan | Benghazi - Libya | Trabzon - Turkey | Muscat
                - Oman | Zarqa - Jordan | New Jersey - USA | Tabuk - Saudi Arabia |
                Miami - USA | Al Ahsa - Saudi Arabia
            </p>
        </div>
        <div class="container text-center mt-5">
            <button class="btn btn-transparent">FIND CLOSEST LOCATION</button>
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

        <!-- Footer -->
        <div class="container-fluid last-section pb-4">
            <div class="container px-5">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4 d-flex justify-content-center align-items-center">
                        <div class="content last-section">
                            <h1 class="stay">Stay Connected</h1>

                            <div class="container">
                                <div class="d-flex align-items-center justify-content-center">
                                    <!-- Use Bootstrap grid system -->
                                    <div class="my-2">
                                        <img src="{{ asset('front-assets/media/images/download (12).svg') }}"
                                            class="img-fluid mx-2 mb-4" alt="Image 1" />
                                    </div>
                                    <div class="my-2">
                                        <img src="{{ asset('front-assets/media/images/download (5).svg') }}"
                                            class="img-fluid mx-2 mb-4" alt="Image 5" />
                                    </div>

                                    <div class="my-2">
                                        <img src="{{ asset('front-assets/media/images/download (8).svg') }}"
                                            class="img-fluid mx-2 mb-4" alt="Image 5" />
                                    </div>
                                    <div class="my-2">
                                        <img src="{{ asset('front-assets/media/images/download (3).svg') }}"
                                            class="img-fluid mx-2 mb-4" alt="Image 3" />
                                    </div>

                                    <div class="my-2">
                                        <img src="{{ asset('front-assets/media/images/download (4).svg') }}"
                                            class="img-fluid mx-2 mb-4" alt="Image 2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 d-flex justify-content-center align-items-center">
                        <div class="content last-section">
                            <img src="{{ asset('front-assets/media/images/meatmoot-restaurant-smoked-meat-1-768x768.jpeg') }}"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 d-flex justify-content-center align-items-center">
                        <div class="content py-5 font-inter w-100">
                            <h2 class="text-light text-center pb-5">Our Location</h2>
                            <h5 class="text-light text-center">HeadQuater</h5>
                            <h6 class="text-light text-center">
                                Sıtkı Bey Plaza No:82 K:7 34736 Kadıköy - ISTANBUL, TURKEY.
                            </h6>
                            <h6 class="text-light text-center">Istanbol</h6>
                            <img src="{{ asset('front-assets/media/images/letsmeat.png') }}"
                                class="let-meet img-fluid pt-2" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center d-flex align-items-center justify-content-center gap-5 px-5 text-end">
                        <p class="text-light">PRIVACY POLICY</p>
                        <p class="text-light">TERMS OF USE</p>
                    </div>
                </div>
                <p class="text-light text-center mb-0">
                    Copyright © 2024 Meat Moot | Powered by Meat Moot
                </p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('front-assets/js/about.js') }}"></script>
@endpush
