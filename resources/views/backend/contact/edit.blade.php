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

@foreach($contact as $contactinfo)

    {!! Form::model($contactinfo,['method' => 'PUT', 'route' => ['contact.update', $contactinfo->id], 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('organisation', 'Organisation Name') !!}
            {!! Form::text('organisation', null,  ['class' => 'form-control', 'value' => ""]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Address') !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('zipcodeandcity', 'Zip Code and City') !!}
            {!! Form::text('zipcodeandcity', null,  ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null,  ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phonenumber', 'Phone Number') !!}
            {!! Form::text('phonenumber', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
  @endforeach
    {!! Form::close() !!}
@endsection
