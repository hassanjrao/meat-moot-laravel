<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no" />
    <title>Home - Meat Moot | Best Smoked Meat Restaurant - Let's MEAT</title>
    <link rel="stylesheet" href="{{ asset('front-assets/vendor/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" />

    <link rel="stylesheet" href="{{ asset('front-assets/css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-assets/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-assets/css/style.css') }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" id="mainNavbar">
        <div class="container-fluid align-items-center mx-auto justify-content-around">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('front-assets/media/images/cropped-meatmoot-logo-170x58.png') }}" alt="Logo"
                    height="" class="ms-auto" />
            </a>
            <button class="navbar-toggler" type="button" id="navbarToggle" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav gap-lg-5">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="menu.html">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="investors.html">Investors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="events-and-news.html">Events & News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#en.html" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">EN</a>
                        <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">English</a></li>
                <li><a class="dropdown-item" href="#">Spanish</a></li>
              </ul> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <!-- Footer -->
    <div class="container-fluid last-section pb-4">
        <div class="container">
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
    <script src="{{ asset('front-assets/vendor/bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('front-assets/js/script.js') }}"></script>
    <script src="{{ asset('front-assets/js/common.js') }}"></script>
</body>

</html>