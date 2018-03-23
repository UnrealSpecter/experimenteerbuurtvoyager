<!-- css includes -->
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/frontend/contact/style.css') }}">
@endsection

<!-- layout -->
@extends('experimenteerbuurt-layout')
<!-- content -->
@section('content')
<img class="contact-background" src="{{ URL::asset('/images/contact/calm-background-blue.jpg') }}">
<!-- CONTACT REKJE & BUISJES -->
<div class="col-lg-10 d-none contact-analoog-wrapper">
    <div class="row" style="height: 100%;">
        <div class="col-lg-12 content-area">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reageerbuis-wrapper">
                <img class="rekje" src="/images/contact/analoog-contact-rekje.png">
                <a href="https://www.facebook.com/Experimenteerbuurt" target="_blank">
                    <img class="facebook-reageerbuis" src="{{ asset('images/contact/facebook-reageerbuis.png') }}">
                </a>
                <img class="twitter-reageerbuis" src="{{ asset('images/contact/twitter-reageerbuis.png') }}">
                <a href="https://www.linkedin.com/company/18013430/admin/updates/" target="_blank">
                    <img class="linkedin-reageerbuis" src="{{ asset('images/contact/linkedin-reageerbuis.png') }}">
                </a>
                <img class="instagram-reageerbuis" src="{{ asset('images/contact/instagram-reageerbuis.png') }}">
                <a href="https://twitter.com/experimentbuurt" target="_blank">
                    <img class="youtube-reageerbuis" src="{{ asset('images/contact/youtube-reageerbuis.png') }}">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- CONTACT INFO -->
<div class="contact-info col-lg-12 col-md-12 col-sm-12 col-xs-12 d-none">
    <div class="contact-text col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <span>KvK: 67468519<span>
    </div>@foreach($contact as $contactinfo)
    <div class="contact-text col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <span>Bel: {{$contactinfo->phonenumber}} </span>
    </div>
    <div class="contact-text col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <span>Email: {{$contactinfo->email}}</span>
    </div>
    <div class="contact-text col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <span> Post: {{$contactinfo->organisation}} {{$contactinfo->address}}, {{$contactinfo->zipcodeandcity}}</span>
    </div>
    @endforeach
</div>
@endsection

<!-- js includes -->
@section('js')
    <script src="{{ URL::asset('/js/frontend/contact/script.js') }}"></script>
@endsection
