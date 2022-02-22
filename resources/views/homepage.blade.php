@extends('layouts.general-nav-bar')
@section('title')
homepage
@endsection
@section('content')
<!-- component -->
<!-- Hero Section -->
<div class="bg-cover"
style="background-image: url('image/hp.jpg')">
<div class="relative">
<section class="relative inset-0 min-h-screen pt-40 ">
    <div class="flex mb-40 flex-col-2">
      <div class="px-10 lg:px-32 xl:px-40">
        <h1 class="font-serif text-6xl font-semibold">
          <span class="textcolor">Fast. Easy.</span> <br />
          <span>Rental Services</span>
        </h1>
        <p class="max-w-md text-lg">Sign up and select from our best vehicle brands to suit your needs today. </p>
         {{-- Start Modal --}}
        <button class="inline-block px-10 py-3 mt-5 mr-6 text-lg font-semibold text-white transition duration-300 ease-in-out rounded-full navcolor hover:bg-green-600 hover:text-blue-dark" onclick="Livewire.emit('openModal', 'live-signup')">Register</button>
        @livewire('livewire-ui-modal')  
        {{-- End Modal --}}
        </div>
        
    </div>
  </section>
</div>
</div>


<!-- component -->
<div class="bg-cover"
style="background-image: url('image/bg1.jpg')">
<section class="flex flex-col items-center justify-center h-screen p-10 "> 
  <h1 class="mb-10 font-serif text-6xl font-semibold text-center textcolor">
    Luxury Vehicles
 </h1>
{{-- START SLIDER --}}
<div class="flex items-center justify-center w-full h-full px-4 py-24 sm:py-8">
 <div class="relative flex items-center justify-center w-full">
   <button aria-label="slide backward" class="absolute left-0 z-30 ml-10 cursor-pointer focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="prev">
     <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
     </svg>
   </button>
   <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
     <div id="slider" class="flex items-center justify-start h-full transition duration-700 ease-out lg:gap-8 md:gap-6 gap-14">
       {{-- slide image --}}
       @forelse ($homepagevehicles as $homev )
     <?php
     $imageName=$homev['image'];
     // echo $imageName;
     ?>
       <div class="relative flex flex-shrink-0 w-full pb-20 sm:w-auto">
         <img  src='{{url("../storage/carUploads/carUploads/$imageName")}}' alt="" class="object-center w-full h-60" />
         <div class="absolute w-full h-full p-6">
           <a href="{{route('showLogin')}}"><p  class="px-10 py-3 mt-20 mr-6 text-lg font-semibold text-center text-white transition duration-300 ease-in-out bg-blue-600 rounded-full opacity-70 hover:bg-green-800 hover:text-blue-dark">Book Now</p></a>	
            <div class="mt-10">
             <h3 class="pt-10 pb-2 text-xl font-semibold leading-5 text-center text-gray-700 lg:text-2xl lg:leading-6 dark:text-gray-900">{{$homev['name']}} <span class="text-sm"> {{" (".$homev['model'].")"}}</span></h3>
           </div>
           <h3 class="text-lg font-semibold leading-5 text-center text-gray-700 lg:text-2xl lg:leading-6 dark:text-gray-900">${{number_format($homev['rentalCost'],2)}} per day</h3>
           <h3 class="text-lg font-semibold leading-5 text-center text-gray-700 lg:text-2xl lg:leading-6 dark:text-gray-900"></h3>
            </div>
       </div>
       @empty
       {{-- slide image --}}
       <div class="relative flex flex-shrink-0 w-full sm:w-auto">
         <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full" />
         <div class="absolute w-full h-full p-6 bg-gray-800 bg-opacity-30">
           <h2 class="text-base leading-4 text-white lg:text-xl lg:leading-5 dark:text-gray-900">Catalog 1</h2>
           <div class="flex items-end h-full pb-6">
             <h3 class="text-xl font-semibold leading-5 text-white lg:text-2xl lg:leading-6 dark:text-gray-900">Minimal Interior</h3>
           </div>
         </div>
       </div>
    @endforelse
     
     </div>
   </div>
   <button aria-label="slide forward" class="absolute right-0 z-30 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
     <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
     </svg>
   </button>
 </div>
</div>
<script>
   let defaultTransform = 0;
function goNext() {
 defaultTransform = defaultTransform - 398;
 var slider = document.getElementById("slider");
 if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7)
   defaultTransform = 0;
 slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
 var slider = document.getElementById("slider");
 if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
 else defaultTransform = defaultTransform + 398;
 slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);
</script>
</section>
{{--  END SLIDER  --}}
</div>
 


@endsection


