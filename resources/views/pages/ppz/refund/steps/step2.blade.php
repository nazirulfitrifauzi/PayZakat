<div class="grid grid-cols-1 gap-5">
    <div class="grid grid-cols-12 gap-6">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-2 lg:block">
            <div class="">
                <x-general.card class="p-5 bg-teal-500 shadow">
                    <div class="flex-auto sm:flex">
                        <div class="pr-4">
                            <x-heroicon-o-clipboard-check class="w-8 h-8 text-teal-200" />
                        </div>
                        <div class="mt-4 sm:mt-0 w-full text-xl text-white">
                            <div class="mb-2 mr-3 text-xs">
                                Jumlah perlu dibayar
                            </div>
                            <div class="font-semibold">
                                <p>RM {{ number_format($totalPayment, 2) }}</p>
                            </div>
                        </div>
                        <div class="mt-4 sm:mt-0 flex items-center">
                            <x-general.modal.trigger target="topup"
                                class="p-4 text-xs font-semibold tracking-widest text-white whitespace-no-wrap transition duration-300 ease-in-out bg-teal-600 rounded-md hover:bg-teal-700">
                                Bayar Sekarang
                            </x-general.modal.trigger>
                        </div>
                    </div>
                </x-general.card>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-8 xxl:col-span-10">
            <x-general.card class="bg-gray-100 shadow">
                <div class="flex flex-col items-center pt-5 pl-5 pr-5 bg-teal-500 border-b border-gray-200 lg:flex-row">
                    <div class="pb-4">
                        <p class="text-base font-semibold text-white">Maklumat Transaksi</p>
                    </div>
                </div>
                @if (isset($ppzGroupTotal))
                @foreach ($ppzGroupTotal as $ppzId => $groupTotal)
                <div class="flex items-center justify-between p-3 leading-5 border-b border-gray-200">
                    <p class="text-xs w-44 sm:text-sm">{{ $ppzList[$ppzId] }}</p>
                    <p class="text-xs sm:text-sm font-semibold">RM {{ number_format($groupTotal,2) }}</p>
                </div>
                @endforeach
                @endif
            </x-general.card>
        </div>
    </div>

    <x-general.modal.content id="topup" align="top">
        <x-slot name="body">
            <div class="flex flex-col gap-3">
                <img src="{{ asset('img/senangPay-demo.png') }}" />
                <button
                    class="px-4 py-2 text-sm leading-none text-white transition duration-200 ease-in-out bg-green-500 rounded hover:bg-green-600"
                    x-on:click="show=false" wire:click="paymentCompleted">
                    Ok
                </button>
            </div>
        </x-slot>
    </x-general.modal.content>
</div>

{{-- @livewire('bayar.steps.step2') --}}