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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/menu-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hamburger-menu/css/hamburger.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/loader-style.css') }}">

    </head>

    <body>
        <div class="container container-fluid" style="width: 100vw; height:100vh;">
            <div class="row d-flex justify-c" style="height: 100vh; width: 100vw;">
                @include('loader')
                @include('sidebar-menu')

                <div class="home-background-image col-12 no-padding-margin" style="height: 100vh; position: absolute; top: 0; left: 0; background-image: url('images/home/experimenteerbuurt-kijkdoos-banner.jpg'); background-position: center center; background-size: cover;"></div>

                <div class="experimenteerbuurt-logo no-drag col-lg-4 col-md-12 col-sm-12 d-none d-sm-none">
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

                <div class="menu hidden-sm-up col-12 d-flex align-v justify-c menu-trigger" style="position: fixed; bottom: 0; height: 15%; background-color: #2fac66; cursor: pointer;">
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>

            </div>
        </div>
        <!-- bootstrap js -->
        <script src="{{ asset('plugins/tether/js/tether.min.js') }}"></script>
        <script src="{{ asset('plugins/hammer/js/hammer.js') }}"></script>
        <script src="{{ asset('js/global/jquery-3.1.1.min.js') }}"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90310031-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90310031-2');
        </script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/global/script.js') }}"></script>
        <script src="{{ asset('plugins/hamburger-menu/js/hamburger.js')}}"></script>
        <script src="{{ asset('js/frontend/home/script.js') }}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    </body>
</html>
