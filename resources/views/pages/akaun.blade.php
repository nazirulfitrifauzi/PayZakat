@extends('layouts.app.auth')
@section('content')
 <x-general.header bgimg="{{ asset('img/header.jpg') }}"/>
    <!-- Content -->
       <div class="m-5">
            <div class="flex items-center justify-between p-4 mb-8 text-md font-semibold text-teal-100 bg-teal-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-teal my-6">
                <div class="flex items-center">
                    <h2 class="text-xl">Maklumat Akaun</h2>
                <span class="text-gray-300 text-xs ml-3 mt-1">164823439821</span>
                </div>
                <div x-data="{ open: false }" class="cursor-pointer">
                    <div>
                        <span class="relative inline-flex">
                            <x-heroicon-o-dots-horizontal class="h-5 w-5 " x-on:click="open = true"/>
                            <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1 pointer-events-none">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-pink-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500"></span>
                            </span>
                        </span>
                    </div>
                    <!-- Dropdown Body -->
                    <div 
                        x-show.transition="open" 
                        x-cloak
                        x-on:click.away="open = false" 
                        class="absolute right-0 w-62 -mt-4 py-2 bg-white border rounded shadow-xl"
                    >   
                        <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:text-teal-300">
                        Tambah Nilai
                        </a>
                        <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:text-teal-300">    
                        Salur Zakat Kepada Asnaf
                        </a>
                    </div>
                <!-- // Dropdown Body -->
                </div>
            </div>
        </div>

        @livewire('akaun')
@endsection
