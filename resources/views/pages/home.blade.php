@extends('app')

@section('title', config('app.name'))

@section('content')

<img src="{{ asset('/images/bourgogne.png') }}" alt="Bourgogne region">

<h1>HELLO FROM DIJON </h1>
<p>it's currently {{date("F j, Y, g:i a")}}</p>

@endsection
