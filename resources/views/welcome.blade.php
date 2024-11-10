<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Welcome to DC')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Welcome to Laravel Class</h1>
    <p class="text-gray-600 mb-6">Click on a day to see the details</p>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($days as $day)
            <a href="{{ route('class.day', ['day' => $day]) }}" class="block bg-blue-500 text-white text-center p-4 rounded-lg hover:bg-blue-600 transition duration-200">
                Day {{ $day }}
            </a>
        @endforeach
    </div>
</div>
@endsection
