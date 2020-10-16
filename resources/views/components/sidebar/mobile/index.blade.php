<div x-show="sidebarOpen" class="lg:hidden" style="display: none;">
    <div class="fixed inset-0 z-40 flex">
        <div
            @click="sidebarOpen = false"
            x-show="sidebarOpen"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0" style="display: none;">
            <div class="absolute inset-0 opacity-75 bg-cool-gray-600"></div>
        </div>
        <div
            x-show="sidebarOpen"
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-teal-600" style="display: none;">

            <div class="absolute top-0 right-0 p-1 -mr-14">
                <button x-show="sidebarOpen" @click="sidebarOpen = false" class="flex items-center justify-center w-12 h-12 rounded-full focus:outline-none focus:bg-cool-gray-600" aria-label="Close sidebar" style="display: none;">
                    <x-heroicon-o-x class="w-6 h-6 text-white"/>
                </button>
            </div>
            <div class="flex items-center justify-center flex-shrink-0 px-4">
                <x-general.logo class="w-auto h-16"/>
            </div>
            <div class="mt-5 overflow-y-auto">
                <nav class="px-2 space-y-1">
                    <x-sidebar.nav-item route="home" label="Halaman Utama" uri="home">
                        <x-heroicon-o-home class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                    </x-sidebar.nav-item>

                    @if (auth()->user()->role == 1) <!-- agent -->
                        <x-sidebar.nav-item route="maklumatPengguna" label="Maklumat Pengguna" uri="maklumat-pengguna">
                            <x-heroicon-o-user class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item route="akaun" label="Akaun" uri="akaun">
                            <x-heroicon-o-credit-card class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item route="pembayar.senarai" label="Pembayar Zakat" uri="pembayar">
                            <x-heroicon-o-user-group class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item route="asnaf.senarai" label="Asnaf" uri="asnaf">
                            <x-heroicon-o-users class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item route="kalkulator" label="Zakat Kalkulator" uri="kalkulator">
                            <x-heroicon-o-calculator class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item route="bayar" label="Bayar Zakat" uri="bayar">
                            <x-heroicon-o-currency-dollar class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                        </x-sidebar.nav-item>
                    @endif

                    <x-sidebar.hr/>

                    <x-sidebar.nav-item route="home" label="Tetapan" uri="">
                        <x-heroicon-o-cog class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item route="home" label="Bantuan" uri="">
                        <x-heroicon-o-question-mark-circle class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item route="home" label="Privasi" uri="">
                        <x-heroicon-o-shield-check class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                    </x-sidebar.nav-item>
                </nav>
            </div>
        </div>
        <div class="flex-shrink-0 w-14">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>