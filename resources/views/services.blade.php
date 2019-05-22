@extends('layout')

@section('title', "{{config('app.name', 'Blog')}}")

@section('content')

<h1 class="title">Services</h1>

@if(count($services) > 0)

    <ul>

        @foreach($services as $service)

            <li>{{$service}}</li>

        @endforeach
        
    </ul>

@endif

@endsection