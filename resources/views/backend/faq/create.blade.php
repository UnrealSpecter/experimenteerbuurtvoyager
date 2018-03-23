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

    {!! Form::open(['url' => '/admin/faq', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('question', 'Question') !!}
            {!! Form::text('question', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('answer', 'Answer') !!}
            {!! Form::text('answer', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Create', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
@endsection
