@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">

        <div class="md:flex md:items-center md:justify-between mx-8 mt-8">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                    Alamat Pengguna
                </h2>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg mx-8 my-4">
            <div class="px-4 py-5 sm:p-6">
                <!-- Content goes here -->

                <form>
                    <div>
                        <div>
                            <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                                <div class="sm:col-span-6">
                                    <label for="type_address" class="block text-sm font-medium leading-5 text-gray-700">
                                        Jenis Alamat
                                    </label>
                                    <div class="mt-4">
                                        <div class="flex items-center">
                                            <input id="home" name="address" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                            <label for="home" class="ml-3">
                                                <span class="block text-sm leading-5 font-medium text-gray-700">Rumah</span>
                                            </label>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <input id="office" name="address" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                            <label for="office" class="ml-3">
                                                <span class="block text-sm leading-5 font-medium text-gray-700">Pejabat</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">
                                        Alamat
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="street_address" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="city" class="block text-sm font-medium leading-5 text-gray-700">
                                        Bandar
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="city" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="state" class="block text-sm font-medium leading-5 text-gray-700">
                                        Poskod
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="state" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="zip" class="block text-sm font-medium leading-5 text-gray-700">
                                        Negeri
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="zip" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="state" class="block text-sm font-medium leading-5 text-gray-700">
                                        No Telefon
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="state" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="zip" class="block text-sm font-medium leading-5 text-gray-700">
                                        Fax
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <input id="zip" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                                        Nota
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <textarea id="about" rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
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
