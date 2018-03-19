@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/frontend/inspiration/style.css') }}" />
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('js/frontend/inspiration/script.js') }}"></script>
@endsection
@extends('experimenteerbuurt-layout')
@section('content')
    <img class="inspiration-background" src=" {{ URL::asset('/images/inspiration/inspiratie-traktatie-background.png') }} "/>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrapper">
        <div class="row" style="height: 100%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inspiration-text-background"></div>
            <h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inspiration-title"> Inspiratie </h1>
            <p class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0 inspiration-description">Inspiratie is onmisbaar voor goede experimenten. Kijk voor inspiratie op onze facebookpagina, deel wat jou inspireert, betrek anderen en ga in digitaal gesprek. Houd in de gaten wat er te doen is en kom in levende lijve langs op locatie. Verras jezelf, verras anderen en verras iedereen die meekijkt. Hier in de Experimenteerbuurt is alle ruimte voor jouw experiment!</p>
        </div>
    </div>
    <a href="https://www.facebook.com/Experimenteerbuurt/" target="_blank">
        <img class="hidden-lg hidden-md hidden-sm col-xs-12" src="{{ URL::asset('/images/inspiration/facebook-button-mobile.png') }}" style="position: absolute; bottom: 0; height: 10%; margin: 0; padding: 0;">
    </a>
    <a href="https://www.facebook.com/Experimenteerbuurt/" target="_blank">
        <img class="fb-analoog-img col-md-4 col-sm-4 hidden-xs"src="images/inspiration/facebook-logo-transparent.png" alt="erlenmeyer-background" >
    </a>
</div>
@endsection
