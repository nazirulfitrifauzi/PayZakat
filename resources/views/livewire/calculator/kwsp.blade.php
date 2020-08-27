<div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
    <div class="flex-1 h-0 overflow-y-auto">
        <header class="space-y-1 py-6 px-4 bg-teal-700 sm:px-6">
            <div class="flex items-center justify-between space-x-3">
                <h2 class="text-lg leading-7 font-medium text-white">
                    Kalkulator Zakat KWSP
                </h2>
                <div class="h-7 flex items-center">
                    <button aria-label="Close panel" class="text-teal-200 hover:text-white transition ease-in-out duration-150" @click="Open4 = false" >
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <div class="flex-1 flex flex-col justify-between">
            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                <div class="space-y-6 pb-5">
                    <!-- start calculator -->
                    <div class="leading-loose text-lg">
                        <div>
                            <button class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4">
                                <div>Sebelum Umur 55 Tahun</div>
                            </button>

                            <div class="text-gray-700 text-sm mt-2">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6">
                                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                Butiran
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                RM
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                Jumlah Wang Ketika Dikeluarkan
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <div class="mt-1 relative flex rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0  sm:text-sm border-gray-300 bg-gray-50 text-gray-500 @error('a1') border-red-300 bg-red-50 text-red-900  @enderror">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a1" class="form-input w-3/4 px-2 py-2 rounded-none pr-10 rounded-r-md sm:text-sm sm:leading-5 @error('a1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" placeholder="0.00">
                                                                    @error('a1')
                                                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                            </svg>
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                @error('a1')
                                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="" >
                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                    <h2>Jumlah yang dikenakan zakat : <span class="text-red-700 ">RM {{ number_format($totalA,2) }}</span></h2>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4">
                                <div>Selepas Umur 55 Tahun</div>
                            </button>

                            <div class="text-gray-700 text-sm mt-2">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6">
                                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                Butiran
                                                            </th>
                                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                RM
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                Jumlah Baki KWSP
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <div class="mt-1 relative flex rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0  sm:text-sm border-gray-300 bg-gray-50 text-gray-500 @error('a1') border-red-300 bg-red-50 text-red-900  @enderror">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="b1" class="form-input w-3/4 px-2 py-2 rounded-none pr-10 rounded-r-md sm:text-sm sm:leading-5 @error('a1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" placeholder="0.00">
                                                                    @error('b1')
                                                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                            </svg>
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                @error('b1')
                                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="" >
                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                    <h2>Jumlah yang dikenakan zakat : <span class="text-red-700 ">RM {{ number_format($totalB,2) }}</span></h2>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end calculator -->
                </div>
            </div>
        </div>
    </div>
</div>
