<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.7.0/dist/tailwind.min.css">
    <style>
      body {
          font-family: 'Nunito', sans-serif;
      }
      
      .navcolor{
          background: #1D4B72;
      }
      .textcolor{
          color:#1D4B72;
      }
      .bodycolor{
          /* background: rgba(112, 112, 112, 0.51); */
      }
      .cardfounder{
        background: #F1F9FF;
      }
  </style>
        @livewireStyles
</head>

<body class="font-arial">
  
  <!-- component -->
  {{-- <nav class="navcolor font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 shadow sm:items-baseline w-full">
    
    <div class="mb-2 sm:mb-0 flex flex-row justify-items-center">
      <div class="h-10 w-10 self-center mr-2 ">
        <a href="{{route('homepage')}}"> <img class="h-10 w-10 self-center rounded-full" src="{{url('image/logo.png')}}" /></a>
      </div>
    </div>
    <div class="self-center">
      <a href="{{route('homepage')}}" class="text-2xl no-underline text-white hover:text-blue-dark font-sans font-bold ">Half Time Car Rental</a><br>
       --}}

      {{-- STARTnotincludedinnav --}}
         {{-- <span class="text-xs text-grey-dark">Beautiful New Tagline</span> --}}
       {{-- ENDnotincludedinnav --}}
   
       {{-- </div> --}}
    
    {{-- <div class="sm:mb-0 flex center-items justify-center"> --}}
   
      {{-- STARTnotincludedinnav --}}
      <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
        {{-- <a href="#" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Link1</a> --}}
        <!-- <a href="/two" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">About Us</a> -->
        {{--  <a href="#" class="text-md no-underline text-white hover:text-blue-dark ml-2 px-1">Sign up</a>  --}}
        {{--  <a href="{{route('showLogin')}}" class="text-md no-underline text-white hover:text-blue-dark ml-2 px-1">Sign in</a>  --}}
        <!-- </div> -->
       {{-- ENDnotincludedinnav --}}
        
      {{-- </div> --}}
      
    {{-- </nav> --}}
    
    
    @yield('content')
    
    
  </section>
  @livewireScripts
</body>
</html>