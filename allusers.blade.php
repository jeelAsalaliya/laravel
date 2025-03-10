<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>All Users</title>

      
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
   nav .w-5{
      display: none;
   }
   </style>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="col-6">
            <h1>All Users List</h1>
            <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>
            <table class="table table-bordered table-striped">
               <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>City</th>
                  <th>View</th>
                  <th>Delete</th>
                  <th>Update</th>
               </tr>
               @foreach ($users as $id => $user)
               <tr>
                  <td>{{ $user->id }}</td>
                   <td> {{ $user->name  }}</td>
                  <td>{{ $user->email }}</td>
                  <td> {{$user->age}}</td>
                  <td>{{$user->city}}</td>
                  
                  <td><a href="{{route('view.user',$user->id)}}" class="btn btn-success btn-sm mb-3">View</a></td>
                  <td><a href="{{route('delete.user',$user->id)}}" class="btn btn-success btn-sm mb-3">Delete</a></td>
               <td><a href="{{route('update.page',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
               </tr>
               @endforeach
            </table>
         </div>
         <div class="mt-5">
         {{ $users->links() }}
         </div>
      </div>
   </div>
</body>
</html>
  


@php 
$fruits = ["one"=>'apple',"two"=>'banana',"three"=>'mango',"fourth"=>'orange'];
$boolean = true;
@endphp

@includeUnless($boolean,'pages.header',['names'=> $fruits])

<h1>
   Home: Our First Page
</h1>
<a href="{{('/blog')}}">Blog</a>

@include('pages.footer')

@includeIf('pages.content')

<a href="/About">About Page</a>
<a href="{{ route('mypost') }}">Post page</a>

{{5+2}}
<br><br>

{{"Jeel Asalaliya"}}

{!!"<h1>Jeel Asalaliya</h1>"!!}

{{-- How Are You!--}}


@php
$names = ['Jeel','harshil','bhargav','jkl'];
$user = 'jkl';
@endphp

<ul>
@foreach ($names as $n)
@if($loop->even)
<li style="color: red;">{{$n}} </li>
@elseif($loop->odd)
<li style="color: green;">{{$n}} </li>
@else
<li>{{$n}}</li>
@endif
@endforeach
</ul>


@include('pages.bout2');
@include('pages.post2');
@extends('layouts.masterlayouts');

@section('content')
<h2>Home Page</h2>
<p> dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis doloribus aliquam. Quam perspiciatis vel ducimus fugit accusantium deleniti accusamus sint. Fugit, voluptates nihil minima numquam omnis cum earum architecto.</p>    
@endsection

@push('scripts')
<script src="/example.js"></script>
@endpush

@push('style')
<link rel="stylesheet" href="css/bootstrap.css>
@endpush

@prepend('style')
<style>
   #wrapper{
   background:#f4f4f4;
}
</style>
@endprepend