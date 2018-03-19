<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head data-enhance="false">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Experimenteerbuurt</title>

        <!-- bootstrap css -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/jquery.mobile.structure-1.4.5.css') }}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/sidebar-menu.css') }}"> -->

        <link rel="icon" href="{{ asset('/images/menu-logo.png')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/reset.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/animate.css') }}">

        <!-- sidebar-menu css-->
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/general-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/global/project-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hamburger-menu/css/hamburger.css') }}">
        @yield('css')
    </head>
    <body>
        @include('loader')
        @include('sidebar-menu')
		<div class="container-fluid" style="width: 100vw;" data-enhance="false" data-role="page">
            <div class="row">
                @include('modal')
                <div class="col-lg-2 col-md-2 hidden-sm hidden-xs erlenmeyer">
                    <img src="/images/analoog-erlenmeyer.png" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; padding-left: 20px;">
                </div>
                @yield('content')
            </div>
		</div>
        <!-- SCRIPTS -->
        <!-- <script type="text/javascript" src="{{ URL::asset('plugins/bootstrap-filestyle/bootstrap-filestyle.min.js')}}"></script> -->
        <!-- <script type="text/javascript" src="{{ URL::asset('js/global/moment.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/global/moment-timezone-with-data.js') }}"></script> -->
        <script src="{{ asset('js/global/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/tether/js/tether.min.js')}}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/hammer/js/hammer.js') }}"></script>
        <script src="{{ asset('js/global/script.js')}}"></script>
        <script src="{{ asset('plugins/hamburger-menu/js/hamburger.js') }}"></script>
        @yield('js')
    </body>
</html>
