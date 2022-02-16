@extends('layouts.userDashboard')
@section('title')
Profile
@endsection
@section('header')
 Profile 
@endsection
@section('content')
 

{{--  FORM  --}}


<div class="flex flex-col justify-center bg-white ">
    <div class="relative px-4 py-10 bg-white sm:rounded-1xl sm:p-20">
            <?php
                $photo=$profileInfo['photo'];
                // $photo=str_replace('"',"",$photo);
            ?>     
            
            <div class="">
                <div class="flex-shrink-0 w-16 h-16">
                    {{-- {{dd($photo)}} --}}
                    <img class="w-16 h-16 rounded-md" src='{{url("storage/carUploads/docUploads/$photo")}}' alt="profileimage">
                    {{-- <img class="w-16 h-16 rounded-md" src='{{url("storage\carUploads\docUploads\aacstserv.jpg")}}' alt="profileimage"> --}}
                </div>
            </div>
        
        <div class="grid gap-4 sm:grid-cols-2">
           
          <div> 
                <label for="" class="px-1 text-xs font-semibold text-black">Firstname</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="text" name="firstname" value="{{$profileInfo['fname']}}" readonly class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="John">
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Lastname</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="text" name="lastname" value="{{$profileInfo['lname']}}" readonly class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="Smith">
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Gender</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="text" name="gender" value="{{$profileInfo['gender']}}" readonly class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="Smith">
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Email</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="email" name="email" value="{{$profileInfo['email']}}" readonly class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="example@gmail.com">
                </div>
        </div>
        <div>
                <label for="" class="px-1 text-xs font-semibold text-black">Phone Number</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="tel" name="tel" value="{{$profileInfo['phone']}}" readonly class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[4]{0-9}" placeholder="876-XXX-XXXX">
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Address</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="text" name="address" value="{{$profileInfo['address']}}" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="22 God Street">
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Country</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="text" name="country" value="{{$profileInfo['country']}}" readonly class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[3]{0-9}" placeholder="XXX-XXX-XXX">
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">TRN</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="tel" name="trn" value="{{$profileInfo['trn']}}" readonly class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[3]{0-9}" placeholder="XXX-XXX-XXX">
                </div>
               {{--  <label for="" class="px-1 text-xs font-semibold text-black">Upload driver's license</label>
                 <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input  type="file" name="image" value="{{$profileInfo['image']}}" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500">
                </div>  --}}
        </div>

      </div>
      {{--    --}}
                <div class="flex items-center justify-center mt-10">
                <a href="{{route('profileEdit')}}">
                    <button type="submit" class="px-10 py-2 mr-6 font-bold text-black transition duration-300 ease-in-out bg-green-600 rounded-sm mt-14 ">Edit Profile</button>
                </a>
                </div>
      {{--    --}}
    </div>
  </div>
  
 

@endsection