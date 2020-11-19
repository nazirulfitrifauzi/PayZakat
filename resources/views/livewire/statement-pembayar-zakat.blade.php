<div class="mt-8">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 gap-5 mt-8">
        <div>
            <select id="location" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                <option selected>Semua Transaksi</option>
                <option>Transaksi Debit</option>
            </select>
        </div>
        <div>
            <select id="location" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                <option>30 Hari Sebelum</option>
                <option selected>60 Hari Sebelum</option>
                <option>90 Hari Sebelum</option>
            </select>
        </div>
    </div>

    <!-- Activity list (smallest breakopoint only) -->
    <div class="shadow sm:hidden mt-8">
        <ul class="mt-2 divide-y divide-cool-gray-200 overflow-hidden shadow sm:hidden" x-max="1">
            @forelse ($statement_list as $stmnt)
            <li>
                <a href="#" class="block px-4 py-4 bg-white hover:bg-cool-gray-50">
                    <div class="flex items-center space-x-4">
                        <div class="flex-1 flex space-x-2 truncate">
                            <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-cool-gray-500 text-sm truncate">
                                <p class="truncate">{{$stmnt->document_no}}</p>
                                <p><span class="text-red-500 font-medium">RM {{$stmnt->transaction_amount}}</span></p>
                                <p>{{ date('d F Y', strtotime($stmnt->document_date)) }}</p>
                            </div>
                        </div>
                        <div>
                            <svg class="flex-shrink-0 h-5 w-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </li>
            @empty
                <h1 class="text-gray-400 text-sm italic">Tiada senarai transaksi zakat untuk akaun ini.</h1>
            @endforelse
        </ul>
        <div class="bg-white px-4 py-3 border-t border-cool-gray-200 sm:px-6">
            {{ $statement_list->links('pagination::tailwind') }}
        </div>
    </div>

    <!-- Activity table (small breakopoint and up) -->
    <div class="hidden sm:block mt-8">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full divide-y divide-cool-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-4 bg-cool-gray-700 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider">
                                    Tarikh
                                </th>
                                <th class="px-6 py-4 bg-cool-gray-700 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider">
                                    Butiran
                                </th>
                                <th class="hidden px-6 py-4 bg-cool-gray-700 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider md:block">
                                    Jumlah
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                            @forelse ($statement_list as $stmnt)
                            <tr class="bg-white">
                                <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                    {{ date('d F Y', strtotime($stmnt->document_date)) }}
                                </td>
                                <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-left text-cool-gray-900">
                                    <div class="flex">
                                        <a href="#" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                            <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                {{$stmnt->document_no}}
                                            </p>
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-left whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                    <span class="text-red-500 font-medium">-RM {{$stmnt->transaction_amount}}</span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-gray-400 text-sm italic p-5">Tiada senarai transaksi untuk akaun ini.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="bg-white px-4 py-3 border-t border-cool-gray-200 sm:px-6">
                        {{ $statement_list->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex justify-center">
            <span class="inline-flex rounded-md shadow-sm">
                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-black bg-white hover:bg-gray-300 border border-gray-400 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                    Paparan Penyata
                    <svg class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </button>
            </span>
        </div>
</div>