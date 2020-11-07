<div>
    <label for="kycf" class="block text-sm font-medium leading-5 text-gray-700">
        Kad Pengenalan (Hadapan)
    </label>

    <div class="flex mt-1 rounded-md shadow-sm">
        <label for="kycf" class="w-full p-10 text-center transition duration-300 ease-in-out bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-white group truncate">

        
            <span class="inline-flex items-center font-medium text-gray-600 group-hover:text-gray-700">
                @if (!is_null($kycf))
                    <div class="flex items-center">
                        @if ($errors->get('kycf'))
                            <x-heroicon-o-exclamation class="w-6 h-6 mr-2 text-red-400"/>
                        @else
                            <x-heroicon-o-shield-check class="w-6 h-6 mr-2 text-green-400"/>
                        @endif
                        {{ $kycf->getClientOriginalName() }}
                    </div>
                @else
                    <x-heroicon-o-cloud-upload class="w-6 h-6 mr-2 text-teal-600 animate-bounce"/>
                    Sila Pilih Gambar Hadapan IC
                @endif
            </span>
        </label>
        <input type="file" class="absolute invisible pointer-events-none" id="kycf" name="kycf" wire:model="kycf">
    </div>
    @error('kycf')
        <span class="flex mt-2 text-red-500">{{ $message }}</span>
    @enderror

    <label for="kycb" class="block text-sm font-medium leading-5 text-gray-700">
        Kad Pengenalan (Belakang)
    </label>
    <div class="flex mt-1 rounded-md shadow-sm">
        <label for="kycb" class="w-full p-10 text-center transition duration-300 ease-in-out bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-white group truncate">

            
            <span class="inline-flex items-center font-medium text-gray-600 group-hover:text-gray-700">
                @if (!is_null($kycb))
                    <div class="flex items-center">
                        @if ($errors->get('kycb'))
                            <x-heroicon-o-exclamation class="w-6 h-6 mr-2 text-red-400"/>
                        @else
                            <x-heroicon-o-shield-check class="w-6 h-6 mr-2 text-green-400"/>
                        @endif
                        {{ $kycb->getClientOriginalName() }}
                    </div>
                @else
                    <x-heroicon-o-cloud-upload class="w-6 h-6 mr-2 text-teal-600 animate-bounce"/>
                    Sila Pilih Gambar Belakang IC
                @endif
            </span>
        </label>
        <input type="file" class="absolute invisible pointer-events-none" id="kycb" name="kycb" wire:model="kycb">
    </div>
    @error('kycb')
        <span class="flex mt-2 text-red-500">{{ $message }}</span>
    @enderror

    <div class="mt-6">
        <span class="block w-full rounded-md shadow-sm">
            <button wire:click="upload" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-teal-600 border border-transparent rounded-md hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700">
                Daftar Akaun
            </button>
        </span>
    </div>

</div>
