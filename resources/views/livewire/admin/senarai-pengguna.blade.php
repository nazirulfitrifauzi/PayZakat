<div>
    <div class="my-4  flex items-center">
        <span class="mr-2 text-base text-gray-500">Carian : </span>
        <x-form.input class="w-1/6" label="" value="search" livewire="wire:model=search"/>
    </div>

    <x-general.table>
        <x-slot name="thead">
            <x-general.table-header class="text-left" value="Nama" sort="name" livewire="wire:click.prevent=sortBy('name')"/>
            <x-general.table-header class="text-left" value="Alamat Emel" sort="email" livewire="wire:click.prevent=sortBy('email')"/>
            <x-general.table-header class="text-left" value="Tarikh Daftar" sort="created_at" livewire="wire:click.prevent=sortBy('created_at')"/>
            <x-general.table-header class="text-left" value="Peranan" sort="role" livewire="wire:click.prevent=sortBy('role')"/>
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