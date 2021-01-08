<x-general.card class="bg-white m-5 ">
    <div class="flex flex-col lg:flex-row sm:flex-col px-4 mx-auto mt-5 font-medium leading-6 text-cool-gray-900 sm:px-6 lg:px-8">
        {{-- <div class=" grid grid-cols-1 gap-5 px-4 mx-auto mt-5 font-medium leading-6 text-cool-gray-900 sm:px-6 lg:px-8"> --}}
        <x-general.card class="bg-white p-5 w-full shadow-2xl">
            <div>
                <p class="text-lg font-semibold">Prosedur memuat naik senarai Pembayar Zakat secara pukal</p>
                <ol class="px-6 text-sm list-decimal pt-2">
                    <li>Sila muat turun <a href="{{ asset('template/PayZakat - Templat Pembayar Zakat.xlsx') }}" target="_blank" class="text-blue-400 transition duration-300 ease-in-out hover:text-blue-500">Templat Format</a>.</li>
                    <li>
                        Isi maklumat Pembayar Zakat dengan lengkap berdasarkan Templat Format.
                    </li>
                    <li>
                        Sila rujuk
                        <span x-data="{ open: false }">
                            <a @click="open = true" type="button" class="text-blue-400 transition duration-300 ease-in-out cursor-pointer hover:text-blue-500">
                            Panduan
                            </a>
                            @include('pages.pembayarzakat.modalpanduan')
                        </span>
                        untuk memudahkan proses pengisian.</li>
                    <li>Muat naik Templat Format yang telah disempurnakan di ruangan yang telah disediakan.</li>
                    <li>Setelah proses muat naik selesai. Klik
                        <span type="submit" class="px-2 py-1 text-xs text-white bg-teal-600 rounded shadow cursor-default">Simpan</span>
                        untuk menyimpan senarai.</li>
                </ol>
            </div>
        </x-general.card>
        <x-general.card class="mt-4 lg:mt-0 shadow-2xl bg-white p-5 w-full lg:ml-4">
            <div class="text-lg font-semibold" >
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
                        <label for="muatnaikpukal" class="w-full p-10 text-center transition duration-300 ease-in-out bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-white group">
                            <span class="inline-flex items-center font-medium text-gray-600 group-hover:text-gray-700">
                                @if (!is_null($dokumen))
                                    <div class="flex items-center">
                                        @if ($errors->get('dokumen'))
                                            <x-heroicon-o-exclamation class="w-6 h-6 mr-2 text-red-400"/>
                                        @else
                                            <x-heroicon-o-shield-check class="w-6 h-6 mr-2 text-green-400"/>
                                        @endif
                                        {{ $dokumen->getClientOriginalName() }}
                                    </div>
                                @else
                                    <x-heroicon-o-cloud-upload class="w-6 h-6 mr-2 text-teal-600 animate-bounce"/>
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
                        <button type="submit" class="px-4 py-2 text-gray-200 transition duration-300 ease-in-out bg-teal-500 rounded-lg shadow hover:bg-teal-600 hover:text-white">Simpan</button>
                    </div>
                </form>
                <div wire:loading wire:target="dokumen" class="absolute inset-0 z-10">
                    <div class="flex items-center justify-center h-full rounded-lg">
                        <div class="p-2 bg-black bg-opacity-50 rounded-lg"><img class="w-8 h-8" src="{{ asset('img/spin_loading.gif') }}"></div>
                    </div>
                </div>
                <div wire:loading wire:target="save" class="absolute inset-0 z-10">
                    <div class="flex items-center justify-center h-full rounded-lg">
                        <div class="p-2 bg-black bg-opacity-50 rounded-lg"><img class="w-8 h-8" src="{{ asset('img/spin_loading.gif') }}"></div>
                    </div>
                </div>
            </div>
        </x-general.card>
    </div>

    <div class="mt-8 mb-8 flex w-full justify-center">
    <a  href="{{ route('pembayar.senarai') }}" class="bg-teal-700 hover:bg-teal-500 text-white font-bold py-2 px-4 rounded">
            Kembali
        </a>
    </div>
</x-general.card>