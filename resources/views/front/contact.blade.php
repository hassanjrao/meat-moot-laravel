@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front-assets/css/contact.css') }}" />
@endsection

@section('page-title','Contact')


@section('content')
    <!-- Hero Section  -->
    <div class="about-image">
        <div class="black">
            <div class="heading d-flex flex-column align-content-between justify-content-center mt-5 pt-5">
                <h1>Get In Touch</h1>
                <p class="">CONTACT MEAT MOOT RESTAURANT</p>
            </div>
        </div>
    </div>
    <!-- Map And Form Section -->
    <div class="container-fluid map-form-section pb-5">
        <div class="d-flex flex-column flex-lg-row container align-content-center justify-content-center gap-4 pt-4">
            <div class="w-100 d-flex align-items-end justify-content-end">
                <iframe width="90%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    class="image-map-google"
                    src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=%20%20%C4%B0mam%20Adnan%20Sk.%20No:5%20%C5%9Eehit%20Muhtar,%20%C4%B0mam%20Adnan%20Sk.%20No:5,%2034435%20Beyo%C4%9Flu/%C4%B0stanbul,%20T%C3%BCrkiye+(Tulaib%20Google%20Map)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps devices</a></iframe>
            </div>
            <form class="d-flex flex-column align-items-center justify-content-center gap-3 p-0 me-0 w-100">
                <div class="d-flex gap-2 w-100">
                    <input type="text" name="firstName" id="" placeholder="First Name"
                        class="w-100 form-input" />
                    <input type="text" name="lastName" id="" placeholder="Last Name" class="w-100 form-input" />
                </div>
                <input type="email" name="email" id="" placeholder="Email Address" class="form-input w-100" />
                <input type="number" name="" id="" placeholder="Mobile No" class="form-input w-100" />
                <input type="text" name="" id="" placeholder="Company" class="form-input w-100" />
                <input type="text" name="" id="" placeholder="Country / City" class="form-input w-100" />
                <select class="form-input w-100" aria-label=".form-select-lg example">
                    <option selected disabled>Subject</option>
                    <option value="1">Ask For |Franchise</option>
                    <option value="2">Request</option>
                    <option value="3">Problem</option>
                </select>
                <textarea name="" id="" placeholder="Desscription" class="form-input w-100"></textarea>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
        </div>
    </div>
@endsection
