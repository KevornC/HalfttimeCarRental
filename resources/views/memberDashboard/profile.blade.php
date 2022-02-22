@extends('layouts.userDashboard')
@section('title')
Profile
@endsection
@section('header')
 Profile 
@endsection
@section('content')
 

{{--  FORM  --}}
<!-- component -->
<div class="flex items-center h-screen w-full justify-center">
    <?php
    $photo=$profileInfo['photo'];
?>  
    <div class="max-w-lg">
        <div class="bg-white shadow-xl rounded-lg py-3">
            <div class="photo-wrapper p-2">
                <img class="w-32 h-32 rounded-full mx-auto" src='{{url("storage//$photo")}}' alt="License">
            </div>
            <div class="p-4">
                <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{$profileInfo['fname']." ".$profileInfo['lname']}}</h3>
                <div class="text-center text-gray-400 text-lg font-semibold">
                    <p>{{$profileInfo['gender']}}</p>
                </div>
                <table class="text-lg my-3">
                    <tbody><tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Address:</td>
                        <td class="px-2 py-2">{{$profileInfo['address']}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Country:</td>
                        <td class="px-2 py-2">{{$profileInfo['country']}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone:</td>
                        <td class="px-2 py-2">{{$profileInfo['phone']}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Email:</td>
                        <td class="px-2 py-2">{{$profileInfo['email']}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">TRN:</td>
                        <td class="px-2 py-2">{{$profileInfo['trn']}}</td>
                    </tr>
                </tbody></table>
    
                <div class="flex items-center justify-center">
                    {{-- <a class="text-lg text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">View Profile</a> --}}
                    <a href="{{route('profileEdit')}}">
                        <button type="submit" class="px-10 py-2 font-bold text-white transition duration-300 ease-in-out bg-green-600 hover:bg-green-700 rounded-sm mt-14 ">Edit Profile</button>
                    </a>
                </div>
            </div>
    
        </div>
    </div>
    
    </div>



  
 

@endsection