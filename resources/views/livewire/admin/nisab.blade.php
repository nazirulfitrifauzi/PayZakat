@php
    $currYear = \Carbon\Carbon::now()->format('Y');
    $year = \Carbon\Carbon::now()->format('Y');
    $year = $year-2;
@endphp

<div>
    <div class="mx-auto mt-8 px-6 flex justify-between">
        <div class="flex items-center">
            <h2 class="text-lg font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                Tetapan Nisab Tahun
            </h2>
            <x-form.dropdown class=" ml-3" label="" value="year" default="no">
                @for($x = $year; $x <= $currYear; $x++)
                    <option value="{{ $x }}" {{ ($x == $currYear) ? 'selected' : '' }}>{{ $x }}</option>
                @endfor
            </x-form.dropdown>
        </div>

        @if ($stateNisab->count() > 0 )
            <div class="flex items-center" x-data="{ open: false }">
                <x-general.button.icon-button href="" target="" label="Tambah Nisab" color="blue" livewire="" @click="open = true">
                    <x-heroicon-o-plus-circle class="-ml-0.5 mr-2 h-6 w-6"/>
                </x-general.button.icon-button>

                <x-general.modal title="Tambah Nisab" submit="Tambah" cancel="Batal">
                    <div class="mt-3 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700">Tahun</label>
                        <div class="text-sm leading-5 font-medium text-gray-700 col-span-2">{{ $this->year }}</div>
                    </div>
                    <div class="mt-3 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex  items-center col-span-1">Negeri</label>
                        <x-form.dropdown class="text-sm leading-5 text-gray-500 col-span-2" label="" value="" default="yes">
                            @foreach ($stateNisab as $item)
                                <option value="{{ $item->id }}">{{ $item->description }}</option>
                            @endforeach
                        </x-form.dropdown>
                    </div>
                </x-general.modal>
            </div>
        @endif
    </div>


    <div class="mx-auto px-0 my-8 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">

    {{-- <div class="my-4 flex justify-between">
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
    </div> --}}

    {{-- <x-general.table>
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
    </x-general.table> --}}

        <x-general.grid class="mt-2" mobile="1" gap="5" sm="1" md="1" lg="1" xl="2">
            @foreach ($state as $item)
                <x-general.card class=" bg-gray-100 p-5 cursor-pointer hover:bg-teal-100">
                    <div class="flex justify-between items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10" src="{{ asset('img/state/'.$item->state->img) }}" alt="">
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <p class="text-cool-gray-700 text-xl font-semibold">{{ $item->state->description }}</p>
                        </div>
                        <div>
                            <p class="font-bold text-2xl">RM {{ number_format($item->value,2) }}</p>
                        </div>
                    </div>
                </x-general.card>
            @endforeach
        </x-general.grid>

        @if($state->isEmpty())
            <x-general.card class=" bg-gray-100 p-5">
                <div class="flex justify-center">
                    <p class="text-cool-gray-700 text-xl font-semibold">Tiada Data</p>
                </div>
            </x-general.card>
        @endif
    </div>
</div>