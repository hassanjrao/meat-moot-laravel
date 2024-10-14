@extends('layouts.front')

@section('styles')


    <link rel="stylesheet" href="{{ asset('front-assets/css/our-menu.css') }}" />
@endsection


@php
    $settings = \App\Models\Setting::first();
    $ourMenuPage = \App\Models\OurMenuPage::first();
@endphp

@section('page-title', $ourMenuPage->hero_title)


@section('content')
    <div class="about-image" style="background-image: url('{{ $ourMenuPage->hero_bg_image_url }}')">
        <div class="black">
            <div class="meatmoot-h">
                <h1 class="heading pt-5 mt-5">{{ config('app.name') }}</h1>
                <h2 class="text-center menu py-3">
                    {{ $ourMenuPage->hero_title }}
                </h2>
                <div class="heading-hr"></div>
                <h4 class="text-center country m-3 py-3">
                    {{ $settings->location }} - {{ $settings->city }}
                </h4>
                <div class="container d-flex align-items-center justify-content-center py-3">

                    @if ($settings->instagram)
                        <a target="_blank" href="{{ $settings->instagram }}">
                            <img src="{{ asset('front-assets/media/images/download (8).svg') }}" class="img-fluid mx-2" />
                        </a>
                    @endif
                    @if ($settings->facebook)
                        <a target="_blank" href="{{ $settings->facebook }}">
                            <img src="{{ asset('front-assets/media/images/download (12).svg') }}" class="img-fluid mx-2" />
                        </a>
                    @endif
                    @if ($settings->whatsapp)
                        <a target="_blank" href="{{ $settings->whatsapp }}">
                            <img src="{{ asset('front-assets/media/images/downloadWhatsapp.svg') }}"
                                class="img-fluid mx-2" />
                        </a>
                    @endif
                    @if ($settings->tiktok)
                        <a target="_blank" href="{{ $settings->tiktok }}">
                            <img src="{{ asset('front-assets/media/images/download (4).svg') }}" class="img-fluid mx-2" />
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Second-portion -->
    <div class="container-fluid pt-5 theme">
        <!-- Dynamic Text -->

        <div class="container mt-5">
            <h2 class="static-text text-center p-5">
                Enjoy your <span id="dynamic-word" class="dynamic-text"></span> Meat
            </h2>
        </div>

        <!-- third portion -->

        @foreach ($menus as $menu)
            <div class="container mt-5">
                <div class="row background">
                    <!-- Column 1 taking 8 out of 12 columns -->
                    <div class="col-sm-2 col-12 d-flex flex-column align-items-center justify-content-end background">
                        <img class="image-fluid image-menu-1" src="{{ $menu->image_url }}" />
                        <p class="mt-2">⭐⭐⭐⭐⭐</p>
                    </div>

                    <!-- Column 2 taking 4 out of 12 columns -->
                    <div class="col-sm-10 col-12">
                        <h3 class="heading text-start">
                            {{ $menu->title }}
                        </h3>
                        <h5 class="text-light">
                            {{ $menu->description }}
                        </h5>
                        <h2 class="text-end dotted-border-bottom pb-3 menu">
                            {{ $menu->serving }}
                        </h2>
                    </div>
                </div>
            </div>
        @endforeach



        <!--
                                            numbers above dynamic pictures -->

        <div class="p-3 text-white">
            <div>
                <h1 class="number text-center ms-5" id="dynamicNumber">01</h1>
                <h2 class="container country text-end pe-5">
                    A Full Coure Meal Served With
                </h2>
            </div>
        </div>

        <!-- column with changing picture -->

        <div class="container">
            <div class="row">
                <!-- First Column -->
                <div class="col-12 col-md-6 d-none d-md-block clickable-image">
                    <div class="p-3 dynamic-images">
                        @php
                            $firstMeal = $fullCourseMeals->first();
                        @endphp
                        <img src="{{ $firstMeal->image_url }}" class="img-fluid" id="dynamicImage" />
                    </div>
                </div>

                <!-- Second Column -->
                <div class="col-12 col-md-6">

                    @foreach ($fullCourseMeals as $ind => $fullCourseMeal)
                        <div class="d-flex text-light p-3 background-two mb-3"
                            data-image="{{ $fullCourseMeal->image_url }}" data-number="01">
                            <i class="fa-solid fa-bowl-rice pt-3 px-2"></i>
                            <div>
                                <h4 class="menu py-2">{{ $fullCourseMeal->title }}</h4>
                                <h5>
                                    {{ $fullCourseMeal->description }}
                                </h5>
                            </div>
                            @if ($ind == 0)
                                <div class="line-effect line-active"></div>
                            @else
                                <div class="line-effect"></div>
                            @endif
                            <!-- Line Effect  -->
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

        <!-- Font -->
        <div>
            <h2 class="text-light text-center font p-3">Bon Appetit</h2>
        </div>

        <!-- box with grid -->

        <div class="container">
            <!-- First Row with 3 equal columns -->
            <div class="row box">

                @foreach ($extras as $extra)
                    <div class="col-12 col-md-4 bordered-right-bottom p-5">
                        <div class="p-3 text-center text-light">
                            <i class="fa-solid fa-bowl-food pt-3 px-2"></i>
                            <h4 class="menu">{{ $extra->title }}</h4>
                            <p>
                                {{ $extra->description }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

        <!-- Centered Image -->

        <div>
            <h1 class="heading pt-5">To Know More About Us</h1>
            <div class="d-flex justify-content-center align-content-center p-5">
                <button onclick="visitWeb()" class="orange-button text-dark">Visit Our Website</button>
            </div>

            <div class="letsmeat pb-5 d-flex justify-content-center align-content-center">
                <img src="{{ $settings->lets_meat_logo_url }}" />
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('front-assets/js/common.js') }}"></script>
    <script src="{{ asset('front-assets/js/our-menu.js') }}"></script>

    <script>
        function visitWeb() {
            window.location.href = "{{ route('home') }}";
        }
    </script>
@endpush
