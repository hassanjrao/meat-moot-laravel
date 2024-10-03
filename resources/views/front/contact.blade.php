@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front-assets/css/contact.css') }}" />
@endsection

@section('page-title', 'Contact')


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
            <form
            action="{{ route('contact.submit') }}"
            method="POST"
            class="d-flex flex-column align-items-center justify-content-center gap-3 p-0 me-0 w-100">
            @csrf
                <div class="d-flex gap-2 w-100">
                    <input type="text" name="first_name" id="" placeholder="First Name"
                    required
                        class="w-100 form-input" />
                    <input type="text" name="last_name" id="" required placeholder="Last Name" class="w-100 form-input" />
                </div>
                <input type="email" name="email" required id="" placeholder="Email Address" class="form-input w-100" />
                <input type="number" name="mobile" required id="" placeholder="Mobile No" class="form-input w-100" />
                <input type="text" name="company" id="" placeholder="Company" class="form-input w-100" />
                <input type="text" name="country_city" id="" placeholder="Country / City" class="form-input w-100" />
                <select class="form-input w-100" required name="subject" aria-label=".form-select-lg example">
                    <option value="" selected disabled>Subject</option>
                    <option value="Ask For |Franchise">Ask For |Franchise</option>
                    <option value="Request">Request</option>
                    <option value="Problem">Problem</option>
                </select>
                <textarea name="description" required id="" placeholder="Desscription" class="form-input w-100"></textarea>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
        </div>
    </div>
@endsection
