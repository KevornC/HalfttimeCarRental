@extends('layouts.adminDashboard')
@section('title')
Homepage
@endsection
@section('header')
  Administrator Dashboard  
@endsection
@section('content')
 <div class="h-screen py-2 align-middle  inline-blockmin-w-full sm:px-6 lg:px-8">
        <!-- This example requires Tailwind CSS v2.0+ -->
<div>
  <div class="grid grid-cols-1 mt-5 overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow md:grid-cols-3 md:divide-y-0 md:divide-x">
    <a href="{{route('viewVL')}}"><div class="px-4 py-5 sm:p-6 hover:bg-indigo-100">
      <div class="text-base font-normal text-gray-900">
        Total Vehicles
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tVehicle']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
            {{--  from 70,946  --}}
          </span>
        </div>

        {{--  <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-up -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Increased by
          </span>
          12%
        </div>  --}}
      </div>
    </div></a>

    <a href="{{route('viewOL')}}"><div class="px-4 py-5 sm:p-6 hover:bg-indigo-100">
      <div class="text-base font-normal text-gray-900">
        Rental Request
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tRentReq']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
            {{--  from 56.14%  --}}
          </span>
        </div>

        {{--  <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-up -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Increased by
          </span>
          2.02%
        </div>  --}}
      </div>
    </div></a>

    <a href="{{route('viewML')}}"><div class="px-4 py-5 sm:p-6 hover:bg-indigo-100">
      <div class="text-base font-normal text-gray-900">
        Total Members
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tMember']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
            {{--  from 28.62%  --}}
          </span>
        </div>

        {{--  <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-down -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Decreased by
          </span>
          4.05%
        </div>  --}}
      </div>
    </div></a>
  </div>
</div>



{{--    --}}
<div>
  <div class="grid grid-cols-1 mt-5 overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow md:grid-cols-3 md:divide-y-0 md:divide-x">
    <div class="px-4 py-5 sm:p-6">
      <div class="text-base font-normal text-gray-900">
        Pending
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tPending']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
            {{--  from 70,946  --}}
          </span>
        </div>

        {{--  <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-up -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Increased by
          </span>
          12%
        </div>  --}}
      </div>
    </div>

    <div class="px-4 py-5 sm:p-6">
      <div class="text-base font-normal text-gray-900">
        Approved
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tApproved']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
            {{--  from 56.14%  --}}
          </span>
        </div>

        {{--  <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-up -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Increased by
          </span>
          2.02%
        </div>  --}}
      </div>
    </div>

    <div class="px-4 py-5 sm:p-6">
      <div class="text-base font-normal text-gray-900">
       Denied
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tDenied']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
            {{--  from 28.62%  --}}
          </span>
        </div>

        {{--  <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800 md:mt-2 lg:mt-0">
          <!-- Heroicon name: solid/arrow-sm-down -->
          <svg class="-ml-1 mr-0.5 flex-shrink-0 self-center h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">
            Decreased by
          </span>
          4.05%
        </div>  --}}
      </div>
    </div>
  </div>
</div>
{{--    --}}
</div>
   
    
 
  
@endsection