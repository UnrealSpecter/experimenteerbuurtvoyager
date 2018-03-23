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

    {!! Form::model($post, ['method' => 'PUT', 'route' => ['posts.update', $post->id], 'enctype' => 'multipart/form-data']) !!}
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
            {!! Form::label('post_date', 'Post Date') !!}
            {!! Form::date('post_date', null, ['class' => 'form-control']) !!}
        </div>
        @if($post->image)
        <img style="max-height: 200px;" class="img-responsive" src="/uploads/news/{{ $post->image }}">
        @endif
        <div class="form-group">
            {!! Form::label('image', 'Image') !!}
            {!! Form::file('image', null, ['accept' => 'image/*']) !!}
        </div>
        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
@endsection
