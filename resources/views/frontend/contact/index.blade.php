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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reageerbuis-wrapper">
            <img class="rekje img-fluid" src="/images/contact/analoog-contact-rekje.png">
            <a href="https://www.facebook.com/Experimenteerbuurt" target="_blank">
                <img class="facebook-reageerbuis img-fluid" src="{{ asset('images/contact/facebook-reageerbuis.png') }}">
            </a>
            <img class="twitter-reageerbuis img-fluid" src="{{ asset('images/contact/twitter-reageerbuis.png') }}">
            <a href="https://www.linkedin.com/company/18013430/admin/updates/" target="_blank">
                <img class="linkedin-reageerbuis img-fluid" src="{{ asset('images/contact/linkedin-reageerbuis.png') }}">
            </a>
            <img class="instagram-reageerbuis img-fluid" src="{{ asset('images/contact/instagram-reageerbuis.png') }}">
            <a href="https://www.youtube.com/channel/UC03-K7K2lHwVxyN51iJkuDQ" target="_blank">
                <img class="youtube-reageerbuis img-fluid" src="{{ asset('images/contact/youtube-reageerbuis.png') }}">
            </a>
        </div>
    </div>
</div>

<div class="contact-info-wrapper d-xs-none d-sm-none d-md-none d-lg-block d-xl-block" style="width: 100vw;">
    <div class="row no-padding-margin" style="height: 100%;">
        <div class="col-lg-12 col-xl-12 no-padding-margin contact-text-wrapper d-flex flex-r" style="height: 100%;">
            @foreach($contact as $info)
            <div class="contact-text desktop-border col-lg-2 col-xl-2 no-padding-margin d-flex align-v justify-c">KvK: {{ $info->kvk }}</div>
            <div class="contact-text desktop-border col-lg-2 col-xl-2 no-padding-margin d-flex align-v justify-c">Bel: {{ $info->phonenumber }}</div>
            <div style="padding-left: 20px; padding-right: 20px;" class="contact-text desktop-border col-lg-3 col-xl-3 no-padding-margin d-flex align-v justify-c">Email: {{ $info->email }}</div>
            <div style="padding-left: 20px; padding-right: 20px;" class="contact-text desktop-border col-lg-5 col-xl-5 no-padding-margin d-flex align-v justify-c">Post: {{ $info->postal_code }}</div>
            @endforeach
        </div>
    </div>
</div>

<div class="contact-info-wrapper d-xs-block d-sm-block d-md-block d-lg-none d-xl-none" style="width: 100vw;">
    <div class="row no-padding-margin" style="height: 100%;">
        <div class="col-2 d-lg-none d-xl-none no-padding-margin d-flex align-v justify-c prev-info no-drag">
            <img class="img-fluid prev-arrow" src="{{ asset('images/icons/chevron-left.svg') }}">
        </div>
        <div class="col-8 col-lg-12 col-xl-12 no-padding-margin contact-text-wrapper d-flex flex-r" style="height: 100%;">
            @foreach($contact as $info)
            <div class="contact-text contact-info-mobile col-12 col-lg-2 col-xl-2 no-padding-margin d-flex align-v justify-c">KvK: {{ $info->kvk }}</div>
            <div class="contact-text contact-info-mobile invisible col-12 col-lg-3 col-xl-3 no-padding-margin d-flex align-v justify-c">Bel: {{ $info->phonenumber }}</div>
            <div class="contact-text contact-info-mobile invisible col-12 col-lg-3 col-xl-3 no-padding-margin d-flex align-v justify-c">Email: {{ $info->email }}</div>
            <div class="contact-text contact-info-mobile invisible col-12 col-lg-4 col-xl-4 no-padding-margin d-flex align-v justify-c">Post: {{ $info->postal_code }}</div>
            @endforeach
        </div>
        <div class="col-2 d-lg-none d-xl-none no-padding-margin d-flex align-v justify-c next-info no-drag">
            <img class="img-fluid next-arrow"src="{{ asset('images/icons/chevron-right.svg') }}">
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ URL::asset('/js/frontend/contact/script.js') }}"></script>
@endsection
