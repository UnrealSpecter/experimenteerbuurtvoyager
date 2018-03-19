<!-- layout -->
@extends('experimenteerbuurt-layout')
<!-- content -->
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

    {!! Form::open(['url' => '/doener', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('full_name', 'Name') !!}
            {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('company_name', 'Company Name') !!}
            {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'E-mail Address') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Password Confirmation') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone_number', 'Phone Number') !!}
            {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('video', 'Video') !!}
            {!! Form::file('video', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Aanmelden', ['class' => 'btn btn-info']) !!}
    {!! Form::close() !!}
@endsection
