<form wire:submit.prevent="submit">
    <div class="mt-2">
        <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
            <div class="sm:col-span-6">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Nama Penuh
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input wire:model.lazy="name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    No Kad Pengenalan Baru
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="ic_no" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ic_no') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('ic_no') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    No Kad Pengenalan Lama
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="old_ic" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('old_ic') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('old_ic') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Negeri Asal
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="state_origin_id" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('state_origin_id') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('state_origin_id') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="last_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Mastautin
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <select wire:model.lazy="mastautin_flag" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Tempoh Mastautin (Tahun)
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="mastautin_year" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('mastautin_year') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('mastautin_year') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Telefon Bimbit
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="phone_no" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('phone_no') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('phone_no') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Telefon Pejabat
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="office_no" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('office_no') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('office_no') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-6">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Nama Majikan
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="employer_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('employer_name') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('employer_name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Jawatan
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="position" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('position') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('position') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    No Gaji / No Pekerja
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="employee_no" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('employee_no') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('employee_no') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>
    </div>
    {{-- Alamat --}}
    <div class="mt-6">
        <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
            <div class="sm:col-span-6">
                <label for="street_address" class="block text-sm font-semibold leading-5 text-gray-700">
                    Alamat
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="address1" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('address1') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('address1') <p class="text-sm text-red-600">{{ $message }}</p> @enderror

                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="address2" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('address2') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('address2') <p class="text-sm text-red-600">{{ $message }}</p> @enderror

                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="address3" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('address3') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('address3') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="city" class="block text-sm font-semibold leading-5 text-gray-700">
                    Bandar
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="town" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('town') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('town') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="state" class="block text-sm font-semibold leading-5 text-gray-700">
                    Poskod
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="postcode" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('postcode') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('postcode') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="zip" class="block text-sm font-semibold leading-5 text-gray-700">
                    Negeri
                </label>
                <div class="mt-1  flex rounded-md shadow-sm">
                    <input wire:model.lazy="state_id" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('state_id') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                </div>
                @error('state_id') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>
    </div>
    <div class="mt-8 border-t border-gray-200 pt-5">
        <div class="flex justify-end">
            <span class="inline-flex rounded-md shadow-sm">
                <a href="{{ route('home') }}" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    Batal
                </a>
            </span>
            <span class="ml-3 inline-flex rounded-md shadow-sm">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out" wire:loading.class.remove="bg-indigo-600" wire:loading.class="bg-indigo-500" wire:target="submit">
                    Simpan
                    <img class="ml-2 h-5 w-5" src="{{ asset('img/spin_loading.gif') }}" wire:loading wire:target="submit">
                </button>
            </span>
        </div>
    </div>
</form>