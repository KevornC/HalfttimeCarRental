{{-- Care about people's approval and you will be their prisoner. --}}
{{-- @if($rentSearchMode==false) --}}
<div>
    <div class="flex flex-col justify-center py-1 sm:py-12">
        {{-- <div class="relative px-1 py-10 bg-red-400 sm:rounded-1xl sm:p-20"> --}}
            <h1 class="pb-10 text-lg text-center text-black">Filter your search</h1>
            <div>
              <form class=""  wire:submit.prevent="searchFilter">
               <div class="flex justify-center"> 
            <div class="flex flex-col-2">
            <div class="mr-5">
                <label for="" class="px-1 text-xs font-semibold text-black">Model</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input wire:model="mod"  type="text" placeholder="Model" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500">
                </div>
                <label for="" class="px-1 text-xs font-semibold text-black">Seating capacity</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <select  wire:model="seat" class="text-gray-400 w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500">
                        <option>Choose one</option>
                        <option value="5">5</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                      </select>
                </div>
            </div>
             <div>
                    <label for="" class="px-1 text-xs font-semibold text-black">Driver type</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <select  wire:model="dType" class="text-gray-400 w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500">
                            <option>Choose one</option>
                            <option value="Right hand">Right hand</option>
                            <option value="Left hand">Left Hand</option>
                            
                          </select>
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-black">Colour</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input type="text" wire:model="colour" placeholder="colour" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-indigo-500">
                    </div>
            </div>

          </div>
               </div> 
         
                    <div class="flex justify-center">
                        <button type="reset"  class="px-10 py-2 mr-6 font-bold text-white transition duration-300 ease-in-out bg-red-400 hover:bg-red-600  rounded-sm mt-14 ">Clear</button>
                        <button type="submit"  class="px-10 py-2 mr-6 font-bold text-white transition duration-300 ease-in-out bg-green-600 hover:bg-green-700 rounded-sm mt-14 ">Submit</button>
                    <div class="flex items-center justify-center mt-10">
                   
        </div>
      </div>
      </form>
            </div>
   {{-- @endif    --}}
{{-- REsult --}}
<div class="mt-20 overflow-hidden border-b sm:rounded-lg">
  <table class="min-w-full divide-y divide-gray-200">
      <thead class="">
          <tr>
            <th  colspan="5" scope="col" class="navcolor px-6 py-3 font-bold tracking-wider text-center text-gray-500 uppercase text-md">
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
          @forelse ($searchResults as $result)
          
     
              <?php
              $imageName=$result['image'];
              ?>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 w-16 h-16">
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
                  
                    </td>
                </tr>
                @empty
                <tr>
              <td class="px-6 py-4 whitespace-nowrap">No Available Records</td>
            </tr>
                @endforelse
      </tbody>
  </table>
</div>
    </div>
</div>
