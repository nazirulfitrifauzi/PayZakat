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
            <h1 class="font-semibold text-gray-700">2. Papar Zakat Institusi</h1>
        </div>
        {{-- <div>
            <h1 class="font-semibold text-gray-700">2. Pilih Zakat Institusi</h1>
        </div>
        <div>
            <select class="form-select text-sm tracking-wide" wire:model="ppzid" wire:change="get_donorList">
                <option value="" disabled>Sila Pilih</option>
                @foreach ($ppzlist as $ppz)
                    <option value="{{ $ppz->id }}">{{ $ppz->name }}</option>
                @endforeach
            </select>
        </div> --}}
    </div>
    <div class="relative">
        {{-- @if ($ppzid != "")
            @if (count($donorlist) > 0)
                <div class="py-3">
                    <h1 class="text-sm font-medium text-gray-400">Hasil Carian</h1>
                </div>
                <div class="flex items-center py-1 mb-5">
                    <div class="px-2">
                        <input type="checkbox" class="form-checkbox text-sm leading-none" value="1" wire:click="selectAll">
                    </div>
                    <div class="w-full px-2 font-semibold">
                        Nama
                    </div>
                    <div class="w-full px-2 font-semibold">
                        Kad Pengenalan
                    </div>
                    <div class="w-full px-2 font-semibold text-right whitespace-no-wrap">
                        Nilai Pembayaran Zakat (RM)
                    </div>
                </div>
                @foreach ($donorlist as $donor)
                    <div class="flex items-center py-1">
                        @php
                            $check = (isset($selectedDonor[$donor->id]) && $selectedDonor[$donor->id] != false) ? "checked" : "" ;
                        @endphp
                        <div class="px-2">
                            <input type="checkbox" class="form-checkbox text-sm leading-none" {{ $check }} value="{{ $donor->name }}" wire:model="selectedDonor.{{ $donor->id }}">
                        </div>
                        <div class="w-full px-2">
                            {{ $donor->name }}
                        </div>
                        <div class="w-full px-2">
                            {{ $donor->ic_no }}
                        </div>
                        <div class="w-full px-2 text-right">
                            {{ $donor->default_amount_zakat }}
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-sm italic text-gray-600">Tiada Pembayar Zakat berdaftar dengan Institusi pilihan.</p>
            @endif
        @endif --}}
        <div class="flex items-center justify-between py-1 mb-2 text-sm">
            <p class="font-bold">
                Nama
            </p>
            <p class="font-bold text-right whitespace-no-wrap">
                Nilai Pembayaran Zakat (RM)
            </p>
        </div>
        <div class="grid grid-col-1 gap-3">
            @foreach ($donorGrouped as $ppz => $donors)
                <div class="">
                    <div class="flex items-center justify-between py-3">
                        <p class="font-semibold">{{ $ppzarray[$ppz] }} ({{ count($donors) }})</p>
                        <p class="font-semibold">RM {{ number_format(array_sum($donorGroupTotal[$ppz]),2) }}</p>
                    </div>
                    @foreach ($donors as $donor)
                        <div class="flex items-center justify-between py-1 text-sm">
                            <div>
                                <p>{{ $donor['nama'] }}</p>
                                <p class="text-gray-400">{{ $donor['ic'] }}</p>
                            </div>
                            <div>
                                <p>{{ $donor['nilai_zakat'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="absolute inset-0 z-10" wire:loading wire:target="ppzid">
            <div class="flex justify-center">
                <span class="rounded-full p-2 bg-black bg-opacity-50">
                    <x-heroicon-o-globe class="h-6 w-6 animate-spin bg-transparent text-white"/>
                </span>
            </div>
        </div>
    </div>
    <x-general.modal.content id="donor-bucket" align="top">
        <x-slot name="header">
            <p class="font-bold">Pilihan Pembayar Zakat</p>
        </x-slot>
        <x-slot name="body">
            @php
                dump($selectedDonor);
                dump($checkAll);
            @endphp
        </x-slot>
    </x-general.modal.content>
</div>
