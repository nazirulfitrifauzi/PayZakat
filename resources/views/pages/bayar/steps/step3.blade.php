<div class="grid grid-cols-1 gap-5">    
    <div class="grid grid-cols-12 gap-6">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-6 xxl:col-span-6 lg:block">   
            <x-general.card class="bg-gray-100 shadow ">
                <div class="flex flex-col items-center pt-5 pl-5 pr-5 bg-teal-500 border-b border-gray-200 lg:flex-row">
                    <div class="pb-4">
                        <p class="text-base font-semibold text-white">Pengesahan Transaksi</p>
                    </div>
                </div>
                <div class="flex justify-between p-4 text-base font-semibold text-teal-500 bg-gray-300">
                    <p class="text-center">Daripada</p>
                    <p class="text-center">Jumlah</p>      
                </div>
                <div class="flex justify-between p-4 pt-1 pb-4 pl-4 pr-4 text-base font-semibold bg-gray-300">
                    <p class="text-center">VA 1645-3254455-7</p>
                    <p class="text-center">RM 1,460.00</p>
                </div>
                
                <div class="flex justify-between p-4 text-base font-semibold text-teal-500">
                    <p class="text-center">Penerima</p>
                    <p class="text-center">Jumlah</p>
                </div>
                <div class="flex justify-between pt-1 pb-4 pl-4 pr-4 text-base">
                    <p>PPZ</p>
                    <p>RM 708</p>                 
                </div>
                <div class="flex justify-between pt-1 pb-4 pl-4 pr-4 text-base">
                    <p>PPZ</p>
                    <p>RM 50</p>               
                </div>
                <div class="flex justify-between pt-1 pb-4 pl-4 pr-4 text-base">
                    <p>PPZ</p>
                    <p>RM 20</p>               
                </div>
            </x-general.card>
        </div>
        <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
            <x-general.card class="p-5 mb-5 bg-gray-100 shadow-lg">
                <div class="flex pb-4 border-b border-gray-300">
                    <div class="pr-2">
                        <x-heroicon-o-clipboard-list class="w-10 h-10 text-teal-500"/>
                    </div>
                    <div class="mt-2 text-lg text-teal-500">
                        <div class="font-semibold">
                            <p>Maklumat Transaksi</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-2 pt-2 text-base leading-6 text-gray-800 grid-col-1">
                    <div class="flex items-center">
                        <p>{{ date('d F Y, H:i:sa') }}</p>
                    </div>
                    <div class="flex items-center">
                        <p>Transaksi ID: 12548</p>
                    </div>
                    <div class="flex items-center">
                        <p>Transaksi di atas telah berjaya. Sila <a href="{{ route('bayar.resit') }}" target="_blank" class="text-blue-500">cetak resit</a> untuk rekod anda.</p>
                    </div>
                </div>
            </x-general.card> 
        </div>
    </div>
</div>


{{-- @livewire('bayar.steps.step3') --}}