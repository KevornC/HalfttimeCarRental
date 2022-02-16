{{-- <div>
    {{-- Do your work, then step back. --}}
    
    <div class="inline-block h-screen min-w-full py-2 mt-16 align-middle  sm:px-6 lg:px-8">
        {{-- Start Modal --}}
        <button class="p-2 text-white bg-blue-700 rounded-sm " onclick="Livewire.emit('openModal', 'add-vehicle')">Add Vehicle</button>
        @livewire('livewire-ui-modal')  
        {{-- End Modal --}}
        @if($viewMode==false)
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
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
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Action
                    </th>
                    {{-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Role
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th> --}}
                </tr>
            </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                      @forelse($vehicles as $vehicle)
                      <?php
                      $imageName=$vehicle['image'];
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
                            {{$vehicle['name']}}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            {{$vehicle['model']}}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            ${{number_format($vehicle['rentalCost'],2)}}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            {{$vehicle['quantity']}}
                        </td>
                      <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                          <a href="#" wire:click.prevent="editVehicle({{$vehicle['id']}})"  class="p-2 text-white bg-green-800 rounded-sm">
                            <button type="submit">Edit</button></a>

                          <a href="#" wire:click.prevent="delete({{$vehicle['id']}})" class="p-2 text-white bg-red-800 rounded-sm">
                            <button type="submit">Remove</button></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="6" class="px-6 py-4 whitespace-nowrap">No Available Records</td>
                    </tr>
                    @endforelse
                    
                    <!-- More people... -->
                </tbody>
            </table>
           
        </div>
 
    @elseif($editMode==true)
    <div class="flex flex-col justify-center sm:py-12">
        <h1 class="pb-2 text-lg text-center text-black">Fill the information then click add to register a new vehicle</h1>
         <form wire:submit.prevent='editvehicle'>
             <div class="relative px-4 py-2 bg-white sm:rounded-1xl sm:p-20">
            <img class="w-16 h-16 rounded-md" src='{{url("storage/carUploads/carUploads/$oldImage")}}' alt="carimg">
            <div class="grid gap-4 sm:grid-cols-2">
              
           <div>
               <label for="" class="px-1 text-xs font-semibold text-black">Name</label>
               <div class="flex">
                   <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                   <input value="" type="text" wire:model='name' class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="Nissan">
                </div>
                @error('name')
                <p class="mt-4 text-xs italic text-red-500">
                    {{ $message }}
                </p>
                @enderror
                <label for="" class="px-1 text-xs font-semibold text-black">Model</label>
                <div class="flex">
                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                    <input type="text" wire:model='model' class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="Sunny">
                </div>
                @error('model')
                <p class="mt-4 text-xs italic text-red-500">
                    {{ $message }}
                </p>
                @enderror
                <label for="" class="px-1 text-xs font-semibold text-black">Rental Cost</label>
                <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input type="number" wire:model='rCost' class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="$">
                    </div>
                    @error('rCost')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                    <label for="" class="px-1 text-xs font-semibold text-black">Quantity</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input type="number" wire:model='quantity' class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="1">
                    </div>
                    @error('quantity')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
            </div>
            <div>
                    <label for="" class="px-1 text-xs font-semibold text-black">Seating Capacity</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input type="number" wire:model='sCap' class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="1">
                    </div>
                    @error('sCap')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                    <label for="" class="px-1 text-xs font-semibold text-black">Driver Type</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <select wire:model='dType' class="w-full py-2 pl-10 pr-3 -ml-10 text-gray-900 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500">
                            <option>{{"previous:". $drType}}<option>
                            <option>Choose one</option>
                            <option>Left Hand Drive</option>
                            <option>Right Hand Drive</option>
                          </select>
                    </div>
                    @error('dType')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                    <label for="" class="px-1 text-xs font-semibold text-black">Colour</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input type="text" wire:model='colour' class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="white">
                    </div>
                    @error('colour')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                    <label for="" class="px-1 text-xs font-semibold text-black">Upload image</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input  type="file" wire:model='image' class="w-full -ml-10 pl-10 pr-3 py-1.5 rounded-lg border-2 border-gray-400  outline-none focus:border-indigo-500">
                    </div>
                    @error('image')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
            </div>

          </div>
                   <a href="#" wire:click.prevent="cancel">
                    <div class="flex items-center justify-center mt-2">
                        <button type="submit" class="px-10 py-2 mr-6 font-bold text-black transition duration-300 ease-in-out border-2 border-black rounded-sm mt-14">Cancel</button>
                    </a>
                    <a href="" wire:click.prevent="update">
                        <button type="submit"  class="px-10 py-2 mr-6 font-bold text-black transition duration-300 ease-in-out bg-green-600 rounded-sm mt-14 ">Update</button>
                    </a>
                    </div>
        </div>
    </form>  
      </div>
    @endif
    </div> 
    
    