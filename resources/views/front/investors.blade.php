@extends('layouts.front')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="{{ asset('front-assets/css/invertors.css') }}" />
@endsection


@php
    $settings = \App\Models\Setting::first();
    $investorPage = \App\Models\InvestorPage::first();
    $steps = \App\Models\InvestorPageStep::all();
@endphp

@section('page-title', $investorPage->hero_title)



@section('content')
    <div class="invertors-hero-section" style="background-image: url('{{ $investorPage->hero_bg_image_url }}')">
        <div class="w-100 h-100 background-grey d-flex align-items-center justify-content-center text-light">
            <div class="d-flex flex-column gap-5">
                <h1 class="yellow-text text-center fw-light mt- ">
                    {{ $investorPage->hero_title }}
                </h1>
                <div class="line"></div>
                <div>
                    <h2 class="text-justify fw-light mt-5 pt-5">
                        {{ $investorPage->hero_description }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs -->
    <div class="FAQs bg-black text-center py-5">
        <div class=>
            <h5>Got Questions?</h5>
            <h1>Frequently Asked Questions?</h1>
        </div>
        <div class="mt-5">
            <div class="box">

                @foreach ($faqs as $faq)
                    <div class="question-container" style="cursor: pointer">
                        <div class="question" onclick="toggleDiv(this)">
                            <p class="fw-bold fs-5 pt-2">
                                {{ $faq->question }}
                            </p>
                            <i class="fa-solid fa-plus fw-bold fs-4"></i>
                        </div>
                        <p class="answer fw-light fs-5 text-normal p-3 text-light">
                            {{ $faq->answer }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- franchise -->
    <div class="franchise-process text-center">
        <h5>Let's Become Partners</h5>
        <h1>Franchise Process</h1>

        <div class="franchise-process-cards">
            @php
                $i = 1;
            @endphp

            @foreach ($steps as $ind=> $step)
                @php

                $textOrder='text-end w-100 me-auto';

                if($i % 2 == 0){
                    $textOrder='text-start ms-auto';
                }

                $i++;

                @endphp

                <div class="parent1 p-5">
                    <div class="child empty w-100">
                        <p class="{{ $textOrder }}">Step
                            {{ ++$ind }}
                        </p>
                    </div>

                    <div>
                        <div class="step-circle"><i class="fas fa-clipboard-list"></i></div>
                        <div class="vertical-line"></div>
                    </div>
                    <div class="content-div" data-step="Step 01">
                        <h2 class="text-center">
                            {{ $step->title }}
                        </h2>
                        <p>
                            {{ $step->description }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Stay Section -->
    <section
        class="container-fluid text-center d-flex flex-column align-items-center justify-content-center text-white py-5">
        <div class="content-stay d-flex flex-column align-items-center justify-content-center gap-4">
            <div class="d-flex flex-column align-items-center justify-content-center franchise-journey">
                <h2 class="mb-0 pb-0">START YOUR FRANCHISE JOURNEY</h2>
                <h3 class="">JOIN OUR GROWING FRANCHISE NETWORK</h3>
            </div>
            <img src="{{ asset('front-assets/media/images/download.svg') }}" alt="" class="w-25" />
            <button onclick="applyForFranchise()" class="mb-3">APPLY FOR FRANCHISE</button>
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 pt-3">
                <p>For More Information Reach Us On WhatsApp</p>
                <a href="{{ $settings->whatsapp }}" class="whatsapp-link" target="_blank">
                    <img src="{{ asset('front-assets/media/images/icons8-whatsapp-480 (1).png') }}" alt="WhatsApp"
                        class="whatsapp-icon mb-3" />
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('front-assets/js/common.js') }}"></script>
    <script src="{{ asset('front-assets/js/investors.js') }}"></script>

    <script>
        function applyForFranchise() {
            window.location.href = "{{ route('franchise') }}";
        }
    </script>
@endpush
