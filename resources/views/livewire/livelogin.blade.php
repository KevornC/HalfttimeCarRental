<div>
 

	{{-- <div class=" "> --}}
	<div class="grid grid-cols-2 h-screen bg-gray-200">
		<div class="rounded bg-cover h-full"  style="background-image: url('../image/login.png')">
			
		</div>
		<div class="mt-10 ">
			<h3 class="pt-10 text-2xl text-center font-bold">Login</h3>
			<h3 class="mt-5 text-sm text-center">Don't have an account? <span class="text-blue-700 font-bold"><a href="{{route('showRegister')}}">Sign Up</a></span></h3>
			<form wire:submit.prevent='submit' class="px-40 pt-6 pb-8 rounded">
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
						Email
					</label>
					<input
						class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						type="text"
						placeholder=""
						wire:model="email"
					/>
					@error('email') <span class="error text-red-600">{{ $message }}</span> @enderror

				</div>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
						Password
					</label>
					<input
						class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
						type="password"
						wire:model="password"
					/>
					@error('password') <span class="error text-red-600">{{ $message }}</span> @enderror

				</div>
				<div class="mb-4">
					<input class="mr-2 leading-tight" type="checkbox" id="checkbox_id" />
					<label class="text-sm" for="checkbox_id">
						Remember Me
					</label>
				</div>
				<div class="mb-6 text-center">
					<button
						class="w-full px-4 py-2 font-bold text-white navcolor rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
						type="submit"
					>
						Log In
					</button>
				</div>
				
			</form>
		
		</div>
	</div>
{{-- </div> --}}

</div>