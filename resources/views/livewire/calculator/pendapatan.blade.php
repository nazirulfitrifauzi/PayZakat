<div class="flex flex-col h-full bg-white divide-y divide-gray-200 lg:shadow-xl">
    <div class="flex-1 h-0 overflow-y-auto">
        <header class="px-4 py-6 space-y-1 bg-white lg:bg-teal-700 sm:px-6">
            <div class="flex items-center justify-between space-x-3">
                <h2 class="text-2xl font-bold leading-7 text-black lg:text-white">
                    Kalkulator Zakat Pendapatan
                </h2>
                <div class="hidden h-7 lg:flex lg:items-center">
                    <button aria-label="Close panel" class="text-teal-200 transition duration-150 ease-in-out hover:text-white" @click="Open1 = false" >
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <div class="flex flex-col justify-between flex-1">
            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                <div class="pb-5 space-y-6">
                    <!-- start calculator -->
                    <div class="text-lg leading-loose">
                        <div class="grid items-center grid-cols-3 mt-3">
                            <div>Negeri: </div>
                            <x-form.negeri-dropdown class="col-span-2" label="" value="nisab">
                                @foreach ($negeri as $item)
                                    <option value="{{ $item->id }}">{{ $item->description }}</option>
                                @endforeach
                            </x-form.negeri-dropdown>
                        </div>

                        <div x-data="{ isOpen1: false }">
                            <button
                                class="flex items-center justify-between w-full py-3 mt-4 font-bold border-b border-gray-400"
                                @click="isOpen1 = !isOpen1"
                            >
                                <div>Bahagian A : Komponen Pendapatan</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div
                                class="mt-2 text-sm text-gray-700"
                                x-show="isOpen1"
                            >
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6">
                                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                                                Butiran
                                                            </th>
                                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                                                RM
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                Hasil Penggajian & Upah Tahunan
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <div class="relative flex mt-1 rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0  sm:text-sm border-gray-300 bg-gray-50 text-gray-500 @error('a1') border-red-300 bg-red-50 text-red-900  @enderror">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a1" class="form-input w-3/4 px-2 py-2 rounded-none pr-10 rounded-r-md sm:text-sm sm:leading-5 @error('a1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" placeholder="0.00">
                                                                    @error('a1')
                                                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
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
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                Hasil Bebas & Profesional Tahunan
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <div class="relative flex mt-1 rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0  sm:text-sm border-gray-300 bg-gray-50 text-gray-500 @error('a1') border-red-300 bg-red-50 text-red-900  @enderror">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a2" class="form-input w-3/4 px-2 py-2 rounded-none pr-10 rounded-r-md sm:text-sm sm:leading-5 @error('a1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" placeholder="0.00">
                                                                    @error('a2')
                                                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                            </svg>
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                @error('a2')
                                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                Hasil al-Mustaghallat
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <div class="relative flex mt-1 rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0  sm:text-sm border-gray-300 bg-gray-50 text-gray-500 @error('a1') border-red-300 bg-red-50 text-red-900  @enderror">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a3" class="form-input w-3/4 px-2 py-2 rounded-none pr-10 rounded-r-md sm:text-sm sm:leading-5 @error('a1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" placeholder="0.00">
                                                                    @error('a3')
                                                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                            </svg>
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                @error('a3')
                                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                Hasil Pemberian atau Sumbangan
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <div class="relative flex mt-1 rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0  sm:text-sm border-gray-300 bg-gray-50 text-gray-500 @error('a1') border-red-300 bg-red-50 text-red-900  @enderror">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="a4" class="form-input w-3/4 px-2 py-2 rounded-none pr-10 rounded-r-md sm:text-sm sm:leading-5 @error('a1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" placeholder="0.00">
                                                                    @error('a4')
                                                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                            </svg>
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                @error('a4')
                                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="" >
                                                <div class="flex items-end justify-end w-full pt-3 text-lg font-bold ">
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
                                class="flex items-center justify-between w-full py-3 mt-4 font-bold border-b border-gray-400"
                                @click="isOpen1 = !isOpen1"
                            >
                                <div>B1 : Had Kifayah Isi Rumah</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div
                                class="mt-2 text-sm text-gray-700"
                                x-show="isOpen1"
                            >
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6">
                                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                                                Butiran
                                                            </th>
                                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                                                RM
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                Ketua Keluarga
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <div class="flex mt-1 rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50 sm:text-sm">
                                                                        RM
                                                                    </span>
                                                                    <input class="w-3/4 px-2 py-2 rounded-none form-input rounded-r-md sm:text-sm sm:leading-5" value="12936" disabled>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Dewasa Bekerja (18 tahun ke atas)
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <select wire:model.debounce.200ms="b12" class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
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
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <select wire:model.debounce.200ms="b13" class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
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
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <select wire:model.debounce.200ms="b14" class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
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
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <select wire:model.debounce.200ms="b15" class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
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
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <select wire:model.debounce.200ms="b16" class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
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
                                                <div class="flex items-end justify-end w-full pt-3 text-lg font-bold ">
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
                                class="flex items-center justify-between w-full py-3 mt-4 font-bold border-b border-gray-400"
                                @click="isOpen1 = !isOpen1"
                            >
                                <div>B2 : Had Kifayah Tambahan (Jika Berkaitan)</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div
                                class="mt-2 text-sm text-gray-700"
                                x-show="isOpen1"
                            >
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6">
                                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                                                Butiran
                                                            </th>
                                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                                                RM
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Tanggungan Anak OKU
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <select wire:model.debounce.200ms="b21" class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
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
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <select wire:model.debounce.200ms="b22" class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
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
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <select wire:model.debounce.200ms="b23" class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
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
                                                <div class="flex items-end justify-end w-full pt-3 text-lg font-bold ">
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
                                class="flex items-center justify-between w-full py-3 mt-4 font-bold border-b border-gray-400"
                                @click="isOpen1 = !isOpen1"
                            >
                                <div>Bahagian C: Tolakan Lain</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div
                                class="mt-2 text-sm text-gray-700"
                                x-show="isOpen1"
                            >
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6">
                                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                                                Butiran
                                                            </th>
                                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                                                RM
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-white">
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                Caruman KWSP bahagian pekerja dibawah umur 55 tahun (jumlah gaji kasar x 11%)
                                                            </td>
                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                                                <div class="flex mt-1 rounded-md shadow-sm">
                                                                    <span class="inline-flex items-center px-2 text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50 sm:text-sm">
                                                                        RM
                                                                    </span>
                                                                    <input wire:model.debounce.200ms="c" class="w-3/4 px-2 py-2 rounded-none form-input rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                </div>
                                                                @error('c')
                                                                    <p class="flex items-center py-1 text-xs italic text-red-500">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                        </svg>
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="" >
                                                <div class="flex items-end justify-end w-full pt-3 text-lg font-bold ">
                                                    <h2>Jumlah C : <span class="text-red-700 ">RM {{ number_format($totalC,2) }}</span></h2>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="flex items-center justify-between w-full py-3 mt-4 font-bold border-b border-gray-400">
                                <div>D. Jumlah Bahagian (A) - (B + C )</div>
                            </div>

                            <div class="" >
                                <div class="flex items-end justify-start w-full pt-3 text-lg font-bold ">
                                    <h2 class="text-red-700 ">RM {{ number_format($totalA - ($totalB1 + $totalB2 + $totalC),2) }}</h2>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="flex items-center justify-between w-full py-3 mt-4 font-bold border-b border-gray-400">
                                <div>E. Tolak Simpanan Tahunan Semasa Tabung Haji (jika ada)</div>
                            </div>

                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span class="inline-flex items-center px-2 text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50 sm:text-sm">
                                    RM
                                </span>
                                <input wire:model.debounce.200ms="e" class="w-full px-2 py-2 rounded-none form-input rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                            </div>
                            @error('e')
                                <p class="flex items-center py-1 text-xs italic text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="" >
                            <div class="flex items-end justify-end w-full pt-3 mt-10 font-bold">
                                Jumlah Zakat Anda (setahun)
                            </div>

                            <div class="text-xl font-bold text-right text-red-700">
                                RM
                                @if($totalA - ($totalB1 + $totalB2 + $totalC) - $totalE < 0)
                                    0.00
                                @elseif($totalA - ($totalB1 + $totalB2 + $totalC) - $totalE < $nisabNegeri)
                                    0.00
                                @else
                                    {{ number_format(($totalA - ($totalB1 + $totalB2 + $totalC) - $totalE) * (2.5/100),2) }}
                                @endif
                            </div>
                        </div>

                        @if($totalA - ($totalB1 + $totalB2 + $totalC) - $totalE < $nisabNegeri)
                        <div class="p-4 mt-4 rounded-md bg-blue-50">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="flex-1 ml-3 md:flex md:justify-between">
                                    <p class="text-sm leading-5 text-blue-700">
                                        Anda tidak layak dikenakan zakat kerana tidak mencapai nisab <span class="font-bold">RM{{ number_format($nisabNegeri,2) }}</span>
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