<div>
    <div class="my-4 flex justify-between">
        <div class="flex items-center">
            <span class="mr-2 text-base text-gray-500">Carian : </span>
            <x-form.input class="" label="" value="search" livewire="wire:model=search"/>
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
            <x-general.table-header class="text-left" value="Nama" sort="name" livewire="wire:click.prevent=sortBy('name')"/>
            <x-general.table-header class="text-left" value="Alamat Emel" sort="email" livewire="wire:click.prevent=sortBy('email')"/>
            <x-general.table-header class="text-left" value="Tarikh Daftar" sort="created_at" livewire="wire:click.prevent=sortBy('created_at')"/>
            <x-general.table-header class="text-left" value="Tindakan" sort="" livewire=""/>
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
                            <x-general.button.icon-button href="" target="" label="Terima" color="indigo" livewire="wire:click=approve({{ $lists->id }})">
                                <x-heroicon-s-check class="-ml-0.5 mr-2 h-4 w-4"/>
                            </x-general.button.icon-button>

                            <x-general.button.icon-button href="" target="" label="Tolak" color="red" livewire="wire:click=reject({{ $lists->id }})">
                                <x-heroicon-s-trash class="-ml-0.5 mr-2 h-4 w-4"/>
                            </x-general.button.icon-button>
                        </div>
                    </x-general.table-body>
                </tr>
            @empty
                <tr>
                    <x-general.table-body colspan="5" class="text-gray-500 text-center">
                        Tiada Data
                    </x-general.table-body>
                </tr>
            @endforelse
        </x-slot>

        {{ $list->links('pagination::tailwind') }}
    </x-general.table>
</div>
