@extends('layouts.userDashboard')
@section('title')
Profile
@endsection
@section('header')
Update your profile 
@endsection
@section('content')
 

{{--  FORM  --}}


<div class="flex flex-col justify-center bg-white ">
    <div class="relative px-4 py-10 bg-white sm:rounded-1xl sm:p-20">
        @forelse ($info as $profileInfo)
        <?php
         $photo=$profileInfo['photo'];
        ?>  
        <img class="w-16 h-16 rounded-md" src='{{url("../../storage/$photo")}}' alt="License">
        
        <form action="{{route('profileUpdate')}}" method="post">
            @csrf
            
            <div class="grid gap-4 sm:grid-cols-2">
            <div>
              
            <label for="" class="px-1 text-xs font-semibold text-black">Firstname</label>
            <div class="flex">
                <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                <input type="text" name="fname" value="{{$profileInfo['fname']}}" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="John">
            </div>
            <div>
                @error('fname') <span class="text-red-600 error">{{ $message }}</span> @enderror
            </div>
            <label for="" class="px-1 text-xs font-semibold text-black">lastname</label>
            <div class="flex">
                <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                <input type="text" name="lname" value="{{$profileInfo['lname']}}"  class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="Smith">
            </div>
            <div>
                @error('lname') <span class="text-red-600 error">{{ $message }}</span> @enderror
            </div>
            <label for="" class="px-1 text-xs font-semibold text-black">Gender</label>
            <div class="flex">
                <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                <select id="gender" name="gender" value=""  class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500">
                    {{-- <option value="">Select gender</option> --}}
                    <option value="{{$profileInfo['gender']}}">Previous: {{$profileInfo['gender']}}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <label for="" class="px-1 text-xs font-semibold text-black">Email</label>
            <div class="flex">
                <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="email" name="email" value="{{$profileInfo['email']}}"  class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="example@gmail.com">
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Upload License</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input  type="file" name='photo' value=""  class="w-full -ml-10 pl-10 pr-3 py-1.5 rounded-lg border-2 border-gray-400  outline-none focus:border-indigo-500">
                    </div>
                    @error('photo')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
            </div>
            <div>
                <label for="" class="px-1 text-xs font-semibold text-black">Phone Number</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="tel" name="tel" value="{{$profileInfo['tel']}}"  class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[4]{0-9}" placeholder="876-XXX-XXXX">
                </div>
                <div>
                    @error('tel') <span class="text-red-600 error">{{ $message }}</span> @enderror
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Address</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="text" name="address" value="{{$profileInfo['add']}}"  class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="">
                </div>
                <div>
                    @error('address') <span class="text-red-600 error">{{ $message }}</span> @enderror
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Country</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <select id="country" name="coun" value=""  class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500">
                        {{-- <option value="">Select country</option> --}}
                        <option value="{{$profileInfo['coun']}}">Previous:{{$profileInfo['coun']}}</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Canada">Canada</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Mexico">Mexico</option>
                        <option value="United States">United States</option>
                    </select>
                </div>
                <div>
                    @error('coun') <span class="text-red-600 error">{{ $message }}</span> @enderror
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">TRN</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="tel" readonly name="trn" value="{{$profileInfo['trn']}}"  class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[3]{0-9}" placeholder="XXX-XXX-XXX">
                </div>
                <div>
                    @error('trn') <span class="text-red-600 error">{{ $message }}</span> @enderror
                </div>
              
            </div>
            @empty
            @endforelse
        </div>
        <div class="flex items-center justify-center mt-10">
            <a href="{{route('userDashboard')}}"  class="px-10 py-2 mr-6 font-bold text-white bg-red-400 hover:bg-red-600 transition duration-300 ease-in-out  rounded-sm mt-14">
                Cancel 
            </a>
                <input type="submit" value="Update" class="px-10 py-2 mr-6 font-bold text-white transition duration-300 ease-in-out bg-green-600 hover:bg-green-700 rounded-sm cursor-pointer mt-14 ">
                </div>
        </form>
    </div>
  </div>
  
 

@endsection