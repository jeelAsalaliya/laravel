<h1>Users Detail</h1>

@foreach($users as $id => $user)
<h3>Name : {{ $user->name }}</h3>
<h3>email : {{ $user->email }}</h3>
<h3>Age : {{$user->age}}</h3>
<h3>City : {{ $user->city}}</h3>
@endforeach