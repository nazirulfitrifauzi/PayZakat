@extends('layouts.app.auth')
@section('content')
    <!-- Content -->
        <div class="flex justify-between mt-8 px-8">
            <div class="flex items-center">
                <h2 class="text-lg font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">Maklumat Akaun</h2>
            <span class="text-gray-400 text-sm ml-3">164823439821</span>
            </div>
            <div x-data="{ open: false }">
                <div>
                   

                        <span class="relative inline-flex">
                            {{-- <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-400 text-base leading-6 font-medium rounded-md text-gray-800 bg-white hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                              Transactions
                            </button> --}}
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

        {{-- <div class=" flex mt-8 px-8 justify-between">
            <h2 class="text-lg sm:px-6 lg:px-8 font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                Maklumat Akaun (Simpanan) <span class="text-gray-400 text-sm ml-3">164823439821</span>
            </h2>
            <div x-data="{ open: false }" class="relative">
                <button x-on:click="open = true" class="overflow-hidden focus:outline-none">
                    <svg class="mt-3 h-5 w-5"
                        viewBox="0 0 24 24"
                        style=" fill:#000000;"><path d="M 3 9 C 1.34375 9 0 10.34375 0 12 C 0 13.65625 1.34375 15 3 15 C 4.65625 15 6 13.65625 6 12 C 6 10.34375 4.65625 9 3 9 Z M 12 9 C 10.34375 9 9 10.34375 9 12 C 9 13.65625 10.34375 15 12 15 C 13.65625 15 15 13.65625 15 12 C 15 10.34375 13.65625 9 12 9 Z M 21 9 C 19.34375 9 18 10.34375 18 12 C 18 13.65625 19.34375 15 21 15 C 22.65625 15 24 13.65625 24 12 C 24 10.34375 22.65625 9 21 9 Z"></path>
                    </svg>
                </button>
            <!-- Dropdown Body -->
                <div x-show.transition="open" x-on:click.away="open = false" class="absolute right-0 w-40 -mt-4 py-2 bg-white border rounded shadow-xl">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:text-teal-300">
                    Bayaran Bil
                    </a>
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:text-teal-300">    
                    Pemindahan Wang
                    </a>
                </div>
            </div>
            <!-- // Dropdown Body -->
        </div> --}}

    <div class="mt-8">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-2" x-max="1">
                <!-- Card -->
                <x-general.card class="bg-white p-5">
                    <div class="flex items-center p-4">
                        {{--<div class="flex-shrink-0">
                            <x-heroicon-o-scale class="h-6 w-6 text-cool-gray-400"/>
                        </div>--}}
                        <div class="ml-5 w-0 flex-1">
                            <p class="text-cool-gray-700 text-xl font-semibold">Baki Akaun Keseluruhan</p>
                        </div>
                        <div>
                            <p class="font-bold text-2xl">RM 35,659.45</p>
                        </div>
                    </div>
                </x-general.card>

                <x-general.card class="bg-white p-5 mt-8">
                    <div>
                        <div class="flex items-center p-4">
                            <div class="ml-5 w-0 flex-1">
                                <p class="text-cool-gray-500 font-semibold">Baki Semasa</p>
                            </div>
                            <div>
                                <p>RM 30,659.45</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center p-4">
                            <div class="ml-5 w-0 flex-1">
                                <p class="text-cool-gray-500 font-semibold">Jumlah Zakat Refund Pada Tahun 2019</p>
                            </div>
                            <div>
                                <p>RM 5,000.00</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center p-4 justify-between">
                            <div class="ml-5  flex">
                                <span class="text-cool-gray-500 font-semibold">One Day Float</span>
                            </div>
                            <div class="flex justify-between">
                                {{-- <p>RM 0.00</p> --}}
                                <div class="flex"><span>RM</span></div>
                                
                                <span>0.00</span>
                            </div>
                        </div>
                    </div>
                </x-general.card>
            </div>
        </div>

        <div class="mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 gap-5 mt-8">
            <div>
                <select id="location" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option selected>All Transaction History</option>
                    <option>Debit Card Transaction</option>
                </select>
            </div>
            <div>
                <select id="location" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option>Last 30 Days</option>
                    <option selected>Last 60 Days</option>
                    <option>Last 90 Days</option>
                </select>
            </div>
        </div>

        <!-- Activity list (smallest breakopoint only) -->
        <div class="shadow sm:hidden mt-8">
            <ul class="mt-2 divide-y divide-cool-gray-200 overflow-hidden shadow sm:hidden" x-max="1">
                <li>
                    <a href="#" class="block px-4 py-4 bg-white hover:bg-cool-gray-50">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 flex space-x-2 truncate">
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="text-cool-gray-500 text-sm truncate">
                                    <p class="truncate">Bayaran Zakat Pendapatan Bulan Julai 2020</p>
                                    <p><span class="text-cool-gray-900 font-medium">RM </span>584.00</p>
                                    <p>02 Ogos 2020</p>
                                </div>
                            </div>
                            <div>
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-4 bg-white hover:bg-cool-gray-50">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 flex space-x-2 truncate">
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="text-cool-gray-500 text-sm truncate">
                                    <p class="truncate">Bayaran Zakat Harta Bulan Jun 2020</p>
                                    <p><span class="text-cool-gray-900 font-medium">RM </span>720.00</p>
                                    <p>03 Julai 2020</p>
                                </div>
                            </div>
                            <div>
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-4 bg-white hover:bg-cool-gray-50">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 flex space-x-2 truncate">
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="text-cool-gray-500 text-sm truncate">
                                    <p class="truncate">Bayaran Zakat Harta Bulan Mei 2020</p>
                                    <p><span class="text-cool-gray-900 font-medium">RM </span>360.00</p>
                                    <p>01 Jun 2020</p>
                                </div>
                            </div>
                            <div>
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-4 bg-white hover:bg-cool-gray-50">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 flex space-x-2 truncate">
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="text-cool-gray-500 text-sm truncate">
                                    <p class="truncate">Bayaran Zakat ASB Bulan April 2020</p>
                                    <p><span class="text-cool-gray-900 font-medium">RM </span>8450.00</p>
                                    <p>04 Mei 2020</p>
                                </div>
                            </div>
                            <div>
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-4 bg-white hover:bg-cool-gray-50">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 flex space-x-2 truncate">
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="text-cool-gray-500 text-sm truncate">
                                    <p class="truncate">Bayaran Zakat Pendapatan Bulan Mac 2020</p>
                                    <p><span class="text-cool-gray-900 font-medium">RM </span>534.00</p>
                                    <p>01 April 2020</p>
                                </div>
                            </div>
                            <div>
                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-cool-gray-200">
                <div class="flex-1 flex justify-between">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-5 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
                        Sebelumnya
                    </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-5 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
                        Seterusnya
                    </a>
                </div>
            </nav>
        </div>

        <!-- Activity table (small breakopoint and up) -->
        <div class="hidden sm:block mt-8">
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col mt-2">
                    <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                        <table class="min-w-full divide-y divide-cool-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-4 bg-cool-gray-700 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th class="px-6 py-4 bg-cool-gray-700 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th class="hidden px-6 py-4 bg-cool-gray-700 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider md:block">
                                        Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        02 Ogos 2020
                                    </td>
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-left text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat Pendapatan Bulan Julai 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-red-500 font-medium">-RM 584.00</span>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        03 Julai 2020
                                    </td>
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-left text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat Harta Bulan Jun 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-red-500 font-medium">-RM 720.00</span>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        01 Jun 2020
                                    </td>
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-left text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat Harta Bulan Mei 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-red-500 font-medium">-RM 360.00</span>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        04 Mei 2020
                                    </td>
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-left text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat ASB Bulan April 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-red-500 font-medium">-RM 8450.00</span>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        01 April 2020
                                    </td>
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-left text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat Pendapatan Bulan Mac 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-red-500 font-medium">-RM 534.00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        {{--
                        <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-cool-gray-200 sm:px-6">
                            <div class="hidden sm:block">
                                <p class="text-sm leading-5 text-cool-gray-700">
                                    Memaparkan <span class="font-medium">1</span> sehingga <span class="font-medium">5</span> daripada <span class="font-medium">10</span> carian
                                </p>
                            </div>
                            <div class="flex-1 flex justify-between sm:justify-end">
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-5 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
                                    Sebelumnya
                                </a>
                                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-5 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
                                    Seterusnya
                                </a>
                            </div>
                        </nav>
                        --}}
                    </div>
                </div>
            </div>
        </div>

        <nav class="px-4 py-3 flex items-center sm:px-6">

            <div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex-1 flex justify-between sm:justify-start">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-6 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
                    <
                </a>
            </div>
            
            <div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex justify-center">
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-black bg-white hover:bg-gray-300 border border-gray-400 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        View Statement
                        <svg class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </button>
                </span>
            </div>

            <div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex-1 flex justify-between sm:justify-end">    
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-6 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
                    >
                </a>
            </div>
        </nav>

    </div>
@endsection
