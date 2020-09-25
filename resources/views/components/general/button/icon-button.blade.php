<span class="inline-flex rounded-md shadow-sm">
    <a
        {{ ($href != "") ? $href : 'type=button' }} {{ ($target != "") ? 'target="'.$target.'"' : '' }}
        {{ $livewire }}
        {{ $attributes->merge(['class' => 'cursor-pointer inline-flex items-center px-3 py-2 mx-2 border border-transparent text-sm leading-4 font-medium rounded-md transition ease-in-out duration-150 text-white bg-'.$color.'-500 hover:bg-'.$color.'-400 focus:outline-none focus:border-'.$color.'-700 focus:shadow-outline-'.$color.' active:bg-'.$color.'-700']) }}
    >
        {{ $slot }}
        {{ $label }}
    </a>
</span>