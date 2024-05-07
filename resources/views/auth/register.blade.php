 
<x-guest-layout>
    <div
    style="background-image: url('storage/background-1.svg')"
    class="h-screen w-full bg-cover bg-no-repeat"
>
    <div class="navbar flex justify-between items-center px-6 py-4">
        <h2 class="text-3xl text-white font-bold">Philippine  Star </h2>
        <ul class="flex mx-3 text-md text-white px-3 gap-3 font-lg font-semibold">
            <li>Help</li>
            <li>About Us</li>
        </ul>
    </div>
    {{-- form --}}

    {{-- register-form --}}
    <div class="form mt-12 pb-6 mx-auto max-w-xl bg-gray-100 rounded-md p-8">
        <div class="info">
            <h2 class="text-2xl text-gray-800 font-bold mb-2">Your trip starts here!</h2>
            <h3 class="text-lg text-gray-700 font-semibold mb-9">Register Now!</h3>
        </div>
        <form method="POST" action="{{ route('register') }}" class="grid grid-cols-2 gap-6">
            @csrf
            {{-- firstname --}}
            <div class="max-w-md">
                <label for="firstname" class="block text-sm font-medium mb-2 ">First Name</label>
                <input type="text" id="firstname" name="firstname" required class="py-3 px-4 block w-full border-red-700 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Trixie">
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                
            </div>
            {{-- lastname --}}
            <div class="max-w-md">
                <label for="lastname" class="block text-sm font-medium mb-2 ">Last Name</label>
                <input type="text" id="lastname" name="lastname" required class="py-3 px-4 block w-full border-gray-700 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Palautog">
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                
            </div>
            {{-- address --}}
            <div class="max-w-md">
                <label for="address" class="block text-sm font-medium mb-2 ">Country/Province</label>
                <input type="text" id="address" name="address" required class="py-3 px-4 block w-full border-gray-700 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Philippines">
                <x-input-error :messages="$errors->get('address')" class="mt-2" />

            </div>
            {{-- email address --}}
            <div class="max-w-md">
                <label for="email" class="block text-sm font-medium mb-2 ">Email Address</label>
                <input type="email" id="email" name="email" required class="py-3 px-4 block w-full border-gray-700 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="trixie@gmail.com">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
            {{-- password --}}
            <div class="max-w-md">
                <label for="password" class="block text-sm font-medium mb-2 ">Password</label>
                <input type="password" id="password" name="password" required class="py-3 px-4 block w-full border-gray-700 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none" >
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div>
            {{-- confirm password --}}
            <div class="max-w-md">
                <label for="password_confirmation" class="block text-sm font-medium mb-2 ">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" autocomplete="new-password" class="py-3 px-4 block w-full border-gray-700 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            </div>
            <div class="max-w-sm">
                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Register
                </button>
            </div>
        </form>
        <div class="w-full text-center">
            <small class="text-sm text-gray-600">Already had an account? <span class="text-gray-800 font-semibold cursor-pointer hover:underline"><a href={{ route('login') }}>Login</a></span></small>
        </div>
    </div>
</div>
</x-guest-layout>

