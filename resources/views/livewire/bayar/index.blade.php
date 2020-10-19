<div>
    <x-general.steps :steps="$steps" :currentstep="$currentstep" />
    <div class="mt-8">
        <div class="p-5 rounded-lg flex items-center justify-between gap-5 bg-white">
            <div class="flex gap-3">
                {{-- <x-general.modal.trigger class="text-cool-gray-400 hover:text-blue-400 relative" target="donor-bucket">
                    <x-heroicon-o-archive class="h-8 w-8"/>
                    <span class="absolute top-0 right-0 rounded-full h-2 w-2 bg-green-400"></span>
                </x-general.modal.trigger> --}}
            </div>
            <div class="flex flex-row-reverse gap-3">
                <button class="transition duration-300 ease-in-out flex items-center justify-center cursor-pointer leading-none rounded text-sm w-40 py-3 text-white bg-teal-400 hover:bg-teal-600" wire:click="navigation('next')">
                    Seterusnya
                </button>
                <button class="transition duration-300 ease-in-out flex items-center justify-center cursor-pointer leading-none rounded text-sm w-40 py-3 text-white bg-teal-400 hover:bg-teal-600" wire:click="navigation('prev')">
                    Kembali
                </button>
            </div>
        </div>
    </div>
    <div class="mt-2 p-5 rounded-md bg-white">
        @include('pages.bayar.steps.step' . $currentstep)
    </div>
</div>
