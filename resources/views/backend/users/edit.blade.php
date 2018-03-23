@extends('layouts.backend.app')

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update', $user->id], 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('full_name', 'Name') !!}
            {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('company_name', 'Company Name') !!}
            {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone_number', 'Phone Number') !!}
            {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('short_description', 'Short Description') !!}
            {!! Form::text('short_description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone_number_visibility', 'Phone Number Visibility') !!}
            {!! Form::select('phone_number_visibility', Config::get('enums.phone_number_visibility'), $user->phone_number_visibility, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email_visibility', 'Email Visibility') !!}
            {!! Form::select('email_visibility', Config::get('enums.email_visibility'), $user->email_visibility, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('profile_image', 'Profile Image') !!}
            {!! Form::file('profile_image', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('video', 'Video') !!}
            {!! Form::text('video', "http://youtube.com/watch?v=" . $user->video, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
@endsection
