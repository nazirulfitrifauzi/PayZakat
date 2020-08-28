<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col flex-grow bg-teal-600 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center justify-center flex-shrink-0 px-4">
                <img class="h-8 w-auto" src="{{ asset('img/logo/csc.png') }}" alt="CSC logo">
            </div>
            <div class="mt-5 flex-1 flex flex-col overflow-y-auto">
                <div class="overflow-y-auto">
                    <nav class="px-2 space-y-1">
                        <a href="{{ route('home') }}" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 @if(Route::current()->uri == "home") {{ 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' }} @else {{ 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }} @endif">
                            <svg class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Halaman Utama
                        </a>

                        <div @if(\Request::is('pengguna/*')) x-data="{ isOpen: true }" @else x-data="{ isOpen: false }" @endif>
                            <div class="cursor-pointer group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500"
                                @click="isOpen = !isOpen"
                            >
                                <svg class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="user w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Maklumat Pengguna
                                <svg x-show="!isOpen" x-cloak viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6 ml-auto mr-3"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <svg x-show="isOpen" x-cloak viewBox="0 0 20 20" fill="currentColor" class="chevron-down w-6 h-6 ml-auto mr-3"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>

                            <div x-show="isOpen" x-cloak>
                                <a href="{{ route('pengguna.peribadi') }}" class="mt-1 ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 {{ (\Request::is('pengguna/peribadi')) ? 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' : 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }}">
                                    Peribadi
                                </a>
                                <a href="{{ route('pengguna.alamat') }}" class="mt-1 ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 {{ (\Request::is('pengguna/alamat')) ? 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' : 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }}">
                                    Alamat
                                </a>
                                {{-- <a href="{{ route('pengguna.kebajikan') }}" class="ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 {{ (\Request::is('pengguna/kebajikan')) ? 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' : 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }}">
                                    Kebajikan
                                </a> --}}
                            </div>
                        </div>

                        <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 @if(Route::current()->uri == "akaun") {{ 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' }} @else {{ 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }} @endif">
                            <svg class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            Akaun Maya
                        </a>

                        @if (Auth()->user()->role == "2")
                            <a href="{{ route('pembayar') }}" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 @if(Route::current()->uri == "pembayar") {{ 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' }} @else {{ 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }} @endif">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Pembayar Zakat
                            </a>
                        @endif

                        <div x-data="{ isOpen: false }">
                            <div class="cursor-pointer group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500"
                                @click="isOpen = !isOpen"
                            >
                                <svg class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                Kalkulator Zakat
                                <svg x-show="!isOpen" x-cloak viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6 ml-auto mr-3"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <svg x-show="isOpen" x-cloak viewBox="0 0 20 20" fill="currentColor" class="chevron-down w-6 h-6 ml-auto mr-3"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>

                            <div x-show="isOpen" x-cloak>
                                <div
                                    class="ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500 cursor-pointer"
                                    x-data="{id: 1}"
                                    @click="$dispatch('open-calculator',{id})"
                                >
                                    Pendapatan
                                </div>
                                <div
                                    class="ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500 cursor-pointer"
                                    x-data="{id: 2}"
                                    @click="$dispatch('open-calculator',{id})"
                                >
                                    Perniagaan
                                </div>
                                <div
                                    class="ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500 cursor-pointer"
                                    x-data="{id: 3}"
                                    @click="$dispatch('open-calculator',{id})"
                                >
                                    Harta
                                </div>
                                <div
                                    class="ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500 cursor-pointer"
                                    x-data="{id: 4}"
                                    @click="$dispatch('open-calculator',{id})"
                                >
                                    KWSP
                                </div>
                                <div
                                    class="ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500 cursor-pointer"
                                    x-data="{id: 5}"
                                    @click="$dispatch('open-calculator',{id})"
                                >
                                    ASB
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <hr class="h-px mt-6 bg-teal-700 border-none">
                <div class="mt-6 flex-1 h-0 overflow-y-auto">
                    <nav class="px-2 space-y-1">
                        <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 @if(Route::current()->uri == "") {{ 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' }} @else {{ 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }} @endif">
                            <svg class="mr-4 h-6 w-6 text-teal-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Tetapan
                        </a>
                        <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 @if(Route::current()->uri == "") {{ 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' }} @else {{ 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }} @endif">
                            <svg class="mr-4 h-6 w-6 text-teal-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Bantuan
                        </a>
                        <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 @if(Route::current()->uri == "") {{ 'text-white bg-teal-700 focus:outline-none focus:bg-teal-500' }} @else {{ 'text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500' }} @endif">
                            <svg class="mr-4 h-6 w-6 text-teal-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            Privasi
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>