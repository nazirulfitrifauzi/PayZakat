<div class="grid grid-cols-1 gap-5">
    <div class="flex items-center gap-3">
        <div>
            <h1 class="font-semibold text-gray-700">1. Pilih Jenis Zakat</h1>
        </div>
        <div>
            <select class="form-select text-sm tracking-wide">
                @foreach ($productlist as $product)
                    <option {{ ($product->product_name != "Pendapatan") ? "disabled" : "" }}>{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="flex items-center gap-3">
        <div>
            <h1 class="font-semibold text-gray-700">2. Pilih Zakat Institusi</h1>
        </div>
        <div>
            <select class="form-select text-sm tracking-wide" wire:model="ppzid">
                <option value="" disabled>Sila Pilih</option>
                @foreach ($ppzlist as $ppz)
                    <option value="{{ $ppz->id }}">{{ $ppz->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="relative">
        @if (!empty($donorlist))
            <div class="py-1">
                <h1 class="text-sm font-medium text-gray-600">Hasil Carian</h1>
            </div>
            @foreach ($donorlist as $donor)
                <div class="flex items-center py-1">
                    <div class="px-2">
                        <input type="checkbox" class="form-checkbox text-sm leading-none">
                    </div>
                    <div class="w-full px-2">
                        {{ $donor['name'] }}
                    </div>
                    <div class="w-full px-2">
                        {{ $donor['ic_no'] }}
                    </div>
                    <div class="px-2">
                        {{ $donor['fav_ppz_id'] }}
                    </div>
                </div>
            @endforeach
        @endif
        <div class="absolute inset-0 z-10" wire:loading wire:target="get_donorlist">
            <div class="flex justify-center">
                <span class="rounded-full p-2 bg-black bg-opacity-50">
                    <x-heroicon-o-globe class="h-6 w-6 animate-spin bg-transparent text-white"/>
                </span>
            </div>
        </div>
    </div>
</div>