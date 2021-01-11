<div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
    <button @click.stop="sidebarOpen = true" class="px-4 border-r border-cool-gray-200 text-cool-gray-400 focus:outline-none focus:bg-cool-gray-100 focus:text-cool-gray-600 lg:hidden" aria-label="Open sidebar">
        <svg class="h-6 w-6 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
        </svg>
    </button>
    <div class="flex-1 px-4 flex justify-end sm:px-6 lg:mx-auto lg:px-8">
        <div class="flex-1 flex">
            <h2 class="flex items-center text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                PayZakat
            </h2>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            <!-- Notification btn -->
            <div class="ml-3 relative"  x-data="{ notiOpen: false }" @keydown.window.escape="notiOpen = false" @click.away="notiOpen = false">
                <button @click="notiOpen = !notiOpen"
                    class="relative p-2 bg-gray-200 text-teal-600 align-middle rounded-full hover:text-white hover:bg-teal-600 focus:outline-none ">
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
                        <a href="#" class="flex px-2 py-2  hover:bg-cool-gray-100 transition ease-in-out duration-150">
                            <p  class="block pt-1 text-sm text-cool-gray-700" role="menuitem">Notification 1</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Setting btn -->
            <div class="ml-3 relative" x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false">
                <button @click="open = !open"
                    class="p-2 bg-gray-200 text-teal-600 align-middle rounded-full hover:text-white hover:bg-teal-600 focus:outline-none ">
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
