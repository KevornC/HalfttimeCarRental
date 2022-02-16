@extends('layouts.general-nav-bar')
@section('title')
homepage
@endsection
@section('content')

{{-- REsult --}}
<div class="h-screen">
<div class="mt-20 overflow-hidden border-b sm:rounded-lg">
  <table class="min-w-full divide-y divide-gray-200">
      <thead class="">
          <tr>
            <th  colspan="5" scope="col" class="px-6 py-3 font-medium tracking-wider text-center text-gray-500 uppercase text-md">
              Search Result
            </th>
          </tr>
      </thead>
      <thead class="bg-gray-50">
          <tr>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Image
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Name
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Model
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
              Rental Cost
            </th>
            
          <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left  text-gray-500 uppercase">
              Action
          </th>
      </tr>
  </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @forelse ($searchResult as $result)
          
     
              <?php
              $imageName=$result['image'];
              // echo $imageName;
              ?>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 w-16 h-16">
                    {{-- <img class="w-16 h-16 rounded-md" src='{{url("image/a.jpg")}}' alt="carimg"> --}}
                    <img class="w-16 h-16 rounded-md" src='{{url("storage/carUploads/carUploads/$imageName")}}' alt="carimg">
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                {{$result['name']}}
              </td>
              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                {{$result['model']}}
              </td>
              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                ${{number_format($result['rentalCost'],2)}}
              </td>
              
              <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                <a href="#" wire:click.prevent="vehichDetails({{$result['id']}})"  class="p-2 text-white bg-green-800 rounded-sm">
                  <button type="submit">view more</button></a>
                  
                  {{--  <a href="#" wire:click.prevent="delete({{$result['id']}})" class="p-2 text-white bg-red-800 rounded-sm">  --}}
                    {{--  <button type="submit">Remove</button></a>  --}}
                  </td>
                </tr>
                @empty
                <tr>
              <td colspan="5" class="px-6 py-4 text-center whitespace-nowrap">No Available Records</td>
            </tr>
          
                @endforelse
              
          
          <!-- More people... -->
      </tbody>
  </table>
</div>
</div>
@endsection



