@extends('app')

@section('title', 'About Us | '. config('app.name'))

@section('content')

<img src="{{ asset('/images/myAvatar.jpg') }}" alt="Avatar Dina" width="500" height="600" class='my-12 rounded-full shadow-md'>

<h2 class='mb-5 text-gray-700'>
    Built with
    <span class="text-rose-800">
        &hearts;
    </span>By Dina OUAHBI.
</h2>
<p>
    <a href="{{route('app_root')}}" class='text-indigo-500 
                hover:text-indigo-600 underline'>
        Go back to the home page
    </a>
</p>

@endsection