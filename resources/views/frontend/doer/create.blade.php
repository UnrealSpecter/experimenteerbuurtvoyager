@section('css')
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/doer/create/style.css') }}" />
@endsection
@section('js')
    <script src="{{ URL::asset('/js/frontend/doer/create/script.js') }}"></script>
@endsection
@extends('experimenteerbuurt-layout')
@section('content')
<div class="col-lg-2 col-md-2 hidden-sm hidden-xs animated fadeInRightBig" style="height: 100vh; z-index: 0;">
    <img src="{{ URL::asset('images/analoog-doer.png') }}" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; z-index: 10;">
</div>
<img class="fixed-background" src="/images/doer/doer-background.jpg" alt="create background" />
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 create-wrapper d-none" style="height: 100vh;">
    <div class="row" style="height: 100%;">
        <div class="col-lg-12 button-container">
            <div class="row" style="height: 100%;">
                <a href="" class="col-lg-12 col-md-4 col-sm-4 col-xs-12 button experimenteerbuurt selected" data-number="0" >
                    <span>DOE MEE!</span>
                </a>
            </div>
        </div>
        <!--  content -->
        <div class="col-lg-12 content-area no-padding-margin d-flex align-v justify-c">
            <p class="col-10 invisible">Het meest belangrijke opgave voor de buurt op dit moment is een nieuwe locatie. Dus heb je daar ideeen over en wil je hierin actief meezoeken? Meld je! <br/> <br /> Natuurlijk zijn we optimistisch en gaan we ervanuit dat het lukt een nieuwe plek te vinden. Wij steken erop in dat de Experimenteerbuurt dan ook de kans geeft voor 20 mensen om in de buurt te gaan wonen. Wil je hier wil wonen en ook samen de plannen hiervoor uitwerken? Meld je! <br/> <br />
Ben je bedrijf en wil je je prototype of ander experiment uitvoeren? Dan kun jij in de buurt ook niet ontbreken. Meld je aan voor de nieuwsbrief, volg ons op <a href="https://www.facebook.com/Experimenteerbuurt/" target="_blank">facebook</a> en blijf op de hoogte!</p>
        </div>
    </div>
</div>
<script src="{{ URL::asset('/js/frontend/doer/create/youtube-api.js')}}"></script>
@endsection
