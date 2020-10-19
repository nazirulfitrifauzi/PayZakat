<x-form.basic-form action="submit">
    <x-slot name="content">
         <x-general.grid mobile="1" gap="16" sm="2" md="2" lg="2" xl="2" class="col-span-6">
            <div>
                <h1 class="font-semibold">Maklumat Asas</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.input class="" label="Nama Penuh" value="name" livewire="wire:model.lazy=name wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="No Kad Pengenalan Baru" value="ic_no" livewire="wire:model.lazy=ic_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="No Kad Pengenalan Lama" value="old_ic" livewire="wire:model.lazy=old_ic wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.negeri-dropdown class="" label="Negeri Asal" value="state_origin_id">
                        @foreach ($negeri as $item)
                            <option value="{{ $item->id }}">{{ $item->description }}</option>
                        @endforeach
                    </x-form.negeri-dropdown>
                    <x-form.dropdown class="" label="Mastautin" value="mastautin_flag" default="yes">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </x-form.dropdown>
                    <x-form.input class="" label="Tempoh Mastautin (Tahun)" value="mastautin_year" livewire="wire:model.lazy=mastautin_year wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="Telefon Bimbit" value="phone_no" livewire="wire:model.lazy=phone_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="E-mail" value="email" type="email" livewire="wire:model.lazy=email wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                </x-general.grid>
            </div>
            <div>
                <h1 class="font-semibold">Maklumat Surat Menyurat</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.address-input label="Alamat" value1="address1" value2="address2" value3="address3" value4="town" value5="postcode" condition=""/>
                </x-general.grid>
            </div>
            <div>
                <h1 class="font-semibold">Maklumat Majikan</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.input class="" label="Nama Majikan" value="employer_name" livewire="wire:model.lazy=employer_name wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="Jawatan" value="position" livewire="wire:model.lazy=position wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="Telefon Pejabat" value="office_no" livewire="wire:model.lazy=office_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="No Gaji / No Pekerja" value="employee_no" livewire="wire:model.lazy=employee_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                </x-general.gri>
            </div>
            <div>
                <h1 class="font-semibold">Maklumat Zakat</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.dropdown class="" label="Negeri Pembayaran Zakat" value="fav_ppz_id" default="yes">
                        @foreach ($ppz as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </x-form.dropdown>
                    <x-form.input label="Nilai Pembayaran Zakat" value="nilai_zakat" livewire="wire:model.lazy=nilai_zakat wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                </x-general.gri>
            </div>
        </x-general.grid>
    </x-slot>

    <x-form.submit-cancel-button class="mt-8 border-t border-gray-200 pt-5" cancel="Batal" submit="Simpan" cancelpage="{{ url()->previous() }}"/>
</x-form.basic-form>