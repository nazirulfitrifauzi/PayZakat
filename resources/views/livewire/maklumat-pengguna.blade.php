<x-form.basic-form action="submit">
    <x-slot name="content">
        @php
            $mastautin = collect([
                ['id' => 1, 'name' => 'Ya'],
                ['id' => 0, 'name' => 'Tidak']
            ])->map(function($item) {
                return (object) [
                    'value' => $item['id'],
                    'name' => $item['name']
                ];
            });
        @endphp

        <x-form.input class="sm:col-span-6" label="Nama Penuh" value="name"/>
        <x-form.input class="sm:col-span-3" label="No Kad Pengenalan Baru" value="ic_no"/>
        <x-form.input class="sm:col-span-3" label="No Kad Pengenalan Lama" value="old_ic"/>
        <x-form.negeri-dropdown class="sm:col-span-2" label="Negeri Asal" :value="$negeri"/>
        <x-form.dropdown class="sm:col-span-2" label="Mastautin" :value="$mastautin"/>
        <x-form.input class="sm:col-span-2" label="Tempoh Mastautin (Tahun)" value="mastautin_year"/>
        <x-form.input class="sm:col-span-3" label="Telefon Bimbit" value="phone_no"/>
        <x-form.input class="sm:col-span-3" label="Telefon Pejabat" value="office_no"/>
        <x-form.input class="sm:col-span-6" label="Nama Majikan" value="employer_name"/>
        <x-form.input class="sm:col-span-3" label="Jawatan" value="position"/>
        <x-form.input class="sm:col-span-3" label="No Gaji / No Pekerja" value="employee_no"/>
        <x-form.address-input class="sm:col-span-6" label="Alamat" value1="address1" value2="address2" value3="address3" value4="town" value5="postcode"/>
    </x-slot>
    <x-slot name="button">
        <x-form.submit-cancel-button class="mt-8 border-t border-gray-200 pt-5" cancel="Batal" submit="Simpan"/>
    </x-slot>
</x-form.basic-form>