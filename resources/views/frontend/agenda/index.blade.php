@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/agenda/style.css') }}">
@endsection

@extends('experimenteerbuurt-layout')
@section('content')
    <img class="agenda-background" src="{{ asset('/images/agenda/agenda-background.jpg') }}" style="opacity: 0.8; height: 100%; width: 100%; position: absolute; top: 0; left: 0;">
    <div class="col-lg-3 col-md-3 hidden-sm-down animated fadeInRightBig" style="height: 100vh; z-index: 0;">
        <img src="images/analoog-agenda.png" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; z-index: 10;">
    </div>
    @if(count($events) >= 1)
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 d-none agenda-wrapper" style="background: transparent; height: 100vh;">
            @foreach($events as $event)
            @if($event == $events->first())
            <div class="col-12 event-wrapper" style="border-left: solid 2px #e6332a;">
            @else
            <div class="col-12 event-wrapper d-none">
            @endif
                <div class="row info-container">
                    <div class="event-shadow "></div>
                    <div class="col-12 flex-r align-v justify-c agenda-nav-wrapper" style="height: 10%; position: absolute; bottom: 0%; z-index: 3000 !important; color: white; font-size: 1em; display: flex; align-items: center;">
                        @if(count($events) > 1)
                        <div class="row justify-c">
                            <img src="{{ asset('/images/icons/chevron-left.svg') }}" class="img-fluid previous-event" style="width: 4%; cursor: pointer;" alt="volgende veel gestelde vraag">
                            <div class="col-4 event-date invisible">{{ $event->getDateString(1, 2) }}</div>
                            <img src="{{ asset('/images/icons/chevron-right.svg') }}" class="img-fluid next-event" style="width: 4%; cursor: pointer;" alt="volgende veel gestelde vraag">
                        </div>
                        @endif
                    </div>
                    <img class="col-12 event-background" src="/storage/{{ $event->background_image }}">
                    <div class="col-12 initial-info-block">
                        <div style="width: 100%;" class="flex-c align-v">
                            <div class="col-12 initial-event-name">
                                <span style="width: 100%; text-align: center;">{{ $event->name }}</span>
                            </div>
                            <div class="col-12 initial-event-date">
                                <span style="text-transform:capitalize;">{{ $event->getDateString(0, 1, 2) }}</span>
                            </div>
                            <div class="col-2 more-info" data-mode='meer info'>
                                <span style="width: 100%; text-align: center;">Meer info</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 info-block d-none">
                        <div class="col-12 misc-container">
                            <div class="row" style="height: 100%;">
                                @if($event->eventbrite_url)
                                <div class="col-4 eventbrite">
                                    <a href="{{ $event->eventbrite_url }}" target="_blank">
                                        <span class="glyphicon glyphicon-link"></span> Aanmelden
                                    </a>
                                </div>
                                @endif
                                @if($event->cost)
                                <div class="col-4 kosten">
                                    @if($event->gift)
                                    <span class="glyphicon glyphicon-gift"> <span class="kosten-text">Vrije Gift</span>
                                    @elseif($event->cost == 0)
                                    <span class="kosten-text">Gratis</span>
                                    @else
                                    <span class="kosten-text">{{ $event->cost }} &#8364</span>
                                    @endif
                                </div>
                                @endif
                                @if(!$event->eventbrite_url && !$event->cost)
                                <div class="col-12 countdown">
                                @elseif(!$event->eventbrite_url || !$event->cost)
                                <div class="col-8 countdown">
                                @else
                                <div class="col-4 countdown">
                                @endif
                                    <span class="timer" data-date="{{ $event->event_date }}"></span>
                                </div>
                            </div>
                        </div>

                        <div class="flex-c align-v name-desc-wrapper col-12">
                            <div class="col-12 event-name">
                                    <span>{{ $event->name }}</span>
                            </div>
                            <div class="col-12 event-description">
                                <div class="col-12" style="display: flex; align-items: center; justify-content: space-around; margin: 10px;">
                                    {{ $event->description }}
                                </div>
                            </div>
                            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 more-info" data-mode="minder info">
                                <span style="width: 100%; text-align: center;">Terug</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
</div>
@endsection

@section('js')
    <script src="{{ asset('plugins/moment/js/moment.js') }}"></script>
    <script src="{{ asset('plugins/moment/js/moment-timezone-with-data.js') }}"></script>
    <script src="{{ asset('js/global/countdown.js') }}"></script>
	<script src="{{ asset('js/frontend/agenda/modernizr.custom.63321.js') }}"></script>
    <script src="{{ asset('js/frontend/agenda/script.js') }}"></script>
@endsection
