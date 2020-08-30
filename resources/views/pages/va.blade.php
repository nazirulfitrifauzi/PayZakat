@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="md:flex md:items-center md:justify-between mx-8 mt-8">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                    Maklumat Akaun
                </h2>
            </div>
        </div>

        <div class="mt-8">
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mt-2" x-max="1">
                    <!-- Card -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-5">
                            <div class="flex items-center p-4">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-cool-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <p class="text-cool-gray-700 text-xl font-semibold">Baki Akaun </p>
                                </div>
                                <div>
                                    <p class="font-bold text-2xl">RM 30,659.45</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg mt-8">
                        <div class="p-5">
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
                                        <p class="text-cool-gray-500 font-semibold">One Day Float</p>
                                    </div>
                                    <div>
                                        <p>RM 0.00</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center p-4">
                                    <div class="ml-5 w-0 flex-1">
                                        <p class="text-cool-gray-500 font-semibold">Two Day Float</p>
                                    </div>
                                    <div>
                                        <p>RM 0.00</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center p-4">
                                    <div class="ml-5 w-0 flex-1">
                                        <p class="text-cool-gray-500 font-semibold">Late Clearing/Outstation Cheque Float</p>
                                    </div>
                                    <div>
                                        <p>RM 0.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

            <div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex justify-center">
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        <svg class="-ml-1 mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        View Statement
                    </button>
                </span>
            </div>

        </div>

    </main>
@endsection
