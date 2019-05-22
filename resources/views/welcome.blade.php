@extends('layout')

@section('title', "{{config('app.name', 'Blog')}}")

@section('content')

<h1 class="title">Welcome to Laravel</h1>

<a class='btn btn-primary' href="/login">Login</a>
@endsection