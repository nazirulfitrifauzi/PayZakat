@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">

        <div class="md:flex md:items-center md:justify-between mx-8 mt-8">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                    Maklumat Peribadi Pengguna
                </h2>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg mx-8 my-4">
            <div class="px-4 py-5 sm:p-6">
                <!-- Content goes here -->

                <form>
                    <div>
                        <div>
                            <div>
                                <h3 class="text-lg leading-6 font-semibold text-gray-900">
                                    Maklumat Asas
                                </h3>
                            </div>
                            <div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Nama Penuh
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Jenis Anggota
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <option>Anggota Biasa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        No Ahli
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        No IC
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Gelaran
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <option>Puan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Status Perkahwinan
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <option>Berkahwin</option>
                                        </select>
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
                                        No Telefon
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <div class="mt-1 rounded-md shadow-sm">
                                            <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Tarikh Lahir
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <div class="mt-1 rounded-md shadow-sm">
                                            <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
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
                                        Tarikh Permohonan
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <div class="mt-1 rounded-md shadow-sm">
                                            <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="email" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Emel
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="email" type="email" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="email" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Pendidikan
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <option>Ijazah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="email" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Tarikh Daftar
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="email" type="email" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="email" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Tarikh Berhenti
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="email" type="email" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="email" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Kelayakan Dividen
                                    </label>
                                    <div class="flex items-center py-2 px-3">
                                        <span x-data="{ on: false }" role="checkbox" tabindex="0" @click="on = !on" @keydown.space.prevent="on = !on" :aria-checked="on.toString()" aria-checked="true" :class="{ 'bg-gray-200': !on, 'bg-indigo-600': on }" class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline bg-indigo-600">
                                            <span aria-hidden="true" :class="{ 'translate-x-5': on, 'translate-x-0': !on }" class="relative inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200 translate-x-5">
                                                <span :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !on }" class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-0 ease-out duration-100">
                                                    <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                                        <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                <span :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !on }" class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-100 ease-in duration-200">
                                                    <svg class="h-3 w-3 text-indigo-600" fill="currentColor" viewBox="0 0 12 12">
                                                        <path d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-8">
                            <div>
                                <h3 class="text-lg leading-6 font-semibold text-gray-900">
                                    Maklumat Bank
                                </h3>
                            </div>
                            <div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Nama Bank 1
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        No Akaun Bank 1
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Nama Bank 2
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        No Akaun Bank 2
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 border-t border-gray-200 pt-5">
                        <div class="flex justify-end">
                            <span class="inline-flex rounded-md shadow-sm">
                                <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                    Batal
                                </button>
                            </span>
                            <span class="ml-3 inline-flex rounded-md shadow-sm">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Simpan
                                </button>
                            </span>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>
@endsection
