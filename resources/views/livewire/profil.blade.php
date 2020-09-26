<x-form.basic-form action="submit">
    <x-slot name="content">
        <h1 class="sm:col-span-6 font-semibold tracking-wider text-xl">Gambar Profil</h1>
        <div class="sm:col-span-6">
            <div class="relative h-24 w-24 rounded-full bg-center bg-cover" style="background-image:url({{ $current_image_profile }})">
                <div class="absolute right-0 bottom-0">
                    <label for="gambar_profil" title="Sila pilih gambar profil">
                        <x-heroicon-o-camera class="mr-4 h-6 w-6 text-teal-200 hover:text-teal-500 focus:text-teal-400 transition ease-in-out duration-150 cursor-pointer"/>
                    </label>
                    <input type="file" name="gambar_profil" id="gambar_profil" class="absolute invisible pointer-events-none" wire:model="gambar_profil">
                </div>
                <div wire:loading wire:target="gambar_profil" class="absolute z-10 inset-0">
                    <div class="h-full flex items-center justify-center rounded-lg">
                        <div class="p-2 bg-black bg-opacity-50 rounded-full">
                            <img class="h-8 w-8" src="{{ asset('img/spin_loading.gif') }}">
                        </div>
                    </div>
                </div>
            </div>
            @error('gambar_profil')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <h1 class="sm:col-span-6 font-semibold tracking-wider text-xl">Kata Laluan</h1>
        <x-form.input class="sm:col-span-2" type="password" label="Kata Laluan Lama" value="kata_laluan_lama" livewire="wire:model=kata_laluan_lama wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
        <x-form.input class="sm:col-span-2" type="password" label="Kata Laluan Baru" value="kata_laluan_baru" livewire="wire:model=kata_laluan_baru wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
        <x-form.input class="sm:col-span-2" type="password" label="Sahkan Kata Laluan Baru" value="pengesahan_kata_laluan" livewire="wire:model=pengesahan_kata_laluan wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
    </x-slot>
    <x-slot name="slot">
        <x-form.submit-cancel-button class="mt-8 border-t border-gray-200 pt-5" cancel="Batal" submit="Simpan"/>
    </x-slot>
</x-form.basic-form>
