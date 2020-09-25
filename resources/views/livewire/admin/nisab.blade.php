@php
    $currYear = \Carbon\Carbon::now()->format('Y');
    $year = \Carbon\Carbon::now()->format('Y');
    $year = $year-4;
@endphp
<div>
    <div class="my-4 flex justify-between">
        <div class="flex">
            <div class="flex items-center mr-6">
                <span class="mr-2 text-base text-gray-500">Tahun : </span>
                <x-form.dropdown class="" label="" value="year" default="no">
                    @for($x = $year; $x <= $currYear; $x++)
                        <option value="{{ $x }}" {{ ($x == $currYear) ? 'selected' : '' }}>{{ $x }}</option>
                    @endfor
                </x-form.dropdown>
            </div>
            <div class="flex items-center">
                <span class="mr-2 text-base text-gray-500">Carian : </span>
                <x-form.input class="" label="" value="search" livewire="wire:model=search"/>
            </div>
        </div>
        <div wire:loading  >
            <div class="flex items-center text-gray-500">
                <x-heroicon-o-cog class="-ml-0.5 mr-2 h-8 w-8 animate-spin"/>
                <p class="text-sm">Sedang memuatkan<span class="animate-ping">...</span></p>
            </div>
        </div>
        <div class="flex items-center">
            <x-general.button.icon-button href="{{ route('admin.userListExcel') }}" target="_blank" label="Excel" color="green" livewire="">
                <x-heroicon-o-document-text class="-ml-0.5 mr-2 h-6 w-6"/>
            </x-general.button.icon-button>
            <x-general.button.icon-button href="{{ route('admin.userListPdf') }}" target="_blank" label="PDF" color="orange" livewire="">
                <x-heroicon-o-document-report class="-ml-0.5 mr-2 h-6 w-6"/>
            </x-general.button.icon-button>
        </div>
    </div>

    <x-general.table>
        <x-slot name="thead">
            <x-general.table-header class="text-left" value="Negeri" sort="state_id" livewire="wire:click.prevent=sortBy('state_id')"/>
            <x-general.table-header class="text-left" value="Nisab (RM)" sort="value" livewire="wire:click.prevent=sortBy('value')"/>
        </x-slot>
        <x-slot name="tbody">
            @forelse ($list as $lists)
                <tr>
                    <x-general.table-body colspan="" class="font-medium text-gray-900">
                        {{ $lists->state->description }}
                    </x-general.table-body>
                    <x-general.table-body colspan="" class="text-gray-500">
                        {{  number_format($lists->value,2) }}
                    </x-general.table-body>
                </tr>
            @empty
                <tr>
                    <x-general.table-body colspan="2" class="text-gray-500 text-center">
                        Tiada Data
                    </x-general.table-body>
                </tr>
            @endforelse
        </x-slot>

        {{ $list->links('pagination::tailwind') }}
    </x-general.table>
</div>