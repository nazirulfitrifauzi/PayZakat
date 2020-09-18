<a
    href="{{ route($route) }}"
    class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150
    @if(Route::current()->uri == $route)
        text-white bg-teal-700 focus:outline-none focus:bg-teal-500
    @else
        text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500
    @endif"
>
    <svg class="mr-4 h-6 w-6 text-teal-200 group-hover:text-teal-200 group-focus:text-teal-200 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
    </svg>
    Halaman Utama
</a>