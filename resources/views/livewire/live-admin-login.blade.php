<div>
 

    <!-- Container -->
   

                <div class="flex justify-center h-screen">
                    <div class="">
                    <h3 class="pt-16 text-4xl font-bold text-center">Login</h3>
                    <form wire:submit.prevent='submit' class="px-8 pt-6 border rounded shadow-md border-cool-gray-900">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                Email
                            </label>
                            <input
                                class="w-full px-8 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="username"
                                type="text"
                                placeholder=""
                                wire:model="email"
                            />
                        </div>
                        <div>
                            @error('email')<span class="text-red-600 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <input
                                class="w-full px-10 py-2 mb-3 text-sm leading-tight text-gray-700 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="password"
                                type="password"
                                wire:model="password"
                            />
                        </div>
                        <div>
                            @error('password')
                                <span class="text-red-600 error">{{ $message }}</span>
                            @enderror
                        </div>
                      
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 mb-5 font-bold text-white rounded navcolor hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Log In
                            </button>
                        </div>
                        
                    </form>
                    </div>
                </div>
            
</div>