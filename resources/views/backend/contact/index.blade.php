@extends('layouts.backend.app')

@section('content')
    <h1>Contact Info</h1>
    <div class="table-responsive">
        <table class="table">
            <tr>@foreach($contact as $contactinfo)
                <th>Name:</th>
                <th>{{ $contactinfo->organisation }}</th>
            </tr>
            <tr>
                <th>Address:</th>
                <th>{{ $contactinfo->address }}</th>
            </tr>
            <tr>
                <th>Zip code and city:</th>
                <th>{{ $contactinfo->zipcodeandcity }}</th>
            </tr>
            <tr>
                <th>Email:</th>
                <th>{{ $contactinfo->email }}</th>
            </tr>
            <tr>
                <th>Phone Number:</th>
                <th>{{ $contactinfo->phonenumber }}</th>
            </tr>
        </table>
        <a href="/admin/contact/{{$contactinfo->id}}/edit" class="btn btn-info">Set Contact Info</a>
        @endforeach
    </div>
@endsection
