<div>
    <x-general.steps :steps="$steps" :currentstep="$currentstep" />
    <div class="mt-8 p-5 rounded-md bg-white">
        @include('pages.bayar.steps.step' . $currentstep)
        <div class="flex flex-row-reverse gap-5">
            <button class="transition duration-300 ease-in-out flex items-center justify-center cursor-pointer leading-none rounded text-sm w-24 py-2 text-white bg-teal-400 hover:bg-teal-600" wire:click="navigation('next')">Seterusnya</button>
            <button class="transition duration-300 ease-in-out flex items-center justify-center cursor-pointer leading-none rounded text-sm w-24 py-2 text-white bg-teal-400 hover:bg-teal-600" wire:click="navigation('prev')">Kembali</button>
        </div>
    </div>
</div>
