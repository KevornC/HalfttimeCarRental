{{-- Be like water. --}}
<div>
    <div class="py-6 sm:py-12">
        <div class="px-4 py-10 sm:rounded-1xl sm:p-20">
            <form  wire:submit.prevent='submit'>
            <h1 class="pb-5 text-lg text-center text-gray-700">Please ensure that all the information provided is correct before submitting</h1>
            <div class="flex flex-row">
            <div class="mr-5">
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Firstname</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="firs" type="text" class="py-2 pl-3 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="John" autocomplete="on">
                    </div>
                    <div>
                        @error('firs') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">lastname</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="last"  type="text" class="py-2 pl-3 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="Smith">
                    </div>
                    <div>
                         @error('last') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Phone Number</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="phon" type="tel" class="py-2 pl-3 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[4]{0-9}" placeholder="876-XXX-XXXX">
                    </div>
                
                    <div>
                        @error('phon') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Email</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="emai" type="email" class="py-2 pl-3 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="example@gmail.com">
                    </div>
                    <div>
                        @error('emai') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Gender</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <select wire:model="gender" id="country"  autocomplete="country" class="py-2 pr-16 text-gray-500 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500">
                            <option>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                    <div>
                    @error('gender') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
            </div>
            <div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Address</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="addr" type="text" class="py-2 pl-3 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="">
                    </div>
                    <div>
                        @error('addr') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Country</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <select wire:model="coun" id="country" name="country" autocomplete="country" class="py-2 pr-16 text-gray-500 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500">
                            <option>Canada</option>
                            <option>Jamaica</option>
                            <option>Mexico</option>
                            <option>United States</option>
                          </select>
                        </div>
                    <div>
                    @error('coun') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">TRN</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="trn" type="tel" class="py-2 pl-3 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[3]{0-9}" placeholder="XXX-XXX-XXX">
                    </div>
                    <div> 
                        @error('trn') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Upload driver's license</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="phot"  type="file" class="py-2 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500">
                    </div>
                    <div>
                        @error('phot') <span class="text-red-600 error">{{ $message }}</span> @enderror 
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Password</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="pass" type="password" class="py-2 pl-3 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" >
                    </div>
                    <div>
                        @error('pass') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
                    <label for="" class="px-1 text-xs font-semibold text-gray-700">Re-type Password</label>
                    <div class="">
                        <div class=""><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="rpas" type="password" class="py-2 pl-3 pr-3 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" >
                    </div>
                    <div>
                        @error('rpas') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>
            </div>

          </div>
          {{--    --}}
                    <div class="mt-2 ">
                        <div class="mt-2 "><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                        <input wire:model="conf"   type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                        <label  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">By ticking this checkbox, I declare that all information inputed is valid and I also
                            understand that any false information will result in my application denied.</label>
                    </div>
                    <div>
                        @error('conf') <span class="text-red-600 error">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-center mt-10">
                    <div>
                        <a href="{{route('homepage')}}" class="px-10 py-2 mr-6 font-bold text-gray-700 transition duration-300 ease-in-out border-2 border-black rounded-full mt-14">
                            Cancel
                        </a>
                        <button type="submit"  class="px-10 py-2 mr-6 font-bold text-white transition duration-300 ease-in-out bg-green-600 rounded-full mt-14 ">Register</button>
                    </div>
                    </div>
                        {{--    --}}
                    </form>
        </div>
    </div>
      <div>
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

</div>
