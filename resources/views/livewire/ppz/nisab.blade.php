@php
    $currYear = \Carbon\Carbon::now()->format('Y');
    $year = \Carbon\Carbon::now()->format('Y');
    $year = $year-2;
@endphp

<div>
     <x-general.page-title title="Tetapan Nisab"/>
     
    <div class="mx-auto mt-8 px-6 flex justify-between">
        {{-- page title --}}
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

        {{-- add nisab --}}
        @if ($stateNisab->count() > 0 )
            <div class="flex items-center" x-data="{ open: false }">
                {{-- button add nisab --}}
                <x-general.button.icon-button href="" target="" label="Tambah Nisab" color="blue" livewire="" @click="open = true">
                    <x-heroicon-o-plus-circle class="-ml-0.5 mr-2 h-6 w-6"/>
                </x-general.button.icon-button>

                {{-- modal add nisab --}}
                <x-general.modal title="Tambah Nisab" submit="submit" submitLabel="Tambah" cancel="Batal">
                    <div class="pl-4 pr-4">
                        <div class="mt-3 text-justify grid grid-cols-3">
                            <label for="location" class="text-sm leading-5 font-medium text-gray-700">Tahun</label>
                            <div class="text-sm leading-5 font-medium text-gray-700 col-span-2">{{ $this->year }}</div>
                        </div>
                        <div class="mt-3 text-justify grid grid-cols-3" >
                            <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex items-center col-span-1">Negeri</label>
                            <x-form.dropdown class="col-span-2" label="" value="state_id" default="yes">
                                @foreach ($stateNisab as $item)
                                    <option value="{{ $item->id }}">{{ $item->description }}</option>
                                @endforeach
                            </x-form.dropdown>
                        </div>
                        <div class="mt-3 text-justify grid grid-cols-3" >
                            <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex items-center">Nisab (RM)</label>
                            <x-form.input class="col-span-2" label="" value="value" livewire="wire:model=value"/>
                        </div>
                    </div>
                </x-general.modal>
            </div>
        @endif
    </div>

   {{-- each Negeri card --}}
        <div class="pr-4 pb-8">      
            @foreach ($state as $item)
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg mt-10  ml-4 bg-teal-100">
                    <img class="w-full p-4 bg-gray-100" src="{{ asset('img/state/'.$item->state->img) }}" alt="Sunset in the mountains">
                    <div class="px-4 py-4">
                        <div class="font-bold text-base mb-2 leading-5">{{ $item->state->description }}</div>
                        <div class="">
                            <p class="font-semibold text-teal-700 ">
                            RM {{ number_format($item->value,2) }}
                            </p>
                            <div x-data="{ open: false }">
                                <button class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-1 px-1 rounded w-full mt-4" @click="open = true">
                                        <div class="flex">
                                            <x-heroicon-o-pencil-alt class="h-5 w-5 text-white"/>
                                            <span class="text-sm pt-1 pl-1 text-white sm:text-sm lg:text-xs xl:text-sm">Kemas kini Nisab</span>
                                        </div>
                                    </button>
                                    
                                    {{-- modal update nisab --}}
                                    <x-general.modal title="Kemas kini Nisab" submit="kemaskini" submitLabel="Kemas kini" cancel="Batal"  modalActive="open" modalSize="xl">
                                        <div class="pl-4 pr-4">
                                            <div class="mt-3 text-justify grid grid-cols-3">
                                                <label for="location" class="text-sm leading-5 font-medium text-gray-700">Tahun</label>
                                                <div class="text-sm leading-5 font-medium text-gray-700 col-span-2">{{ $this->year }}</div>
                                            </div>
                                            <div class="mt-3 text-justify grid grid-cols-3" >
                                                <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex items-center col-span-1">Negeri</label>
                                                <x-form.dropdown class="col-span-2" label="" value="state_id" default="" livewire="">
                                                        <option value="{{ $item->state->id }}" selected>{{ $item->state->description }}</option>
                                                </x-form.dropdown>
                                            </div>
                                            <div class="mt-3 text-justify grid grid-cols-3" >
                                                <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex items-center">Nisab (RM)</label>
                                                <x-form.input class="col-span-2" label="" value="" livewire="wire:model=value"/>

                                            </div>
                                        </div>
                                    </x-general.modal>
                            </div>      
                        </div>
                    </div>
                </div>
            @endforeach      
        </div>
        @if($state->isEmpty())          
            <div class="flex justify-center">
                <p class="text-cool-gray-700 text-xl font-semibold">Tiada Data</p>
            </div>
        @endif
        
    {{-- <div class="mx-auto px-0 my-8 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
        <x-general.grid class="mt-2" mobile="1" gap="5" sm="1" md="1" lg="1" xl="2">
            @foreach ($state as $item)
                <x-general.card class=" bg-gray-100 p-5 cursor-pointer hover:bg-teal-100">
                    <div class="flex justify-between items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 rounded" src="{{ asset('img/state/'.$item->state->img) }}" alt="">
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <p class="text-cool-gray-700 text-xl font-semibold">{{ $item->state->description }}</p>
                        </div>
                        <div>
                            <p class="font-bold text-xl">RM {{ number_format($item->value,2) }}</p>
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
    </div> --}}

    {{-- loading --}}
    <div wire:loading wire:target="year, submit">
        @include('pages.misc.loading')
    </div>
</div>