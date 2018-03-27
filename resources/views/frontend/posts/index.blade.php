<!-- css includes -->
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/frontend/posts/style.css') }}">
@endsection

@extends('experimenteerbuurt-layout')
@section('content')
<img class="nieuws-background" src="{{ URL::asset('/images/news/news-background.jpg') }}">

<div class="col-10 news-title big-john flex-r align-v justify-c">Nieuw(s)</div>

<div class="posts-wrapper d-none  flex-c align-v col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-12 col-xs-12" style="top: 10%; position: absolute; right: 0; margin-top: 3%;">
    @foreach($posts as $post)
        @if($post->image)
        <div class="post col-lg-11 col-md-10 col-sm-12 col-xs-12 row">
            @if($post->youtube_embed)
            <div class="video-wrapper col-5 flex-r justify-c no-padding-margin" style="min-height: 400px;">
                <iframe class=" no-padding-margin col-12" src="{{ $post->youtube_embed }}" frameborder="0" allowfullscreen></iframe>
            </div>
            @else
            <div class="col-lg-5 hidden-xs img-holder">
                <img class="col-12 img-responsive news-image" src="/storage/{{ $post->image }}" alt="{{ $post->title }} afbeelding"/>
            </div>
            @endif
            <div class="col-7 col-xs-12">
                @if($post->link)
                <a href="{{ $post->link }}" target="_blank">
                    <div class="title" style="padding: 0;">{{ $post->title }}<span class="hyperlink-indicator glyphicon glyphicon-link"></span></div>
                </a>
                @else
                <div class="title col-lg-12 col-md-12 col-sm-10 col-xs-12">{{ $post->title }}</div>
                @endif
                <div class="col-lg-12 col-md-12 col-sm-10 col-xs-12" style="display: flex; align-items: center; justify-content: center;">
                    <div class="content">{{ $post->content}}</div>
                </div>
            </div>
        </div>
        @else
        <div class="post col-lg-8 col-md-12 col-sm-8 col-xs-12 column">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if($post->link)
                <a href="{{ $post->link }}" target="_blank">
                    <div class="title" style="padding: 0;">{{ $post->title }} <span class="hyperlink-indicator glyphicon glyphicon-link"></span></div>
                </a>
                @else
                <div class="title">{{ $post->title }}</div>
                @endif
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex; align-items: center; justify-content: center;">
                    <div class="content">{{ $post->content}}</div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
</div>

@endsection

@section('js')
    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us17.list-manage.com","uuid":"307e7898b2f7cee1d865ffd9e","lid":"cb1410e538"}) })</script>
    <script src="{{ asset('/js/frontend/post/script.js') }}"></script>
@endsection
