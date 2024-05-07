<section style="background-image: url('storage/background-1.svg')" class="h-screen w-full bg-cover bg-no-repeat px-8">
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


