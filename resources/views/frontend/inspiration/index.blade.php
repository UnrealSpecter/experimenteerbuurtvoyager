@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/frontend/inspiration/style.css') }}" />
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('js/frontend/inspiration/script.js') }}"></script>
@endsection
@extends('experimenteerbuurt-layout')
@section('content')
    @include('menu-trigger')
    <img class="inspiration-background" src=" {{ URL::asset('/images/inspiration/inspiratie-traktatie-background.png') }} "/>
    <div class="col-12 wrapper flex-c align-v justify-c" style="overflow:hidden;">
        <div class="row flex-c align-v justify-c content-wrapper">
            <h1 class="inspiration-title big-john invisible"> Inspiratie </h1>
            <p class="invisible fira-sans inspiration-description">De experimenteerbuurt bestaat niet zonder inspiratie! De facebook pagina is dé plek op te delen wat jou inspireert en waar je mee aan de slag wilt.  Verras jezelf, verras anderen en verras iedereen die meekijkt. In de Experimenteerbuurt is alle ruimte voor jouw experiment! jouw experiment!</p>
        </div>
        <a class="d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block col-lg-3 col-xl-2 fb-link" href="https://www.facebook.com/Experimenteerbuurt/" target="_blank">
            <img class="col-12 img-fluid fb-analoog-img d-none" src="{{ asset('images/inspiration/facebook-logo-transparent.png') }}" alt="erlenmeyer-background" >
        </a>
    </div>
    <a class="d-xs-block d-sm-block d-md-block d-lg-none d-xl-none" href="https://www.facebook.com/Experimenteerbuurt/" target="_blank">
        <img class="col-12 mobile-facebook-button" src="{{ URL::asset('/images/inspiration/facebook-button-mobile.png') }}">
    </a>
</div>
@endsection
