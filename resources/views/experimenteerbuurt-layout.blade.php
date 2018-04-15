<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head data-enhance="false">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Experimenteerbuurt</title>

        <!-- bootstrap css -->
        <link rel="icon" href="{{ asset('/images/menu-logo.png')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/reset.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-4.0/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-4.0/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/animate.css') }}">

        <!-- sidebar-menu css-->
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/general-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/project-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/loader-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/menu-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hamburger-menu/css/hamburger.css') }}">
        @yield('css')

    </head>
    <body>
        @include('svg-definition')
        @include('loader')
        @include('sidebar-menu')
        <!-- @include('mobile-notification') -->
		<div class="container-fluid" style="width: 100vw;" data-enhance="false" data-role="page">
            <div class="row" style="height: 100vh; width: 100vw;">
                @include('modal')
                <div class="col-xl-2 col-lg-3 col-md-2 d-none d-sm-none d-xs-none d-lg-block d-xl-block erlenmeyer">
                    <img src="/images/analoog-erlenmeyer.png" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; padding-left: 20px;">
                </div>
                @yield('content')
            </div>
		</div>

        <!-- SCRIPTS -->
        <script src="{{ asset('plugins/bootstrap-4.0/js/jquery-slim.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-4.0/js/popper.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-4.0/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/global/script.js')}}"></script>
        <script src="{{ asset('plugins/hamburger-menu/js/hamburger.js') }}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90310031-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-90310031-2');
        </script>
        @yield('js')
    </body>
</html>
