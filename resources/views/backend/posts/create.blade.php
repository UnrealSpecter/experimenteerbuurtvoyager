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

    {!! Form::open(['url' => '/admin/posts', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Content') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('link', 'Link') !!}
            {!! Form::text('link', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('post_date', 'News Date') !!}
            {!! Form::date('post_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Image') !!}
            {!! Form::file('image', null, ['accept' => 'image/*']) !!}
        </div>
        {!! Form::submit('Create', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
@endsection
