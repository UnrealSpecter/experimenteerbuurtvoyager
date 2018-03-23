@extends('layouts.backend.app')

@section('js')
    <script src="/js/global/countdown.js"></script>
    <script src="/js/global/moment.js"></script>
    <script src="/js/global/moment-timezone-with-data.js"></script>
@endsection

@section('content')
    <h1>Event: {{$event->name}}</h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Name:</th>
                <th>{{$event->name}}</th>
            </tr>
            <tr>
                <th>Description:</th>
                <th>{{$event->description}}</th>
            </tr>
            <tr>
                <th>Gift:</th>
                <th>{{$event->gift}}</th>
            </tr>
            <tr>
                <th>Actief:</th>
                <th>{{$event->active}}</th>
            </tr>
            <tr>
                <th>Cost:</th>
                <th>{{$event->cost}}</th>
            </tr>
            <tr>
                <th>Event date:</th>
                <th>{{$event->event_date}}</th>
            </tr>
            <tr>
                <th>Event time:</th>
                <th>{{$event->event_time}}</th>
            </tr>
            <tr>
                <th>Profile image</th>
                <th><img src="/uploads/events/{{$event->background_image}}"/></th>
            </tr>
            <tr>
                <th>Eventbrite URL</th>
                <th>{{$event->eventbrite_url}}</th>
            </tr>

        </table>
        <a href="/admin/events/{{$event->id}}/edit" class="btn btn-info">Edit</a>
        {{ Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) }}
            {{ Form::hidden('id', $event->id) }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>
@endsection
