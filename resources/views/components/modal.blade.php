<div
    x-data="{ show: @entangle($attributes->wire('model')).defer }"
    x-show="show"
    x-on:keydown.escape.window="show = false"
    class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40"
>
    <div class="fixed inset-0 transform" x-on:click="show = false">
        <div x-show="show" class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div x-show="show" class="bg-white rounded-lg overflow-hidden transform sm:w-full sm:mx-auto max-w-2xl ">
        {{--  {{ $slot }}  --}}
   
{{--  FORM  --}}


    
    <div class="  bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative px-4 py-10 bg-white sm:rounded-1xl sm:p-20">
            <h1 class="text-black text-center text-lg pb-10">Please ensure that all the information provided is correct before submitting</h1>
            <div class="grid sm:grid-cols-2 gap-4">
            <div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Firstname</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">lastname</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Smith">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Phone Number</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="tel" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[4]{0-9}" placeholder="876-XXX-XXXX">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Email</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="example@gmail.com">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Password</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" >
                    </div>
            </div>
            <div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Address</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Country</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <select id="country" name="country" autocomplete="country" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select>
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">TRN</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="tel" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" pattern="[3]{0-9}-[3]{0-9}-[3]{0-9}" placeholder="XXX-XXX-XXX">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Upload driver's license</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input  type="file" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                    </div>
                    <label for="" class="text-xs font-semibold px-1 text-black">Re-type Password</label>
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" >
                    </div>
            </div>

          </div>
          {{--    --}}
                    <div class="flex mt-5">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center mt-5"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <input id="checkbox-1"  type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">By ticking this checkbox, I declare that all information inputed is valid and I also
                            understand that any false information will result in my application denied.</label>
                    </div>
                    <div class="mt-10 justify-center flex items-center">
                    <a href="{{route('homepage')}}">
                        <button  class="border-2 border-black rounded-full font-bold text-black px-10 py-2 transition duration-300 ease-in-out mr-6 mt-14">Cancel</button>
                    </a>
                    <a href="">
                        <button  class="bg-green-600 rounded-full font-bold text-black px-10 py-2 transition duration-300 ease-in-out mr-6 mt-14 ">Register</button>
                    </a>
                    </div>
          {{--    --}}
        </div>
      </div>
      
  {{--    --}}
</div>
