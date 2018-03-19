@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/doer/show/style.css') }}" />
@endsection
@section('js')
    <script src="{{ URL::asset('/js/frontend/doer/show/script.js') }} "></script>
@endsection
@extends('experimenteerbuurt-layout')
@section('content')
<img src="{{ URL::asset('/images/doer/doer-background.jpg') }}" style="position: absolute; height: 100vh; width: 100vw; z-index: -15; left: 0; top: 0; padding: 0;">
<div style="position: absolute; height: 100vh; width: 100vw; z-index: -14; left: 0; top: 0; padding: 0; background-color: black; opacity: 0.5;"></div>

<div class="col-lg-4 col-md-4 col-sm-6 hidden-xs animated fadeInRightBig" style="height: 100vh; z-index: 2;">
    <div class="analoog-wrapper" style="height: 50%; width: 100%; margin-top: 25%;">
        <a href="/doener" class="return-to-overview col-lg-12 col-md-12 col-sm-12 col-xs-12" data-mode="profile-data">
            <span>Terug naar doeners</span>
        </a>
        <img src="/uploads/user_images/{{ $doer->profile_image }} " alt="doer profiel" style="height: 100%; width: 100%; z-index: 10;">
        @if($doer->video)
        <div class="doer-video-button col-lg-12 col-md-12 col-sm-12 col-xs-12" data-mode="profile-data">
            <span>mijn video</span>
        </div>
        @endif
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="height: 100vh;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-area hidden" style=" padding: 0; z-index: 1; height: 100vh;">
            <div class="row" style="height: 20%;">
                <div class="doer-name col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 hidden">
                    <span>{{$doer->full_name}}</span>
                </div>
            </div>
            <div class="row" style="height: 70%; overflow: scroll; overflow-x: hidden; margin-right: -20px; position: relative;">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 doer-video-wrapper hidden">
                    <div class="row" style="height: 100%;">
                        <div id="doer-video" style="height: 100%; width: 100%;"></div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 doer-wrapper">
                    @if($doer->company_name)
                    <div class="row data-row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 doer-label">
                            <span>Bedrijfsnaam</span>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 doer-info">
                            <span class="bedrijfsnaam">{{$doer->company_name}}</span>
                        </div>
                        <hr/>
                    </div>
                    @endif
                    @if($doer->phone_number_visibility == 'yes')
                    <div class="row data-row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 doer-label">
                            <span>telefoonnummer</span>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 doer-info">
                            <span class="telefoonnummer">{{$doer->phone_number}}</span>
                        </div>
                        <hr/>
                    </div>
                    @endif
                    @if($doer->email_visibility == 'yes')
                    <div class="row data-row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 doer-label">
                            <span>email</span>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 doer-info">
                            <span class="email">{{$doer->email}}</span>
                        </div>
                        <hr/>
                    </div>
                    @endif
                    <div class="row data-row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 50px !important; padding: 0; text-align: left; word-break: break-all; word-wrap: break-word;">
                            <span class="wat-doe-ik-label" style="position: relative !important;">Mijn experiment: {{ $doer->short_description }}</span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0; word-break: break-all; margin-top: 2%;">
                            <span class="wat-doe-ik">{{$doer->description}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-lg hidden-md hidden-sm col-xs-12" style="position: absolute; bottom: 0; height: 10%; padding: 0; z-index: 1000 !important;">
            @if($doer->video)
            <a href="/doener" class="return-to-overview col-xs-6" data-mode="profile-data" style="height: 100%; display: flex; align-items: center;">
                <span>Terug naar doeners</span>
            </a>
            <div class="doer-video-button col-xs-6" data-mode="profile-data" style="height: 100%; display: flex; align-items: center;">
                <span>mijn video</span>
            </div>
            @else
            <a href="/doener" class="return-to-overview col-xs-12" data-mode="profile-data" style="height: 100%; display: flex; align-items: center;">
                <span>Terug naar doeners</span>
            </a>
            @endif
        </div>
    </div>
</div>
@if($doer->video)
<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
    player = new YT.Player('doer-video', {
      height: '100%',
      width: '100%',
      videoId: '{{$doer->video}}',
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
    }

    // 5. The API calls this function when the player's state changes.
    function onPlayerStateChange(event) {


    }
</script>
@endif
@endsection
