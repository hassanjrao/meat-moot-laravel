@extends('layouts.front')

@section('styles')


    <link rel="stylesheet" href="{{ asset('front-assets/css/menu.css') }}" />

@endsection


@php
    $settings= \App\Models\Setting::first();
    $menuPage= \App\Models\MenuPage::first();
@endphp

@section('page-title', $menuPage->hero_title)



@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center" style="background: url('{{ $menuPage->hero_bg_image_url }}') no-repeat center center">
        <div class="content text-center">
            <h1 class="hero-title">
                {{ $menuPage->hero_title }}
            </h1>
            <div class="underline"></div>
        </div>
        <div class="lets-meat">{{ config('app.name') }}</div>
        <div class="overlay"></div>
    </section>

    <!-- New Section after LET'S MEAT -->
    <section class="experience-section py-3 text-center">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h2 class="experience-text mb-5">
                {{ $menuPage->tagline }}
            </h2>
        </div>
    </section>

    <section class="items-section py-2 text-light container-fluid">
        <div>
            <h2 class="section-title text-center mb-5">Our Menu</h2>
            <div>
                <!-- First row (Lamb Shoulder) -->
                @php
                    $i = 1;
                @endphp

                @foreach ($menuHighlights as $ind => $menuHighlight)
                    @php
                        $order = 'order-1';
                        $imgOrder = 'order-2';

                        if ($i % 2 == 0) {
                            $order = 'order-lg-2';
                            $imgOrder = 'order-lg-1';
                        }

                        $i++;

                    @endphp

                    <div class="row">
                        <div class="col-md-6 p-0 order-md-1 {{ $order }}">
                            <div class="card-item">
                                <img src="{{ $menuHighlight->image_url }}" class="img-fluid" alt="Lamb Shoulder" />
                            </div>
                        </div>
                        <div
                            class="col-md-6 d-flex align-content-center justify-content-center flex-column order-md-2 {{ $imgOrder }}">
                            <img src="{{ asset('front-assets/media/images/download (14).svg') }}"
                                class="m-auto m-lg-0 menu-knife-image align-self-start" alt="" />
                            <div class="card-content">
                                <h5 class="item-title text-center fw-normal">{{ $menuHighlight->title }}</h5>
                                <p class="item-description">
                                    {{ $menuHighlight->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>

    <section class="items-section py-5 container-fluid d-flex flex-column justify-content-center align-items-center">
        <div></div>
    </section>

    <!-- Stay Connnect Section -->
    <div class="discover-menu container-fluid text-center">
        <h1 class="discover-menu-title text-center">Discover Our Menus</h1>
        <p class="discover-menu-description text-center text-light">
            Click the button to display menu
        </p>
        <button onclick="navigateToPage()" class="btn btn-transparent m-5">
            Our Menu
        </button>
        <div class="letsmeat pb-5">
            <img src="{{ $settings->lets_meat_logo_url }}" />
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('front-assets/js/common.js') }}"></script>
@endpush
