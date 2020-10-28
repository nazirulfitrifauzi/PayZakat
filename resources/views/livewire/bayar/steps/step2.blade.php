<div class="grid grid-cols-1 gap-5">
      <div>
            <h1 class="font-semibold text-gray-700">Maklumat Transaksi</h1>
      </div>
      <div class="grid gap-3 grid-col-1">
            @foreach ($donorGrouped as $ppz => $donors)
                  <div class="flex items-center justify-between">
                        <p>{{ $ppzarray[$ppz] }} ({{ count($donors) }})</p>
                        <p>RM {{ number_format(array_sum($donorGroupTotal[$ppz]),2) }}</p>
                  </div>
            @endforeach
            <div class="flex items-center justify-end mt-5 text-lg">
                  <div class="mr-3 text-base">
                        Jumlah perlu dibayar
                  </div>
                  <div class="font-semibold w-56 p-3 rounded text-right flex items-center justify-between bg-gray-200">
                        <p>RM</p>
                        <p>{{ number_format(array_sum($totalAll), 2) }}</p>
                  </div>
            </div>
            <div class="flex items-center justify-end mt-5 text-lg">
                  <div class="mr-3 text-base">
                        {{-- VA 1645-3254455-7 --}}Baki Akaun
                  </div>
                  <div class="font-semibold w-56 py-3 rounded px-2 text-right flex items-center justify-between bg-gray-200">
                        <p>RM</p>
                        <p>460.00</p>
                  </div>
            </div>
            <div class="flex items-center justify-end mt-5 text-lg">
                  <div class="mr-3">
                        <x-general.modal.trigger class="px-4 py-3 text-sm leading-none text-white bg-blue-500 rounded hover:bg-blue-600" target="topup">
                              Tambah Nilai
                        </x-general.modal.trigger>
                  </div>
                  <div class="font-semibold w-56 py-3 rounded px-2 text-right flex items-center justify-between bg-red-200">
                        <p>RM</p>
                        <p>-1,000.00</p>
                  </div>
            </div>
      </div>
      <x-general.modal.content id="topup" align="top">
            <x-slot name="body">
                  <div class="flex flex-col gap-3">
                        <img src="{{ asset('img/senangPay-demo.png') }}" />
                        <button class="px-4 py-2 text-sm leading-none text-white transition duration-200 ease-in-out bg-green-500 rounded hover:bg-green-600" x-on:click="show=false">
                              Ok
                        </button>
                  </div>
            </x-slot>
      </x-general.modal.content>
</div>