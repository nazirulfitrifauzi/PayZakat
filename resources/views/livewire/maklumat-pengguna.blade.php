<form wire:submit.prevent="submit">
    <div class="mt-2">
        <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
            <div class="sm:col-span-6">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Nama Penuh
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_name') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_name')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    No Kad Pengenalan Baru
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_ic_no" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_ic_no') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_ic_no')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_ic_no') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    No Kad Pengenalan Lama
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_old_ic" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_old_ic') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_old_ic')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_old_ic') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Negeri Asal
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_state_origin_id" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_state_origin_id') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_state_origin_id')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_state_origin_id') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="last_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Mastautin
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <select wire:model.lazy="n_mastautin_flag" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Tempoh Mastautin (Tahun)
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_mastautin_year" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_mastautin_year') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_mastautin_year')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_mastautin_year') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Telefon Bimbit
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_phone_no" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_phone_no') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_phone_no')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_phone_no') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Telefon Pejabat
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_office_no" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_office_no') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_office_no')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_office_no') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-6">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Nama Majikan
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_employer_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_employer_name') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_employer_name')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_employer_name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    Jawatan
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_position" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_position') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_position')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_position') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm font-semibold leading-5 text-gray-700">
                    No Gaji / No Pekerja
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_employee_no" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_employee_no') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_employee_no')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_employee_no') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
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
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_address1" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_address1') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_address1')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_address1') <p class="text-sm text-red-600">{{ $message }}</p> @enderror

                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_address2" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_address2') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_address2')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_address2') <p class="text-sm text-red-600">{{ $message }}</p> @enderror

                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_address3" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_address3') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_address3')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_address3') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="city" class="block text-sm font-semibold leading-5 text-gray-700">
                    Bandar
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_town" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_town') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_town')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_town') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="state" class="block text-sm font-semibold leading-5 text-gray-700">
                    Poskod
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_postcode" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_postcode') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_postcode')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_postcode') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="zip" class="block text-sm font-semibold leading-5 text-gray-700">
                    Negeri
                </label>
                <div class="mt-1 relative flex rounded-md shadow-sm">
                    <input wire:model.lazy="n_state_id" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('n_state_id') border-red-300 bg-red-50 text-red-900  @enderror" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
                    @error('n_state_id')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @enderror
                </div>
                @error('n_state_id') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
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