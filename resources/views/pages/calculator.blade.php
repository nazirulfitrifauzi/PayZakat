<div class="fixed inset-0 overflow-hidden mt-16"
    x-data="{ open: false }"
    x-cloak
    x-show="open"
    @open-calculator.window="if ($event.detail.id == 1) open = true"
>
    <div class="absolute inset-0 overflow-hidden">
        <section
            @click.away="open = false;"
            class="absolute inset-y-0 pl-16 max-w-full right-0 flex"
        >
            <div class="w-screen max-w-xl"
                x-description="Slide-over panel, show/hide based on slide-over state."
                x-show="open"
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
                                    Kalkulator Zakat
                                </h2>
                                <div class="h-7 flex items-center">
                                    <button aria-label="Close panel" class="text-teal-200 hover:text-white transition ease-in-out duration-150" @click="open = false" >
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
                                        <div x-data="{ isOpen: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen = !isOpen"
                                            >
                                                <div>Bahagian A : Komponen Pendapatan</div>
                                                <svg x-show="!isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen"
                                            >
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
                                            </div>
                                        </div>
                                        <div x-data="{ isOpen: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen = !isOpen"
                                            >
                                                <div>B1 : Had Kifayah Isi Rumah</div>
                                                <svg x-show="!isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen"
                                            >
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
                                            </div>
                                        </div>
                                        <div x-data="{ isOpen: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen = !isOpen"
                                            >
                                                <div>B2 : Had Kifayah Tambahan (Jika Berkaitan)</div>
                                                <svg x-show="!isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen"
                                            >
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
                                            </div>
                                        </div>
                                        <div x-data="{ isOpen: false }">
                                            <button
                                                class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                                                @click="isOpen = !isOpen"
                                            >
                                                <div>Bahagian C: Tolakan Lain</div>
                                                <svg x-show="!isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                                <svg x-show="isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                            </button>

                                            <div
                                                class="text-gray-700 text-sm mt-2"
                                                x-show="isOpen"
                                            >
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
                                            </div>
                                        </div>
                                        <div >
                                            <div class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4">
                                                <div>D. Jumlah Bahagian (A) - (B + C )</div>
                                            </div>

                                            <div class="text-gray-700 text-sm mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
                                            </div>
                                        </div>
                                        <div >
                                            <div class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4">
                                                <div>E. Tolak Simpanan Tahunan Semasa Tabung Haji (jika ada)</div>
                                            </div>

                                            <div class="text-gray-700 text-sm mt-2">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae, dolorem, vitae minima eveniet, molestias quia praesentium.
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