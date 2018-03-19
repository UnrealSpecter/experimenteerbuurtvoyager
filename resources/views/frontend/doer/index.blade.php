@section('css')
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/doer/index/style.css') }}">
@endsection
@section('js')
    <script src="{{ URL::asset('/js/frontend/doer/index/script.js') }}"></script>
@endsection
@extends('experimenteerbuurt-layout')
@section('content')
<img class="fixed-background" src="/images/doer/doer-background.jpg" alt="" />
<div class="col-lg-2 col-md-2 hidden-sm hidden-xs animated fadeInRightBig" style="height: 100vh; z-index: 0;">
    <img src="images/analoog-doer.png" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; z-index: 10;">
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="background: transparent; height: 100vh;">
    <div class="row" style="height: 100%;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-container">
            <div class="row" style="height: 100%;">
                <a href="/doener/create" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 button">
                    <span>Wat zijn doeners?</span>
                </a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-area" style="z-index: 1; height: 90%; overflow-x: scroll;">
            <div class="row">
                @include('frontend.doer.doer-form')
                <div id="gallery" class="doener-overzicht">
                    @foreach($doers as $doer)
                    <a class="doer hidden animated fadeInLeft" href="/doener/{{$doer->id}}">
                        <img alt="{{$doer->full_name}}" src="/uploads/user_images/thumbs/{{$doer->profile_image}}">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animated fadeIn caption">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caption-shadow"></div>
                            @if($doer->company_name)
                            <div class="col-lg-12 company animated fadeInRight">
                                <span>{{ $doer->company_name }}</span>
                            </div>
                            @endif
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 doer-info-wrapper" style="display: flex; flex-flow: column wrap; justify-content: center; height: 100%;">
                                <div class="col-lg-12 doer-name animated fadeInDown">
                                    {{ $doer->full_name }}
                                </div>
                                <hr style="width: 100%; padding: 0 !important; marigin: 0 !important;"/>
                                <div class="col-lg-12 description animated fadeInUp">
                                    {{ $doer->short_description }}
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
