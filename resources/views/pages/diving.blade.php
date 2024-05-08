<x-app-layout>
    <section style="background-image: url('storage/background-1.svg')" class="h-screen w-full bg-cover bg-no-repeat px-8">
        {{-- navbar --}}
        <div class="flex justify-between items-center px-6 py-4">
            <div class="flex items-center gap-x-8">
                <a href={{ route('dashboard') }} class="text-3xl text-white font-bold">Philippine Star </a>
                <form action={{ route('dashboard') }} method="GET" class="flex items-center gap-x-3">
                    <input type="text" name="search" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="search">
                    <button type="submit" class="rounded-md px-3 py-1 bg-blue-500 text-white text-sm">Search</button>
                </form>
            </div>
            <div class="nav-links flex ">

                <ul class="flex items-center mx-3 text-md text-white px-3 gap-x-10 font-lg font-semibold">
                    <li>
                        <a class="relative w-full h-full" href={{ route('wishlist') }}>
                            Wishlist
                            <span
                                class="absolute top-0 right-[-17px] text-center bg-red-500 rounded-full h-4 w-4 m-auto text-xs">{{ $wishlistItems->count() }}</span>
                    </a>

                    </li>
                    <li>
                        <a class="relative w-full h-full" href={{ route('profile.edit') }} }}>
                            My Profile
                        </a>

                    </li>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link
                            class="bg-white px-3 py-1 text-gray-700 rounded-md cursor-pointer hover:bg-blue-600 hover:text-gray-300"
                            :href="route('logout')"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>

                    </form>

                </ul>
            </div>
        </div>

        {{-- center navs --}}
        <div class="center-links w-full mt-44">
            <img class="mx-auto" class="w-44 h-44" src={{ url('storage/ytsh.svg') }} alt="">
            <ul class="flex justify-center my-6 text-white font-semibold text-lg items-center gap-x-10">
                <li><a href={{ route('hotels-dashboard')}}>Home</a></li>
                <li><a href={{ route('hotels-dashboard')}}>Hotels</a></li>
                <li><a href={{ route('diving-dashboard')}}>Diving and Dive Sites</a></li>
                <li><a href={{ route('festivals-dashboard')}}>Festivals and Fiestas</a></li>
                <li><a href={{ route('myths-dashboard')}}>Myths and Folktores</a></li>
                <li><a href={{ route('business-dashboard')}}>Home Business</a></li>
            </ul>
        </div>

    </section>
    <section class="p-8 rounded-lg">
        <div class="grid grid-cols-3 gap-5">
            {{-- card carousel here --}}
            <div class="max-w-md">
                <img src={{ url('storage/img-1.png') }} alt="" class="rounded-lg w-full object-cover">
            </div>
            <div class="max-w-md">
                <img src={{ url('storage/img-2.png') }} alt="" class="rounded-lg w-full object-cover">
            </div>
            <div class="max-w-md">
                <img src={{ url('storage/img-3.png') }} alt="" class="rounded-lg w-full object-cover">
            </div>
        </div>
    </section>

</x-app-layout>