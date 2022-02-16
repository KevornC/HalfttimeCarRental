<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
   @if($viewMode==false) 
   <div class="inline-block h-screen min-w-full py-2 mt-16 align-middle  sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
       
        <div class="mb-5 text-center"> 
          @if(session()->has('message'))
        <div class="font-medium text-red-900 bg-red-200 alert alert-success">
          {{session('message')}}
        </div>
        @endif
        </div>

          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-50">
              <tr>
                <th  colspan="7" scope="col" class="px-6 py-3 font-medium tracking-wider text-center text-gray-500 uppercase text-md">
                  Listing
                </th>
              </tr>
            </thead>
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Member ID
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Model
                </th>
               <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Pick-up
                </th>
               <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Return
                </th>
               <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Quantity
                </th>
               <th   scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                  Action
                </th>
                 {{-- <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th> --}}
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($orderListing as $order)
              <tr>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                 {{$order['member']['fname']." ".$order['member']['lname']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                 {{$order['vehicle']['name']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$order['vehicle']['model']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{date("M d Y",strtotime($order['startDate']))}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{date("M d Y",strtotime($order['endDate']))}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$order['quantity']}}
                </td>
                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                  <a href=""  wire:click.prevent="approve({{$order['id']}})" class="p-2 text-white bg-green-800 rounded-sm">
                    Approve
                  </a>
                  <a href="" wire:click.prevent="deny({{$order['id']}})" class="p-2 text-white bg-red-800 rounded-sm">Deny</a>
                </td>
                {{-- <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td> --}}
              </tr>
              @empty
              <tr>
                <td colspan="7" class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                 No orders
                </td>
              </tr>
              @endforelse
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
   @endif
</div>
