@extends('layouts.front')

@section('styles')


<link rel="stylesheet" href="{{  asset('front-assets/css/menu.css')}}" />

@endsection

@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <h1 class="hero-title">The Menu</h1>
            <div class="underline"></div>
        </div>
        <div class="lets-meat">LET'S MEAT</div>
        <div class="overlay"></div>
    </section>

    <!-- New Section after LET'S MEAT -->
    <section class="experience-section py-3 text-center">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h2 class="experience-text mb-5">
                Every bite is a wholesome experience! You cannot resist the taste of
                the <span class="font-weight-bold">smoked <br />flavors</span>.
            </h2>

            <!-- Dropdown using <select> -->
            {{-- <div class="mx-auto mb-1 mt-3">
                <select class="form-select btn-location d-inline-block" aria-label="Choose a location">
                    <option selected disabled>Choose a location</option>
                    <!-- <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option> -->
                </select>
            </div> --}}
            {{-- <div class="underline mx-auto"></div> --}}
        </div>
    </section>

    <section class="items-section py-2 text-light container-fluid">
        <div>
            <h2 class="section-title text-center mb-5">Our Menu</h2>
            <div>
                <!-- First row (Lamb Shoulder) -->
                <div class="row">
                    <div class="col-md-6 p-0 order-md-1 order-1">
                        <div class="card-item">
                            <img src="{{  asset('front-assets/media/images/menu/menu-item-1.webp')}}" class="img-fluid" alt="Lamb Shoulder" />
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-content-center justify-content-center flex-column order-md-2 order-2">
                        <img src="{{  asset('front-assets/media/images/download (14).svg')}}')}}"
                            class="m-auto m-lg-0 menu-knife-image align-self-start" alt="" />
                        <div class="card-content">
                            <h5 class="item-title text-center fw-normal">Lamb Shoulder</h5>
                            <p class="item-description">
                                When shoulder meat is this awesome, keep the seasoning vivid. Smoked authentic meat
                                accordingly to a delicious recipe, seasoned with coarse salt and fleshly grounded black
                                pepper.
                                You can also add honey to make it palpable with extras served on the side in accordance with
                                your freshly gourmet palate.
                            </p>
                        </div>
                    </div>
                </div>



                <!-- Second row -->
                <div class="row">
                    <div class="col-md-6 p-0 order-md-1 order-lg-2">
                        <div class="card-item">
                            <img src="{{  asset('front-assets/media/images/menu/menu-item-2.webp')}}" class="img-fluid" alt="Lamb Shoulder" />
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-content-center justify-content-center flex-column order-md-2 order-lg-1">
                        <img src="{{  asset('front-assets/media/images/download (14).svg')}}"
                            class="m-auto m-lg-0 menu-knife-image align-self-start" alt="" />
                        <div class="card-content">
                            <h5 class="item-title text-center fw-normal">Beef Brisket</h5>
                            <p class="item-description">
                                Savor the exquisite smoked brisket at Meat Moot, which is made from premium quality meat and
                                served with a delectable blend of spicy sauce and garlic yogurt. Our chefs take great care
                                in crafting this dish, skillfully highlighting the natural flavors of the meat and providing
                                a truly delightful dining experience.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Third row -->
                <div class="row">
                    <div class="col-md-6 p-0 order-md-1 order-lg-1">
                        <div class="card-item">
                            <img src="{{  asset('front-assets/media/images/menu/menu-item-3.webp')}}" class="img-fluid" alt="Lamb Shoulder" />
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-content-center justify-content-center flex-column order-md-2 order-lg-2">
                        <img src="{{  asset('front-assets/media/images/download (14).svg')}}"
                            class="m-auto m-lg-0 menu-knife-image align-self-start" alt="" />
                        <div class="card-content">
                            <h5 class="item-title text-center fw-normal">Lamb Ribs</h5>
                            <p class="item-description">
                                When shoulder meat is this awesome, keep the seasoning vivid.
                                Smoked authentic meat seasoned with coarse salt and freshly
                                grounded meat...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fourth row -->
                <div class="row">
                    <div class="col-md-6 p-0 order-md-1 order-lg-2">
                        <div class="card-item">
                            <img src="{{  asset('front-assets/media/images/menu/menu-item-4.webp')}}" class="img-fluid" alt="Lamb Shoulder" />
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-content-center justify-content-center flex-column order-md-2 order-lg-1">
                        <img src="{{  asset('front-assets/media/images/download (14).svg')}}"
                            class="m-auto m-lg-0 menu-knife-image align-self-start" alt="" />
                        <div class="card-content">
                            <h5 class="item-title text-center fw-normal">Beef Ribs</h5>
                            <p class="item-description">
                                When shoulder meat is this awesome, keep the seasoning vivid.
                                Smoked authentic meat seasoned with coarse salt and freshly
                                grounded meat...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fifth row -->
                <div class="row">
                    <div class="col-md-6 p-0 order-md-1 order-lg-1">
                        <div class="card-item">
                            <img src="{{  asset('front-assets/media/images/menu/menu-item-5.webp')}}" class="img-fluid image-fill"
                                alt="Lamb Shoulder" />
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-content-center justify-content-center flex-column order-md-2 order-lg-2">
                        <img src="{{  asset('front-assets/media/images/download (14).svg')}}"
                            class="m-auto m-lg-0 menu-knife-image align-self-start" alt="" />
                        <div class="card-content">
                            <h5 class="item-title text-center fw-normal">Lamb Shank</h5>
                            <p class="item-description">
                                When shoulder meat is this awesome, keep the seasoning vivid.
                                Smoked authentic meat seasoned with coarse salt and freshly
                                grounded meat...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sixth row -->
                <div class="row">
                    <div class="col-md-6 p-0 order-md-1 order-lg-2">
                        <div class="card-item">
                            <img src="{{  asset('front-assets/media/images/menu/menu-item-6.webp')}}" class="img-fluid" alt="Lamb Shoulder" />
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-content-center justify-content-center flex-column order-md-2 order-lg-1">
                        <img src="{{  asset('front-assets/media/images/download (14).svg')}}"
                            class="m-auto m-lg-0 menu-knife-image align-self-start" alt="" />
                        <div class="card-content">
                            <h5 class="item-title text-center fw-normal">Beef Shank</h5>
                            <p class="item-description">
                                When shoulder meat is this awesome, keep the seasoning vivid.
                                Smoked authentic meat seasoned with coarse salt and freshly
                                grounded meat...
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 p-0 order-md-1 order-lg-1">
                        <div class="card-item">
                            <img src="{{  asset('front-assets/media/images/menu/menu-item-5.webp')}}" class="img-fluid image-fill"
                                alt="Lamb Shoulder" />
                        </div>
                    </div>
                    <div
                        class="col-md-6 d-flex align-content-center justify-content-center flex-column order-md-2 order-lg-2">
                        <img src="{{  asset('front-assets/media/images/download (14).svg')}}"
                            class="m-auto m-lg-0 menu-knife-image align-self-start" alt="" />
                        <div class="card-content">
                            <h5 class="item-title text-center fw-normal">Lamb Shank heeeeee</h5>
                            <p class="item-description">
                                When shoulder meat is this awesome, keep the seasoning vivid.
                                Smoked authentic meat seasoned with coarse salt and freshly
                                grounded meat...
                            </p>
                        </div>
                    </div>
                </div>
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
            <img src="{{  asset('front-assets/media/images/letsmeat.png')}}" />
        </div>
    </div>
@endsection
