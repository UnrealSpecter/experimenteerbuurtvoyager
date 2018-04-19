<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Experimenteerbuurt</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-4.0/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-4.0/css/bootstrap.min.css.map') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-4.0/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-4.0/css/bootstrap-reboot.min.css.map') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hover/css/hover-min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hamburger-menu/css/hamburger.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/home/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/general-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/project-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/menu-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/loader-style.css') }}">

    </head>

    <body>
        <div class="container container-fluid" style="width: 100vw; height:100vh;">
            <div class="row d-flex justify-c" style="height: 100vh;">

                @include('loader')
                @include('sidebar-menu')

                <div class="home-background-image col-12 no-padding-margin" style="height: 100vh; position: absolute; top: 0; left: 0; background-image: url('images/home/experimenteerbuurt-kijkdoos-banner.jpg'); background-position: center center; background-size: cover;"></div>
                <div class="experimenteerbuurt-logo no-drag col-lg-4 col-md-12 col-sm-12 d-none d-sm-none">
                    <img class="img-responsive col-12" src="{{ URL::asset('/images/home/experimenteerbuurt-logo.png') }}">
                </div>

                <!-- nav -->
                <div class="home-nav d-xs-none d-sm-none d-md-none d-lg-none d-xl-block col-xl-12 no-padding-margin flex-r">
                    <div class="row no-padding-margin" style="height: 100%;">
                        <a style="height: 100%;" class="hvr-float col-xl-2 flex-r align-v justify-c big-john experimenteerbuurt" href="/wat-is-de-experimenteerbuurt">Experimenteerbuurt?</a>
                        <a style="height: 100%;" class="hvr-float col-xl-2 flex-r align-v justify-c big-john nieuws" href="/nieuws">Nieuw(s)</a>
                        <a style="height: 100%;" class="hvr-float col-xl-2 flex-r align-v justify-c big-john agenda" href="/agenda">Wat is er te doen?</a>
                        <a style="height: 100%;" class="hvr-float col-lg-2 flex-r align-v justify-c big-john inspiration" href="/inspiratie">Inspiratie</a>
                        <a style="height: 100%;" class="hvr-float col-lg-2 flex-r align-v justify-c big-john doeners" href="/doener/create">Doe mee!</a>
                        <a style="height: 100%;" class="hvr-float col-lg-2 flex-r align-v justify-c big-john contact" href="/contact">Contact</a>
                    </div>
                </div>

                <div class="menu d-xl-none col-12 d-flex align-v justify-c menu-trigger">
                    <button class="hamburger hamburger--slider d-flex align-v" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>

            </div>
        </div>

        <script src="{{ asset('plugins/bootstrap-4.0/js/jquery-slim.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-4.0/js/popper.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-4.0/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/hammer/js/hammer.js') }}"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90310031-2"></script>
        <script src="{{ asset('js/global/analytics.js')}}"></script>
        <script src="{{ asset('js/global/script.js') }}"></script>
        <script src="{{ asset('plugins/hamburger-menu/js/hamburger.js')}}"></script>
        <script src="{{ asset('js/frontend/home/script.js') }}"></script>

    </body>
</html>
