<div>
    <x-general.card class="pt-4 bg-white rounded-lg">
        <x-general.steps :steps="$steps" :currentstep="$currentstep" />
        <div class="mt-20 sm:mt-8">
            <div class="flex items-center justify-end gap-5 p-5 ">
                <div class="flex flex-row-reverse gap-3">
                    @if ($currentstep == 1)
                        <button class="flex items-center justify-center w-40 py-3 text-sm leading-none text-white transition duration-300 ease-in-out bg-teal-400 rounded cursor-pointer hover:bg-teal-500" wire:click="navigation('next')">
                            Seterusnya
                        </button>
                    @endif
                    @if ($currentstep == 2)
                        <button class="flex items-center justify-center w-40 py-3 text-sm leading-none text-white transition duration-300 ease-in-out bg-teal-400 rounded cursor-pointer hover:bg-teal-500" wire:click="navigation('prev')">
                            Kembali
                        </button>
                    @endif
                    @if ($currentstep == 3)
                        <a href="{{ route('bayar') }}" class="flex items-center justify-center w-40 py-3 text-sm leading-none text-white transition duration-300 ease-in-out bg-teal-400 rounded cursor-pointer hover:bg-teal-500">
                            Pembayaran Baru
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </x-general.card>
    <div class="p-0 sm:p-5 mx-auto mt-2 bg-white rounded-md">
        <div class="{{ ($currentstep == 1) ? 'block' : 'hidden' }}">
            @include('pages.bayar.steps.step1')
        </div>
        <div class="{{ ($currentstep == 2) ? 'block' : 'hidden' }}">
            @include('pages.bayar.steps.step2')
        </div>
        <div class="{{ ($currentstep == 3) ? 'block' : 'hidden' }}">
            @include('pages.bayar.steps.step3')
        </div>
    </div>
</div>

