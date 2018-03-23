@extends('layouts.backend.app')

@section('content')
    <h1>User: {{$user->full_name}}</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Name:</th>
                <th>{{$user->full_name}}</th>
            </tr>
            <tr>
                <th>Company Name:</th>
                <th>{{$user->company_name}}</th>
            </tr>
            <tr>
                <th>E-mail</th>
                <th>{{$user->email}}</th>
            </tr>
            <tr>
                <th>Phone Number</th>
                <th>{{$user->phone_number}}</th>
            </tr>
            <tr>
                <th>Short Description</th>
                <th>{{$user->short_description}}</th>
            </tr>
            <tr>
                <th>Description</th>
                <th>{{$user->description}}</th>
            </tr>
            <tr>
                <th>Profile image</th>
                <th><img src="/uploads/user_images/{{$user->profile_image}}"/></th>
            </tr>
            @if($user->video)
                <tr>
                    <th>User Video</th>
                    <th>
                        <iframe width="420" height="315"
                        src="https://www.youtube.com/embed/{{$user->video}}">
                        </iframe>
                    <th/>
                </tr>
            @endif

        </table>
        <a href="/admin/users/{{$user->id}}/edit" class="btn btn-info">Edit</a>
        {{ Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) }}
            {{ Form::hidden('id', $user->id) }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>
@endsection
