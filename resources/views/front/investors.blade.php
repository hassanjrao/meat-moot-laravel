@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front-assets/css/invertors.css') }}" />
@endsection

@section('page-title','Investors')


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
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Does Meat Moot's Resturants offer franchises or license the
                            concept?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Meat Moot is currently offering franchise oppurtunities in
                        international markets to qualified franchisees.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Are we the right fit for each other
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Meet Moot provides delivery services in many areas, ensuring
                        timely and hot food delivery.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
                <div class="question-container">
                    <div class="question" onclick="toggleDiv(this)">
                        <p class="fw-bold fs-5 pt-2">
                            Where is Meet Moot restaurant's headquarter?
                        </p>
                        <i class="fa-solid fa-plus fw-bold fs-4"></i>
                    </div>
                    <p class="answer fw-light fs-5 text-normal p-3 text-light">
                        Sitki Bey Plaza No:82 k:7 34736 Kadikoy - ISTANBUL, TURKEY.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Branches -->
    <div class="branches">
        <div class="branches-section position-relative">
            <div class="branches-deatils text-light p-5">
                <div>
                    <h5 class="fw-light">WITH OVER 39 BRANCHES</h5>
                    <h2>WE'RE ON THE MOVE AND GETTING IT RIGHT!</h2>
                    <p class="mt-">
                        We want to talk to you if tou are a growth minded entrepreneur
                    </p>
                    <p class="mt-4">
                        While it is not required, it is always a plus if you have prior
                        franchising experience
                    </p>
                    <div class="d-flex gap-lg-3 mt-5">
                        <i class="fa-solid fa-circle mt-1"></i>
                        <p>Multi-unit franchising</p>
                    </div>
                    <div class="d-flex gap-lg-3">
                        <i class="fa-solid fa-circle mt-1"></i>
                        <p>
                            5-10 years of multi-unit management experience, in hospitality
                            and/or food retail services
                        </p>
                    </div>
                </div>
                <button class="view-more-btn p-3 mt-4">
                    VIEW ALL OUR EVENTS
                    <i class="fa-solid fa-chevron-right ms-3 text-light"></i>
                </button>
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
            <button class="mb-3">APPLY FOR FRANCHISE</button>
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 pt-3">
                <p>For More Information Reach Us On WhatsApp</p>
                <a href="https://wa.me/your_whatsapp_number" class="whatsapp-link">
                    <img src="{{ asset('front-assets/media/images/icons8-whatsapp-480 (1).png') }}" alt="WhatsApp"
                        class="whatsapp-icon mb-3" />
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('front-assets/js/investors.js') }}"></script>
@endpush