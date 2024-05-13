<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Philippines Insider</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="h-screen w-full">
    <main class="max-h-screen w-full">
        {{-- header --}}
        <x-header />

        {{-- hotel modals --}}
        <div id="hotel-1"
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
                        <img class="w-full h-auto rounded-md mb-9" src={{ url('storage/hotel-1.png') }} alt="">
                        <h3 class="text-md font-semibold font-sans">Shangri-La, Manila</h3>
                        <p class="mt-1 text-gray-800">
                        This Hotel stands as an icon of luxury and elegance within the bustling metropolis. Nestled amidst lush tropical gardens and offering breathtaking views of the city skyline and Manila Bay, this renowned hotel embodies a sanctuary of tranquility amidst the urban hustle. Boasting a harmonious blend of contemporary sophistication and timeless charm, each corner of Shangri-La Manila exudes opulence and refinement. From its meticulously designed rooms and suites adorned with plush furnishings and modern amenities to its world-class dining venues serving exquisite cuisine from around the globe, every aspect of the hotel promises an unparalleled experience in hospitality. Guests are invited to indulge in rejuvenating spa treatments, take a dip in the expansive swimming pool, or simply unwind in the serene ambiance of the landscaped gardens, offering an escape from the city's frenetic energy.

Beyond its lavish accommodations and impeccable service, it is also renowned for its commitment to sustainability and community engagement. With initiatives aimed at environmental conservation and social responsibility, the hotel strives to make a positive impact on both the local community and the planet. Through partnerships with local artisans and support for cultural preservation projects, it celebrates the rich heritage and vibrant spirit of the Philippines. Whether hosting grand events in its state-of-the-art facilities or providing a haven of luxury for discerning travelers, this continues to set the standard for excellence in hospitality, embodying the epitome of luxury living in the heart of Manila.
                        </p>
                        <div class="flex items-center justify-end gap-x-5">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        alt='Add to Wishlist' />
                                </svg>
                            </button>
                            <button class="bg-blue-700 hover:bg-blue-900 text-gray-200 px-3 py-2 rounded-md">Tour
                                now</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- 2 --}}
        <div id="hotel-2"
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
                        <img class="w-full h-auto rounded-md mb-9" src={{ url('storage/hotel-2.png') }} alt="">
                        <h3 class="text-md font-semibold font-sans">Hennan, Crystal land</h3>
                        <p class="mt-1 text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos quod
                            reprehenderit
                            adipisci natus officiis delectus tempore velit rerum porro, totam, optio vitae consequatur?
                            Ullam.
                        </p>
                        <div class="flex items-center justify-end gap-x-5">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        alt='Add to Wishlist' />
                                </svg>
                            </button>
                            <button class="bg-blue-700 hover:bg-blue-900 text-gray-200 px-3 py-2 rounded-md">Tour
                                now</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- 3 --}}
        <div id="hotel-3"
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
                        <img class="w-full h-auto rounded-md mb-9" src={{ url('storage/hotel-3.png') }} alt="">
                        <h3 class="text-md font-semibold font-sans">Conclave, Davao City</h3>
                        <p class="mt-1 text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos quod
                            reprehenderit
                            adipisci natus officiis delectus tempore velit rerum porro, totam, optio vitae consequatur?
                            Ullam.
                        </p>
                        <div class="flex items-center justify-end gap-x-5">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        alt='Add to Wishlist' />
                                </svg>
                            </button>
                            <button class="bg-blue-700 hover:bg-blue-900 text-gray-200 px-3 py-2 rounded-md">Tour
                                now</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- HOTELS --}}
        <section class="px-8 mb-5">
            <div class="feature-hotels p-3">
                <h3 class="font-sans text-[#0F294D] text-2xl font-bold mb-2">Featured Hotels</h3>
                <ul class="flex items-center gap-x-5 text-sm underline text-[#0F294D] mb-6">
                    <li><a href="#">We Price Match</a></li>
                    <li><a href="#">Hotel Booking Guarantee</a></li>
                    <li><a href="#">Hotel Stay Guarantee</a></li>
                </ul>
                <ul class="flex items-center gap-x-6 text-lg mb-6">
                    <li class=""><a href="">Luzon</a></li>
                    <li class=""><a href="">Visayas</a></li>
                    <li class=""><a href="">Mindanao</a></li>
                </ul>

                {{-- cards --}}
                <div class="grid grid-cols-4 gap-4 mb-4">
                    <div type="button" data-hs-overlay="#hotel-1"
                        class="max-w-sm h-auto flex flex-col bg-white border rounded-xl shadow-xl shadow-gray-400">
                        <img class="w-full min-h-auto  object-fit rounded-t-xl" src={{ url('storage/hotel-1.png') }}
                            alt="Image Description">
                        <div class="p-4 md:p-5 text-[#0F294D]">
                            <p class="text-md font-bold mb-2">
                                Shangri-La, Manila
                            </p>
                            <div class="flex items-center gap-x-3 ">
                                <div class="px-2 py-1 text-white bg-[#00429B] rounded-lg">4.5 <span
                                        class="text-gray-400">/ 5</span></div>
                                <p class="text-sm">320 reviews</p>
                            </div>
                            <h3 class="text-right font-semibold"><span class="text-gray-400">From </span>PHP 4,468
                            </h3>
                        </div>
                    </div>
                    <div type="button" data-hs-overlay="#hotel-2"
                        class="max-w-sm h-auto flex flex-col bg-white border rounded-xl shadow-xl shadow-gray-400">
                        <img class="w-full min-h-auto  object-fit rounded-t-xl" src={{ url('storage/hotel-2.png') }}
                            alt="Image Description">
                        <div class="p-4 md:p-5 text-[#0F294D]">
                            <p class="text-md font-bold mb-2">
                                Hennan, Crystal land
                            </p>
                            <div class="flex items-center gap-x-3 ">
                                <div class="px-2 py-1 text-white bg-[#00429B] rounded-lg">4.4 <span
                                        class="text-gray-400">/ 5</span></div>
                                <p class="text-sm">1942 reviews </p>
                            </div>
                            <h3 class="text-right font-semibold"><span class="text-gray-400">From </span>PHP 5,262
                            </h3>
                        </div>
                    </div>
                    <div type="button" data-hs-overlay="#hotel-3"
                        class="max-w-sm h-auto flex flex-col bg-white border rounded-xl shadow-xl shadow-gray-400">
                        <img class="w-full min-h-auto  object-fit rounded-t-xl" src={{ url('storage/hotel-3.png') }}
                            alt="Image Description">
                        <div class="p-4 md:p-5 text-[#0F294D]">
                            <p class="text-md font-bold mb-2">
                                Conclave, Davao City
                            </p>
                            <div class="flex items-center gap-x-3 ">
                                <div class="px-2 py-1 text-white bg-[#00429B] rounded-lg">4 <span
                                        class="text-gray-400">/ 5</span></div>
                                <p class="text-sm">43 reviews</p>
                            </div>
                            <h3 class="text-right font-semibold"><span class="text-gray-400">From </span>PHP 4,455
                            </h3>
                        </div>
                    </div>
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

    </main>


</body>

</html>
