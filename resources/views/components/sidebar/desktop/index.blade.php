<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <div class="flex flex-col flex-grow bg-teal-600 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center justify-center flex-shrink-0 px-4">
                <x-general.logo class="h-20 w-auto"/>
            </div>
            <div class="mt-5 flex-1 flex flex-col overflow-y-auto">
                <div class="overflow-y-auto">
                    <nav class="px-2 space-y-1">
                        <x-sidebar.desktop.nav-item route="home" label="Halaman Utama" uri="home">
                            <x-heroicon-o-home class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                        </x-sidebar.desktop.nav-item>

                        <x-sidebar.desktop.nav-item route="maklumatPengguna" label="Maklumat Pengguna" uri="maklumat-pengguna">
                            <x-heroicon-o-user class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                        </x-sidebar.desktop.nav-item>

                        <x-sidebar.desktop.nav-item route="akaun" label="Akaun" uri="akaun">
                            <x-heroicon-o-credit-card class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                        </x-sidebar.desktop.nav-item>

                        <x-sidebar.desktop.nav-item route="pembayar" label="Pembayar Zakat" uri="pembayar">
                            <x-heroicon-o-user-group class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                        </x-sidebar.desktop.nav-item>

                        <x-sidebar.desktop.parent-nav-item label="Kalkulator Zakat">
                            <x-slot name="svg">
                                <x-heroicon-o-calculator class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                            </x-slot>

                            <div x-show="isOpen" x-cloak>
                                <x-sidebar.desktop.child-nav-item alpine="x-data={id:1} @click=$dispatch('open-calculator',{id})" label="Pendapatan"/>
                                <x-sidebar.desktop.child-nav-item alpine="x-data={id:2} @click=$dispatch('open-calculator',{id})" label="Perniagaan"/>
                                <x-sidebar.desktop.child-nav-item alpine="x-data={id:3} @click=$dispatch('open-calculator',{id})" label="Harta"/>
                                <x-sidebar.desktop.child-nav-item alpine="x-data={id:4} @click=$dispatch('open-calculator',{id})" label="KWSP"/>
                                <x-sidebar.desktop.child-nav-item alpine="x-data={id:5} @click=$dispatch('open-calculator',{id})" label="ASB"/>
                            </div>
                        </x-sidebar.desktop.parent-nav-item>

                        <x-sidebar.hr/>

                        <x-sidebar.desktop.nav-item route="home" label="Tetapan" uri="">
                            <x-heroicon-o-cog class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                        </x-sidebar.desktop.nav-item>

                        <x-sidebar.desktop.nav-item route="home" label="Bantuan" uri="">
                            <x-heroicon-o-question-mark-circle class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                        </x-sidebar.desktop.nav-item>

                        <x-sidebar.desktop.nav-item route="home" label="Privasi" uri="">
                            <x-heroicon-o-shield-check class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150"/>
                        </x-sidebar.desktop.nav-item>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>