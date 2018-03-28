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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('plugins/reboot/css/bootstrap-reboot.min.css') }}"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/animate.css') }}">

        <!-- sidebar-menu css-->
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/general-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/project-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/loader-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hamburger-menu/css/hamburger.css') }}">
        @yield('css')
    </head>
    <body>
        @include('loader')
        @include('sidebar-menu')
        @include('mobile-notification')
		<div class="container-fluid d-none d-md-block d-sm-block d-xs-block" style="width: 100vw;" data-enhance="false" data-role="page">
            <div class="row" style="height: 100vh; width: 100vw;">
                @include('modal')
                <div class="col-lg-2 col-md-2 d-none d-sm-block d-xs-block xs-hidden erlenmeyer">
                    <img src="/images/analoog-erlenmeyer.png" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; padding-left: 20px;">
                </div>
                @yield('content')
            </div>
		</div>
        <!-- SCRIPTS -->
        <script src="{{ asset('js/global/jquery-3.1.1.min.js') }}"></script>
        <!-- <script src="{{ URL::asset('plugins/tether/js/tether.min.js')}}"></script> -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script> -->
        <script src="{{ asset('plugins/hammer/js/hammer.js') }}"></script>
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
