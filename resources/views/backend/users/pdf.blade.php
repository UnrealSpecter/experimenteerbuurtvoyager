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
