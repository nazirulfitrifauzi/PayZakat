<div class="grid grid-cols-1 gap-5">
    <div class="flex items-center gap-3">
        <div>
            <h1 class="font-semibold text-gray-700">1. Jenis Zakat</h1>
        </div>
        <div>
            <select class="form-select text-sm tracking-wide">
                <option>Pendapatan</option>
                <option disabled>Perniagaan</option>
                <option disabled>Harta</option>
                <option disabled>KWSP</option>
                <option disabled>ASB</option>
            </select>
        </div>
    </div>
    <div class="flex items-center gap-3">
        <div>
            <h1 class="font-semibold text-gray-700">2. Pilih Pembayar Zakat & Institusi</h1>
        </div>
        <div>
            <span class="relative inline-flex items-center rounded-lg">
                <input type="text" class="form-input text-sm" placeholder="Carian Kad Pengenalan" wire:model="searchdonor">
                <button class="absolute flex items-center justify-center transition duration-300 ease-in-out inset-y-0 right-0 w-10 rounded-r-lg text-cool-gray-400 hover:text-teal-400">
                    <x-heroicon-o-search-circle class="h-6 w-6"/>
                </button>
            </span>
        </div>
    </div>
    <div class="relative mb-5">
        @if (!empty($searchresult))
            <div class="py-1">
                <h1 class="text-sm font-medium text-gray-600">Hasil Carian</h1>
            </div>
            @foreach ($searchresult as $result)
                <div class="flex items-center py-1">
                    <div class="w-full px-2">
                        {{ $result['name'] }}
                    </div>
                    <div class="w-full px-2">
                        {{ $result['ic_no'] }}
                    </div>
                    <div class="px-2">
                        <select class="form-select text-sm tracking-wide">
                            @foreach ($ppzlist as $ppz)
                                <option value="{{ $ppz->id }}">{{ $ppz->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="px-2">
                        <input type="checkbox" class="form-checkbox text-sm leading-none">
                    </div>
                </div>
            @endforeach
        @endif
        <div class="absolute inset-0 z-10" wire:loading wire:target="searchdonor">
            <div class="flex justify-center">
                <span class="rounded-full p-2 bg-black bg-opacity-50">
                    <x-heroicon-o-globe class="h-6 w-6 animate-spin bg-transparent text-white"/>
                </span>
            </div>
        </div>
    </div>
</div>