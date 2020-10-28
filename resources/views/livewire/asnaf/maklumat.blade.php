<x-form.basic-form action="submit">
    <x-slot name="content">
        <x-general.grid mobile="1" gap="16" sm="2" md="2" lg="2" xl="2" class="col-span-6">
            <div>
                <h1 class="font-semibold">Maklumat Asas</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.input class="" label="Nama Penuh" value="name" livewire="wire:model.lazy=name wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="No Kad Pengenalan Baru" value="ic_no" livewire="wire:model.lazy=ic_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>

                    <x-form.input class="" label="Jumlah Pendapatan Isi Rumah" value="household_income" livewire="wire:model.lazy=household_income wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="Bilangan Tanggungan" value="dependents" livewire="wire:model.lazy=dependents wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>

                    <x-form.input class="" label="Telefon Bimbit" value="phone_no" livewire="wire:model.lazy=phone_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="E-mail" value="email" livewire="wire:model.lazy=email wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                </x-general.grid>
            </div>

            <div>
                <h1 class="font-semibold">Maklumat Alamat</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.address-input class="" label="Alamat" value1="address1" value2="address2" value3="address3" value4="town" value5="postcode" condition=""/>
                </x-general.grid>
            </div>

            <div>
                <h1 class="font-semibold">Maklumat Pencadang</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.input class="" label="Nama Pencadang" value="recommender_name" livewire="wire:model.lazy=recommender_name wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="No Kad Pengenalan Pencadang" value="recommender_ic" livewire="wire:model.lazy=recommender_ic wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="Telefon Bimbit Pencadang" value="recommender_phone" livewire="wire:model.lazy=recommender_phone wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="E-mail Pencandang" value="recommender_email" livewire="wire:model.lazy=recommender_email wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    
                    <x-form.dropdown class="" label="Dicadangkan oleh saya" value="recommender_flag" default="yes">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </x-form.dropdown>

                </x-general.grid>
            </div>
        </x-general.grid>
    </x-slot>

    <x-form.submit-cancel-button class="mt-8 border-t border-gray-200 pt-5" cancel="Batal" submit="Simpan" cancelpage="{{ url()->previous() }}"/>

</x-form.basic-form>