@extends('layouts.front')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="{{ asset('front-assets/css/invertors.css') }}" />
@endsection

@section('page-title', 'Investors')

@php
    $settings = \App\Models\Setting::first();
@endphp


@section('content')
    <div class="invertors-hero-section">
        <div class="w-100 h-100 background-grey d-flex align-items-center justify-content-center text-light">
            <div class="d-flex flex-column gap-5">
                <h1 class="yellow-text text-center fw-light mt- ">INVESTORS</h1>
                <div class="line"></div>
                <div>
                    <h2 class="text-justify fw-light mt-5 pt-5">
                        If you're a leader with strong business acumen and have a passion
                        for the world of hospitality, franchising with our resturant maybe
                        the pefrect oppurtunity for you!
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
            <div class="parent1 p-5">
                <div class="child empty w-100">
                    <p class="text-end w-100 me-auto">Step 01</p>
                </div>

                <div>
                    <div class="step-circle"><i class="fas fa-clipboard-list"></i></div>
                    <div class="vertical-line"></div>
                </div>
                <div class="content-div" data-step="Step 01">
                    <h2 class="text-center">Inquiry</h2>
                    <p>
                        As the initial step in the Franchise process, we invite you to
                        complete our franchise Inquiry Form if you are interested in
                        gaining further insights into becominh a Meat Moot partner
                    </p>
                </div>
            </div>
            <div class="parent1 p-5">
                <div class="child empty w-100">
                    <p class="text-start ms-auto">Step 02</p>
                </div>

                <div>
                    <div class="step-circle"><i class="fa-solid fa-phone"></i></div>
                    <div class="vertical-line"></div>
                </div>

                <div class="content-div" data-step="Step 02">
                    <h2 class="text-center">Initial Discovery Call</h2>
                    <p>
                        Upon receipt of oyour inquiry form, a member of our franchise
                        developmentteam with reach out to you to inquire further about
                        your background, including Financial Statements, list of
                        Intellectual Capital and more
                    </p>
                </div>
            </div>
            <div class="parent1 p-5">
                <div class="child empty w-100">
                    <p class="text-end w-100 me-auto">Step 03</p>
                </div>
                <div>
                    <div class="step-circle">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="vertical-line" id="small-line"></div>
                </div>
                <div class="content-div" data-step="Step 03">
                    <h2>Review FDD</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                        odit recusandae facilis aliquid exercitationem vero provident,
                        minus ex reiciendis incidunt laborum! Error eligendi perferendis
                        voluptatibus porro sapiente recusandae suscipit numquam?
                    </p>
                </div>
            </div>
            <div class="parent1 p-5">
                <div class="child empty w-100">
                    <p class="text-start ms-auto">Step 04</p>
                </div>

                <div>
                    <div class="step-circle">
                        <i class="fa-solid fa-people-arrows"></i>
                    </div>
                    <div class="vertical-line"></div>
                </div>

                <div class="content-div" data-step="Step 04">
                    <h2 class="text-center">Discovery Day</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                        odit recusandae facilis aliquid exercitationem vero provident,
                        minus ex reiciendis incidunt laborum! Error eligendi perferendis
                        voluptatibus porro sapiente recusandae suscipit numquam?
                    </p>
                </div>
            </div>
            <div class="parent1 p-5">
                <div class="child empty w-100" id="borderless">
                    <p class="text-end w-100 me-auto">Step 05</p>
                </div>
                <div>
                    <div class="step-circle"><i class="fas fa-clipboard-list"></i></div>
                    <div class="vertical-line" id="small-line"></div>
                </div>
                <div class="content-div" data-step="Step 05">
                    <h2 class="text-center">Finalize Partnership</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                        odit recusandae facilis aliquid exercitationem vero provident,
                        minus ex reiciendis incidunt laborum! Error eligendi perferendis
                        voluptatibus porro sapiente recusandae suscipit numquam?
                    </p>
                </div>
            </div>
            <div class="parent1 p-5">
                <div class="child empty w-100">
                    <p class="text-start ms-auto">Step 06</p>
                </div>

                <div>
                    <div class="step-circle"><i class="fa-solid fa-rocket"></i></div>
                    <div class="vertical-line" id="small-line"></div>
                </div>

                <div class="content-div" data-step="Step 06">
                    <h2 class="text-center">Celebrate Success</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                        odit recusandae facilis aliquid exercitationem vero provident,
                        minus ex reiciendis incidunt laborum! Error eligendi perferendis
                        voluptatibus porro sapiente recusandae suscipit numquam?
                    </p>
                </div>
            </div>
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
