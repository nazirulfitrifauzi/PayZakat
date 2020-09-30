<div class="grid grid-cols-1 gap-5">
      <div>
            <h1 class="font-semibold text-gray-700">Maklumat Transaksi</h1>
      </div>
      <div class="flex justify-end">
            <div class="grid grid-cols-2 gap-3">
                  <x-general.button.btn color="teal" wire:click="navigation('step2','step1','prev')">Sebelumnya</x-general.button.btn>
                  <x-general.button.btn color="teal" wire:click="navigation('step1','step2','next')">Seterusnya</x-general.button.btn>
            </div>
      </div>
</div>