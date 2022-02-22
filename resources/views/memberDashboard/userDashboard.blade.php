@extends('layouts.userDashboard')
@section('title')
Dashboard
@endsection
@section('header')
 Rental History  
@endsection
@section('content')
 
    <div class="inline-block min-w-full py-2 mt-16 align-middle sm:px-6 lg:px-8">
      <div class="overflow-hidden border-b border-gray-200 shadow ">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="navcolor">
            <tr>
              <th  colspan="5" scope="col" class="px-6 py-3 font-bold tracking-wider text-center text-gray-900 uppercase text-md">
                History
              </th>
            </tr>
          </thead>
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Vehicle
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                Rental Cost
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                Quantity
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                Status
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($rental as $order )
            <?php
            $imageName=$order['vehicle']['image'];
          ?>
           
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 w-16 h-16">
            <img class="w-full mt-4 rounded-md" src='{{url("storage/carUploads/carUploads/$imageName")}}' alt="carimg">
          </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-center text-gray-900">{{$order['vehicle']['name']." ("."".$order['vehicle']['model'].")"}}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-center text-gray-900">${{number_format($order['vehicle']['rentalCost'],2)}}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-center text-gray-900">{{$order['quantity']}}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-center text-gray-900">{{$order['status']}}</div>
              </td>
               
            </tr>
            @empty
            <td colspan="5" class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-center text-gray-700">No history found.</div>
            </td>
            @endforelse
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
 
  
@endsection
