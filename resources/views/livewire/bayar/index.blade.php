<div>
    <x-general.steps :steps="$steps" :currentstep="$currentstep" />
    <div class="mt-8">
        <div class="flex items-center justify-between gap-5 p-5 bg-white rounded-lg">
            <div class="flex gap-3">
                {{-- <x-general.modal.trigger class="relative text-cool-gray-400 hover:text-blue-400" target="donor-bucket">
                    <x-heroicon-o-archive class="w-8 h-8"/>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-green-400 rounded-full"></span>
                </x-general.modal.trigger> --}}
            </div>
            <div class="flex flex-row-reverse gap-3">
                @if ($currentstep != 3)
                    <button class="flex items-center justify-center w-40 py-3 text-sm leading-none text-white transition duration-300 ease-in-out bg-teal-400 rounded cursor-pointer hover:bg-teal-600" wire:click="navigation('next')">
                        Seterusnya
                    </button>
                @endif
                <button class="flex items-center justify-center w-40 py-3 text-sm leading-none text-white transition duration-300 ease-in-out bg-teal-400 rounded cursor-pointer hover:bg-teal-600" wire:click="navigation('prev')">
                    Kembali
                </button>
            </div>
        </div>
    </div>
    <div class="p-5 mt-2 bg-white rounded-md">
        @include('pages.bayar.steps.step' . $currentstep)
    </div>
</div>
