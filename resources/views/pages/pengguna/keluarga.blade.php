@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto" x-data="{ isOpen1: false }" x-cloak>
        <div class="mx-auto px-0 sm:px-6 lg:px-8 mt-8">
            <div class="flex justify-between w-full">
                <div class="flex items-center">
                    <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                        Keluarga
                    </h2>
                    <div>
                        <div class="flex items-center py-2 px-3">
                            <span
                                x-data="{ on: false }"
                                role="checkbox"
                                tabindex="0"
                                @click="on = !on"
                                @keydown.space.prevent="on = !on"
                                :aria-checked="on.toString()"
                                aria-checked="true"
                                :class="{ 'bg-gray-200': !on, 'bg-indigo-600': on }"
                                class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline bg-indigo-600">
                                <span aria-hidden="true" :class="{ 'translate-x-5': on, 'translate-x-0': !on }" class="relative inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200 translate-x-5">
                                    <span
                                        :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !on }"
                                        class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                    >
                                        <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                            <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span
                                        :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !on }"
                                        class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                    >
                                        <svg class="h-3 w-3 text-indigo-600" fill="currentColor" viewBox="0 0 12 12">
                                            <path
                                                d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"
                                            ></path>
                                        </svg>
                                    </span>
                                </span>
                            </span>
                            <span class="ml-2">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-2 flex-1 md:flex md:justify-between">
                                        <p class="text-sm leading-5 text-blue-700">
                                            Kiraan isi rumah untuk <span class="font-bold">Zakat Pendapatan</span> akan berdasarkan maklumat yang anda masukkan disini.
                                        </p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mx-auto px-0 sm:px-6 lg:px-8 mt-8">
            <span class="inline-flex rounded-md shadow-sm">
                <button
                    href="#"
                    class="py-2 px-4 border border-gray-100 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-500 ease-in-out flex items-center font-semibold bg-white hover:shadow-lg"
                    @click="isOpen1 = !isOpen1">
                    <svg x-show="!isOpen1" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="user-add w-4 h-4 mr-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                    <span x-show="!isOpen1">
                        Tambah
                    </span>
                    <svg x-show="isOpen1" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="x w-4 h-4 mr-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    <span x-show="isOpen1">
                        Batal
                    </span>
                </button>
            </span>
        </div>

        <div class="mx-auto px-0 sm:px-6 lg:px-8" x-show="isOpen1">
            <div class="text-gray-700 text-sm mt-2 bg-white p-5 rounded-lg shadow">
                <form>
                    <div class="mt-2 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                Nama Penuh
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                No IC
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                Tarikh Lahir
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                Jantina
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                No Telefon
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                Kaum
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option>Melayu</option>
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                Hubungan
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    <option>Isteri</option>
                                    <option>Suami</option>
                                    <option>Anak</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div>
                                <label for="nominee" class="block text-sm font-semibold leading-5 text-gray-700">
                                    Penama
                                </label>
                                <div class="flex items-center py-2 px-3">
                                    <span
                                        x-data="{ on: false }"
                                        role="checkbox"
                                        tabindex="0"
                                        @click="on = !on"
                                        @keydown.space.prevent="on = !on"
                                        :aria-checked="on.toString()"
                                        aria-checked="true"
                                        :class="{ 'bg-gray-200': !on, 'bg-indigo-600': on }"
                                        class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline bg-indigo-600"
                                    >
                                        <span aria-hidden="true" :class="{ 'translate-x-5': on, 'translate-x-0': !on }" class="relative inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200 translate-x-5">
                                            <span
                                                :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !on }"
                                                class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                            >
                                                <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                                    <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span
                                                :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !on }"
                                                class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                            >
                                                <svg class="h-3 w-3 text-indigo-600" fill="currentColor" viewBox="0 0 12 12">
                                                    <path
                                                        d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"
                                                    ></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="">
                                <label for="nominee_percent" class="block text-sm font-semibold leading-5 text-gray-700">
                                    Penama Peratusan
                                </label>
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="nominee_percent" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <label for="oku" class="block text-sm font-semibold leading-5 text-gray-700 text-center">
                                Orang Kelainan Upaya(OKU)
                            </label>
                            <div class="flex items-center justify-center py-2 px-3">
                                <span
                                    x-data="{ on: false }"
                                    role="checkbox"
                                    tabindex="0"
                                    @click="on = !on"
                                    @keydown.space.prevent="on = !on"
                                    :aria-checked="on.toString()"
                                    aria-checked="true"
                                    :class="{ 'bg-gray-200': !on, 'bg-indigo-600': on }"
                                    class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline bg-indigo-600"
                                >
                                    <span aria-hidden="true" :class="{ 'translate-x-5': on, 'translate-x-0': !on }" class="relative inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200 translate-x-5">
                                        <span
                                            :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !on }"
                                            class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                        >
                                            <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                                <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <span
                                            :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !on }"
                                            class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                        >
                                            <svg class="h-3 w-3 text-indigo-600" fill="currentColor" viewBox="0 0 12 12">
                                                <path
                                                    d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="critical" class="block text-sm font-semibold leading-5 text-gray-700 text-center">
                                Penyakit Kritikal
                            </label>
                            <div class="flex items-center justify-center py-2 px-3">
                                <span
                                    x-data="{ on: false }"
                                    role="checkbox"
                                    tabindex="0"
                                    @click="on = !on"
                                    @keydown.space.prevent="on = !on"
                                    :aria-checked="on.toString()"
                                    aria-checked="true"
                                    :class="{ 'bg-gray-200': !on, 'bg-indigo-600': on }"
                                    class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline bg-indigo-600"
                                >
                                    <span aria-hidden="true" :class="{ 'translate-x-5': on, 'translate-x-0': !on }" class="relative inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200 translate-x-5">
                                        <span
                                            :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !on }"
                                            class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                        >
                                            <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                                <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <span
                                            :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !on }"
                                            class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                        >
                                            <svg class="h-3 w-3 text-indigo-600" fill="currentColor" viewBox="0 0 12 12">
                                                <path
                                                    d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 border-t border-gray-200 pt-5">
                        <div class="flex justify-end">
                            <span class="ml-3 inline-flex rounded-md shadow-sm">
                                <button
                                    type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
                                >
                                    Simpan
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="mx-auto px-0 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-5">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full divide-y divide-cool-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-cool-gray-50 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    No
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-50 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="hidden px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider md:block">
                                    Hubungan
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    Penama
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                    1
                                </td>
                                <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                    <div class="flex">
                                        <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                            <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                Kudut
                                            </p>
                                        </a>
                                    </div>
                                </td>
                                <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                    Anak
                                </td>
                                <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                    Tidak
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                    2
                                </td>
                                <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                    <div class="flex">
                                        <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                            <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                Eri
                                            </p>
                                        </a>
                                    </div>
                                </td>
                                <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                    Isteri
                                </td>
                                <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                    Ya
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                    3
                                </td>
                                <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                    <div class="flex">
                                        <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                            <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                Alley
                                            </p>
                                        </a>
                                    </div>
                                </td>
                                <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                    Anak
                                </td>
                                <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                    Tidak
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-cool-gray-200 sm:px-6">
                        <div class="hidden sm:block">
                            <p class="text-sm leading-5 text-cool-gray-700">
                                Memaparkan <span class="font-medium">1</span> sehingga <span class="font-medium">3</span> daripada <span class="font-medium">3</span> carian
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
    </main>
@endsection
