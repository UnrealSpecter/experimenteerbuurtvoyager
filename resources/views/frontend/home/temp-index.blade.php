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
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/style.css') }}">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat"     rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway"        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sansita"        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round"   rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ultra"          rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Modak"          rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Black" rel="stylesheet">

        <!-- bootstrap js -->
        <script type="text/javascript" src="{{ URL::asset('js/global/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/global/bootstrap.min.js') }}"></script>
        <style>

            a {
                text-decoration: underline;
                color: white;
            }

            /* Custom, iPhone Retina */
           @media only screen and (min-width : 320px) {
               h2 {
                   color: white;
                   font-size: 1em;
               }
           }

           /* Small Devices, Tablets */
           @media only screen and (min-width : 768px) {
               h2 {
                   color: white;
                   font-size: 1.5em;
               }
           }

        </style>
        <script>

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-90310031-2', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
		<div class="container-fluid">

            <img src="{{ URL::asset('/images/temp-background.jpg') }}" class="col-lg-12" style="background: white; height: 100%; width: 100%; top: 0; left: 0; z-index: -1; position: absolute; padding: 0 !important;"/>
            <div class="col-lg-6 col-lg-offset-3" style="display: table; height: 100vh;">
                <h2 style="font-family: Montserrat; display: table-cell; vertical-align: middle; text-align: center; color: white;">Deze <a href="http://onix.nl/portfolio-item/cubestee/">Cubestee</a> is de eerste stap naar de meest vernieuwende buurt van Nederland. <br/> <br/> Op de voormalige plek van de Emmense Camping komt de Experimenteerbuurt.

Een buurt waar mensen wonen en alle ruimte is voor experimenten van particulieren en bedrijven. <br /> <br/> De pers besteedde al aandacht aan ons initiatief.
Lees <a href="http://www.rtvdrenthe.nl/nieuws/118757/Voormalige-Emmer-camping-wordt-experimenteerbuurt">hier</a> het artikel van RTV Drenthe.
Lees <a href="https://www.emmen.nu/nieuws/emmen/482410/voormalige-emmer-camping-wordt-experimenteerbuurt.html">hier</a> het artikel van Emmen.nu.
Lees <a href="{{ URL::asset('/images/dagblad-van-het-noorden.pdf') }}" download="dagblad-van-het-noorden">Hier</a> het artikel van het Dagblad van het Noorden <br/> <br/>

Als liever gewoon even wil luisteren kunt u vanaf minuut 15:30 <a href="http://www.rtvdrenthe.nl/radio/programma/11/Drenthe-Nu/aflevering/19365">Hier</a> gelijk na de sweet tunes van Bob Marley ook naar de sweet story van de Experimenteerbuurt luisteren op de website van RTV Drenthe. <br /> <br />

<a href="https://www.facebook.com/dhevakart">Dhevak</a> werkt aan een prachtige website met veel meer informatie. Maar nog even geduld... <br/> <br/>

Je kunt ons alvast volgen op <a href="https://www.facebook.com/Experimenteerbuurt/">De Experimenteerbuurt facebook.</a> <br/> <br/>

Kun je echt niet wachten? Mail ons dan op <span style="text-decoration: underline;">info@experimenteerbuurt.nl. </span> Je hoort dan van ons. <br/> <br/>

<span style="font-style: italic; text-decoration: underline;"> Diem Do & Alya Assen </span><br/><br/>
</h2>

            </div>
            <div class="col-lg-6" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100vw; background: black; opacity: 0.5; z-index: -1;">

            </div>
        </div>
    </body>
</html>
