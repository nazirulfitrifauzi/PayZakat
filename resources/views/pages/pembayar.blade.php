@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
       <!-- Content -->
        <div class="mt-8">
            <h2 class="mx-auto mt-8 px-4 text-lg sm:px-6 lg:px-8 font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                Senarai Pembayar Zakat
            </h2>

            <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                <div class="bg-white sm:rounded-lg shadow px-5 py-3 flex flex-col md:flex-row md:justify-between">
                    <div class="flex flex-col md:flex-row">
                        <div class="inline-flex">
                            <button class="bg-teal-500 hover:bg-teal-500 text-white hover:text-white py-1 px-2 border border-teal-500 text-sm focus:outline-none transition duration-500 ease-in-out rounded-l">
                                Bulanan
                            </button>
                            <button class="bg-white hover:bg-teal-500 hover:text-white text-gray-800 py-1 px-2 border border-teal-500 text-sm focus:outline-none transition duration-500 ease-in-out rounded-r leading-relaxed">
                                Tahunan
                            </button>
                        </div>
                        <div class="md:ml-3 mt-3 md:mt-0">
                            <form>
                                <div class="inline-flex">
                                    <div class="rounded-md shadow-sm">
                                        <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                            <option>2017</option>
                                            <option>2016</option>
                                        </select>
                                    </div>
                                    <div class="ml-2 rounded-md shadow-sm">
                                        <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <option>Ogos</option>
                                            <option>Julai</option>
                                            <option>Jun</option>
                                            <option>Mei</option>
                                            <option>April</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-3 md:mt-0">
                        <a href="{{ route('pembayar.tambah') }}" class="relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-5 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            <h1 class="tracking-wider">Tambah</h1>
                        </a>
                    </div>
                </div>
            </div>

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
                                            Nama
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
                                        <th class="px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                            {{-- Action --}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                                    <tr class="bg-white">
                                        <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                            <div class="flex">
                                                <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                        Charlize Beech
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
                                        <td class="px-6 py-4 text-right whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            <a href="#" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                            <div class="flex">
                                                <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                        Shana Vickers
                                                    </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            <span class="text-cool-gray-900 font-medium">RM </span>720.00
                                        </td>
                                        <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800 capitalize">
                                                berjaya
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            02 Ogos 2020
                                        </td>
                                        <td class="px-6 py-4 text-right whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            <a href="#" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                            <div class="flex">
                                                <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                        Jakob Richardson
                                                    </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            <span class="text-cool-gray-900 font-medium">RM </span>360.00
                                        </td>
                                        <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800 capitalize">
                                                berjaya
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            02 Ogos 2020
                                        </td>
                                        <td class="px-6 py-4 text-right whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            <a href="#" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                            <div class="flex">
                                                <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                        Mara Benitez
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
                                            02 Ogos 2020
                                        </td>
                                        <td class="px-6 py-4 text-right whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            <a href="#" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                            <div class="flex">
                                                <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                        Fabien Larsen
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
                                            02 Ogos 2020
                                        </td>
                                        <td class="px-6 py-4 text-right whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            <a href="#" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
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

    </main>
@endsection
