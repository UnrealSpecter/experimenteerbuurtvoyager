@extends('layouts.backend.app')

@section('content')
    <h1>Post: {{$post->name}}</h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Title:</th>
                <th>{{$post->title}}</th>
            </tr>
            <tr>
                <th>Content:</th>
                <th>{{$post->content}}</th>
            </tr>
            <tr>
                <th>Link:</th>
                <th>{{$post->link}}</th>
            </tr>
            <tr>
                <th>Post Date:</th>
                <th>{{$post->post_date}}</th>
            </tr>
            <tr>
                <th>Image:</th>
                <th>
                    @if($post->image)
                    <img style="height: 200px;" class="img-responsive" src="/uploads/news/{{ $post->image}}">
                    @else
                    geen afbeelding toegevoegd
                    @endif
                </th>
            </tr>
        </table>
        <a href="/admin/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
        {{ Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) }}
            {{ Form::hidden('id', $post->id) }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>
@endsection
