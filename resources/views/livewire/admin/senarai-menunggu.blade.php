@php
    $header = collect(['Nama','Alamat Emel','Tarikh Daftar','Tindakan']);
@endphp

<x-general.table>
    <x-slot name="thead">
        @foreach($header as $value)
            <x-general.table-header class="{{ ($value == 'Tindakan') ? 'text-center' : 'text-left' }}" value="{{ $value }}"/>
        @endforeach
    </x-slot>
    <x-slot name="tbody">
        @forelse ($list as $lists)
            <tr>
                <x-general.table-body colspan="" class="font-medium text-gray-900">
                    {{ $lists->name }}
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-gray-500">
                    {{ $lists->email }}
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-gray-500">
                    {{ $lists->created_at->format('d F Y') }}
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-right font-medium">
                    <div class="flex justify-center">
                        <x-general.button.icon-button label="Terima" livewire="wire:click=approve({{ $lists->id }})" class="text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                            <x-heroicon-s-check class="-ml-0.5 mr-2 h-4 w-4"/>
                        </x-general.button.icon-button>

                        <x-general.button.icon-button label="Tolak" livewire="wire:click=reject({{ $lists->id }})" class="text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700">
                            <x-heroicon-s-trash class="-ml-0.5 mr-2 h-4 w-4"/>
                        </x-general.button.icon-button>
                    </div>
                </x-general.table-body>
            </tr>
        @empty
            <tr>
                <x-general.table-body colspan="4" class="text-gray-500 text-center">
                    Tiada Data
                </x-general.table-body>
            </tr>
        @endforelse
    </x-slot>
</x-general.table>