<div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
    <div class="flex-1 h-0 overflow-y-auto">
        <header class="space-y-1 py-6 px-4 bg-teal-700 sm:px-6">
            <div class="flex items-center justify-between space-x-3">
                <h2 class="text-lg leading-7 font-medium text-white">
                    Kalkulator Zakat Pendapatan
                </h2>
                <div class="h-7 flex items-center">
                    <button aria-label="Close panel" class="text-teal-200 hover:text-white transition ease-in-out duration-150" @click="Open1 = false" >
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
                        <div x-data="{ isOpen1: false }">
                            <button
                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                @click="isOpen1 = !isOpen1"
                            >
                                <div>Bahagian A : Komponen Pendapatan</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div
                                class="text-gray-700 text-sm mt-2"
                                x-show="isOpen1"
                            >
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
                                                                Hasil Penggajian & Upah Tahunan
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                </div>
                                                                @error('a1')
                                                                    <p class="text-red-500 italic text-xs py-1 flex items-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 mr-2">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                        </svg>
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                Hasil Bebas & Profesional Tahunan
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a2" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                Hasil al-Mustaghallat
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a3" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                Hasil Pemberian atau Sumbangan
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a4" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="" >
                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                    <h2>Jumlah A : <span class="text-red-700 ">RM {{ number_format($totalA,2) }}</span></h2>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ isOpen1: false }">
                            <button
                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                @click="isOpen1 = !isOpen1"
                            >
                                <div>B1 : Had Kifayah Isi Rumah</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div
                                class="text-gray-700 text-sm mt-2"
                                x-show="isOpen1"
                            >
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
                                                                Ketua Keluarga
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                        RM
                                                                    </span>
                                                                    <input class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" value="12936" disabled>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Dewasa Bekerja (18 tahun ke atas)
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <select wire:model.debounce.200ms="b12" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                                    <option value="0">Tiada</option>
                                                                    @for($i = 1; $i <= 10; $i++)
                                                                        <option value="{{ $i }}">{{ $i }} Orang</option>
                                                                    @endfor
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Dewasa Tidak Bekerja (18 tahun ke atas)
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <select wire:model.debounce.200ms="b13" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                                    <option value="0">Tiada</option>
                                                                    @for($i = 1; $i <= 10; $i++)
                                                                        <option value="{{ $i }}">{{ $i }} Orang</option>
                                                                    @endfor
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Tanggungan Belajar IPT
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <select wire:model.debounce.200ms="b14" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                                    <option value="0">Tiada</option>
                                                                    @for($i = 1; $i <= 10; $i++)
                                                                        <option value="{{ $i }}">{{ $i }} Orang</option>
                                                                    @endfor
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Tanggungan Berumur 7-17 tahun
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <select wire:model.debounce.200ms="b15" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                                    <option value="0">Tiada</option>
                                                                    @for($i = 1; $i <= 10; $i++)
                                                                        <option value="{{ $i }}">{{ $i }} Orang</option>
                                                                    @endfor
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Tanggungan 6 Tahun Ke Bawah
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <select wire:model.debounce.200ms="b16" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                                    <option value="0">Tiada</option>
                                                                    @for($i = 1; $i <= 10; $i++)
                                                                        <option value="{{ $i }}">{{ $i }} Orang</option>
                                                                    @endfor
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="" >
                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                    <h2>Jumlah B1 : <span class="text-red-700 ">RM {{ number_format($totalB1,2) }}</span></h2>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ isOpen1: false }">
                            <button
                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                @click="isOpen1 = !isOpen1"
                            >
                                <div>B2 : Had Kifayah Tambahan (Jika Berkaitan)</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div
                                class="text-gray-700 text-sm mt-2"
                                x-show="isOpen1"
                            >
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
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Tanggungan Anak OKU
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <select wire:model.debounce.200ms="b21" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                                    <option value="0">Tiada</option>
                                                                    @for($i = 1; $i <= 10; $i++)
                                                                        <option value="{{ $i }}">{{ $i }} Orang</option>
                                                                    @endfor
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Tanggungan Pesakit Kronik
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <select wire:model.debounce.200ms="b22" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                                    <option value="0">Tiada</option>
                                                                    @for($i = 1; $i <= 10; $i++)
                                                                        <option value="{{ $i }}">{{ $i }} Orang</option>
                                                                    @endfor
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Kos Penjagaan Anak
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <select wire:model.debounce.200ms="b23" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                                    <option value="0">Tiada</option>
                                                                    @for($i = 1; $i <= 10; $i++)
                                                                        <option value="{{ $i }}">{{ $i }} Orang</option>
                                                                    @endfor
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="" >
                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                    <h2>Jumlah B2 : <span class="text-red-700 ">RM {{ number_format($totalB2,2) }}</span></h2>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ isOpen1: false }">
                            <button
                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                @click="isOpen1 = !isOpen1"
                            >
                                <div>Bahagian C: Tolakan Lain</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div
                                class="text-gray-700 text-sm mt-2"
                                x-show="isOpen1"
                            >
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
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Caruman KWSP bahagian pekerja dibawah umur 55 tahun (jumlah gaji kasar x 11%)
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="c" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="" >
                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                    <h2>Jumlah C : <span class="text-red-700 ">RM {{ number_format($totalC,2) }}</span></h2>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4">
                                <div>D. Jumlah Bahagian (A) - (B + C )</div>
                            </div>

                            <div class="" >
                                <div class="w-full font-bold pt-3 flex justify-start items-end text-lg ">
                                    <h2 class="text-red-700 ">RM {{ number_format($totalA - ($totalB1 + $totalB2 + $totalC),2) }}</h2>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4">
                                <div>E. Tolak Simpanan Tahunan Semasa Tabung Haji (jika ada)</div>
                            </div>

                            <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                    RM
                                </span>
                                <input wire:model.debounce.200ms="e" class="form-input w-full px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                            </div>
                        </div>
                        <div class="" >
                            <div class="w-full font-bold pt-3 flex justify-end items-end mt-10">
                                Jumlah Zakat Anda (setahun)
                            </div>

                            <div class="text-red-700 text-xl font-bold text-right">
                                RM
                                @if($totalA - ($totalB1 + $totalB2 + $totalC) - $totalE < 18510.72)
                                    0.00
                                @else
                                    {{ number_format(($totalA - ($totalB1 + $totalB2 + $totalC) - $totalE) * (2.5/100),2) }}
                                @endif
                            </div>
                        </div>

                        @if($totalA - ($totalB1 + $totalB2 + $totalC) - $totalE < 18510.72)
                        <div class="rounded-md bg-blue-50 p-4 mt-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3 flex-1 md:flex md:justify-between">
                                    <p class="text-sm leading-5 text-blue-700">
                                        Anda tidak layak dikenakan zakat kerana tidak mencapai nisab <span class="font-bold">RM18,510.72</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                    <!-- end calculator -->
                </div>
            </div>
        </div>
    </div>
</div>