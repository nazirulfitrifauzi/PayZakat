<div class="grid grid-cols-1 gap-5">

    <div class="flex items-center gap-3">
        <div>
            <h1 class="font-semibold text-gray-700">1. Pilih Jenis Zakat</h1>
        </div>
        <div>
            <select class="text-sm tracking-wide form-select">
                @foreach ($productlist as $product)
                    <option {{ ($product->product_name != "Pendapatan") ? "disabled" : "" }}>{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="flex items-center gap-3">
        <div>
            <h1 class="font-semibold text-gray-700">2. Papar Zakat Institusi</h1>
        </div>
    </div>
     
    <x-general.grid class="mt-2" mobile="1" gap="5" sm="1" md="1" lg="1" xl="2">
        @foreach ($donorGrouped as $ppz => $donors)
            <x-general.card class="bg-gray-100 shadow ">
                <div class="flex flex-col items-center pt-5 pl-5 pr-5 bg-teal-500 border-b border-gray-200 lg:flex-row">
                    <div class="pb-4">
                        <p class="text-base font-semibold text-white">{{ $ppzarray[$ppz] }} ({{ count($donors) }})</p>
                    </div>
                </div>
                <div class="flex justify-between p-4 text-lg font-semibold bg-gray-200">
                    <p class="text-center">Jumlah</p>
                    <p>RM {{ number_format(array_sum($donorGroupTotal[$ppz]),2) }}</p>                   
                </div>
                <x-general.grid class="p-5" mobile="1" gap="3" sm="2" md="2" lg="2" xl="2">
                    <div class="text-base font-semibold leading-6 text-teal-500">
                        <p>Nama</p>                                  
                    </div>
                    
                    <div class="text-base font-semibold leading-6 text-right text-teal-500">
                        <p>Bayaran Zakat</p>  
                    </div>
                    @foreach ($donors as $donor)
                        <div class="text-base leading-6">
                            <p>{{ $donor['nama'] }}</p>
                            <p class="text-gray-500">{{ $donor['ic'] }}</p>                                           
                        </div>
                        
                        <div class="mt-4 text-base leading-6 text-right">
                            <p>RM {{ $donor['nilai_zakat'] }}</p>
                        </div>
                    @endforeach
                </x-general.grid>
            </x-general.card>
        @endforeach
    </x-general.grid>

</div>
