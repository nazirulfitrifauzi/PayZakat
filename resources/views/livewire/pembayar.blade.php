<div>   
    <div class="mx-auto px-4 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8 flex justify-between">
        <a href="{{ route('pembayar.tambah') }}" class="relative inline-flex items-center px-4 py-2 shadow text-sm leading-5 font-medium rounded-md text-cool-gray-100 bg-teal-400 hover:bg-teal-500 hover:text-wite focus:outline-none focus:shadow-outline-blue active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <h1 class="tracking-wider">Tambah</h1>
        </a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 shadow hover:shadow-lg text-sm leading-5 font-medium rounded-md text-cool-gray-500 bg-white hover:text-cool-gray-800 focus:outline-none focus:shadow-outline-blue active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
            <h1 class="tracking-wider">Muat Naik Pukal</h1>
        </a>
    </div>
    <!-- Activity list (smallest breakopoint only) -->
    <div class="shadow sm:hidden">
        <ul class="mt-2 divide-y divide-cool-gray-200 overflow-hidden shadow sm:hidden" x-max="1">
            @forelse ($customer_list as $customer)
                <li>
                    <a href="#" class="block px-4 py-4 bg-white hover:bg-cool-gray-50">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 flex space-x-2">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 h-5 w-5 text-cool-gray-400 transition ease-in-out duration-150">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="text-cool-gray-500 text-sm">
                                    <p>{{ $customer->name }}</p>
                                    <p>{{ $customer->phone_no }}</p>
                                    <p>{{ $customer->email }}</p>
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
                <h1 class="text-gray-400 text-sm italic">Tiada senarai pembayar zakat untuk akaun ini.</h1>
            @endforelse
        </ul>
        <div class="bg-white px-4 py-3 border-t border-cool-gray-200">
            {{ $customer_list->links('pagination::tailwind') }}
        </div>
    </div>

    <!-- Activity table (small breakopoint and up) -->
    <div class="hidden sm:block">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
                <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                    <table class="min-w-full divide-y divide-cool-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-cool-gray-50 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    Nama
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    No. Telefon
                                </th>
                                <th class="hidden px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider md:block">
                                    E-Mail
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-50 text-center text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    Tarikh Daftar
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                            @forelse ($customer_list as $customer)
                                <tr class="bg-white">
                                    <td class="max-w-0 px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        <div class="flex">
                                            <a href="{{ route('pembayar.maklumat', ['uuid'=>$customer->uuid]) }}" class="group inline-flex space-x-2 truncate text-sm leading-5">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 h-5 w-5 text-cool-gray-400 group-hover:text-cool-gray-500 transition ease-in-out duration-150">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-cool-gray-500 truncate group-hover:text-cool-gray-900 transition ease-in-out duration-150">
                                                    {{ $customer->name }}
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        {{ $customer->phone_no }}
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        {{ $customer->email }}
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        {{ date('d/m/Y', strtotime($customer->created_at)) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-gray-400 text-sm italic p-5">Tiada senarai pembayar zakat untuk akaun ini.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="bg-white px-4 py-3 border-t border-cool-gray-200 sm:px-6">
                        {{ $customer_list->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
