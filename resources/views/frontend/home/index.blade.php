<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Experimenteerbuurt</title>

        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/hover/css/hover-min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/home/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/general-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/project-style.css') }}">

    </head>

    <body style="background-image: url('{{asset('/images/home/experimenteerbuurt-kijkdoos-banner.jpg') }}'); background-size: 100% 100%; background-repeat: no-repeat;">
        <div class="container container-fluid" style="width: 100vw;">
            @include('loader')
            <div class="experimenteerbuurt-logo no-drag col-12 flex-c" style="align-items: flex-start; height: 100vh; pointer-events: none;">
                <img class="img-responsive animated fadeInDown" style="width: 25%; position: absolute; top: 25px; right: 25px;" src="{{ URL::asset('/images/home/experimenteerbuurt-logo.png') }}">
            </div>
            <div class="row">
                <!-- nav -->
                <div class="home-nav animated fadeInDown col-lg-12 no-padding-margin">
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john experimenteerbuurt" href="/wat-is-de-experimenteerbuurt">Experimenteerbuurt?</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john nieuws" href="/nieuws">Nieuw(s)</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john agenda" href="/agenda">Wat is er te doen?</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john inspiration" href="/inspiratie">Inspiratie</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john doeners" href="/doener/create">Doe mee!</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john contact" href="/contact">Contact</a>
                </div>
            </div>
        </div>
        <!-- bootstrap js -->
        <script src="{{ URL::asset('js/global/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/global/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/global/script.js') }}"></script>
    </body>
</html>
