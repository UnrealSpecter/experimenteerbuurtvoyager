@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/about-us/faq-section.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/about-us/style.css') }}">
@endsection

@extends('experimenteerbuurt-layout')
@section('content')
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="background: transparent; height: 100vh; z-index: 10;">
        <img class="wat-is-de-experimenteerbuurt-background" src="/images/about-us/about-us-background.jpg" alt="background">
        <div class="row animated slideInRight" style="height: 100%;">
            <div class="col-12 button-container flex-r no-padding-margin">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 button experimenteerbuurt selected" data-number="0" ><span>Wat is de experimenteerbuurt?</span></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 button organisatie" data-number="1"><span>Achter de schermen</span></div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6 button locatie" data-number="2"><span>Locatie...?</span></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 button faq" data-number="3"><span>Veelgestelde vragen</span></div>
            </div>
            <div class="col-lg-12 main-container no-padding-margin">
                <div id="about-us-carousel" style="height: 100%;" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" style="height: 100%;">
                        <div class="carousel-item active">@include('frontend.about-us.wat-is-de-experimenteerbuurt')</div>
                        <div class="carousel-item">@include('frontend.about-us.achter-de-schermen')</div>
                        <div class="carousel-item">@include('frontend.about-us.locatie')</div>
                        <div class="carousel-item">@include('frontend.about-us.veel-gestelde-vragen')</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ URL::asset('/js/frontend/about-us/youtube-api.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-A7xIRqB5-6bL46K3cVsftvjHhYGU8z4"></script> -->
    <script type="text/javascript" src="{{ URL::asset('js/frontend/about-us/script.js') }}"></script>
@endsection
