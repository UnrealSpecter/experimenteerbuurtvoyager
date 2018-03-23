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

    {!! Form::model($faq, ['method' => 'PUT', 'route' => ['faq.update', $faq->id]]) !!}
        <div class="form-group">
            {!! Form::label('question', 'Question') !!}
            {!! Form::text('question', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('answer', 'Answer') !!}
            {!! Form::textarea('answer', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
@endsection
