
@extends('layouts.backend.app')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Link</th>
                    <th>Date</th>
                    <th>Image</th>
                </tr>
            </thead>

            @foreach($posts as $post)

                <tr class='clickable-row' data-href="/admin/posts/{{$post->id}}">
                    <th>{{$post->title}}</th>
                    <th>{{$post->content}}</th>
                    <th>{{$post->link}}</th>
                    <th>{{$post->post_date}}</th>
                    <th>
                        @if($post->image)
                        <img src="/uploads/news/{{ $post->image }}" style="max-height: 200px;">
                        @else
                        geen afbeelding toegevoegd
                        @endif
                    </th>
                </tr>

            @endforeach

        </table>
        <a href="/admin/posts/create" class="btn btn-info">Create</a>
    </div>

    <script>
        $(document).ready(function($){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $(".clickable-row").click(function(){
                window.location = $(this).data("href");
            });

        });
    </script>
@endsection
