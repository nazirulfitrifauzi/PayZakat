<div class="grid grid-cols-1 gap-5">

    <div class="flex items-center gap-3">
        <div>
            <h1 class="text-sm sm:text-base font-semibold text-gray-700 px-4">1. Pilih Jenis Zakat</h1>
        </div>
        <div class="py-3">
            <select class="text-sm tracking-wide form-select">
                @foreach ($products as $product)
                    <option {{ ($product->product_name != "Pendapatan") ? "disabled" : "" }} {{ ($product->product_name == "Pendapatan") ? "selected" : "" }}>{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="flex items-center gap-3">
        <div>
            <h1 class="text-sm sm:text-base font-semibold text-gray-700 px-4">2. Papar Zakat Institusi</h1>
        </div>
    </div>

    {{-- desktop view --}}
    <div class="hidden sm:block">
        <table class="w-full divide-y divide-cool-gray-200">
            <thead>
                <tr class="bg-teal-500">
                    <th class="text-left  px-6 py-3 text-xs leading-4 font-medium text-white uppercase tracking-wider">
                        Bil
                    </th>
                    <th class="text-left  px-6 py-3 text-xs leading-4 font-medium text-white uppercase tracking-wider">
                        Nama
                    </th>
                    <th class="text-center px-6 py-3  text-xs leading-4 font-medium text-white uppercase tracking-wider">
                        No K/p
                    </th>
                    <th class="text-right  px-6 py-3 text-xs leading-4 font-medium text-white uppercase tracking-wider">
                        Bayaran Zakat
                    </th>
                </tr>
            </thead>
            @forelse ($customerGroup as $ppzId => $custs)
                <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                    <tr>
                        <td colspan="4">
                            <div class="flex justify-between flex-col items-center pt-5 pl-5 pr-5 bg-cool-gray-300 border-b border-gray-200 lg:flex-row">
                                <div class="pb-4 ">
                                    <p class="text-base font-semibold text-gray-800">{{ $ppzList[$ppzId] }} ({{ count($custs) }})</p>
                                </div>
                                <div class="pb-4 ">
                                    <p class="text-base font-semibold text-gray-800">JUMLAH : RM {{ number_format(array_sum($customerGroupTotal[$ppzId]),2) }}</p>  
                                </div>
                            </div>
                        </td>
                    </tr>
                    @php 
                        $i = 0 
                    @endphp
                    @foreach ($custs as $cust)
                        @php 
                            $i++ 
                        @endphp
                        <tr class="bg-white">
                            <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                                <p>{{$i}}</p>                                       
                            </td>
                            <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                                <p>{{ $cust['nama'] }}</p>                                       
                            </td>
                            <td class="text-center max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                                <p>{{ $cust['ic'] }}</p>                                       
                            </td>
                            <td class="text-right max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                                <p>RM {{ $cust['nilai_zakat'] }}</p>                                       
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @empty
                <p>Tiada data ketika ini.</p>
            @endforelse
        </table>
    </div>

    {{-- Mobile View --}}
    <div class="block sm:hidden">
        <table class="max-w-full divide-y divide-cool-gray-200">
            @forelse ($customerGroup as $ppzId => $custs)
                <tbody class="bg-white divide-y divide-cool-gray-200" >
                    <tr>
                        <td colspan="4">
                            <div class="flex justify-between flex-col items-center pt-5 pl-5 pr-5 bg-cool-gray-300 border-b border-gray-200 lg:flex-row">
                                <div class="pb-4">
                                    <p class="text-xs font-semibold text-gray-800">{{ $ppzList[$ppzId] }} ({{ count($custs) }})</p>
                                </div>
                                <div class="pb-4 ">
                                    <p class="text-xs font-semibold text-gray-800">JUMLAH : RM {{ number_format(array_sum($customerGroupTotal[$ppzId]),2) }}</p>  
                                </div>
                            </div>
                        </td>
                    </tr>
                    @php 
                        $i = 0 
                    @endphp
                    @foreach ($custs as $cust)
                        @php 
                            $i++ 
                        @endphp
                        <tr class="bg-white">
                            <td class="max-w-0 px-6 py-4 whitespace-no-wrap leading-5 text-gray-700 text-xs">
                                <p>{{$i}}</p>                                       
                            </td>
                            <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-xs leading-5 text-gray-700">
                                <p>{{ $cust['nama'] }}</p> 
                                <p>{{ $cust['ic'] }}</p>                                         
                            </td>
                            <td class="text-right max-w-0 px-6 py-4 whitespace-no-wrap text-xs leading-5 text-gray-700">
                                <p>RM {{ $cust['nilai_zakat'] }}</p>                                       
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @empty
                <p>Tiada data ketika ini.</p>
            @endforelse
        </table>
    </div>
</div>

{{-- @livewire('bayar.steps.step1') --}}