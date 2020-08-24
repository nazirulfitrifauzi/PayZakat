<div class="fixed inset-0 overflow-hidden mt-16"
    x-data="{ Open3: false }"
    x-cloak
    x-show="Open3"
    @open-calculator.window="if ($event.detail.id == 3) Open3 = true"
>
    <div class="absolute inset-0 overflow-hidden">
        <section
            @click.away="Open3 = false;"
            class="absolute inset-y-0 pl-16 max-w-full right-0 flex"
        >
            <div class="w-screen max-w-xl shadow-2xl"
                x-description="Slide-over panel, show/hide based on slide-over state."
                x-show="Open3"
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
            >
                <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                    <div class="flex-1 h-0 overflow-y-auto">
                        <header class="space-y-1 py-6 px-4 bg-teal-700 sm:px-6">
                            <div class="flex items-center justify-between space-x-3">
                                <h2 class="text-lg leading-7 font-medium text-white">
                                    Kalkulator Zakat Harta
                                </h2>
                                <div class="h-7 flex items-center">
                                    <button aria-label="Close panel" class="text-teal-200 hover:text-white transition ease-in-out duration-150" @click="Open3 = false" >
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
                                        <div x-data="{ isOpen3: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen3 = !isOpen3"
                                            >
                                                <div>A : Zakat Emas</div>
                                                <svg x-show="!isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen3"
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
                                                                                Jongkong emas, syiling emas, kepingan emas dan sebagainya.
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-gray-50">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Sijil pelaburan emas patuh syariah
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-white">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Emas Perhiasan wanita yang tidak dipakai
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-gray-50">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Emas Perhiasan Wanita (jumlah atas uruf sahaja)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-white">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Emas dicagarkan (Jumlah nilai emas - jumlah hutang - upah simpan)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="" >
                                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                                    <h2>Jumlah A : <span class="text-red-700 ">RM 0.00</span></h2>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-data="{ isOpen3: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen3 = !isOpen3"
                                            >
                                                <div>B : Wang Simpanan</div>
                                                <svg x-show="!isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen3"
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
                                                                                Akaun Simpanan/Akaun Semasa. Akaun Mata Wang Asing
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-gray-50">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Deposit Tetap/Deposit Berstruktur
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-white">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Simpanan di Takaful/Insuran (Nilai tunai polisi takaful / Insuran yang boleh dikeluarkan)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-gray-50">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Jumlah baki KWSP ketika umur 55 tahun ke atas (Bagi yang MASIH BEKERJA selepas umur 55 tahun)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-white">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Jumlah baki KWSP (Bagi yang TIDAK BEKERJA selepas umur 55 tahun)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-gray-50">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Lain-lain tunai (peti besi, simpanan di rumah dan sebagainya)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-white">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Hutang boleh terima daripada penghutang
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="" >
                                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                                    <h2>Jumlah B : <span class="text-red-700 ">RM 0.00</span></h2>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-data="{ isOpen3: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen3 = !isOpen3"
                                            >
                                                <div>C : Saham & Pelaburan</div>
                                                <svg x-show="!isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen3"
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
                                                                                Saham Tersenarai : Saham biasa, warrant dan sebagainya
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-gray-50">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Saham Amanah (Unit Trust)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-white">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Dana Dagangan Bursa (ETFs)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-gray-50">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Amanah Pelaburan Hartanah (REITs)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-white">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Lain-lain pelaburan di pasaran modal dan pasaran kewangan
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="" >
                                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                                    <h2>Jumlah C : <span class="text-red-700 ">RM 0.00</span></h2>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-data="{ isOpen3: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen3 = !isOpen3"
                                            >
                                                <div>D : Tolak Pelarasan</div>
                                                <svg x-show="!isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen3"
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
                                                                                Pelarasan Elak Dua Kali Zakat : Jumlah harta yang diperolehi dari pendapatan semasa yang telah dizakatkan
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="bg-white">
                                                                            <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                                                                Pelarasan Harta Tidak Patuh Syariah : Pendapatan dan keuntungan yang tidak patuh syariah
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="" >
                                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                                    <h2>Jumlah D : <span class="text-red-700 ">RM 0.00</span></h2>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-data="{ isOpen3: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen3 = !isOpen3"
                                            >
                                                <div>E : Penentuan Nisab</div>
                                                <svg x-show="!isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen3"
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
                                                                                Tambahkan sebarang simpanan di institusi yang bayar zakat bagi pemilik (Ini hanya untuk penentuan kecukupan nisab sahaja)
                                                                            </td>
                                                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <span class="inline-flex items-center px-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                                                        RM
                                                                                    </span>
                                                                                    <input id="a1" class="form-input w-3/4 px-2 py-2 rounded-none rounded-r-md sm:text-sm sm:leading-5" placeholder="0.00">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="" >
                                                                <div class="w-full font-bold pt-3 flex justify-end items-end text-lg ">
                                                                    <h2>Jumlah E : <span class="text-red-700 ">RM 0.00</span></h2>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div >
                                            <div class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4">
                                                <div>F : Jumlah Keseluruhan Harta</div>
                                            </div>

                                            <div class="" >
                                                <div class="w-full font-bold pt-3 flex justify-start items-end text-lg ">
                                                    <h2 class="text-red-700 ">RM 0.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div >
                                            <div class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4">
                                                <div>Jumlah Harta Layak Kena Zakat</div>
                                            </div>

                                            <div class="" >
                                                <div class="w-full font-bold pt-3 flex justify-start items-end text-lg ">
                                                    <h2 class="text-red-700 ">RM 0.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" >
                                            <div class="w-full font-bold pt-3 flex justify-end items-end mt-10">
                                                Jumlah Zakat Anda (setahun)
                                            </div>

                                            <div class="text-red-700 text-xl font-bold text-right">
                                                RM 0.00
                                            </div>
                                        </div>

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

                                    </div>
                                    <!-- end calculator -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>