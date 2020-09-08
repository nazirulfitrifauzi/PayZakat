@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">
            <h2 class="mx-auto mt-8 px-4 text-lg sm:px-6 lg:px-8 font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                Tambah Pembayar Zakat
            </h2>

            <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                <div class="bg-white sm:rounded-lg shadow px-5 py-3">
                    <form>
                        <div>
                            <x-pengguna.peribadi></x-pengguna.peribadi>
                        </div>
                        <div class="mt-6">
                            <x-pengguna.alamat></x-pengguna.alamat>
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
