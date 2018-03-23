@extends('layouts.backend.app')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Cost</th>
                    <th>Active</th>
                    <th>Event date</th>
                    <th>Eventbrite URL</th>
                </tr>
            </thead>
            @foreach($events as $event)
                <tr class='clickable-row' data-href="/admin/events/{{$event->id}}">
                    <th>{{$event->name}}</th>
                    <th>{{$event->description}}</th>
                    <th>{{$event->cost}}</th>
                    <th>{{$event->active}}</th>
                    <th>{{$event->event_date}}</th>
                    <th>{{$event->eventbrite_url}}</th>
                </tr>
            @endforeach
        </table>
        <a href="/admin/events/create" class="btn btn-info">Create</a>
    </div>

    <script>
        $(document).ready(function($){
            $(".clickable-row").click(function(){
                window.location = $(this).data("href");
            });
        });
    </script>
@endsection
