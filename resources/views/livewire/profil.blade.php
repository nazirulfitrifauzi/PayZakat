<x-form.basic-form action="submit">
    <x-slot name="content">
        <x-form.input class="sm:col-span-2" type="password" label="Kata Laluan Lama" value="old_password"/>
        <x-form.input class="sm:col-span-2" type="password" label="Kata Laluan Baru" value="password"/>
        <x-form.input class="sm:col-span-2" type="password" label="Sahkan Kata Laluan Baru" value="password_confirmation"/>
    </x-slot>
    <x-slot name="button">
        <x-form.submit-cancel-button class="mt-8 border-t border-gray-200 pt-5" cancel="Batal" submit="Simpan"/>
    </x-slot>
</x-form.basic-form>
