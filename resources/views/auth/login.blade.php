<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

      
        

        <!-- Remember Me -->
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

        {{-- Login-form --}}
        <div class="form mt-12 pb-6 mx-auto max-w-xl bg-gray-100 rounded-md p-8">
            <div class="info">
                <h2 class="text-2xl text-gray-800 font-bold mb-2">Your trip starts here!</h2>
                <h3 class="text-lg text-gray-700 font-semibold mb-6">Login Now!</h3>
            </div>
            <form action="#" method="post" class="grid grid-cols-1 gap-3">
                @csrf
                <div class="max-w-lg mb-3">
                    <label for="email" class="block text-sm font-medium mb-2 ">Email Address</label>
                    <input type="email" id="email" name="email" required class="py-3 px-4 block w-full border-gray-700 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="trixie@gmail.com">
                </div>
                
                <div class="max-w-lg mb-3">
                    <label for="password" class="block text-sm font-medium mb-2 ">Password</label>
                    <input type="password" id="password" name="password" required class="py-3 px-4 block w-full border-gray-700 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none" >
                </div>
                
                <div class="max-w-md mb-3">
                    <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Login
                    </button>
                </div>
            </form>
            <div class="w-full text-center">
                <small class="text-sm text-gray-600">Dont have  an account? <span class="text-gray-800 font-semibold cursor-pointer hover:underline"><a href={{ route('register') }}>Register</a></span></small>
            </div>
        </div>
    </div>
    </form>
</x-guest-layout>
