<header>
    <div class="w-full bg-cover bg-center rounded-b-3xl" style="height:14rem; background-image: url(https://ineed-allah.com/wp-content/uploads/2020/05/Reflections-on-Zakat-Third-Pillar-of-Islam-.jpg);">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center mt-8">
                <h1 class="text-white hidden italic font-bold uppercase md:block text-3xl">Pay <span class="underline text-teal-400">Zakat</span></h1>
            </div>
        </div>
    </div>
</header>
<div class="bg-white absolute w-full bg-opacity-0" style="top:0px">
    <div class="px-4 sm:px-6 lg:mx-auto lg:px-8">
        <div class="py-4 md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <!-- Profile -->
                <div class="flex items-center">
                    <img class="hidden h-15 w-15 rounded-full sm:block object-cover" src="{{ (is_null(auth()->user()->image)) ? asset('img/avatar/avatar.jpg') : asset('storage/' . auth()->user()->image) }}" alt="">
                    <div class="mx-auto sm:mx-0">
                        <div class="mt-4 flex justify-center flex-col sm:mt-0 sm:flex-row sm:justify-start items-center">
                            <img class="h-15 w-15 rounded-full sm:hidden object-cover" src="{{ (is_null(auth()->user()->image)) ? asset('img/avatar/avatar.jpg') : asset('storage/' . auth()->user()->image) }}" alt="">
                            <h1 class="mt-3 md:mt-0 ml-3 text-2xl font-bold leading-7 text-cool-gray-100 sm:leading-9 sm:truncate">
                                Selamat Pagi, {{ Auth()->user()->name }}
                            </h1>
                        </div>
                        <dl class="px-12 sm:px-0 mt-2 flex flex-col text-xs sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                            <dt class="sr-only">IC No</dt>
                            <dd class="flex items-center text-xs leading-5 text-cool-gray-100 font-medium capitalize sm:mr-6">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-cool-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="identification w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                                </svg>
                                IC : 910418-06-5155
                            </dd>

                            <dt class="sr-only">Ejen ID</dt>
                            <dd class="flex items-center text-xs leading-5 text-cool-gray-100 font-medium capitalize sm:mr-6">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor" class="finger-print w-6 h-6">
                                    <path fill-rule="evenodd" d="M6.625 2.655A9 9 0 0119 11a1 1 0 11-2 0 7 7 0 00-9.625-6.492 1 1 0 11-.75-1.853zM4.662 4.959A1 1 0 014.75 6.37 6.97 6.97 0 003 11a1 1 0 11-2 0 8.97 8.97 0 012.25-5.953 1 1 0 011.412-.088z" clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd" d="M5 11a5 5 0 1110 0 1 1 0 11-2 0 3 3 0 10-6 0c0 1.677-.345 3.276-.968 4.729a1 1 0 11-1.838-.789A9.964 9.964 0 005 11zm8.921 2.012a1 1 0 01.831 1.145 19.86 19.86 0 01-.545 2.436 1 1 0 11-1.92-.558c.207-.713.371-1.445.49-2.192a1 1 0 011.144-.83z" clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd" d="M10 10a1 1 0 011 1c0 2.236-.46 4.368-1.29 6.304a1 1 0 01-1.838-.789A13.952 13.952 0 009 11a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                Ejen ID : A512036
                            </dd>

                            <dt class="sr-only">VA ID</dt>
                            <dd class="flex items-center text-xs leading-5 text-cool-gray-100 font-medium sm:mr-6 sm:mt-0 capitalize">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                VA ID : 1645-3254455-7
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div class="hidden lg:flex space-x-3 md:mt-0 md:ml-4">
                <!-- Notification btn -->
                <div class="ml-3 relative"  x-data="{ notiOpen: false }" @keydown.window.escape="notiOpen = false" @click.away="notiOpen = false">
                    <button @click="notiOpen = !notiOpen"
                        class="relative p-2 bg-white text-teal-600 align-middle rounded-full hover:text-white hover:bg-teal-600 focus:outline-none ">
                        <div class="flex">
                            <x-heroicon-o-bell class="w-6 h-6" />
                        </div>
                        <span class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                    </button>
                    <div x-show="notiOpen"
                        x-description="Profile dropdown panel, show/hide based on dropdown state."
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="origin-top-right absolute right-0 mt-1 w-48 rounded-md shadow-lg" style="display: none;">
                        <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a  href="#" class="flex px-2 py-2  hover:bg-cool-gray-100 transition ease-in-out duration-150">
                                <p class="block pt-1 text-sm text-cool-gray-700" role="menuitem">Notification 1</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Setting btn -->
                <div class="ml-3 relative" x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false">
                    <button @click="open = !open"
                        class="p-2 bg-white text-teal-600 align-middle rounded-full hover:text-white hover:bg-teal-600 focus:outline-none ">
                        <div class="flex">
                            <x-heroicon-o-cog class="w-6 h-6" />
                        </div>
                    </button>
                    <div x-show="open"
                        x-description="Profile dropdown panel, show/hide based on dropdown state."
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="origin-top-right absolute right-0 mt-1 w-48 rounded-md shadow-lg" style="display: none;">
                        <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                            <a href="{{ route('tetapan') }}" class="flex px-2 py-2  hover:bg-cool-gray-100 transition ease-in-out duration-150">
                                <x-heroicon-o-user class="w-4 h-4 mr-1 text-gray-700" />
                                <p class="block pt-1 text-sm text-cool-gray-700" role="menuitem">Profil Anda</p>
                            </a>

                            <a href="#" class="flex px-2 py-2  hover:bg-cool-gray-100 transition ease-in-out duration-150">
                                <x-heroicon-o-cog class="w-4 h-4 mr-1 text-gray-700" />
                                <p class="block pt-1 text-sm text-cool-gray-700 hover:bg-cool-gray-100 transition ease-in-out duration-150" role="menuitem">Tetapan</p>
                            </a>
                            <a href="{{ route('logout') }}" class="flex px-2 py-2  hover:bg-cool-gray-100 transition ease-in-out duration-150">
                                <x-heroicon-o-logout class="w-4 h-4 mr-1 text-gray-700" />
                                <p class="block pt-1 text-sm text-cool-gray-700 hover:bg-cool-gray-100 transition ease-in-out duration-150" role="menuitem" onclick="event.preventDefault();getElementById('logout-form').submit();">Log keluar</p>
                            </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>