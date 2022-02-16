@extends('layouts.login')
@section('title')
    Register Account
@endsection
@section('content')
<div class="grid grid-cols-2">
    <div class="bg-cover rounded-l-lg" style="background-image: url('../image/signup.jpg')">
        <h1 class="font-bold mt-40 text-center text-5xl">Simple <span class="font-thin">and</span> Easy </h1>
        <h1 class="font-bold  text-center text-5xl">Registration Process </h1>
    </div>
    
    {{-- <div class="bg-cover rounded-l-lg" style="background-image: url('../image/signup.jpg')"> --}}
<div class="bg-gray-200">
        <livewire:live-signup />
    </div>
    
    {{-- <div class="">
        
    </div> --}}

    </div>
@endsection