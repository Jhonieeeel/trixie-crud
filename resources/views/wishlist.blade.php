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
                    <a class="relative w-full h-full" href={{ route('profile.edit')}} }}>
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
    <section class="p-8 rounded-lg grid grid-cols-4 gap-6">
        @if ($count > 0)
            @foreach ($wishlistItems as $item)
                <div type="button" data-hs-overlay="#hotel-1"
                    class="max-w-sm h-auto flex flex-col bg-white border rounded-xl shadow-xl shadow-gray-400">
                    <img class="w-full min-h-auto  object-fit rounded-t-xl" src={{ url($item->hotel->image) }}
                        alt="Image Description">
                    <div class="p-4 md:p-5 text-[#0F294D]">
                        <p class="text-md font-bold mb-2">
                            {{ $item->hotel->hotel_name }}
                        </p>
                        <form action="{{ route('wishlist.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-gray-200 rounded-md px-2 py-1">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <h3 class="text-red-500 text-md font-semibold">No items yet</h3>
        @endif

    </section>


    {{-- FOOTER --}}
    <x-footer />
</x-app-layout>
