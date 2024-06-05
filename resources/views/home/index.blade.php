@extends('template.layout')

@section('title')
Home
@endsection

@section('content')

<h1 class="text-2xl font-bold">Selamat datang {{ auth()->user()->name }}!</h1>
<p class="mt-2 text-gray-600">This is an example dashboard using Tailwind CSS.</p>
@endsection