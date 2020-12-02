<div class="grid grid-cols-1 gap-5">    
       <div class="grid grid-cols-12 gap-6">
            <div class="flex flex-col-reverse col-span-12 lg:col-span-4 xxl:col-span-2 lg:block">
                  <div class="">
                        <x-general.card class="p-5 bg-teal-500 shadow">
                           <div class="flex">
                              <div class="pr-4">
                                 <x-heroicon-o-clipboard-check class="w-8 h-8 text-teal-200"/>
                              </div>
                              <div class="w-full text-xl text-white">
                                 <div class="mb-2 mr-3 text-sm">
                                       Jumlah perlu dibayar
                                 </div>
                                 <div class="font-semibold">
                                       <p>RM {{ number_format(array_sum($totalAll), 2) }}</p>
                                 </div>
                              </div>
                              <div class="flex items-center">
                                 <x-general.modal.trigger target="topup" class="p-4 text-xs font-semibold tracking-widest text-white whitespace-no-wrap transition duration-300 ease-in-out bg-teal-600 rounded-md hover:bg-teal-700">Bayar Sekarang</x-general.modal.trigger>
                              </div>
                           </div>
                        </x-general.card>
                        {{-- <x-general.card class="p-5 mb-5 bg-yellow-400 shadow">
                              <div class="flex">
                                    <div class="pr-4">
                                        <x-heroicon-o-scale class="w-8 h-8 text-yellow-100"/>
                                    </div>
                                    <div class="text-xl text-white">
                                          <div class="mb-2 mr-3 text-sm">
                                                VA 1645-3254455-7Baki Akaun
                                          </div>
                                          <div class="font-semibold">
                                                <p>RM 460.00</p>
                                          </div>
                                    </div>
                              </div>
                        </x-general.card> --}}
                        {{-- <x-general.card class="pt-2 pb-5 pl-5 pr-2 mb-5 bg-red-500 shadow">
                              <div x-data="{ open: false }" class="relative">
                                    <div class="flex justify-end cursor-pointer ">
                                          <x-heroicon-o-dots-vertical class="w-5 h-5 text-white" x-on:click="open = true"/>
                                    </div>
                                    <div x-show.transition="open" x-on:click.away="open = false" class="absolute right-0 w-40 py-2 mt-2 bg-white border rounded shadow-xl">
                                           <x-general.modal.trigger class="block px-4 py-2 ml-4 text-gray-900 transition-colors duration-200 rounded text-normal hover:bg-red-400 hover:text-white " target="topup">       
                                              Tambah Nilai
                                           </x-general.modal.trigger>
                                    </div>
                              </div>
                              <div class="flex">
                                    <div class="pr-4">
                                          <x-heroicon-o-plus-circle class="w-8 h-8 text-red-200"/>
                                    </div>
                                    <div class="text-xl text-white">
                                          <div class="flex mb-2 mr-3 text-sm">
                                                Tambah Nilai

                                          </div>
                                          <div class="font-semibold">
                                                <p>RM -1,000.00</p>
                                          </div>  
                                    </div>
                              </div>
                        </x-general.card> --}}
                  </div>
            </div>
            <div class="col-span-12 lg:col-span-8 xxl:col-span-10">
                  <x-general.card class="bg-gray-100 shadow">
                        <div class="flex flex-col items-center pt-5 pl-5 pr-5 bg-teal-500 border-b border-gray-200 lg:flex-row">
                              <div class="pb-4">
                                    <p class="text-base font-semibold text-white">Maklumat Transaksi</p>
                              </div>                              
                        </div>
                        @foreach ($donorGrouped as $ppz => $donors)
                              <div class="flex items-center justify-between p-3 leading-5 border-b border-gray-200">
                                    <p class="tex-sm">{{ $ppzarray[$ppz] }} ({{ count($donors) }})</p>
                                    <p class="text-sm font-semibold">RM {{ number_format(array_sum($donorGroupTotal[$ppz]),2) }}</p>
                                    
                              </div>
                        @endforeach
                  </x-general.card>
            </div>
      </div>
            
      <x-general.modal.content id="topup" align="top">
            <x-slot name="body">
                  <div class="flex flex-col gap-3">
                        <img src="{{ asset('img/senangPay-demo.png') }}" />
                        <button class="px-4 py-2 text-sm leading-none text-white transition duration-200 ease-in-out bg-green-500 rounded hover:bg-green-600" x-on:click="show=false" wire:click="paymentCompleted">
                              Ok
                        </button>
                  </div>
            </x-slot>
      </x-general.modal.content>
</div>