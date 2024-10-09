@extends('layouts.front')

@section('styles')
    <link rel="stylesheet" href="{{ asset('front-assets/css/contact.css') }}" />
@endsection

@section('page-title', 'Franchise')


@section('content')
    <!-- Hero Section  -->
    <div class="about-image">
        <div class="black">
            <div class="heading d-flex flex-column align-content-between justify-content-center mt-5 pt-5">
                <h1>Franchise</h1>
                <p class="">Form Submission</p>
            </div>
        </div>
    </div>
    <!-- Map And Form Section -->
    <div class="container-fluid map-form-section pb-5 pt-2">
        <div class="row justify-content-center">

            <div class="col-lg-8">

                <form action="{{ route('contact.submit') }}" method="POST"
                    class="d-flex flex-column align-items-center justify-content-center gap-3 p-0 me-0 w-100">
                    @csrf
                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Full Name (required)</label>
                        <input type="text" name="name" id="" placeholder="Enter your full name" required
                            class="w-100 form-input" />
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Email Address (required)</label>
                        <input type="email" name="email" id="" placeholder="Enter your email address" required
                            class="w-100 form-input" />
                    </div>


                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Phone Number (required)</label>
                        <input type="tel" name="phone" id="" placeholder="Enter your phone number" required
                            class="w-100 form-input" />
                    </div>


                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Current City (required)</label>
                        <input type="text" name="current_city" id="" placeholder="Enter your current city"
                            required class="w-100 form-input" />
                    </div>


                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Company Name (if
                            applicable)</label>
                        <input type="text" name="company_website" id="" placeholder="Enter your company name"
                            class="w-100 form-input" />
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Company Website (if
                            applicable)</label>
                        <input type="text" name="current_city" id="" placeholder="Enter your company website"
                            class="w-100 form-input" />
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Available Investment Capital
                            (required)</label>


                        <select class="w-100 form-input" name='available_investment'>
                            <option value="300,000 to $ 600,000">300,000 to $ 600,000</option>
                            <option value="600,000 to $ 1,000,000">600,000 to $ 1,000,000</option>
                            <option value="Above $ 1,000,000">Above $ 1,000,000</option>
                        </select>
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Preferred Franchise Location
                            (required)</label>
                        <input type="text" name="preferred_location" id=""
                            placeholder="Enter preferred franchise location" class="w-100 form-input" />
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Franchise Interest Type
                            (required)</label>
                        {{-- <input type="text" name="preferred_location" id="" placeholder="Enter preferred franchise location"
                            class="w-100 form-input" /> --}}
                        {{-- radion --}}
                        <br>
                        <div class="d-flex justify-content-center">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="interest_type"
                                value="Unit Franchise"
                                    id="interest_type1">
                                <label class="form-check-label" for="interest_type1" style="color: white">
                                    Unit Franchise
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="interest_type"
                                value="Master Franchise"
                                    id="interest_type2">
                                <label class="form-check-label" for="interest_type2" style="color: white">
                                    Master Franchise
                                </label>
                            </div>
                        </div>
                    </div>

                    <textarea name="description" required id="" placeholder="Desscription" class="form-input w-100"></textarea>
                    <button type="submit" class="submit-button">Send Message</button>
                </form>
            </div>

        </div>
    </div>
@endsection
