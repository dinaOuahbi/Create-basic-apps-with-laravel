@extends('app')

@section('title', config('app.name'))

@section('content')

    <img src="{{ asset('/images/bourgogne.png') }}" alt="Bourgogne region" width="400" height="1000" class='mt-12 rounded shadow-md h-50'>

    <h1 class='mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600'>Hello from Dijon!</h1>
    
    <p class='mt-5 text-lg text-gray-800'>It's currently {{date("F j, Y, g:i a")}}</p>

@endsection
