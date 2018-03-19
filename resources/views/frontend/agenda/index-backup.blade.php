<!-- css includes -->
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/agenda/jquery.flipster.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/agenda/style.css') }}">
@endsection

<!-- js includes -->
@section('js')
    <!-- <script type="text/javascript" src="{{ URL::asset('js/frontend/agenda/jquery.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ URL::asset('js/frontend/agenda/jquery.flipster.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/frontend/agenda/script.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/global/countdown.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/global/moment.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/global/moment-timezone-with-data.js') }}"></script>
@endsection

<!-- layout -->
@extends('experimenteerbuurt-layout')
<!-- content -->
@section('content')
<div class="col-lg-9" style="background: white; height: 100vh;">
    <div class="row">
        <!-- second fade in part -->
        <div class="col-lg-3 animated fadeInRightBig" style="height: 100vh; position: absolute; left: 0; z-index: 0;">
            <img src="images/agenda-beeldmerk.png" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; z-index: 10;">
        </div>

        <!-- cotent area -->
        <div class="col-lg-12 content-area" style="z-index: 1; height: 100vh;">
            <img src="" class="full-background-image" alt='full-background-image-agenda' style="position: absolute; right: 0; height: 100vh; width: 100vw; z-index: -100; opacity: 0.5;">
            <div class="col-lg-12 events">
                <ul class="flip-items">
                    @foreach($events as $event)
                     @if($event->id === $closestEventId)
                     <li data-flip-title="Deep Lilac" data-flip-category="Purples" class="next-event">
                     @else
                     <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                     @endif
                        <div class="col-lg-12 agenda">

                            <!-- date and time -->
                            <div class="row date-and-time-container">
                                <div class="col-lg-12 col-lg-offset-0 date-and-time hidden" style="border: 3px solid {{ $event->theme->color }}; color: {{ $event->theme->color }}">Op {{$event->getDateString(0,1,2)}} om {{ $event->event_time }}</div>
                            </div>
                            <div class="row event-block" style="display: flex; align-items: center; border: 3px solid {{ $event->theme->color }}">
                                <img src="/uploads/events/{{ $event->background_image }}" class="event-block-background-image">

                                <!-- initial -->
                                <div class="col-lg-12 event-content-wrapper">
                                    <!-- inital event -->
                                    <div class="row">
                                        <div class="col-lg-12 titel">
                                            {{ $event->name }}
                                            <hr style="width: 75%" style="">
                                        </div>
                                        <div class="col-lg-12 event-date">
                                            {{$event->getDateString(2,3)}}
                                        </div>
                                        <div class="col-lg-12 description hidden">{{ $event->description }}</div>
                                    </div>
                                </div>
                                @if($event->eventbrite_url)
                                <div class="col-lg-6 eventbrite hidden" style="background-color: {{ $event->theme->color }}">
                                    <a href="{{ $event->eventbrite_url }}" style="display: table-cell; vertical-align: middle;"><span class="glyphicon glyphicon-link"></span> Aanmelden</a>
                                </div>
                                <div class="col-lg-12 col-lg-offset-0 time-till-event hidden" style="display: flex; align-items: center;">
                                    <span style="width: 100%; text-align: center;" class="countdown" data-date="{{ $event->event_date }}">
                                    </span>
                                </div>
                                @endif
                            </div>

                            <!-- kosten -->
                            <div class="row kosten-container" >
                                <div class="col-lg-8 col-lg-offset-2 kosten hidden" style="background-color: {{ $event->theme->color }}">
                                    @if($event->cost == 0)
                                        <div class="col-lg-3">
                                            <span class="glyphicon glyphicon-gift">
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="kosten-text" style="opacity: 0">Vrije Gift</span>
                                        </div>
                                    @else
                                        <span class="kosten-text" style="opacity: 0">{{ $event->cost }} &#8364</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
