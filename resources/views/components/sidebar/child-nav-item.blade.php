<a
    href="{{ route($route) }}"
    class="ml-10 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150
    @if(\Request::is($uri))
        text-white bg-teal-700 focus:outline-none focus:bg-teal-500
    @else
        text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500
    @endif"
>
    {{ $slot }}
    {{ $label }}
</a>