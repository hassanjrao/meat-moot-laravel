@extends('layouts.backend')

@section('page-title', 'Settings')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">Settings </h3>

            </div>
            <div class="block-content">

                <form action="{{ route('admin.settings.update', $settings->id) }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')



                    <div class="row push justify-content-center">

                        <div class="col-lg-12 ">



                            <div class="row mb-4">


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('facebook', $settings ? $settings->facebook : null);

                                    ?>
                                    <label class="form-label" for="label"> Facebook <span
                                            class="text-danger"></span></label>
                                    <input required type="text" value="{{ $value }}" class="form-control"
                                        id="facebook" name="facebook" placeholder="Enter facebook link link">
                                    @error('facebook')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('twitter', $settings ? $settings->twitter : null);

                                    ?>
                                    <label class="form-label" for="label"> Twitter <span
                                            class="text-danger"></span></label>
                                    <input required type="text" value="{{ $value }}" class="form-control"
                                        id="twitter" name="twitter" placeholder="Enter twitter link">
                                    @error('twitter')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('instagram ', $settings ? $settings->instagram  : null);

                                    ?>
                                    <label class="form-label" for="label"> Instagram  <span
                                            class="text-danger"></span></label>
                                    <input required type="text" value="{{ $value }}" class="form-control"
                                        id="instagram " name="instagram " placeholder="Enter Instagram Link">
                                    @error('instagram ')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('tiktok', $settings ? $settings->tiktok : null);

                                    ?>
                                    <label class="form-label" for="label"> Tik Tok <span
                                            class="text-danger"></span></label>
                                    <input required type="text" value="{{ $value }}" class="form-control"
                                        id="tiktok" name="tiktok" placeholder="Enter tiktok link">
                                    @error('tiktok')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('youtube', $settings ? $settings->youtube : null);

                                    ?>
                                    <label class="form-label" for="label"> Youtube <span
                                            class="text-danger"></span></label>
                                    <input required type="text" value="{{ $value }}" class="form-control"
                                        id="youtube" name="youtube" placeholder="Enter youtube link">
                                    @error('youtube')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('tripadvisor', $settings ? $settings->tripadvisor : null);

                                    ?>
                                    <label class="form-label" for="label"> Trip Advisor <span
                                            class="text-danger"></span></label>
                                    <input required type="text" value="{{ $value }}" class="form-control"
                                        id="tripadvisor" name="tripadvisor" placeholder="Enter Trip Advisor link">
                                    @error('tripadvisor')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <?php
                                    $value = old('whatsapp', $settings ? $settings->whatsapp : null);

                                    ?>
                                    <label class="form-label" for="label"> whatsapp <span
                                            class="text-danger"></span></label>
                                    <input required type="text" value="{{ $value }}" class="form-control"
                                        id="whatsapp" name="whatsapp" placeholder="Enter whatsapp link">
                                    @error('whatsapp')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>







                            </div>



                        </div>



                        <div class="d-flex justify-content-end mt-4">

                            <button type="submit" id="submitBtn" class="btn btn-primary text-white">Update</button>

                        </div>

                    </div>


                </form>


            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
