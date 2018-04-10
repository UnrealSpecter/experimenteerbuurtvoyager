@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/about-us/faq-section.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/about-us/style.css') }}">
@endsection

@extends('experimenteerbuurt-layout')
@section('content')
    <img class="wat-is-de-experimenteerbuurt-background" src="/images/about-us/about-us-background.jpg" alt="background">
    <div class="col-lg-9 offset-lg-3 col-md-12 col-sm-12 col-xs-12 about-us-wrapper" style="background: transparent; height: 100vh; z-index: 10;">
        <div class="row animated slideInRight" style="height: 100%;">
            <div class="col-12 d-none d-xs-none d-sm-none d-md-none d-lg-flex d-xl-flex button-container no-padding-margin">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4 button experimenteerbuurt selected" data-number="0" ><span>Experimenteerbuurt?</span></div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-4 button organisatie" data-number="1"><span>Achter de schermen</span></div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-4 button locatie" data-number="2"><span>Locatie...?</span></div>
            </div>
            <div class="col-12 d-lg-none d-xl-none button-container flex-r no-padding-margin">
                <!-- button left -->
                <div class="col-2 col-sm-2 d-lg-none d-xl-none no-padding-margin d-flex align-v justify-c no-drag">
                    <img class="img-fluid prev-arrow" src="{{ asset('images/icons/chevron-left.svg') }}">
                </div>
                <div class="col-8 col-sm-8 no-padding-margin contact-text-wrapper d-flex flex-r" style="height: 100%;">
                    <!-- cycle buttons -->
                    <div class="col-12 mobile-about-button d-flex align-v justify-c button experimenteerbuurt selected no-padding-margin" data-number="0">Experimenteerbuurt?</div>
                    <div class="invisible mobile-about-button d-flex align-v justify-c col-12 button organisatie no-padding-margin" data-number="1">Achter de schermen</div>
                    <div class="invisible mobile-about-button d-flex align-v justify-c col-12 button locatie no-padding-margin" data-number="2">Locatie...?</div>
                </div>
                <!-- next buttons -->
                <div class="col-2 col-sm-2 d-lg-none d-xl-none no-padding-margin d-flex align-v justify-c no-drag">
                    <img class="img-fluid next-arrow"src="{{ asset('images/icons/chevron-right.svg') }}">
                </div>
            </div>
            <div class="col-lg-12 main-container no-padding-margin" style="height: 85%;">
                <div id="about-us-carousel" style="height: 100%;" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" style="height: 100%;">
                        <div class="col-lg-12 experimeerbuurt-shadow"></div>
                        <div class="carousel-item active" style="padding-top: 15%; overflow-y: hidden;">@include('frontend.about-us.wat-is-de-experimenteerbuurt')</div>
                        <div class="carousel-item">@include('frontend.about-us.achter-de-schermen')</div>
                        <div class="carousel-item">@include('frontend.about-us.locatie')</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ URL::asset('/js/frontend/about-us/youtube-api.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/frontend/about-us/script.js') }}"></script>
@endsection
