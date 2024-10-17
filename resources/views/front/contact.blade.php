@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front-assets/css/contact.css') }}" />
@endsection

@php
    $contactPage= \App\Models\ContactPage::first();
@endphp


@section('page-title', $contactPage->hero_title)




@section('content')
    <!-- Hero Section  -->
    <div class="about-image" style="background-image: url('{{ $contactPage->hero_bg_image_url }}')">
        <div class="black">
            <div class="heading d-flex flex-column align-content-between justify-content-center mt-5 pt-5">
                <h1>
                    {{ $contactPage->hero_title }}
                </h1>
                <p class="">CONTACT {{ config('app.name') }}</p>
            </div>
        </div>
    </div>
    <!-- Map And Form Section -->
    <div class="container-fluid map-form-section pb-5">
        <div class="d-flex flex-column flex-lg-row container align-content-center justify-content-center gap-4 pt-4">
            <div class="w-100 d-flex align-items-end justify-content-end">
                {{-- <iframe width="90%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    class="image-map-google"
                    src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=%20%20%C4%B0mam%20Adnan%20Sk.%20No:5%20%C5%9Eehit%20Muhtar,%20%C4%B0mam%20Adnan%20Sk.%20No:5,%2034435%20Beyo%C4%9Flu/%C4%B0stanbul,%20T%C3%BCrkiye+(Tulaib%20Google%20Map)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps devices</a></iframe> --}}

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.1166342234037!2d-79.41517912399121!3d43.770437671096786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2d6e75125c47%3A0xd2718f68a8b82923!2s8%20Kingsdale%20Ave%2C%20North%20York%2C%20ON%20M2N%203W1%2C%20Canada!5e0!3m2!1sen!2som!4v1729177144998!5m2!1sen!2som"
                        width="90%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    class="image-map-google"></iframe>
            </div>
            <form action="{{ route('contact.submit') }}" method="POST"
                class="d-flex flex-column align-items-center justify-content-center gap-3 p-0 me-0 w-100">
                @csrf
                <div class="d-flex gap-2 w-100">
                    <input type="text" name="first_name" id="" placeholder="First Name" required
                        class="w-100 form-input" />
                    <input type="text" name="last_name" id="" required placeholder="Last Name"
                        class="w-100 form-input" />
                </div>
                <input type="email" name="email" required id="" placeholder="Email Address"
                    class="form-input w-100" />
                <input type="number" name="mobile" required id="" placeholder="Mobile No"
                    class="form-input w-100" />
                <input type="text" name="company" id="" placeholder="Company" class="form-input w-100" />
                <input type="text" name="country_city" id="" placeholder="Country / City"
                    class="form-input w-100" />
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

@push('scripts')
    <script src="{{ asset('front-assets/js/common.js') }}"></script>
@endpush
