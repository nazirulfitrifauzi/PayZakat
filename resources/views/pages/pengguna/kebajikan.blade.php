@extends('layouts.app.auth')

@section('content')
<main class="flex-1 relative pb-8 z-0 overflow-y-auto" x-data="{ isOpen1: false }" x-cloak>
    <div class="mx-auto px-0 sm:px-6 lg:px-8 mt-8">
        <div class="flex justify-between w-full">
            <div class="flex items-center">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                    Kebajikan
                </h2>
            </div>
        </div>
    </div>
    
    <div class="mx-auto px-0 sm:px-6 lg:px-8 mt-8">
        <span class="inline-flex rounded-md shadow-sm">
            <button
                href="#"
                class="py-2 px-4 border border-gray-100 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-500 ease-in-out flex items-center bg-white hover:shadow-lg"
                @click="isOpen1 = !isOpen1">
                <svg x-show="!isOpen1" viewBox="0 0 20 20" fill="currentColor" class="document-add w-4 h-4 mr-2"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"></path></svg>
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
                            Jenis Kebajikan
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                            Jumlah
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                            Tarikh Kebajikan
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
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
                                Jenis Kebajikan
                            </th>
                            <th class="hidden px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider md:block">
                                Jumlah
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
                                            Beri makan homeless
                                        </p>
                                    </a>
                                </div>
                            </td>
                            <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                <span class="font-bold">RM 5,000</span>
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
                                            Bantuan Banjir
                                        </p>
                                    </a>
                                </div>
                            </td>
                            <td class="hidden px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500 md:block">
                                <span class="font-bold">RM 10,000</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Pagination -->
                <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-cool-gray-200 sm:px-6">
                    <div class="hidden sm:block">
                        <p class="text-sm leading-5 text-cool-gray-700">
                            Memaparkan <span class="font-medium">1</span> sehingga <span class="font-medium">2</span> daripada <span class="font-medium">2</span> carian
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
