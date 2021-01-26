<div class="flex justify-between my-4">
        <div class="flex items-center">
            <span class="mr-2 text-base text-gray-500">Carian : </span>
            <x-form.input class="" label="" value="search" livewire=""/>
        </div>
        <div wire:loading  >
            <div class="flex items-center text-white absolute   bg-teal-700 p-4 rounded" style="left: 38%; top:55%">
                <x-heroicon-o-cog class="-ml-0.5 mr-2 h-8 w-8 animate-spin"/>
                <p class="text-sm">Sedang memuatkan<span class="animate-ping">...</span></p>
            </div>
        </div>
    </div>

    <x-general.table>
        <x-slot name="thead">
            <x-general.table-header class="text-left" value="Bil" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Nama" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="No K/P" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Tindakan" sort="" livewire=""/>
        </x-slot>
        <x-slot name="tbody">
            <tr>
                <x-general.table-body colspan="" class="font-medium text-gray-900">
                    1
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-gray-500">
                    Muhammad Ahmad Bin Azman
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-gray-500">
                    991212102121
                </x-general.table-body>
                <x-general.table-body colspan="" class="font-medium text-right">
                    <div class="flex justify-start">
                        <x-general.button.icon-button href="{{route('ppz.refundAplication')}}" target="" label="Butiran" color="indigo" livewire="">
                            <x-heroicon-s-clipboard-list class="-ml-0.5 mr-2 h-4 w-4"/>
                        </x-general.button.icon-button>

                        <x-general.button.icon-button href="" target="" label="Terima" color="green" livewire="">
                            <x-heroicon-s-shield-check class="-ml-0.5 mr-2 h-4 w-4"/>
                        </x-general.button.icon-button>

                        <x-general.button.icon-button href="" target="" label="Tolak" color="red" livewire="">
                            <x-heroicon-s-trash class="-ml-0.5 mr-2 h-4 w-4"/>
                        </x-general.button.icon-button>
                    </div>
                </x-general.table-body>
            </tr>
        </x-slot>
        {{-- {{ $list->links('pagination::tailwind') }} --}}
    </x-general.table>

</div>
