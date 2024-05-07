<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Philippine Star Profile') }}
        </h2>
      
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <a class="font-semibold text-md hover:font-font-extrabold hover:text-gray-500 text-gray-800 leading-tight" href={{ route('dashboard') }}>Dashboard</a>
            @if (session('status'))
                <div 
                x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 "
                    role="alert">
                    <span class="font-bold">{{ session('status') }}</span>
                </div>
            @endif


            <div class="md:grid md:items-start md:grid-cols-2 gap-5">
                <div class="p-4 sm:p-8 bg-white border sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white border    sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
