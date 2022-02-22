@extends('layouts.userDashboard')
@section('title')
Homepage
@endsection
@section('header')
Vehicle Details 
@endsection
@section('content')


<div class="bg-white">
  <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
    <!-- Product details -->
    <div class="lg:max-w-lg lg:self-end">
      {{--  <nav aria-label="Breadcrumb">
        <ol role="list" class="flex items-center space-x-2">
          <li>
            <div class="flex items-center text-sm">
              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">
                
              </a>

              <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true" class="flex-shrink-0 w-5 h-5 ml-2 text-gray-300">
                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
              </svg>
            </div>
          </li>

          <li>
            <div class="flex items-center text-sm">
              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">
                Bags
              </a>
            </div>
          </li>
        </ol>
      </nav>  --}}

      <div class="mt-4">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{$vDetails['name']." ".$vDetails['model']}}</h1>
      </div>

      <section aria-labelledby="information-heading" class="mt-4">
        <h2 id="information-heading" class="sr-only">Product information</h2>

        <div class="flex items-center">
          <p class="text-lg text-gray-900 sm:text-xl">${{number_format($vDetails['rentalCost'],2)}} per day</p>
        </div>

        <div class="mt-4 space-y-6">
          {{--  <p class="text-base text-gray-500">Don&#039;t compromise on snack-carrying capacity with this lightweight and spacious bag. The drawstring top keeps all your favorite chips, crisps, fries, biscuits, crackers, and cookies secure.</p>  --}}
        </div>

        <div class="flex items-center mt-6">
          <!-- Heroicon name: solid/check -->
          <svg class="flex-shrink-0 w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
          <p class="ml-2 text-gray-500 text -sm">Available</p>
        </div>
      </section>
    </div>
    
    <!-- Product image -->
    <?php
      $imageName=$vDetails['image'];
    // echo $imageName;
    ?>
    <div class="mt-10 lg:mt-0 lg:col-start-2 lg:row-span-2 lg:self-center">
      <div class="overflow-hidden rounded-lg aspect-w-1 aspect-h-1">
        <img src='{{url("storage/carUploads/carUploads/$imageName")}}' alt="Car Image" class="object-cover object-center w-full h-full">
      </div>
    </div>

    <!-- Product form -->
    <div class="mt-10 lg:max-w-lg lg:col-start-1 lg:row-start-2 lg:self-start">
      <section aria-labelledby="options-heading">
        <h2 id="options-heading" class="sr-only">Product options</h2>

        <form method="POST" action="{{route('vehicleRent')}}">
          @csrf
          <input type="hidden" name="vId" value="{{$vDetails['id']}}">
          <div class="sm:flex sm:justify-between">
            <!-- Size selector -->
            <fieldset>
              <legend class="block text-sm font-medium text-gray-700">
                Additional Information:
              </legend>
              <div class="grid grid-cols-3 gap-4 mt-1 sm:grid-cols-3">
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="relative block p-4 border border-gray-300 rounded-lg cursor-pointer focus:outline-none">
                  <input type="radio" name="size-choice" value="18L" class="sr-only" aria-labelledby="size-choice-0-label" aria-describedby="size-choice-0-description">
                  <p id="size-choice-0-label" class="text-base font-medium text-gray-900">
                    Driver Type
                  </p>
                  <p id="size-choice-0-description" class="mt-1 text-sm text-gray-500">
                    {{$vDetails['driverType']}}
                  </p>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <div class="absolute border-2 rounded-lg pointer-events-none -inset-px" aria-hidden="true"></div>
                </label>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="relative block p-4 border border-gray-300 rounded-lg cursor-pointer focus:outline-none">
                  <input type="radio" name="size-choice" value="20L" class="sr-only" aria-labelledby="size-choice-1-label" aria-describedby="size-choice-1-description">
                  <p id="size-choice-1-label" class="text-base font-medium text-gray-900">
                    Seating Capacity
                  </p>
                  <p id="size-choice-1-description" class="mt-1 text-sm text-gray-500">
                    {{$vDetails['seatingCap']}}
                  </p>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <div class="absolute border-2 rounded-lg pointer-events-none -inset-px" aria-hidden="true"></div>
                </label>
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="relative block p-4 border border-gray-300 rounded-lg cursor-pointer focus:outline-none">
                  <input type="radio" name="size-choice" value="20L" class="sr-only" aria-labelledby="size-choice-1-label" aria-describedby="size-choice-1-description">
                  <p id="size-choice-1-label" class="text-base font-medium text-gray-900">
                    Colour
                  </p>
                  <p id="size-choice-1-description" class="mt-1 text-sm text-gray-500">
                    {{$vDetails['color']}}
                  </p>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <div class="absolute border-2 rounded-lg pointer-events-none -inset-px" aria-hidden="true"></div>
                </label>
              </div>
            </fieldset>
          </div>
          
          <div class="flex flex-row">
             <div>
              <div>
                <div>
                  <label for="" class="px-1 text-xs font-semibold text-black">Pick-up Date</label>
                </div>
                <div>
                  <input type="date" name="start" class="py-2 pl-10 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500">
                </div>
                @error('start')
                  <div class="italic text-red-700">{{ "Invalid date" }}</div>
                @enderror
              </div>
              </div>
             <div>
              <div>
                <div>
                  <label for="" class="px-1 text-xs font-semibold text-black">Return Date</label>
                </div>
                <div>
                  <input type="date" name="end" class="py-2 pl-10 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500">
                </div>
                @error('end')
                <div class="italic text-red-700">{{ "Invalid date" }}</div>
              @enderror
              </div>
            </div>
          </div>
            <label for="" class="px-1 text-xs font-semibold text-black">Quantity</label>
            <div class="">
              <input type="number" name="quantity" class="w-1/3 py-2 pl-10 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500">
            </div>
            @error('quantity')
            <div class="italic text-red-700">{{ "Please enter quantity" }}</div>
          @enderror

          <div class="mt-10">
            <a href="">
              <button type="submit" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white bg-green-800 border border-transparent rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Rent</button>
            </a>
          </div>
          <div class="mt-6 text-center">
           
          </div>
        </form>
      </section>
    </div>
  </div>
</div>


@endsection