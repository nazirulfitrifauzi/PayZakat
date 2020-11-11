{{-- <div class="grid gap-6 grid-col-1">
    <div>
        <h1 class="text-gray-700">Pengesahan Transaksi</h1>
    </div>
    <div class="grid gap-5 grid-col-1">
        <div class="grid gap-2 grid-col-1">
            <h2 class="text-gray-300">Daripada</h2>
            <div class="flex items-center justify-between">
                <p>VA 1645-3254455-7</p>
                <p>RM 1,460.00</p>
            </div>
        </div>
        <div class="grid gap-2 grid-col-1">
            <h2 class="text-gray-300">Penerima</h2>
            <div class="flex items-center justify-between">
                <p>PPZ</p>
                <p>RM 708</p>
            </div>
            <div class="flex items-center justify-between">
                <p>PPZ</p>
                <p>RM 50</p>
            </div>
            <div class="flex items-center justify-between">
                <p>PPZ</p>
                <p>RM 702</p>
            </div>
        </div>
        <div class="grid gap-2 grid-col-1">
            <h2 class="text-gray-300">Maklumat Transaksi</h2>
            <div class="flex items-center justify-between">
                <p>{{ date('d F Y, H:i:sa') }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p>Transaksi ID: 12548</p>
            </div>
            <div class="flex items-center justify-between">
                <p>Transaksi di atas telah berjaya. Sila <a href="{{ route('bayar.resit') }}" target="_blank" class="text-blue-500">cetak resit</a> untuk rekod anda.</p>
            </div>
        </div>
    </div>
</div> --}}

<div class="grid grid-cols-1 gap-5">    
       <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-6 xxl:col-span-6 flex lg:block flex-col-reverse">   
                <x-general.card class=" bg-gray-100 shadow">
                    <div class="flex flex-col lg:flex-row items-center pl-5 pr-5 pt-5 border-b border-gray-200 bg-teal-500">
                        <div class="pb-4">
                            <p class="font-semibold text-base text-white">Pengesahan Transaksi</p>
                        </div>
                        
                    </div>
                    <div class="flex justify-between font-semibold p-4 text-base bg-gray-200 p-4 text-teal-500">
                        <p class="text-center">Daripada</p>
                        <p class="text-center">Jumlah</p>
                                         
                    </div>
                     <div class="flex justify-between font-semibold pl-4 pr-4 pt-1 pb-4 text-base bg-gray-200 p-4">
                        <p class="text-center">VA 1645-3254455-7</p>
                        <p class="text-center">RM 1,460.00</p>
                                         
                    </div>
                    
                    <div class="flex justify-between font-semibold p-4 text-base p-4 text-teal-500">
                        <p class="text-center">Penerima</p>
                        <p class="text-center">Jumlah</p>
                                        
                    </div>
                    <div class="flex justify-between  pl-4 pr-4 pt-1 pb-4 text-base">
                        <p>PPZ</p>
                        <p>RM 708</p>                 
                    </div>
                    <div class="flex justify-between  pl-4 pr-4 pt-1 pb-4 text-base">
                        <p>PPZ</p>
                        <p>RM 50</p>               
                    </div>
                    <div class="flex justify-between  pl-4 pr-4 pt-1 pb-4 text-base">
                        <p>PPZ</p>
                        <p>RM 20</p>               
                    </div>
                </x-general.card>
            </div>
            <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                <x-general.card class="p-5 bg-gray-100 shadow-lg mb-5">
                    <div class="flex border-b border-gray-300 pb-4">
                        <div class="pr-2">
                            <x-heroicon-o-clipboard-list class="h-10 w-10 text-teal-500"/>
                        </div>
                        <div class="text-lg text-teal-500 mt-2">
                            <div class="font-semibold">
                                <p>Maklumat Transaksi</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid gap-2 grid-col-1 text-gray-800 text-base  pt-2 leading-6">
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
