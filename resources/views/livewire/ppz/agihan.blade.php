@php
    $currYear = \Carbon\Carbon::now()->format('Y');
    $year = \Carbon\Carbon::now()->format('Y');
    $year = $year-2;
@endphp

<div>
    <x-general.page-title title="Tetapan Agihan"/>
    <div class="mx-auto mt-8 px-6 flex justify-between">
        {{-- page title --}}
        <div class="flex items-center">
            <h2 class="text-lg font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                Agihan Zakat Bagi Tahun
            </h2>
            <x-form.dropdown class=" ml-3" label="" value="year" default="no">
                @for($x = $year; $x <= $currYear; $x++)
                    <option value="{{ $x }}" {{ ($x == $currYear) ? 'selected' : '' }}>{{ $x }}</option>
                @endfor
            </x-form.dropdown>
        </div>

        {{-- add agihan zakat  --}}
        @if ($PPZData->count() > 0 )
            <div class="flex items-center" x-data="{ open: false }">
                {{-- button add agihan zakat  --}}
                <x-general.button.icon-button href="" target="" label="Tambah Agihan Zakat" color="blue" livewire="" @click="open = true" >
                    <x-heroicon-o-plus-circle class="-ml-0.5 mr-2 h-6 w-6"/>
                </x-general.button.icon-button>

                {{-- modal add agihan zakat  --}}
                <x-general.modal title="Tambah Agihan Zakat" submit="submit" submitLabel="Tambah" cancel="Batal">
                    <div class="mt-3 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700">Tahun</label>
                        <div class="text-sm leading-5 font-medium text-gray-700 col-span-2">{{ $this->year }}</div>
                    </div>
                    <div class="mt-3 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex items-center col-span-1">Pusat Pungutan Zakat</label>
                        <x-form.dropdown class="col-span-2" label="" value="ppz_id" default="yes">
                            @foreach ($PPZData as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </x-form.dropdown>
                    </div>
                    <div class="mt-3 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex items-center">Agihan Zakat (RM)</label>
                        <x-form.input class="col-span-2" label="" value="value" livewire="wire:model=value"/>
                    </div>
                </x-general.modal>
            </div>
        @endif
    </div>
   <diV class="mx-auto px-0 my-6 sm:px-6 lg:px-8">
        <x-general.table>
            <x-slot name="thead">
                <x-general.table-header class="text-left" value="Pusat Pungutan Zakat" sort="" livewire=""/>
                <x-general.table-header class="text-left" value="Agihan Zakat(RM)" sort="" livewire=""/>
                <x-general.table-header class="text-left" value="Tindakan" sort="" livewire=""/>
            </x-slot>
            <x-slot name="tbody">
                @foreach ($ppz as $item)
                    <tr>
                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            {{ $item->ppz->name }}
                        </x-general.table-body>

                        <x-general.table-body colspan="" class="font-medium text-gray-500">
                            RM {{ number_format($item->value,2) }}
                        </x-general.table-body>

                        <x-general.table-body colspan="" class="font-medium text-gray-900">
                            <x-general.button.icon-button href="" target="" label="Agihan Asnaf Terperinci" color="teal" livewire="" @click="open = true" >
                                <x-heroicon-o-pencil-alt class="-ml-0.5 mr-2 h-4 w-4"/>
                            </x-general.button.icon-button>
                        </x-general.table-body>
                    </tr>
                @endforeach  

                @if($ppz->isEmpty())        
                    <tr>
                        <x-general.table-body colspan="4" class="text-gray-500 text-center">
                            Tiada Data
                        </x-general.table-body>
                    </tr>
                @endif
            </x-slot>
          {{-- {{ $list->links('pagination::tailwind') }} --}}
        </x-general.table>
    </diV>

    
    {{-- each PPZ card --}}
    {{-- <div class="mx-auto px-0 my-8 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
        <x-general.grid class="mt-2" mobile="1" gap="5" sm="1" md="1" lg="1" xl="2">
            @foreach ($ppz as $item)
                <x-general.card class=" bg-gray-100 p-5 cursor-pointer hover:bg-teal-100">
                    <div class="flex justify-between items-center">
                        <div class="ml-5 w-0 flex-1">
                            <p class="text-cool-gray-700 text-xl font-semibold">{{ $item->ppz->name }}</p>
                        </div>
                        <div>
                            <p class="font-bold text-2xl">RM {{ number_format($item->value,2) }}</p>
                        </div>
                    </div>
                </x-general.card>
            @endforeach
        </x-general.grid>

        @if($ppz->isEmpty())
            <x-general.card class=" bg-gray-100 p-5">
                <div class="flex justify-center">
                    <p class="text-cool-gray-700 text-xl font-semibold">Tiada Data</p>
                </div>
            </x-general.card>
        @endif
    </div> --}}

    {{-- loading --}}
    <div wire:loading wire:target="year, submit">
        @include('pages.misc.loading')
    </div>
</div>