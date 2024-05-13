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
        <section style="background-image: url('storage/background-1.svg')"
            class="h-screen w-full bg-cover bg-no-repeat px-8">
            {{-- navbar --}}
            <div class="flex justify-between items-center px-6 py-4">
                <h2 class="text-3xl text-white font-bold">Philippine Star </h2>
                <div class="nav-links flex ">
                    <ul class="flex items-center mx-3 text-md text-white px-3 gap-3 font-lg font-semibold">
                        <li>Help</li>
                        <li>About Us</li>
                    </ul>
                    <ul class="flex items-center mx-3 text-md text-white px-3 gap-2 font-lg font-semibold">
                        <li class="cursor-pointer hover:text-gray-300"><a href={{ route('login') }}>Login</a></li>
                        <li
                            class="bg-white px-3 py-1 text-gray-700 rounded-md cursor-pointer hover:bg-blue-600 hover:text-gray-300">
                            <a href={{ route('register') }}>Register</a>
                        </li>
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

        {{-- HOTELS --}}
        <button type="button"
            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
            data-hs-overlay="#hs-basic-modal">
            Open modal
        </button>

        <div id="hs-basic-modal"
        class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
            <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div
                    class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                        <h3 class="font-bold text-gray-800 dark:text-white">
                            Modal title
                        </h3>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
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
                    <div class="p-4 overflow-y-auto">
                        <p class="mt-1 text-gray-800 dark:text-neutral-400">
                            This is a wider card with supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                            data-hs-overlay="#hs-basic-modal">
                            Close
                        </button>
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>

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
                    <div href="#"
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
                            <h3 class="text-right font-semibold"><span class="text-gray-400">From </span>PHP 4,468</h3>
                        </div>
                    </div>
                    <a href="#"
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
                            <h3 class="text-right font-semibold"><span class="text-gray-400">From </span>PHP 5,262</h3>
                        </div>
                    </a>
                    <a href="#"
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
                    </a>
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

        {{-- FOOTER --}}
        <footer class="w-full h-64 px-8 mb-5">
            <div class="p-3">
                <h3 class="font-sans text-[#0F294D] text-2xl font-bold mb-2">Philippine Insiders </h3>
                <div class="grid grid-cols-4 items-center gap-4">
                    <ul class="text-xs">
                        <p class="text-lg">Contact Us</p>
                        <li>User Support</li>
                        <li>Service Guarantee</li>
                        <li>More Services Info</li>
                        <li>Website</li>
                        <li>Feedback</li>
                    </ul>
                    <ul class="text-xs">
                        <p class="text-lg">About Us</p>

                        <li>Philillpineinsider.com</li>
                        <li>News</li>
                        <li>Careers</li>
                        <li>Terms & Conditions</li>
                        <li>Privacy Statement</li>
                        <li>About Trip.com Group</li>
                    </ul>
                    <ul class="text-xs">
                        <p class="text-lg">Other Services</p>

                        <li>Investor Relations</li>
                        <li>Blogger Program</li>
                        <li>List My Property</li>
                        <li>Become a Traveler</li>
                        <li>Security</li>
                    </ul>
                    <img src={{ url('storage/footer-1.png') }} alt="">
                </div>
            </div>
            <div class="mx-auto my-4">
                <small class="block text-center">Copyright &copy; 2024 philippineinsiders.com</small>
                <small class="block text-center">Site Operator: CCIS</small>
            </div>
        </footer>
    </main>

    <script src="./node_modules/preline/dist/preline.js"></script>

</body>


</html>
