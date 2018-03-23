@extends('layouts.backend.app')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Company Name</th>
                    <th>E-mail</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            @foreach($users as $user)
                <tr class='clickable-row' data-href="/admin/users/{{$user->id}}">
                    <th>{{$user->full_name}}</th>
                    <th>{{$user->company_name}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->phone_number}}</th>
                </tr>
            @endforeach
        </table>
    </div>
    <a class="btn btn-primary" href="{{route('generate-pdf')}}">Generate PDF</a>

    <script>
        $(document).ready(function($){
            $(".clickable-row").click(function(){
                window.location = $(this).data("href");
            });
        });
    </script>
@endsection
