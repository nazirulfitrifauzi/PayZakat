<div x-show="sidebarOpen" class="lg:hidden" style="display: none;">
    <div class="fixed inset-0 flex z-40">
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
            <div class="absolute inset-0 bg-cool-gray-600 opacity-75"></div>
        </div>
        <div
            x-show="sidebarOpen"
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-teal-600" style="display: none;">

            <div class="absolute top-0 right-0 -mr-14 p-1">
                <button x-show="sidebarOpen" @click="sidebarOpen = false" class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-cool-gray-600" aria-label="Close sidebar" style="display: none;">
                    <x-heroicon-o-x class="h-6 w-6 text-white"/>
                </button>
            </div>
            <div class="flex-shrink-0 flex items-center justify-center px-4">
                <x-general.logo class="h-16 w-auto"/>
            </div>
            <div class="mt-5 overflow-y-auto">
                <nav class="px-2 space-y-1">
                    <x-sidebar.nav-item route="home" label="Halaman Utama" uri="home">
                        <x-heroicon-o-home class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item route="maklumatPengguna" label="Maklumat Pengguna" uri="maklumat-pengguna">
                        <x-heroicon-o-user class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item route="akaun" label="Akaun" uri="akaun">
                        <x-heroicon-o-credit-card class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item route="pembayar" label="Pembayar Zakat" uri="pembayar">
                        <x-heroicon-o-user-group class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item route="kalkulator" label="Zakat Kalkulator" uri="kalkulator">
                        <x-heroicon-o-calculator class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.hr/>

                    <x-sidebar.nav-item route="home" label="Tetapan" uri="">
                        <x-heroicon-o-cog class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item route="home" label="Bantuan" uri="">
                        <x-heroicon-o-question-mark-circle class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                    </x-sidebar.nav-item>

                    <x-sidebar.nav-item route="home" label="Privasi" uri="">
                        <x-heroicon-o-shield-check class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                    </x-sidebar.nav-item>
                </nav>
            </div>
        </div>
        <div class="flex-shrink-0 w-14">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>