@extends('app')

@section('title', 'About Us | '. config('app.name'))

@section('content')

<img src="{{ asset('/images/myAvatar.jpg') }}" alt="Bourgogne region">

<p>Built with &hearts; by Dina OUAHBI</p>
<p><a href="{{route('app_root')}}">Go back to the home page</a></p>

@endsection