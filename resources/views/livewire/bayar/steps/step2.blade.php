<div class="grid grid-cols-1 gap-5">
      <div>
            <h1 class="font-semibold text-gray-700">Maklumat Transaksi</h1>
      </div>
      <div class="grid grid-col-1 gap-3">
            @foreach ($donorGrouped as $ppz => $donors)
                  <div class="flex items-center justify-between py-3">
                        <p>{{ $ppzarray[$ppz] }} ({{ count($donors) }})</p>
                        <p>RM {{ number_format(array_sum($donorGroupTotal[$ppz]),2) }}</p>
                  </div>
            @endforeach
            <div class="flex items-center justify-end mt-5 text-lg">
                  <div>
                        RM {{ number_format(array_sum($totalAll), 2) }}
                  </div>
            </div>
            <div class="flex items-center justify-end mt-5 text-lg">
                  <div class="mr-5">
                        <p>VA 1645-3254455-7:</p>
                  </div>
                  <div>
                       RM 460.00
                  </div>
            </div>
            <div class="flex items-center justify-end mt-5 text-lg">
                  <div class="mr-5">
                        <x-general.modal.trigger class="px-4 py-2 leading-none text-sm bg-blue-500 text-white hover:bg-blue-600 rounded" target="topup">
                              Tambah Nilai
                        </x-general.modal.trigger>
                  </div>
                  <div>
                       RM <span class="text-red-500">-1,000.00</span>
                  </div>
            </div>
      </div>
      <x-general.modal.content id="topup" align="top">
            <x-slot name="body">
                  <div class="flex flex-col gap-3">
                        <img src="{{ asset('img/senangPay-demo.png') }}" />
                        <button class="transition duration-200 ease-in-out px-4 py-2 leading-none text-sm bg-green-500 text-white hover:bg-green-600 rounded" x-on:click="show=false">
                              Ok
                        </button>
                  </div>
            </x-slot>
      </x-general.modal.content>
</div>