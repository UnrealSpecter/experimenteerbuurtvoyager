@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/frontend/inspiration/style.css') }}" />
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('js/frontend/inspiration/script.js') }}"></script>
@endsection
@extends('experimenteerbuurt-layout')
@section('content')
    <img class="inspiration-background" src=" {{ URL::asset('/images/inspiration/inspiratie-traktatie-background.png') }} "/>
    <div class="col-12 wrapper flex-c align-v justify-c" style="overflow:hidden;">
        <div class="row flex-c align-v justify-c content-wrapper">
            <h1 class="col-12 inspiration-title big-john d-none"> Inspiratie </h1>
            <p class="d-none fira-sans col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0 inspiration-description">De experimenteerbuurt bestaat niet zonder inspiratie! De facebook pagina is dé plek op te delen wat jou inspireert en waar je mee aan de slag wilt.  Verras jezelf, verras anderen en verras iedereen die meekijkt. In de Experimenteerbuurt is alle ruimte voor jouw experiment! jouw experiment!</p>
        </div>
        <a class="col-2 fb-link" href="https://www.facebook.com/Experimenteerbuurt/" target="_blank">
            <img class="col-12 img-fluid fb-analoog-img d-none" src="{{ asset('images/inspiration/facebook-logo-transparent.png') }}" alt="erlenmeyer-background" >
        </a>
    </div>
    <!-- <a href="https://www.facebook.com/Experimenteerbuurt/" target="_blank">
        <img class="col-12" src="{{ URL::asset('/images/inspiration/facebook-button-mobile.png') }}" style="position: absolute; bottom: 0; height: 10%; margin: 0; padding: 0;">
    </a> -->
</div>
@endsection
