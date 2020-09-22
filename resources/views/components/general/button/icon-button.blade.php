<span class="inline-flex rounded-md shadow-sm">
    <button
        {{ $livewire }}
        {{ $attributes->merge(['class' => 'inline-flex items-center px-3 py-2 mx-2 border border-transparent text-sm leading-4 font-medium rounded-md transition ease-in-out duration-150']) }}
    >
        {{ $slot }}
        {{ $label }}
    </button>
</span>