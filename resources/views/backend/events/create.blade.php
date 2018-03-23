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

    {!! Form::open(['url' => '/admin/events', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gift', 'Gift') !!}
            {!! Form::checkbox('gift', true, false, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('active', 'Active') !!}
            {!! Form::checkbox('active', true, false, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cost', 'Cost') !!}
            {!! Form::number('cost', null, ['min' => '0.00', 'step' => '0.01', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('event_date', 'Event Date') !!}
            {!! Form::date('event_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('event_time', 'Event Time') !!}
            {!! Form::time('event_time', '15:00', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('eventbrite_url', 'Eventbrite Link (Optional)') !!}
            {!! Form::text('eventbrite_url', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('background_image', 'Background Image') !!}
            {!! Form::file('background_image', null, ['accept' => 'image/*']) !!}
        </div>
        {!! Form::submit('Create', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
@endsection
