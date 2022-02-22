@extends('layouts.adminDashboard')
@section('title')
Homepage
@endsection
@section('header')
  Administrator Dashboard  
@endsection
@section('content')
 <div class="h-screen py-2 align-middle  inline-blockmin-w-full sm:px-6 lg:px-8">
<div>
  <div class="grid grid-cols-1 mt-5 overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow md:grid-cols-3 md:divide-y-0 md:divide-x">
    <a href="{{route('viewVL')}}"><div class="px-4 py-5 sm:p-6 hover:bg-indigo-100">
      <div class="text-base font-normal text-gray-900">
        Total Vehicles
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tV']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
          </span>
        </div>
      </div>
    </div></a>

    <a href="{{route('viewOL')}}"><div class="px-4 py-5 sm:p-6 hover:bg-indigo-100">
      <div class="text-base font-normal text-gray-900">
        Rental Request
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tO']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
          </span>
        </div>
      </div>
    </div></a>

    <a href="{{route('viewML')}}"><div class="px-4 py-5 sm:p-6 hover:bg-indigo-100">
      <div class="text-base font-normal text-gray-900">
        Total Members
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tM']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
          </span>
        </div>
      </div>
    </div></a>
  </div>
</div>

<div>
  <div class="grid grid-cols-1 mt-5 overflow-hidden bg-white divide-y divide-gray-200 rounded-lg shadow md:grid-cols-3 md:divide-y-0 md:divide-x">
    <div class="px-4 py-5 sm:p-6">
      <div class="text-base font-normal text-gray-900">
        Pending
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tP']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
          </span>
        </div>
      </div>
    </div>

    <div class="px-4 py-5 sm:p-6">
      <div class="text-base font-normal text-gray-900">
        Approved
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tA']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
          </span>
        </div>
      </div>
    </div>

    <div class="px-4 py-5 sm:p-6">
      <div class="text-base font-normal text-gray-900">
       Denied
      </div>
      <div class="flex items-baseline justify-between mt-1 md:block lg:flex">
        <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
          {{$stats['tD']}}
          <span class="ml-2 text-sm font-medium text-gray-500">
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
{{--    --}}
</div>
   
    
 
  
@endsection