<div>
    <label for="kycd" class="block text-sm mb-3 font-medium leading-5 text-gray-700">
        Dokumen Pengesahan Syarikat
    </label>

    <div class="flex mt-1 mb-3 rounded-md shadow-sm">
        <label for="kycd" class="w-full p-10 text-center transition duration-300 ease-in-out bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-white group truncate">

        
            <span class="inline-flex items-center font-medium text-gray-600 group-hover:text-gray-700">
                @if (!is_null($kycd))
                    <div class="flex items-center">
                        @if ($errors->get('kycd'))
                            <x-heroicon-o-exclamation class="w-6 h-6 mr-2 text-red-400"/>
                        @else
                            <x-heroicon-o-shield-check class="w-6 h-6 mr-2 text-green-400"/>
                        @endif
                        {{ $kycd->getClientOriginalName() }}
                    </div>
                @else
                    <x-heroicon-o-cloud-upload class="w-6 h-6 mr-2 text-teal-600 animate-bounce"/>
                    Sila Pilih Dokumen Pengesahan 
                @endif
            </span>
        </label>
        <input type="file" class="absolute invisible pointer-events-none" id="kycd" name="kycd" wire:model="kycd">
    </div>
    @error('kycd')
        <span class="flex mt-2 mb-2 text-red-500">{{ $message }}</span>
    @enderror

    {{-- loading kycd  --}}
    <div wire:loading wire:target="kycd"  class="absolute z-10 inset-0" style="top:43px;">
        <div class="h-full flex items-center justify-center rounded-lg">
            <div class="p-2 bg-black bg-opacity-50 rounded-full">
                <img class="h-8 w-8" src="{{ asset('img/spin_loading.gif') }}">
            </div>
        </div>
    </div>

   

    <div class="mt-6">
        <span class="block w-full rounded-md shadow-sm">
            <button wire:click="upload" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-teal-600 border border-transparent rounded-md hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700">
               Sahkan Pengenalan Diri
            </button>
        </span>
    </div>

</div>
