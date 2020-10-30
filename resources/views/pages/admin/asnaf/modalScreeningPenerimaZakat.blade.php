<div x-show="open" x-cloak
    class="fixed inset-0 z-10 overflow-y-auto"
>
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div x-show="open"
            x-description="Background overlay, show/hide based on modal state."
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 transition-opacity"
        >
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        <div x-show="open"
            x-description="Modal panel, show/hide based on modal state."
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg lg:max-w-2xl xl:max-w-5xl sm:w-full sm:p-6"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline"
        >
            <div>
                <div class="text-center">
                    <div class="flex items-center justify-between p-4  text-md font-semibold text-teal-100 bg-teal-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-teal">
                        <h3 class="text-lg font-semibold leading-6 text-teal-100" id="modal-headline">
                            {{ $lists->screening->count() == 11 ? 'Status Saringan ': 'Senarai Saringan' }}
                        </h3>
                        <x-heroicon-o-x-circle class="w-6 h-6 text-teal-100 cursor-pointer" @click="open = false"/>
                    </div>

                    @if ($lists->screening->count() == 11) {{-- completed screening --}}
                        <div class="mt-6 text-center">
                            <span class="text-base font-semibold ">Saringan yang dijalankan:</span>
                            <p class="text-base font-semibold text-gray-500 ">11 Saringan</p>
                        </div>
                        <div class="mt-6 text-center">
                            <span class="text-base font-semibold ">Saringan yang lulus:</span>
                            <p class="text-base font-semibold text-gray-500 ">{{ $lists->screening->where('status',1)->count() }} Saringan</p>
                        </div>
                        <div class="mt-6 text-center">
                            <span class="text-base font-semibold ">Saringan yang gagal:</span>
                            <p class="text-base font-semibold text-gray-500 ">{{ $lists->screening->where('status',0)->count() }} Saringan</p>
                            @php
                                $failed = $lists->screening->where('status',0);
                            @endphp
                            @foreach ($failed as $fail)
                                <p class="text-base font-semibold text-gray-500 ">( {{ $fail->sanction->name }} )</p>
                            @endforeach
                        </div>
                        <div class="max-w-lg mx-auto mt-6 rounded-md shadow-sm">
                            <label for="about" class="text-base font-semibold sm:mt-px sm:pt-2">
                                Remarks:
                            </label>
                            <textarea wire:model.lazy="remarks" rows="3" class="block w-full transition duration-150 ease-in-out form-textarea sm:text-sm sm:leading-5"></textarea>
                            @error('remarks')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-general.button.icon-button href="" target="" label="Terima" color="indigo"
                                livewire="wire:click=finalResult({{ $lists->id }},'terima')"
                            >
                                <x-heroicon-s-check class="-ml-0.5 mr-2 h-4 w-4"/>
                            </x-general.button.icon-button>

                            <x-general.button.icon-button href="" target="" label="Tolak" color="red"
                                livewire="wire:click=finalResult({{ $lists->id }},'tolak')"
                            >
                                <x-heroicon-s-trash class="-ml-0.5 mr-2 h-4 w-4"/>
                            </x-general.button.icon-button>
                        </div>
                    @else {{-- screening not completed --}}
                        <table class="w-full mt-5 table-fixed">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border">Institusi</th>
                                    <th class="px-4 py-2 border">URL</th>
                                    <th class="px-4 py-2 border">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sanctionList as $item)
                                    <tr>
                                        <td class="px-4 py-2 text-left border">
                                            <p class="break-words whitespace-normal">{{ $item->name }}</p>
                                        </td>
                                        <td class="px-4 py-2 text-left border">
                                            <a href="{{ $item->website }}" target="_blank" class="text-teal-600 break-words whitespace-normal transition duration-150 ease-in-out hover:text-teal-500 focus:outline-none focus:underline">{{ $item->website }}</a>
                                        </td>
                                        <td class="px-4 py-2 border">
                                            @php
                                                $status = $item->asnafScreening->where('asnaf_id', $lists->id)->first();
                                            @endphp

                                            @if ($status != null)
                                                @if ($status->status == 1)
                                                    <div class="flex items-center justify-center">
                                                        <x-heroicon-o-check-circle class="w-5 h-5 mr-2 text-green-600 cursor-pointer"/>
                                                        Lulus
                                                    </div>
                                                @else
                                                    <div class="flex items-center justify-center">
                                                        <x-heroicon-o-x-circle class="w-5 h-5 mr-2 text-red-600 cursor-pointer"/>
                                                        Gagal
                                                    </div>
                                                @endif
                                            @else
                                                <x-general.button.icon-button href="" target="" label="Lulus" color="indigo"
                                                    livewire="wire:click=screenResult({{ $lists->id }},{{ $item->id }},'pass')"
                                                >
                                                    <x-heroicon-s-check class="-ml-0.5 mr-2 h-4 w-4"/>
                                                </x-general.button.icon-button>

                                                <x-general.button.icon-button href="" target="" label="Gagal" color="red"
                                                    livewire="wire:click=screenResult({{ $lists->id }},{{ $item->id }},'fail')"
                                                >
                                                    <x-heroicon-s-trash class="-ml-0.5 mr-2 h-4 w-4"/>
                                                </x-general.button.icon-button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>