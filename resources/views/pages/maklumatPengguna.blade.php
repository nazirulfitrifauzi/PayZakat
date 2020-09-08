@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">
            <h2 class="mx-auto mt-8 px-4 text-lg sm:px-6 lg:px-8 font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                Maklumat Peribadi Pengguna
            </h2>

            <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                <div class="bg-white sm:rounded-lg shadow px-5 py-3">
                    <form>
                        <div class="mt-2">
                            <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Nama Penuh
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        E-mel
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        No Kad Pengenalan Baru
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        No Kad Pengenalan Lama
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Negeri Asal
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="last_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Mastautin
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <option>Ya</option>
                                            <option>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Tempoh Mastautin (Tahun)
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Telefon Bimbit
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Telefon Pejabat
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Nama Majikan
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Jawatan
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                                        No Gaji / No Pekerja
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Alamat --}}
                        <div class="mt-6">
                            <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                                <div class="sm:col-span-6">
                                    <label for="street_address" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Alamat
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="street_address" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="street_address" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="street_address" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="city" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Bandar
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="city" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="state" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Poskod
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="state" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="zip" class="block text-sm font-semibold leading-5 text-gray-700">
                                        Negeri
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="zip" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-5">
                            <div class="flex justify-end">
                                <span class="inline-flex rounded-md shadow-sm">
                                    <a href="{{ route('pembayar') }}" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                        Batal
                                    </a>
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
        </div>
    </main>
@endsection
