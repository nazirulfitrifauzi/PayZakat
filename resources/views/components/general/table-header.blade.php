<th {{ $attributes->merge(['class' => 'px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider']) }}
    {{ $livewire }}
>
    <div class="flex cursor-pointer">
        <span class="mr-2">{{ $value }}</span>
        @if ($sort != "")
            @include('pages.misc.sort_icon', ['field' => $sort ])
        @endif
    </div>
</th>