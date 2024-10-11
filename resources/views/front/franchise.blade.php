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

                <form action="{{ route('franchise.submit') }}" method="POST"
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
                        <input type="text" name="company_name" id="" placeholder="Enter your company name"
                            class="w-100 form-input" />
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Company Website (if
                            applicable)</label>
                        <input type="text" name="company_website" id="" placeholder="Enter your company website"
                            class="w-100 form-input" />
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Available Investment Capital
                            (required)</label>


                        <select required class="w-100 form-input" name='available_investment'>
                            <option value="300,000 to $ 600,000">300,000 to $ 600,000</option>
                            <option value="600,000 to $ 1,000,000">600,000 to $ 1,000,000</option>
                            <option value="Above $ 1,000,000">Above $ 1,000,000</option>
                        </select>
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Preferred Franchise Location
                            (required)</label>
                        <input required type="text" name="preferred_location" id=""
                            placeholder="Enter preferred franchise location" class="w-100 form-input" />
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">Franchise Interest Type
                            (required)</label>

                        <br>
                        <div class="d-flex justify-content-center">
                            <div class="form-check-inline">
                                <input class="form-check-input" required type="radio" name="interest_type" value="Unit Franchise"
                                    id="interest_type1">
                                <label class="form-check-label" for="interest_type1" style="color: white">
                                    Unit Franchise
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="interest_type" value="Master Franchise"
                                    id="interest_type2">
                                <label class="form-check-label" for="interest_type2" style="color: white">
                                    Master Franchise
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">
                            Do you have any past experience or are you currently engaged in any retail or F&B activities? If
                            yes, please mention it.
                        </label>
                        <input type="text" name="past_experience" id=""
                            placeholder="Provide details of your experience" class="w-100 form-input" />
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">
                            How did you hear about our franchise opportunity? (required)
                        </label>

                        <select class="w-100 form-input" name='lead_from' required>
                            <option value="Google Search">Google Search</option>
                            <option> Visited a Branch</option>
                            <option>Social Media</option>
                            <option>Friend or Family</option>
                            <option>Advertising</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="w-100">
                        <label for="" style="color: #fcb45c; font-weight: bolder">
                            Declaration
                        </label>
                        {{-- checkbox --}}
                        <br>
                        <div class="form-check d-flex mt-1">
                            <input class="form-check-inline input" type="checkbox" value="" id="flexCheckDefault"
                                required>
                            <label class="form-check-inline label" for="flexCheckDefault" style="color: white">
                                I hereby declare that the information provided by me is true and correct to the best of my
                                knowledge and belief and I consent to the use of this information for franchise assessment purposes.
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="submit-button">Submit Inquiry</button>
                </form>
            </div>

        </div>
    </div>
@endsection

@push('scripts')

<script src="{{ asset('front-assets/js/common.js') }}"></script>
@endpush
