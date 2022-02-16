<div>
    <div class="flex flex-col justify-center sm:py-12">
        <h1 class="pb-2 text-lg text-center text-black">Fill the information then click add to register a new vehicle</h1>
        <form wire:submit.prevent='addvehicle'>
            @if ($image)
            <h1 class="pb-2 text-lg text-center text-black">
                Car Image Preview:
            </h1>
            <img width="200px;" class="ml-60" src="{{ $image->temporaryUrl() }}">
            @endif     
        <div class="relative px-4 py-2 bg-white sm:rounded-1xl sm:p-20">
            <div class="grid gap-4 sm:grid-cols-2">
            <div>
                    <label for="" class="px-1 text-xs font-semibold text-black">Name</label>
                    <div class="flex">
                        <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input type="text" wire:model='name' class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="Nissan">
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
                        <select wire:model='dType'  autocomplete="country" class="w-full py-2 pl-10 pr-3 -ml-10 text-gray-400 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500">
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
          {{--    --}}
                   
                    <div class="flex items-center justify-center mt-2">
                    <a href="{{route('viewVL')}}" class="px-10 py-2 mr-6 font-bold text-black transition duration-300 ease-in-out border-2 border-black rounded-sm mt-14">
                        Cancel
                    </a>
                    <a href="">
                        <button type="submit"  class="px-10 py-2 mr-6 font-bold text-black transition duration-300 ease-in-out bg-green-600 rounded-sm mt-14 ">Add</button>
                    </a>
                    </div>
          {{--    --}}
        </div>
    </form>
      </div>
</div>