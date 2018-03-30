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
<!-- <div class="col-lg-10 d-none contact-analoog-wrapper">
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
                <a href="https://www.youtube.com/channel/UC03-K7K2lHwVxyN51iJkuDQ" target="_blank">
                    <img class="youtube-reageerbuis" src="{{ asset('images/contact/youtube-reageerbuis.png') }}">
                </a>
            </div>
        </div>
    </div>
</div> -->

<!-- CONTACT INFO -->
<div class="contact-info-wrapper" style="width: 100%;">
    <div class="row no-padding-margin" style="height: 100%;">
        <div class="col-2 no-padding-margin d-flex align-v justify-c prev-info no-drag">
            <img class="img-fluid" style="width: 50%;" src="{{ asset('images/icons/chevron-left.svg') }}">
        </div>
        <div class="col-8 no-padding-margin" style="height: 100%;">
            @foreach($contact as $info)
            <div class="contact-text contact-info col-12 no-padding-margin d-flex align-v justify-c">KvK: {{ $info->kvk }}</div>
            <div class="contact-text contact-info col-12 invisible no-padding-margin d-flex align-v justify-c">Bel: {{ $info->phone_number }}</div>
            <div class="contact-text contact-info col-12 invisible no-padding-margin d-flex align-v justify-c">Email: {{ $info->email }}</div>
            <div class="contact-text contact-info col-12 invisible no-padding-margin d-flex align-v justify-c">Post: {{ $info->postal_code }}</div>
            @endforeach
        </div>
        <div class="col-2 no-padding-margin d-flex align-v justify-c next-info no-drag">
            <img class="img-fluid" style="width: 50%;" src="{{ asset('images/icons/chevron-right.svg') }}">
        </div>
    </div>
</div>
@endsection

<!-- js includes -->
@section('js')
    <script src="{{ URL::asset('/js/frontend/contact/script.js') }}"></script>
@endsection
