<x-form.basic-form action="submit">
    <x-slot name="content">
        <div class="relative flex flex-col lg:flex-row sm:flex-col px-4 mx-auto mt-5 font-medium leading-6 text-cool-gray-900 sm:px-6 lg:px-8" 
        style="padding-left:10%; padding-right:10%;">

            <x-general.card class="bg-white rounded-lg p-10 w-full">
                <div class="text-center">
                    <h1 class="sm:col-span-6 font-semibold tracking-wider text-xl">Gambar Profil</h1>

                    <div class="flex justify-center mt-3 sm:col-span-6 ">
                        <div class="h-32 w-32 rounded-full bg-center bg-cover" style="background-image:url({{ $current_image_profile }})">
                            <div wire:loading wire:target="gambar_profil" class="absolute z-10 inset-0">
                                <div class="h-full flex items-center justify-center rounded-lg">
                                    <div class="p-2 bg-black bg-opacity-50 rounded-full">
                                        <img class="h-8 w-8" src="{{ asset('img/spin_loading.gif') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        @error('gambar_profil')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="cursor-pointer inline-flex items-center px-3 py-2 mx-2 border border-transparent text-sm leading-4 font-medium rounded-md transition ease-in-out duration-150 text-white bg-teal-500 hover:bg-teal-400 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700'" livewire="" for="gambar_profil" >
                                <x-heroicon-o-camera class=" h-8 w-8 -ml-0.5 mr-1 sm:h-4 w-4"/>
                                <span>Muat Naik Gambar</span>
                                <input type="file" name="gambar_profil" id="gambar_profil" class="hidden" wire:model="gambar_profil">
                        </label>                            
                    </div>
                </div>
            </x-general.card>
            <x-general.card class="mt-3 sm:mt-0 bg-white rounded-lg p-10  w-full ">
                <h1 class="sm:col-span-6 font-semibold tracking-wider text-xl mb-4">Kata Laluan</h1>
                <x-form.input class="sm:col-span-2 mt-3" type="password" label="Kata Laluan Lama" value="kata_laluan_lama" livewire="wire:model=kata_laluan_lama wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                <x-form.input class="sm:col-span-2 mt-3" type="password" label="Kata Laluan Baru" value="kata_laluan_baru" livewire="wire:model=kata_laluan_baru wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                <x-form.input class="sm:col-span-2 mt-3" type="password" label="Sahkan Kata Laluan Baru" value="pengesahan_kata_laluan" livewire="wire:model=pengesahan_kata_laluan wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                <div wire:loading wire:target="submit" class="absolute z-10 inset-0">
                    <div class="h-full flex items-center justify-center rounded-lg">
                        <div class="p-2 bg-black bg-opacity-50 rounded-full">
                            <img class="h-8 w-8" src="{{ asset('img/spin_loading.gif') }}">
                        </div>
                    </div>
                </div>
            </x-general.card>
        </div>
    </x-slot>
    <x-slot name="slot">
        <x-form.submit-cancel-button class="mt-8 border-t border-gray-200 pt-5" cancel="Batal" submit="Simpan"/>
    </x-slot>
</x-form.basic-form>

