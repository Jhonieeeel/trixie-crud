<x-app-layout>
    <section style="background-image: url('storage/background-1.svg')" class="h-screen w-full bg-cover bg-no-repeat px-8">
        {{-- navbar --}}
        <div class="flex justify-between items-center px-6 py-4">
            <a href={{ route('dashboard') }} class="text-3xl text-white font-bold">Philippine Star </a>
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
                <li>Home</li>
                <li>Hotels</li>
                <li>Diving and Dive Sites</li>
                <li>Festivals and Fiestas</li>
                <li>Myths and Folktores</li>
                <li>Home Business</li>
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

    {{-- hotel modals --}}

    {{-- 1 --}}
    @foreach ($hotels as $hotel)
        <div id="hotel-{{ $hotel->id }}"
            class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
            <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto ">
                    <div class="flex justify-between items-center py-3 px-4 border-b">
                        <span></span>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-basic-modal">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 overflow-y-auto ">
                        <img class="w-full h-auto rounded-md mb-9" src={{ url($hotel->image) }} alt="">
                        <h3 class="text-md font-semibold font-sans">{{ $hotel->hotel_name }}</h3>
                        <p class="mt-1 text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos quod
                            reprehenderit adipisci natus officiis delectus tempore velit rerum porro, totam, optio vitae
                            consequatur? Ullam.
                        </p>
                        <div class="flex items-center justify-end gap-x-5">
                            <form action="{{ route('wishlist.store') }}" method="post">
                                @csrf

                                <input type="text" value={{ $hotel->id }} name="hotel_id" id="hotel_id" hidden>
                                <button class="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                            alt='Add to Wishlist' />
                                    </svg>
                                </button>
                            </form>
                            <button  data-hs-overlay="#hotel-modal-{{ $hotel->id }}"  
                                class="bg-blue-700 hover:bg-blue-900 text-gray-200 px-3 py-2 rounded-md">Tour
                                now</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="hotel-modal-{{ $hotel->id }}"  
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto ">
                    <div class="flex justify-between items-center py-3 px-4 border-b ">
                        <h1 class="text-lg font-bold">{{ $hotel->hotel_name }}</h1>
                        <h3 class="font-semibold text-gray-800">
                            Available Transportation
                        </h3>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hotel-modal-{{ $hotel->id }}"  data-hs-overlay-close="">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 overflow-y-auto">    

                        <h5 class="text-lg">Available Ports/Terminals</h5>
                        <div class="mt-5 grid grid-cols-2 gap-6">  
                            <div>
                                <h5 class="text-sm">From Luzon</h5>
                                <ul class="list-disc list-inside text-gray-800 text-sm">
                                    <li>2GO Vessels</li>
                                    <li>Philippine Airlines</li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="text-sm">From Visayas</h5>
                                <ul class="list-disc list-inside text-gray-800 text-sm">
                                    <li>2GO Vessels</li>
                                    <li>Philippine Airlines</li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="text-sm">From Mindanao</h5>
                                <ul class="list-disc list-inside text-gray-800 text-sm">
                                    <li>2GO Vessels</li>
                                    <li>Go Mindanao</li>
                                    <li>Cebu Pacific Airline</li>
                                    <li>Philippine Airline</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t ">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hotel-modal-{{ $hotel->id }}">
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- 2 --}}


    {{-- HOTELS --}}
    <section class="px-8 mb-5">
        <div class="feature-hotels p-3">
            <h3 class="font-sans text-[#0F294D] text-2xl font-bold mb-2">Featured Hotels</h3>
            <ul class="flex items-center gap-x-5 text-sm underline text-[#0F294D] mb-6">
                <li><a href="#">We Price Match</a></li>
                <li><a href="#">Hotel Booking Guarantee</a></li>
                <li><a href="#">Hotel Stay Guarantee</a></li>
            </ul>
            {{-- @if (is_null($user->state)) --}}
            <h3 class="text-md text-gray-700">Current Location: <span
                    class="font-semibold capitalize">{{ $user->state ?? 'Not updated' }}</span></h3>
            <form method="post" action="{{ route('dashboard.update') }}" class="mt-6 space-y-3">
                @csrf
                @method('patch')

                <select name="state" id="state" class="px-2 py-1">
                    <option value="luzon" {{ $user->state === 'luzon' ? 'selected' : '' }}>Luzon</option>
                    <option value="visayas" {{ $user->state === 'visayas' ? 'selected' : '' }}>Visayas</option>
                    <option value="mindanao" {{ $user->state === 'mindanao' ? 'selected' : '' }}>Mindanao</option>
                </select>
                <button class="text-xs px-2 py-1" type="submit">Save</button>
            </form>
            {{-- @endif --}}
            <ul class="flex items-center gap-x-6 text-lg mt-6 mb-6">
                @if ($user->state === 'luzon')
                    <li class="bg-blue-700 text-md rounded-md text-white px-2 py-1"><a href="">Luzon</a></li>
                    <li class=""><a href="">Visayas</a></li>
                    <li class=""><a href="">Mindanao</a></li>
                @elseif ($user->state === 'visayas')
                    <li class=""><a href="">Luzon</a></li>
                    <li class="bg-blue-700 text-md rounded-md text-white px-2 py-1"><a href="">Visayas</a></li>
                    <li class=""><a href="">Mindanao</a></li>
                @elseif ($user->state === 'mindanao')
                    <li class=""><a href="">Luzon</a></li>
                    <li class=""><a href="">Visayas</a></li>
                    <li class="bg-blue-700 text-md rounded-md text-white px-2 py-1"><a href="">Mindanao</a>
                    </li>
                @else
                    <li class=""><a href="">Luzon</a></li>
                    <li class=""><a href="">Visayas</a></li>
                    <li class=""><a href="">Mindanao</a></li>
                @endif
            </ul>

            {{-- cards --}}
            <div class="grid grid-cols-4 gap-4 mb-4">
                @foreach ($hotels as $hotel)
                    <div type="button" data-hs-overlay="#hotel-{{ $hotel->id }}"
                        class="max-w-sm h-auto flex flex-col bg-white border rounded-xl shadow-xl shadow-gray-400">
                        <img class="w-full min-h-auto  object-fit rounded-t-xl" src={{ url($hotel->image) }}
                            alt="Image Description">
                        <div class="p-4 md:p-5 text-[#0F294D]">
                            <p class="text-md font-bold mb-2">
                                {{ $hotel->hotel_name }}
                            </p>
                            <div class="flex items-center gap-x-3 ">
                                <div class="px-2 py-1 text-white bg-[#00429B] rounded-lg">{{ $hotel->ratings }} <span
                                        class="text-gray-400">/ 5</span></div>
                                <p class="text-sm">{{ $hotel->reviews }} reviews</p>
                            </div>
                            <h3 class="text-right font-semibold"><span class="text-gray-400">From </span>PHP
                                {{ $hotel->price }}</h3>
                        </div>
                    </div>
                @endforeach

                <a href="#"
                    class="bg-no-repeat bg-cover max-w-sm h-auto flex flex-col justify-end bg-white border rounded-xl shadow-xl shadow-gray-400"
                    style="background-image:  url('storage/discover-1.png')  ">

                    <div class="p-4 md:p-5 text-gray-200">
                        <p class="text-md font-bold mb-2">
                            Discover great deals on hotels around the philippines
                        </p>
                        <button class="bg-blue-700 mx-1 w-full">Go Now</button>
                    </div>
                </a>

            </div>
        </div>
    </section>

    {{-- TRANSPO --}}
    <section class="px-8 mb-5">
        <div class="feature-hotels p-3">
            <h3 class="font-sans text-[#0F294D] text-2xl font-bold mb-2">Recommended Transpo</h3>
            <ul class="flex items-center gap-x-5 text-sm underline text-[#0F294D] mb-6">
                <li><a href="#">2GO Travel</a></li>
                <li><a href="#">Bachelor Express</a></li>
                <li><a href="#">Go Mindanao</a></li>
            </ul>
            <ul class="flex items-center gap-x-6 text-lg mb-6">
                <li class=""><a href="">Manila</a></li>
                <li class=""><a href="">Leyte</a></li>
            </ul>

            {{-- cards --}}
            <div class="grid grid-cols-4 gap-4 mb-4">
                <a href="#"
                    class="max-w-sm h-auto flex flex-col bg-white border rounded-xl shadow-xl shadow-gray-400">
                    <img class="w-full min-h-auto  object-fit rounded-t-xl" src={{ url('storage/transpo-1.png') }}
                        alt="Image Description">
                    <div class="p-4 md:p-5 text-[#0F294D]">
                        <p class="text-md font-bold mb-2">
                            2GO Vessels
                        </p>

                        <h3 class="font-semibold"><span class="text-gray-400">Min fare </span>PHP 2,519</h3>
                    </div>
                </a>
                <a href="#"
                    class="max-w-sm h-auto flex flex-col bg-white border rounded-xl shadow-xl shadow-gray-400">
                    <img class="w-full min-h-auto  object-fit rounded-t-xl" src={{ url('storage/transpo-2.png') }}
                        alt="Image Description">
                    <div class="p-4 md:p-5 text-[#0F294D]">
                        <p class="text-md font-bold mb-2">
                            Philippine Airlines
                        </p>

                        <h3 class="font-semibold"><span class="text-gray-400">Min fare </span>PHP 1,171.00</h3>
                    </div>
                </a>
                <a href="#"
                    class="max-w-sm h-auto flex flex-col bg-white border rounded-xl shadow-xl shadow-gray-400">
                    <img class="w-full min-h-auto  object-fit rounded-t-xl" src={{ url('storage/tranpo-3.png') }}
                        alt="Image Description">
                    <div class="p-4 md:p-5 text-[#0F294D]">
                        <p class="text-md font-bold mb-2">
                            Go Mindanao
                        </p>

                        <h3 class="font-semibold"><span class="text-gray-400">Min fare </span>PHP 300.00</h3>
                    </div>
                </a>
                <a href="#"
                    class="bg-no-repeat bg-cover max-w-sm h-auto flex flex-col justify-end bg-white border rounded-xl shadow-xl shadow-gray-400"
                    style="background-image:  url('storage/discover-2.png')  ">

                    <div class="p-4 md:p-5 text-gray-200">
                        <p class="text-md font-bold mb-2">
                            Affordable Fare
                        </p>
                        <button class="bg-blue-700 mx-1 w-full">Go Now</button>
                    </div>
                </a>


            </div>
        </div>
    </section>

    <x-footer />
</x-app-layout>
