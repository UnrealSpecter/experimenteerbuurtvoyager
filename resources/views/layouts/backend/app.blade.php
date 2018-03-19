<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/global/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/global/bootstrap.min.css">
    <link rel="stylesheet" href="/css/backend/simple-sidebar.css">
    @yield('css')

    <script type="text/javascript" src="{{ URL::asset('js/global/jquery-3.1.1.min.js') }}"></script>
    @yield('js')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="wrapper">
        @include('layouts.backend.sidebar')

        <div id="page-content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/global/app.js"></script>
    <script src="/js/global/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>
