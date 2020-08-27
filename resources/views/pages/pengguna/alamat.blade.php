@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">

        <div class="md:flex md:items-center md:justify-between mx-8 mt-8">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                    Maklumat Alamat Pengguna
                </h2>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg mx-8 my-4">
            <div class="px-4 py-5 sm:p-6">
                <!-- Content goes here -->

                <form>
                    <x-pengguna.alamat></x-pengguna.alamat>
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
