<div x-data="{ isOpen: false }">
    <div class="cursor-pointer group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md transition ease-in-out duration-150 text-teal-100 hover:text-white hover:bg-teal-500 focus:outline-none focus:bg-teal-500"
        @click="isOpen = !isOpen"
    >
        {{ $svg }}
        {{ $label }}
        <svg x-show="!isOpen" x-cloak viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6 ml-auto mr-3"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <svg x-show="isOpen" x-cloak viewBox="0 0 20 20" fill="currentColor" class="chevron-down w-6 h-6 ml-auto mr-3"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </div>

    {{ $slot }}
</div>