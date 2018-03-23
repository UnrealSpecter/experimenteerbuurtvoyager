@extends('layouts.backend.app')

@section('content')
    <h1>FAQ: {{$faq->name}}</h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Question:</th>
                <th>{{$faq->question}}</th>
            </tr>
            <tr>
                <th>Answer:</th>
                <th>{{$faq->answer}}</th>
            </tr>
        </table>
        <a href="/admin/faq/{{$faq->id}}/edit" class="btn btn-info">Edit</a>
        {{ Form::open(['method' => 'DELETE', 'route' => ['faq.destroy', $faq->id]]) }}
            {{ Form::hidden('id', $faq->id) }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>
@endsection
