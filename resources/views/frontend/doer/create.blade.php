@section('css')
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/doer/create/style.css') }}" />
@endsection

@extends('experimenteerbuurt-layout')
@section('content')

    @include('menu-trigger')

    <div class="col-lg-2 col-md-2 d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block animated fadeInRightBig no-padding-margin" style="height: 100vh; z-index: 0;">
        <img src="{{ URL::asset('images/analoog-doer.png') }}" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; z-index: 10;">
    </div>

    <img class="fixed-background" src="/images/doer/doer-background.jpg" alt="create background" />

    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 create-wrapper d-none" style="height: 100vh;">
        <div class="row" style="height: 100%;">
            <div class="col-lg-12 button-container d-flex align-v justify-c big-john">
                <span>DOE MEE!</span>
            </div>
            <div class="col-lg-12 content-area no-padding-margin d-flex align-v justify-c">
                <p class="col-10 invisible">Het meest belangrijke opgave voor de buurt op dit moment is een nieuwe locatie. Dus heb je daar ideeen over en wil je hierin actief meezoeken? <span style="font-weight: bold;">Meld je!</span> <br/> <br /> Natuurlijk zijn we optimistisch en gaan we ervanuit dat het lukt een nieuwe plek te vinden. Wij steken erop in dat de Experimenteerbuurt dan ook de kans geeft voor 20 mensen om in de buurt te gaan wonen. Wil je hier wil wonen en ook samen de plannen hiervoor uitwerken? Meld je! <br/> <br />
    Ben je bedrijf en wil je je prototype of ander experiment uitvoeren? Dan kun jij in de buurt ook niet ontbreken. Meld je aan voor de nieuwsbrief, volg ons op <a style="font-weight: bold;" href="https://www.facebook.com/Experimenteerbuurt/" target="_blank">facebook</a> en blijf op de hoogte!</p>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ URL::asset('/js/frontend/doer/create/script.js') }}"></script>
    <script src="{{ URL::asset('/js/frontend/doer/create/youtube-api.js')}}"></script>
@endsection
