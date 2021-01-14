<x-form.basic-form action="submit">
    <x-slot name="content">
        <x-general.grid mobile="1" gap="16" sm="2" md="2" lg="2" xl="2" class="col-span-6">
            <div>
                <h1 class="font-semibold">Maklumat Asas</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.input class="" label="Nama Penuh" value="name" livewire="wire:model.lazy=name wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.negeri-dropdown class="" label="Negeri Asal" value="state_origin_id">
                        @foreach ($negeri as $item)
                            <option value="{{ $item->id }}" {{ (auth()->user()->agentInfo->state_origin_id == $item->id) ? 'selected': '' }}>{{ $item->description }}</option>
                        @endforeach
                    </x-form.negeri-dropdown>
                    <x-form.input class="" label="Telefon Bimbit" value="phone_no" livewire="wire:model.lazy=phone_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                </x-general.grid>
            </div>
            <div>
                <h1 class="font-semibold">Maklumat Alamat</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.address-input class="" label="Alamat" value1="address1" value2="address2" value3="address3" value4="town" value5="postcode" condition="auth()->user()->agentInfo->state_id"/>
                </x-general.grid>
            </div>

            {{-- <div>
                <h1 class="font-semibold">Maklumat Majikan</h1>
                <x-general.grid mobile="1" gap="3" sm="1" md="1" lg="1" xl="1" class="mt-5">
                    <x-form.input class="" label="Nama Majikan" value="employer_name" livewire="wire:model.lazy=employer_name wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="Telefon Pejabat" value="office_no" livewire="wire:model.lazy=office_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="Jawatan" value="position" livewire="wire:model.lazy=position wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                    <x-form.input class="" label="No Gaji / No Pekerja" value="employee_no" livewire="wire:model.lazy=employee_no wire:loading.attr=readonly wire:loading.class=bg-gray-300 wire:target=submit"/>
                </x-general.grid>
            </div> --}}

        </x-general.grid>
    </x-slot>

    <x-form.submit-cancel-button class="pt-5 mt-8 border-t border-gray-200" cancel="Batal" submit="Simpan"/>

</x-form.basic-form>