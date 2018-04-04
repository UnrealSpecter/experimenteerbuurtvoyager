<!-- css includes -->
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/frontend/posts/style.css') }}">
@endsection

@extends('experimenteerbuurt-layout')
@section('content')
<img class="nieuws-background" src="{{ URL::asset('/images/news/news-background.jpg') }}">

<div class="col-12 col-lg-9 col-xl-10 news-title big-john flex-r align-v justify-c">Nieuw(s)</div>

<div class="posts-wrapper d-none  flex-c align-v col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-9 offset-lg-3 col-xl-8 offset-xl-3" style="top: 15%; position:absolute; margin-top:15px; padding: 0;">
    @foreach($posts as $post)
        @if($post->image || $post->youtube_embed)
        <div class="post col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            @if($post->youtube_embed)
            <div class="video-wrapper col-12 col-xs-12 flex-r justify-c no-padding-margin">
                <iframe class=" no-padding-margin col-12" src="{{ $post->youtube_embed }}" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-7 d-none d-xs-none content-container">
            @elseif($post->image)
            <div class="col-lg-5 hidden-xs img-holder d-flex align-v">
                <img class="col-12 img-responsive news-image" src="/storage/{{ $post->image }}" alt="{{ $post->title }} afbeelding"/>
            </div>
            <div class="col-12 col-lg-7 col-xl-7 d-xs-block content-container" style="background-color: #316b4d;">
            @endif
                @if($post->link)
                <div class="title d-flex align-v justify-c">{{ $post->title }}</div>
                @else
                <div class="title col-lg-12 col-md-12 col-sm-10 col-xs-12">{{ $post->title }}</div>
                @endif
                <div class="flex-c align-v justify-c no-padding-margin">
                    <div class="content d-flex align-v justify-c">{{ $post->content}}</div>
                    @if($post->link)
                    <a class="big-john" href="{{ $post->link }}">lees meer</a>
                    @endif
                </div>
            </div>
        </div>
        @else
        <div class="post col-lg-12 col-md-12 col-sm-8 col-xs-12 column">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if($post->link)
                <div class="title d-flex align-v justify-c">{{ $post->title }}</div>
                @else
                <div class="title d-flex align-v justify-c">{{ $post->title }}</div>
                @endif
                <div class="flex-c align-v justify-c">
                    <div class="content d-flex align-v justify-c">{{ $post->content}}</div>
                    @if($post->link)
                    <a class="big-john" href="{{ $post->link }}">lees meer</a>
                    @endif
                </div>
            </div>
        </div>
        @endif
    @endforeach
</div>

@endsection

@section('js')
    <!-- <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us17.list-manage.com","uuid":"307e7898b2f7cee1d865ffd9e","lid":"cb1410e538"}) })</script> -->
    <script src="{{ asset('/js/frontend/post/script.js') }}"></script>
@endsection
