@extends('app')

@section('title', 'Hello city')

@section('content')

<h1>HELLO FROM DIJON </h1>
<p>it's currently {{date("F j, Y, g:i a")}}</p>

@endsection
