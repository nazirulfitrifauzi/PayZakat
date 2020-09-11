@extends('layouts.app.auth')

@section('content')
    <!-- Page header -->
    @include('layouts.navbar.header')

    <!-- Content -->
    <div class="mt-8">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-lg leading-6 font-medium text-cool-gray-900">Ringkasan</h2>
            <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3" x-max="1">
                <!-- Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-cool-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm leading-5 font-medium text-cool-gray-500 truncate">Baki Akaun</dt>
                                    <dd>
                                        <div class="text-lg leading-7 font-medium text-cool-gray-900">RM 30,659.45</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cool-gray-50 px-5 py-3">
                        <div class="text-sm leading-5">
                            <a href="#" class="font-medium text-teal-600 hover:text-teal-900 transition ease-in-out duration-150">Lihat semua</a>
                        </div>
                    </div>
                </div>
                <!-- More cards... -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-cool-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm leading-5 font-medium text-cool-gray-500 truncate">Belum diproses</dt>
                                    <dd>
                                        <div class="text-lg leading-7 font-medium text-cool-gray-900">-RM 19,500.00</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cool-gray-50 px-5 py-3">
                        <div class="text-sm leading-5">
                            <a href="#" class="font-medium text-teal-600 hover:text-teal-900 transition ease-in-out duration-150">Lihat semua</a>
                        </div>
                    </div>
                </div>
                <!-- More cards... -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-cool-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm leading-5 font-medium text-cool-gray-500 truncate">Telah diproses</dt>
                                    <dd>
                                        <div class="text-lg leading-7 font-medium text-cool-gray-900">RM 20,000</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cool-gray-50 px-5 py-3">
                        <div class="text-sm leading-5">
                            <a href="#" class="font-medium text-teal-600 hover:text-teal-900 transition ease-in-out duration-150">Lihat semua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mx-auto mt-8 px-4 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
            Aktiviti Terkini
        </h2>

        <!-- Activity list (smallest breakopoint only) -->
        <div class="shadow sm:hidden">
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
        <div class="hidden sm:block">
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col mt-2">
                    <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                        <table class="min-w-full divide-y divide-cool-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-cool-gray-50 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                        Transaksi
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                        Amaun
                                    </th>
                                    <th class="hidden px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider md:block">
                                        Status
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                        Tarikh
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                                <tr class="bg-white">
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat Pendapatan Bulan Julai 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-cool-gray-900 font-medium">RM </span>584.00
                                    </td>
                                    <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800 capitalize">
                                            berjaya
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        02 Ogos 2020
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat Harta Bulan Jun 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-cool-gray-900 font-medium">RM </span>720.00
                                    </td>
                                    <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-yellow-100 text-yellow-800 capitalize">
                                            sedang diproses
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        03 Julai 2020
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat Harta Bulan Mei 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-cool-gray-900 font-medium">RM </span>360.00
                                    </td>
                                    <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-yellow-100 text-yellow-800 capitalize">
                                            sedang diproses
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        01 Jun 2020
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat ASB Bulan April 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-cool-gray-900 font-medium">RM </span>8450.00
                                    </td>
                                    <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800 capitalize">
                                            berjaya
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        04 Mei 2020
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    Bayaran Zakat Pendapatan Bulan Mac 2020
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <span class="text-cool-gray-900 font-medium">RM </span>534.00
                                    </td>
                                    <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800 capitalize">
                                            berjaya
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        01 April 2020
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Pagination -->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
