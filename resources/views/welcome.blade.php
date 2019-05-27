@extends('layouts.app')

@section('title', "Blog")

@section('content')

   <div class="jumbotron text-center">

        <h1>Welcome to ChatApp</h1>

        <p>Future is exciting Ready?</p>

        <p> <a href="{{ route('login') }}" class="btn btn-primary" role="button">login</a> <a href="{{ route('register') }}" class="btn btn-primary" role="button">Register</a></p>
   </div>
@endsection
