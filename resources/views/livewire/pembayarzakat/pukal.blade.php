<div class="mx-auto px-4 leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8 mt-5 grid grid-cols-1 gap-5">
    <div>
        <p>Prosedur memuat naik senarai Pembayar Zakat secara pukal</p>
        <ol class="list-decimal px-10 text-sm">
            <li>Sila muat turun <a href="{{ asset('template/PayZakat - Templat Pembayar Zakat.xlsx') }}" target="_blank" class="text-blue-400 hover:text-blue-500 transition duration-300 ease-in-out">Templat Format</a>.</li>
            <li>
                Isi maklumat Pembayar Zakat dengan lengkap berdasarkan Templat Format.
            </li>
            <li>
                Sila rujuk
                <span x-data="{ open: false }">
                    <a @click="open = true" type="button" class="text-blue-400 hover:text-blue-500 transition duration-300 ease-in-out cursor-pointer">
                    Panduan
                    </a>
                    @include('pages.pembayarzakat.modalpanduan')
                </span>
                untuk memudahkan proses pengisian.</li>
            <li>Muat naik senarai di ruangan yang telah disediakan.</li>
            <li>Setelah muat naik proses selesai. Klik
                <span type="submit" class="px-2 py-1 bg-teal-600 text-white rounded shadow text-xs cursor-default">Simpan</span>
                untuk menyimpan senarai.</li>
        </ol>
    </div>
    <div class="relative">
        <p>Muat naik senarai Pembayar Zakat anda ruangan ini</p>
        <form wire:submit.prevent="save">
            @php
                if($errors->get('dokumen')) {
                    $hidesubmit = "hidden";
                }
                else {
                    if(is_null($dokumen)) {
                        $hidesubmit = "hidden";
                    }
                    else {
                        $hidesubmit = "";
                    }
                }
            @endphp
            <div class="flex mt-3">
                <label for="muatnaikpukal" class="w-full text-center bg-gray-100 hover:bg-white p-10 rounded-lg shadow cursor-pointer transition duration-300 ease-in-out group">
                    <span class="inline-flex items-center font-medium text-gray-600 group-hover:text-gray-700">
                        @if (!is_null($dokumen))
                            <div class="flex items-center">
                                @if ($errors->get('dokumen'))
                                    <x-heroicon-o-exclamation class="mr-2 h-6 w-6 text-red-400"/>
                                @else
                                    <x-heroicon-o-shield-check class="mr-2 h-6 w-6 text-green-400"/>
                                @endif
                                {{ $dokumen->getClientOriginalName() }}
                            </div>
                        @else
                            <x-heroicon-o-cloud-upload class="mr-2 h-6 w-6 text-teal-600 animate-bounce"/>
                            Sila Pilih Dokumen
                        @endif
                    </span>
                </label>
                <input type="file" class="absolute invisible pointer-events-none" id="muatnaikpukal" name="muatnaikpukal" wire:model="dokumen">
            </div>
            @error('dokumen')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <div class="flex justify-center mt-3 {{ $hidesubmit }}">
                <button type="submit" class="px-4 py-2 bg-teal-500 hover:bg-teal-600 text-gray-200 hover:text-white rounded-lg shadow transition duration-300 ease-in-out">Simpan</button>
            </div>
        </form>
        <div wire:loading wire:target="dokumen" class="absolute z-10 inset-0">
            <div class="h-full flex items-center justify-center rounded-lg">
                <div class="p-2 bg-black bg-opacity-50 rounded-lg"><img class="h-8 w-8" src="{{ asset('img/spin_loading.gif') }}"></div>
            </div>
        </div>
        <div wire:loading wire:target="save" class="absolute z-10 inset-0">
            <div class="h-full flex items-center justify-center rounded-lg">
                <div class="p-2 bg-black bg-opacity-50 rounded-lg"><img class="h-8 w-8" src="{{ asset('img/spin_loading.gif') }}"></div>
            </div>
        </div>
    </div>
</div>