<div class="grid grid-cols-1 gap-5">

    <div class="flex items-center gap-3">
        <div>
            <h1 class="px-4 text-sm font-semibold text-gray-700 sm:text-base">1. Pilih Jenis Zakat</h1>
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
            <h1 class="px-4 text-sm font-semibold text-gray-700 sm:text-base">2. Papar Zakat Institusi</h1>
        </div>
    </div>

    {{-- desktop view --}}
    <div class="hidden sm:block">
        <table class="w-full divide-y divide-cool-gray-200">
            <thead>
                <tr class="bg-teal-500">
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase">
                        Bil
                    </th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase">
                        Nama
                    </th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-white uppercase">
                        No K/p
                    </th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-right text-white uppercase">
                        Bayaran Zakat
                    </th>
                </tr>
            </thead>
                <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                    <tr>
                        <td colspan="4">
                            <div class="flex flex-col items-center justify-between pt-5 pl-5 pr-5 border-b border-gray-200 bg-cool-gray-300 lg:flex-row">
                                <div class="pb-4 ">
                                    <p class="text-base font-semibold text-gray-800">AMIL - Shamelin (HQ) (3)</p>
                                </div>
                                <div class="pb-4 ">
                                    <p class="text-base font-semibold text-gray-800">JUMLAH : RM 300.00</p>  
                                </div>
                            </div>
                        </td>
                    </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4 text-sm leading-5 text-gray-700 whitespace-no-wrap max-w-0">
                                <p>1</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-gray-700 whitespace-no-wrap max-w-0">
                                <p>Test1</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-center text-gray-700 whitespace-no-wrap max-w-0">
                                <p>991212104033</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-right text-gray-700 whitespace-no-wrap max-w-0">
                                <p>RM 100.00</p>                                       
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4 text-sm leading-5 text-gray-700 whitespace-no-wrap max-w-0">
                                <p>2</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-gray-700 whitespace-no-wrap max-w-0">
                                <p>Test2</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-center text-gray-700 whitespace-no-wrap max-w-0">
                                <p>921012103036</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-right text-gray-700 whitespace-no-wrap max-w-0">
                                <p>RM 100.00</p>                                       
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4 text-sm leading-5 text-gray-700 whitespace-no-wrap max-w-0">
                                <p>3</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-gray-700 whitespace-no-wrap max-w-0">
                                <p>Test3</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-center text-gray-700 whitespace-no-wrap max-w-0">
                                <p>971104105049</p>                                       
                            </td>
                            <td class="px-6 py-4 text-sm leading-5 text-right text-gray-700 whitespace-no-wrap max-w-0">
                                <p>RM 100.00</p>                                       
                            </td>
                        </tr>  
                </tbody>
        </table>
    </div>

    {{-- Mobile View --}}
    <div class="block sm:hidden">
        <table class="max-w-full divide-y divide-cool-gray-200">
                <tbody class="bg-white divide-y divide-cool-gray-200" >
                    <tr>
                        <td colspan="4">
                            <div class="flex flex-col items-center justify-between pt-5 pl-5 pr-5 border-b border-gray-200 bg-cool-gray-300 lg:flex-row">
                                <div class="pb-4">
                                    <p class="text-xs font-semibold text-gray-800">gagag</p>
                                </div>
                                <div class="pb-4 ">
                                    <p class="text-xs font-semibold text-gray-800">JUMLAH : RM agag</p>  
                                </div>
                            </div>
                        </td>
                    </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4 text-xs leading-5 text-gray-700 whitespace-no-wrap max-w-0">
                                <p>agag</p>                                       
                            </td>
                            <td class="px-6 py-4 text-xs leading-5 text-gray-700 whitespace-no-wrap max-w-0">
                                <p>agag</p> 
                                <p>agag</p>                                         
                            </td>
                            <td class="px-6 py-4 text-xs leading-5 text-right text-gray-700 whitespace-no-wrap max-w-0">
                                <p>RM afafagag</p>                                       
                            </td>
                        </tr>
                </tbody>
        </table>
    </div>
</div>

{{-- @livewire('bayar.steps.step1') --}}