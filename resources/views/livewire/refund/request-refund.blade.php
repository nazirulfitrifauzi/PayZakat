<x-general.card class="bg-white mx-auto">
    <div class="flex flex-col lg:flex-row sm:flex-col px-4 mx-auto mt-5 font-medium leading-6 text-cool-gray-900 sm:px-6 lg:px-8">
        <div class="mt-4 mb-4 p-5 w-full ">
            <div class="text-lg font-semibold" >
                <p>Muat naik senarai Pembayar Zakat anda ruangan ini</p>
                <div class="relative">
                    <form wire:submit.prevent="">
                        <div class="flex mt-3">
                            <label for="agentrefund" class="w-full p-10 text-center transition duration-300 ease-in-out bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-white group">
                                <span class="inline-flex items-center font-medium text-gray-600 group-hover:text-gray-700">
                                        {{-- <div class="flex items-center">
                                            @if ($errors->get('dokumen'))
                                                <x-heroicon-o-exclamation class="w-6 h-6 mr-2 text-red-400"/>
                                            @else
                                                <x-heroicon-o-shield-check class="w-6 h-6 mr-2 text-green-400"/>
                                            @endif
                                            {{ $dokumen->getClientOriginalName() }}
                                        </div> --}}
                                    
                                        <x-heroicon-o-cloud-upload class="w-6 h-6 mr-2 text-teal-600 animate-bounce"/>
                                        Sila Pilih Dokumen
                                    
                                </span>
                            </label>
                            <input type="file" class="absolute invisible pointer-events-none" id="agentrefund" name="agentrefund" wire:model="dokumen">
                        </div>
                        {{-- @error('dokumen')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                        <div class="mt-4 text-sm text-gray-700">
                            <p> Jumlah Keseluruhan refund di pohon ialah:  <span class="text-base text-teal-600 font-bold">RM </span></p>
                        </div>

                        <div x-data="{ modalOpen : false  }">
                            <div class="flex justify-center py-5">
                                <div @click="modalOpen = true" class="cursor-pointer px-4 py-2 text-gray-200 transition duration-300 ease-in-out bg-teal-500 rounded-lg shadow hover:bg-teal-600 hover:text-white">Simpan</div>
                            </div>
                            <!-- Start modal confirmation -->
                            <div class="cursor-default text-gray-900">
                                <x-general.modal modalActive="modalOpen" title="Pengesahan" closeBtn="no"  modalSize="lg">
                                    <div class="px-4 py-4 text-base text-center">
                                        <p>Adakah anda Pasti untuk memohon refund sebanyak <span class="text-lg text-teal-600 font-bold">RM</span> ?</p>
                                        <div class="flex justify-center items-center mt-5">
                                            <button type="submit" class=" mr-2 flex px-4 py-2 text-sm font-bold text-white bg-green-600 rounded focus:outline-none hover:bg-green-500">
                                                Simpan
                                            </button>
                                            <button class="flex px-4 py-2 text-sm font-bold text-white bg-red-600 rounded focus:outline-none hover:bg-red-500" @click="modalOpen = false">
                                                Batal
                                            </button>
                                        </div>
                                    </div>
                                </x-general.modal>
                            </div>
                            <!-- End modal confirmation -->
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
            </div>
        </div>
    </div>
</x-general.card>
