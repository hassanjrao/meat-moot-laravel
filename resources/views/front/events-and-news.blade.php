@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{  asset('front-assets/css/events.css')}}" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
@endsection

@section('page-title','Events & News')

@php
    $settings= \App\Models\Setting::first();
@endphp


@section('content')
    <div class="events-hero-section">
        <div class="pw-100 h-100 background-grey d-flex align-items-center justify-content-center text-light">
            <div>
                <h1 class="yellow text-center fw-light">
                    NEWS AND
                    <br />
                    <span class="text-lg">EVENTS</span>
                </h1>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="bg-black">
        <div class="text-center">
            <h1 class="font-xl yellow">WHAT IS ON?</h1>
            <h3 class="text-light fw-normal">
                Resturant openings, Awards News and Seasonal Events
            </h3>
            <h1 class="font-xxl light-yellow m-5">UPCOMING EVENTS</h1>
            <h4 class="mustard">Upcoming Restaurant Openings</h4>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mt-5 pt-5">
                    <div class="carousel" id="first-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 2, "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/event2.webp')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/event3.jpeg')}} " alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(179, 48, 1)">
                            UPCOMING EVENT
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Iraq, Baghdad 2.
                        </p>
                        <p><span class="mustard">Iraq Branch Address</span> : Baghdad</p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Iraq Baghdad
                            </h5>
                        </div>
                        <div>
                            <span> 02-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-abu-dhabi2-smoked-meat-150x150.webp')}}" alt="Image 4"
                                class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/Photo-468-150x150.jpeg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-kuwait-theavenuemall2-150x150.jpeg')}}" alt="Image 6"
                                class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meatmoot-nj-usa-150x150.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(179, 48, 1)">
                            UPCOMING EVENT
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Seattle – United States WA.
                        </p>
                        <p>
                            <span class="mustard">Seattle Branch Address</span> : Seattle,
                            Washington – United States.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Seattle - USA
                            </h5>
                        </div>
                        <div>
                            <span class="event-date">05-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pt-5">
                    <div class="carousel" id="first-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/Capture-decran-2022-11-05-a-01.36.06.png')}}" alt="Image 3"
                                class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(179, 48, 1)">
                            UPCOMING EVENT
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Qatar 2.
                        </p>
                        <p>
                            <span class="mustard">Qatar Second Branch Address</span>: Qatar
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Qatar 2</h5>
                        </div>
                        <div>
                            <span>04-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meet-moot-150x150.jpeg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/téléchargement-150x150.jpeg')}}" alt="Image 5"
                                class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/IMG_4562-150x150.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/WhatsApp-Image-2022-11-05-at-02.02.18-150x150.jpeg')}}"
                                alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(179, 48, 1)">
                            UPCOMING EVENT
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Jeddah - Saudi Arabia
                        </p>
                        <p>
                            <span class="mustard">Jeddah Branch Address</span> : 7802 Price
                            \SUltan Rd, Al Khalidiyyah, Jeddah 23423, Saudia Arabia.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Jeddah</h5>
                        </div>
                        <div>
                            <span>First trimester of 2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div>
                <h1 class="text-center font-xl" style="color: rgb(85, 72, 59, 0.6)">
                    PAST EVENTS
                </h1>
                <p class="text-center mustard">Previous Events Launches</p>
            </div>

            <div class="row">
                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/IMG_4562-150x150.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/WhatsApp-Image-2022-11-05-at-02.02.18-150x150.jpeg')}}"
                                alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meet-moot-150x150.jpeg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/téléchargement-150x150.jpeg')}}" alt="Image 3"
                                class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Al Ahsa, Saduia Arabia.
                        </p>
                        <p>
                            <span class="mustard">Al Ahsa Branch Address</span> : Saduia
                            Arabia
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Al Ahsa</h5>
                        </div>
                        <div>
                            <span>22-07-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/MEATMOOT-DUBAI-OPENING-e1668107222502-150x150.webp')}}"
                                alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/2022-05-22_MeatMoot-141-150x150.jpg')}}" alt="Image 5"
                                class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/IMG_4565-150x150.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/abudhabi-uae-150x150.jpeg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Abu Dhabi – United Arab
                            Emirates.
                        </p>
                        <p>
                            <span class="mustard">ABu Dhabi Branch Address</span> : Al Qana
                            - Rabdan - Abu Dhabi - United Arab Emirates.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Abu Dhabi
                            </h5>
                        </div>
                        <div>
                            <span class="event-date">04-03-2023</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Novi - United |States.
                        </p>
                        <p>
                            <span class="mustard">Novi Michigan Branch Address</span> :
                            44125 W 12 Mile Rd E136, Novi, MI 48277, United States
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Novi Michigan
                            </h5>
                        </div>
                        <div>
                            <span>29-06-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Kuwait City - Kuwait.
                        </p>
                        <p>
                            <span class="mustard">Kuwait Second Branch Address</span>:
                            Kuwait City - Kuwait.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Kuwait</h5>
                        </div>
                        <div>
                            <span class="event-date">04-03-2023</span>
                        </div>
                        <hr style="color: orange" class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Algiers - Algeria
                        </p>
                        <p>
                            <span class="mustard"> Algiers Branch Address</span> : Algeria
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Algiers</h5>
                        </div>
                        <div>
                            <span>25-05-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Buraydah - Saudi Arabia.
                        </p>
                        <p>
                            <span class="mustard">Buraydah Second Branch Address</span>:
                            Buraydah Saudi Arabia.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Buraydah</h5>
                        </div>
                        <div>
                            <span class="event-date">09-01-2023</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/Photo-468-150x150.jpeg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/WhatsApp-Image-2022-11-05-at-02.02.18-150x150.jpeg')}}"
                                alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meet-moot-150x150.jpeg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/téléchargement-150x150.jpeg')}}" alt="Image 3"
                                class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Al Khobar - Sadui Arabia
                        </p>
                        <p>
                            <span class="mustard"> Al Khobar Branch Address</span>: 4167
                            Prince Turki Road, Al Yarmouk District, EKDA7214, 7214, Al
                            Khobar 32244, Saudi Arabia
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Al Khobar
                            </h5>
                        </div>
                        <div>
                            <span>10-05-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Riyadh - Saudi Arabia.
                        </p>
                        <p>
                            <span class="mustard">Riyadh Second Branch Address</span> :
                            Prince Muhammad ibn Abd Al Aziz, As Sulimaniyah , Riyadh, Saudi
                            Arabia.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Riyadh</h5>
                        </div>
                        <div>
                            <span class="event-date">29-12-2022</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in JBR Dubai - Sadui Arabia
                        </p>
                        <p>
                            <span class="mustard"> Dubai Branch Address</span>:Jumeirah
                            Beach Residence - Dubai - United Arab Emirates
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - JBR Dubai
                            </h5>
                        </div>
                        <div>
                            <span>21-04-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Chicago - United States
                        </p>
                        <p>
                            <span class="mustard">Chicago Branch Address</span> : Chicago
                            Burbank Illinois - USA
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Chicago</h5>
                        </div>
                        <div>
                            <span>18-11-2022</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in New Cairo
                        </p>
                        <p>
                            <span class="mustard"> New Cairo Branch Address</span>:Emaar
                            Mivida Compound
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - New Cairo - Egypt
                            </h5>
                        </div>
                        <div>
                            <span>07-04-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/meat-moot-event1 (1).jpeg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Lusail- Qatar
                        </p>
                        <p>
                            <span class="mustard">Lusail Branch Address</span>: Place
                            Vendome, Lusail-Qatar
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Qatar - Lusail
                            </h5>
                        </div>
                        <div>
                            <span class="event-date">21-10-2022</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Miami - United States
                        </p>
                        <p>
                            <span class="mustard">Miami Branch Address</span>: Miami -
                            United States
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Miami - USA
                            </h5>
                        </div>
                        <div>
                            <span>04-02-2024</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Vadi Istanbul
                        </p>
                        <p>
                            <span class="mustard">Istanbul Second Branch Address</span>: -
                            Ayazaga, Meet Moot VAdi Istanbul. (vadiistannbul)
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - ISTANBUL</h5>
                        </div>
                        <div>
                            <span class="event-date">21-10-2022</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn custom-button">Discover More</button>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Dubai Hills
                        </p>
                        <p>
                            <span class="mustard">Dubai Hills Branch Address</span>:Dubai
                            Hills Mall - Dubai - United Arab Emirates
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Dubai Hills
                            </h5>
                        </div>
                        <div>
                            <span>04-02-2024</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn custom-button">Discover More</button>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{"wrapAround": true, "autoPlay": 2000 , "groupcells" : 3}'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in New Cairo
                        </p>
                        <p>
                            <span class="mustard"> New Cairo Branch Address</span>: Trivium
                            Square Mall, North 90 Street
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">
                                Grand Opening Ceremony - Cairo- Egypt
                            </h5>
                        </div>
                        <div>
                            <span class="event-date">26-09-2022</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn custom-button">Discover More</button>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Zarqa , Jordan.
                        </p>
                        <p>
                            <span class="mustard">Zarqa Hills Branch Address</span>: Karama
                            Street , Zarqa, Jordan
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Zarqa</h5>
                        </div>
                        <div>
                            <span>22-06-2023</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6 pt-5 mt-5">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in North Coast.
                        </p>
                        <p>
                            <span class="mustard">North Coast Branch Address</span>:Desert
                            Rd, Sidi Abdel Rahman, North Coast
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Egypt</h5>
                        </div>
                        <div>
                            <span class="event-date">03-07-2022</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn custom-button">Discover More</button>
                    </div>
                    <hr class="yellow-line" />
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Benghazi , Libya.
                        </p>
                        <p>
                            <span class="mustard">Benghazi Branch Address</span> : Benghazi
                            - Libya
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Libya</h5>
                        </div>
                        <div>
                            <span>22-06-2023</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Manama Bahrain.
                        </p>
                        <p>
                            <span class="mustard">Manama Branch Address</span> : Manama -
                            Bahrain
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Bahrain</h5>
                        </div>
                        <div>
                            <span class="event-date">03-07-2022</span>
                        </div>
                    </div>
                    <hr class="yellow-line" />
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Tabuk , Saudi Arabia.
                        </p>
                        <p>
                            <span class="mustard">Tabuk Branch Address</span>: King Khalid
                            Rd, Al Faisaliyah Ashamaliyah, Tabuk 47923, Saudi Arabia
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Tabuk</h5>
                        </div>
                        <div>
                            <span>22-06-2023</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6 mt-5 pt-5">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Dubai.
                        </p>
                        <p>
                            <span class="mustard">Dubai Branch Address</span> : City Walk -
                            Al Wasl- Dubai- United Arab Emirates
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - DUBAI</h5>
                        </div>
                        <div>
                            <span class="event-date">03-07-2022</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn custom-button">Discover More</button>
                    </div>
                    <hr class="yellow-line" />
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in New Jersey , United States.
                        </p>
                        <p>
                            <span class="mustard">New Jersey Branch Address</span> : New
                            Jersey - United States
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Tabuk</h5>
                        </div>
                        <div>
                            <span>22-06-2023</span>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>

                <div class="col-md-6 mt-5 pt-5">
                    <div class="carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : 3 , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 4" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 5" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                        <div class="carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 6" class="img-fluid" />
                        </div>
                    </div>

                    <div class="event-card mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Kuwait City.
                        </p>
                        <p>
                            <span class="mustard">Kuwait Second Branch Address</span>:
                            Kuwait City - Kuwait
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Kuwait</h5>
                        </div>
                        <div>
                            <span class="event-date">25-04-2022</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn custom-button">Discover More</button>
                    </div>
                    <hr class="yellow-line" />
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Oman ,Muscat.
                        </p>
                        <p>
                            <span class="mustard">Muscat Branch Address</span> : Oman -
                            Muscat
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Oman</h5>
                        </div>
                        <div>
                            <span>13-09-2023</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn custom-button">Discover More</button>
                        </div>
                        <hr class="yellow-line" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel" id="second-carousel"
                        data-flickity='{ "autoPlay": 4000 , "groupcells" : true , "cellAlign": "left", "contain": true, "pageDots": true }'>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 1" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 2" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                        <div class="carousel-cell" id="second-carousel-cell">
                            <img src="{{  asset('front-assets/media/images/about-us-bg.jpg')}}" alt="Image 3" class="img-fluid" />
                        </div>
                    </div>

                    <div class="mb-4 text-light mt-5">
                        <h6 class="text-center" style="color: rgb(214, 214, 10)">
                            The Wait Is Finally Over
                        </h6>
                        <p class="text-center">
                            Let's meet at our newest branch in Dabouq ,Amman , Jordan.
                        </p>
                        <p>
                            <span class="mustard">Dabouq Branch Address</span> : Royal Plaza
                            , Dabouq, King Abdullah bin Alhussein || St 168, Amman 11118,
                            Jordan
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: orange">Grand Opening Ceremony - Dabouq</h5>
                        </div>
                        <div>
                            <span>17-04-2023</span>
                        </div>
                        <hr class="yellow-line" />
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
                                        <img src="{{  asset('front-assets/media/images/download (12).svg')}}" class="img-fluid mx-2 mb-4"
                                            alt="Image 1" />
                                    </div>
                                    <div class="my-2">
                                        <img src="{{  asset('front-assets/media/images/download (5).svg')}}" class="img-fluid mx-2 mb-4"
                                            alt="Image 5" />
                                    </div>

                                    <div class="my-2">
                                        <img src="{{  asset('front-assets/media/images/download (8).svg')}}" class="img-fluid mx-2 mb-4"
                                            alt="Image 5" />
                                    </div>
                                    <div class="my-2">
                                        <img src="{{  asset('front-assets/media/images/download (3).svg')}}" class="img-fluid mx-2 mb-4"
                                            alt="Image 3" />
                                    </div>

                                    <div class="my-2">
                                        <img src="{{  asset('front-assets/media/images/download (4).svg')}}" class="img-fluid mx-2 mb-4"
                                            alt="Image 2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 d-flex justify-content-center align-items-center">
                        <div class="content last-section">
                            <img src="{{  asset('front-assets/media/images/meatmoot-restaurant-smoked-meat-1-768x768.jpeg')}}"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 d-flex justify-content-center align-items-center">
                        <div class="content py-5 font-inter w-100">
                            <h2 class="text-light text-center pb-5">Our Location</h2>
                            {{-- <h5 class="text-light text-center">HeadQuater</h5> --}}
                            <h6 class="text-light text-center">
                               {{ $settings->location }} - {{ $settings->city }}
                            </h6>
                            <h6 class="text-light text-center">
                                {{ $settings->city }}
                            </h6>
                            <img src="{{  $settings->lets_meat_logo_url}}" class="let-meet img-fluid pt-2" />
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
                    Copyright © 2024 {{ config('app.name') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endpush
