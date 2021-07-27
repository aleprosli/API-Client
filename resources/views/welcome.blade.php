<h1>List User from Api-Dev-Training</h1>

@foreach($users as $user)
    <h4>{{ $user['name'] }}</h4>
    <h4>{{ $user['email'] }}</h4>
    <h4>{{ $user['created_at'] }}</h4>
    <br>
@endforeach