@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/about-us/faq-section.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/about-us/style.css') }}">
@endsection
@section('js')
    <script type="text/javascript" src="{{ URL::asset('js/frontend/about-us/script.js') }}"></script>
@endsection
@extends('experimenteerbuurt-layout')
@section('content')
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="background: transparent; height: 100vh; z-index: 10;">
        <img class="wat-is-de-experimenteerbuurt-background" src="/images/about-us/about-us-background.jpg" alt="background">
        <div class="row animated slideInRight" style="height: 100%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-container">
                <div class="row" style="height: 100%;">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 button experimenteerbuurt selected" data-number="0" >
                        <span>Wat is de experimenteerbuurt?</span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 button organisatie" data-number="1">
                        <span>Achter de schermen</span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6 button locatie" data-number="2">
                        <span>Locatie...?</span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 button faq" data-number="3">
                        <span>Veelgestelde vragen</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 main-container">
                <div class="row" style="height: 100%;">
                    <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel" style="height: 100%;">
                        <div class="carousel-inner" style="height: 100%;">
                            <div class="item active carousel-slide">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 experimenteerbuurt-video animated fadeIn" id="wat-is-de-experimenteerbuurt-video"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 experimenteerbuurt-info animated fadeOut">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 experimeerbuurt-shadow"></div>
                                    <h1 class="col-lg-4 col-md-5 col-sm-4 col-xs-12 experimenteerbuurt-title"><span>Wat is de Experimenteerbuurt</span></h1>
                                    <p class="col-lg-8 col-md-7 col-sm-8 col-xs-10 col-xs-offset-1 experimenteerbuurt-description">De Experimenteerbuurt is de meest vernieuwende buurt van Nederland. Deze buurt met ‘echte bewoners’ ontstaat in Emmen uit concrete plannen van DOENers (particulieren en bedrijven). <br /> <br /> Je bent vanaf nu welkom op de locatie. Laat je inspireren, kom kijken, ga in gesprek en doe mee. In de Experimenteerbuurt is ruimte om met jouw experiment aan de slag te gaan!</p>
                                </div>
                            </div>
                            <!-- Organisatie pagina  -->
                            <div class="item carousel-slide">
                                <div class="col-lg-12 experimeerbuurt-shadow"></div>
                                <div class="organisatie-info-container col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 organisatie-info-wrapper" data-id="1">
                                            <h1 class="organisatie-title hidden">Stichting experimenteerbuurt</h1>
                                            <p class="organisatie-description hidden"> Diem Do en Alya Assen zijn initiatiefnemers en aanjagers van de Experimenteerbuurt. Eind 2016 is door hen de Stichting Experimenteerbuurt opgericht. Deze stichting heeft tot doel om ‘gebiedsontwikkeling op een vernieuwende manier aan te jagen’.</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 organisatie-info-wrapper hidden" data-id="2">
                                            <h1 class="organisatie-title hidden">Hoofdpartners in het proces van gebiedsontwikkeling</h1>
                                            <p class="organisatie-description hidden">Woningstichting Domesta, gemeente Emmen en Koenen Bouw zijn onmisbare partners. Zij steunen het proces door sparringspartner te zijn en door een bedrag beschikbaar te stellen.</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 organisatie-info-wrapper hidden" data-id="3">
                                            <h1 class="organisatie-title hidden">Ook belangrijk</h1>
                                            <p class="organisatie-description hidden">Onze uitvalsbasis, de Cubestee met veel dank aan Onix Architecten Groningen, Rizoem en Friso Bouwgroep. De mannen Frank en Tomi van Dhevak (analoge websites) en Iris Sijbom fotografie voor hun creativiteit en flexibiliteit. <br /> Wim Velders de eerste vrijwilliger die zich spontaan meldde. En iedereen die op welke manier dan ook iets voor dit experiment van gebiedsontwikkeling hebben gedaan of gaan doen!</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 faq-nav-wrapper">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-1" style="display: flex; align-items: center;">
                                                <span class="previous-info glyphicon glyphicon-chevron-left" style="width: 100%; text-align: right;"></span>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" style="display: flex; align-items: center;">
                                                <span style="width: 100%; text-align: center;"> <span class="organisation-count">1</span> / 3</span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="display: flex; align-items: center;">
                                                <span class="next-info glyphicon glyphicon-chevron-right" style="width: 100%; text-align: left;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sponsors col-lg-12">
                                    <div class="row" style="height: 100%;">
                                        <a class="col-lg-3 col-md-3 col-sm-3 col-xs-6 sponsor hidden" target="_blank">
                                            <img src=" {{ URL::asset('/images/about-us/experimenteerbuurt-logo-2.png') }} ">
                                        </a>
                                        <a class="col-lg-3 col-md-3 col-sm-3 col-xs-6 gemeente-emmen sponsor hidden" target="_blank" href="https://gemeente.emmen.nl/">
                                            <img src=" {{ URL::asset('/images/about-us/gemeente-emmen.png') }} ">
                                        </a>
                                        <a class="col-lg-3 col-md-3 col-sm-3 col-xs-6 sponsor hidden" target="_blank" href="https://www.domesta.nl/Home.html">
                                            <img src=" {{ URL::asset('/images/about-us/domesta.png') }} ">
                                        </a>
                                        <a class="col-lg-3 col-md-3 col-sm-3 col-xs-6 sponsor hidden" target="_blank" href="http://www.koenenbouwemmen.nl/">
                                            <img src=" {{ URL::asset('/images/about-us/koenen-bouw.png') }} ">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- locatie pagina -->
                            <div class="item carousel-slide"></div>
                            <!-- frequently asked questions  -->
                            <div class="col-lg-12 item carousel-slide">
                                <div class="row" style="height: 100%;">
                                    <div class="col-lg-12 experimeerbuurt-shadow"></div>
                                    @foreach($faqs as $index => $faq)
                                    @if($faq == $faqs->first())
                                    <div class="faq-question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12" data-id="{{ $index + 1 }}">
                                    @else
                                    <div class="faq-question-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden" data-id="{{ $index + 1 }}">
                                    @endif
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h1 class="col-lg-12 faq-question"><span>{{ $faq->question }}</span></h1>
                                            <p class="col-lg-12 faq-answer"><span>{{ $faq->answer}}</span></p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 faq-nav-wrapper">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-1" style="display: flex; align-items: center;">
                                            <span class="glyphicon glyphicon-chevron-left" style="width: 100%; text-align: right;"></span>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" style="display: flex; align-items: center;">
                                            <span style="width: 100%; text-align: center;"> <span class="faq-count">1</span> / {{ count($faqs) }}</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="display: flex; align-items: center;">
                                            <span class="glyphicon glyphicon-chevron-right" style="width: 100%; text-align: left;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Carousel -->
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
    <script type="text/javascript" src="{{ URL::asset('/js/frontend/about-us/youtube-api.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-A7xIRqB5-6bL46K3cVsftvjHhYGU8z4"></script>
@endsection
