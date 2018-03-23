@extends('layouts.backend.app')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
            </thead>
            @foreach($faqs as $faq)
                <tr class='clickable-row' data-href="/admin/faq/{{$faq->id}}">
                    <th>{{$faq->question}}</th>
                    <th>{{$faq->answer}}</th>
                </tr>
            @endforeach
        </table>
        <a href="/admin/faq/create" class="btn btn-info">Create</a>
    </div>

    <script>
        $(document).ready(function($){
            $(".clickable-row").click(function(){
                window.location = $(this).data("href");
            });
        });
    </script>
@endsection
