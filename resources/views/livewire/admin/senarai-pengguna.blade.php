<div>
    <div class="my-4 flex justify-between">
        <div class="flex items-center">
            <span class="mr-2 text-base text-gray-500">Carian : </span>
            <x-form.input class="" label="" value="search" livewire="wire:model=search"/>
        </div>
        <div wire:loading >
            <div class="flex items-center text-white absolute  flex items-center bg-teal-700 p-4 rounded" style="left: 38%; top:55%">
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
            <x-general.table-header class="text-left" value="Peranan" sort="role" livewire="wire:click.prevent=sortBy('role')"/>
            <x-general.table-header class="text-left" value="Status" sort="active" livewire="wire:click.prevent=sortBy('active')"/>
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
                    <x-general.table-body colspan="" class="text-gray-500">
                        @if($lists->role == 0)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-pink-100 text-pink-800">
                                Admin
                            </span>
                        @elseif($lists->role == 1)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800">
                                Ejen
                            </span>
                        @endif
                    </x-general.table-body>
                    <x-general.table-body colspan="" class="text-gray-500">
                        @if($lists->active == 2)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-pink-100 text-pink-800">
                                Ditolak
                            </span>
                        @elseif($lists->active == 1)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800">
                                Aktif
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-orange-100 text-orange-800">
                                Tidak Aktif
                            </span>
                        @endif
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

        {{ $list->links('pagination::tailwind') }}
    </x-general.table>
</div>