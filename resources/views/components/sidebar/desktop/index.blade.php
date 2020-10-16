<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto bg-teal-600">
            <div class="flex items-center justify-center flex-shrink-0 px-4">
                <x-general.logo class="w-auto h-20"/>
            </div>
            <div class="flex flex-col flex-1 mt-5 overflow-y-auto">
                <div class="overflow-y-auto">
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

                            <x-sidebar.parent-nav-item label="Kalkulator Zakat" uri="">
                                <x-slot name="svg">
                                    <x-heroicon-o-calculator class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                                </x-slot>

                                <div x-show="isOpen" x-cloak>
                                    <x-sidebar.calc-child-nav-item alpine="x-data={id:1} @click=$dispatch('open-calculator',{id})" label="Pendapatan"/>
                                    <x-sidebar.calc-child-nav-item alpine="x-data={id:2} @click=$dispatch('open-calculator',{id})" label="Perniagaan"/>
                                    <x-sidebar.calc-child-nav-item alpine="x-data={id:3} @click=$dispatch('open-calculator',{id})" label="Harta"/>
                                    <x-sidebar.calc-child-nav-item alpine="x-data={id:4} @click=$dispatch('open-calculator',{id})" label="KWSP"/>
                                    <x-sidebar.calc-child-nav-item alpine="x-data={id:5} @click=$dispatch('open-calculator',{id})" label="ASB"/>
                                </div>
                            </x-sidebar.parent-nav-item>

                            <x-sidebar.nav-item route="bayar" label="Bayar Zakat" uri="bayar">
                                <x-heroicon-o-currency-dollar class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                            </x-sidebar.nav-item>
                        @endif

                        @if (auth()->user()->role == 0) <!-- admin -->
                            <x-sidebar.parent-nav-item label="Pengguna" uri="admin/*">
                                <x-slot name="svg">
                                    <x-heroicon-o-user-group class="w-6 h-6 mr-4 text-teal-200 transition duration-150 ease-in-out group-hover:text-teal-200 group-focus:text-teal-200"/>
                                </x-slot>

                                <div x-show="isOpen" x-cloak>
                                    <x-sidebar.child-nav-item route="admin.userList" label="Semua" uri="admin/senarai-pengguna"/>
                                    <x-sidebar.child-nav-item route="admin.pendingAgent" label="Menunggu Pengesahan" uri="admin/senarai-menunggu"/>
                                    <x-sidebar.child-nav-item route="admin.agentList" label="Ejen Aktif" uri="admin/senarai-ejen"/>
                                    <x-sidebar.child-nav-item route="admin.rejectedAgent" label="Ejen Ditolak" uri="admin/senarai-ditolak"/>
                                </div>
                            </x-sidebar.parent-nav-item>

                            <x-sidebar.nav-item route="admin.nisab" label="Nisab" uri="admin/nisab">
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

                <div class="flex items-end flex-grow mx-auto">
                    <x-general.button.icon-button href="{{ route('logout') }}" target="" label="Log Keluar" color="teal" livewire="" onclick="event.preventDefault();getElementById('logout-form').submit();">
                        <x-heroicon-o-logout class="-ml-0.5 mr-2 h-6 w-6"/>
                    </x-general.button.icon-button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>