<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Experimenteerbuurt</title>

        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/reboot/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hover/css/hover-min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/home/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/general-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/project-style.css') }}">

    </head>

    <body>
        <div class="container container-fluid" style="width: 100vw;">
            <div class="row">
                @include('loader')
                <img class="home-background-image col-12 no-padding-margin hidden-md-down" style="height: 100vh; position: absolute; top: 0; left: 0;" src="{{ asset('images/home/experimenteerbuurt-kijkdoos-banner.jpg') }}">
                <div class="experimenteerbuurt-logo no-drag col-lg-4 col-md-12 col-sm-12 flex-c justify-c">
                    <img class="img-responsive col-12" src="{{ URL::asset('/images/home/experimenteerbuurt-logo.png') }}">
                </div>
                <!-- nav -->
                <div class="home-nav hidden-sm-down col-12 no-padding-margin flex-r">
                    <a class="hvr-float hidden-xl-up col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john experimenteerbuurt" href="/wat-is-de-experimenteerbuurt">Experimenteer buurt?</a>
                    <a class="hvr-float hidden-lg-down col-xl-2 no-padding-margin flex-r align-v justify-c big-john experimenteerbuurt" href="/wat-is-de-experimenteerbuurt">Experimenteerbuurt?</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john nieuws" href="/nieuws">Nieuw(s)</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john agenda" href="/agenda">Wat is er te doen?</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john inspiration" href="/inspiratie">Inspiratie</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john doeners" href="/doener/create">Doe mee!</a>
                    <a class="hvr-float col-lg-2 col-md-2 col-sm-4 col-xs-6 no-padding-margin flex-r align-v justify-c big-john contact" href="/contact">Contact</a>
                </div>

                <div class="menu hidden-sm-up col-12" style="position: fixed; bottom: 0;">
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- <div class="home-nav col-lg-12 hidden-sm-up no-padding-margin flex-r">
                    <span class="hvr-float col-lg-12 no-padding-margin flex-r align-v justify-c big-john experimenteerbuurt">MENU<span>
                </div> -->
            </div>
        </div>
        <!-- bootstrap js -->
        <script src="{{ asset('plugins/tether/js/tether.min.js') }}"></script>
        <script src="{{ asset('plugins/hammer/js/hammer.js') }}"></script>
        <script src="{{ asset('js/global/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/global/script.js') }}"></script>
        <script src="{{ asset('js/frontend/home/script.js') }}"></script>
    </body>
</html>
