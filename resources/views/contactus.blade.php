@extends('layouts.general-nav-bar')
@section('title')
Contact us
@endsection
@section('content')


<div class="flex items-center justify-center mt-20 ">
   <div> @if (session()->has('success'))
    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
      Success
    </div>
  <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
    {{session('success')}}
  </div>
  @endif
  </div>
  </div>
<div class="flex items-center justify-center mt-20 ">
{{-- <div class="container min-h-screen "> --}}
<div class="pt-20 pb-20 navcolor ">
    <div class="px-20 py-4 text-center">
    <h1 class="text-5xl text-white">Get in Touch</h1>
    <p class="text-xl text-white">We love to hear from our customers</p>
    <hr class="mt-6">
    </div>
</div>
    <div class="">
        <img src="{{url('image/cstserv.jpg')}}" width="400" height="200">
    </div>
{{-- </div>   --}}
</div>


<div class="flex flex-col justify-center py-6 sm:py-12">
    <div class="relative px-4 py-10 bg-white sm:rounded-1xl sm:p-20">
      <div class="grid gap-4 sm:grid-cols-2">
        <div>
            <h1 class="text-5xl text-black">Contact us</h1>
            <p class="mb-10 text-xl text-black">Drop us a line and we will get back to you as quickly as possible.</p>
            <form action="{{route('Oncontact')}}" method="POST">
                @csrf
                <label for="" class="px-1 text-xs font-semibold text-black">Name</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="text" name="fullname" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="John Brown">
                </div>
                <div>
                    @error('fullname')
                    <span class="text-red-600 error">{{ $message }}</span>
                    @enderror
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Email</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="email" name="email" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" placeholder="example@gmail.com">
                </div>
                <div>
                    @error('email')
                    <span class="text-red-600 error">{{ $message }}</span>
                    @enderror
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Phone Number</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="tel" name="contact" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[4]{0-9}" placeholder="876-XXX-XXXX">
                </div>
                <div>
                    @error('contact')
                    <span class="text-red-600 error">{{ $message }}</span>
                    @enderror
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Message</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <textarea name="message" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none resize-none focus:border-indigo-500" placeholder="Tell what’s on your mind."></textarea>
                </div>
                <div>
                    @error('message')
                    <span class="text-red-600 error">{{ $message }}</span>
                    @enderror
                </div>
                    <button type="submit"  class="px-10 py-2 mr-6 font-bold text-black transition duration-300 ease-in-out bg-blue-500 rounded-full navcolor mt-14">Send </button>
            </form>
        </div>
        {{-- <div class="">
          <p class="font-bold text-gray-500 rounded-full bg-gray-50 " style="height: 50px; width: 50px;">or</p>
        </div> --}}
        <div>
            <b><h1 class="text-2xl text-black">Byphone</h1></b>
            <p class="text-xl text-black">Whether you need help with an order, having trouble with your account, or have questions about a particular vehicle Half Time Rental Customer Service is here for you 24 hours a day.</p>
            <p class="text-xl text-black">1-876-238-2477</p>
    
            <b><h1 class="mt-10 text-2xl text-black">Want to join our team?</h1></b>
            <p class="text-xl text-black">Are you a vehicle owner who is interested in featuring your vehicle for rent on our website? If so, contact Half Time Rental for details.</p>
            <p class="text-xl text-black">halfttime_rental@gmail.com</p>
    
            <b><h1 class="mt-10 text-2xl text-black">Press inquiries</h1></b>
            <p class="text-xl text-black">Please forward all media requests to the Half Time Rental Public Relations Department </p>
            <h1 class="text-xl text-black">halftime_pr@gmail.com</h1>
        </div>
      </div>
    </div>
  </div>
@endsection