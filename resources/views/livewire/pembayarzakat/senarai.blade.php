<div>
    <div class="flex justify-between px-4 mx-auto my-3 text-lg font-medium leading-6 text-cool-gray-900 sm:px-6 lg:px-8">
        <a href="{{ route('pembayar.tambah') }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition duration-150 ease-in-out bg-teal-400 rounded-md shadow text-cool-gray-100 hover:bg-teal-500 hover:text-wite focus:outline-none focus:shadow-outline-blue active:bg-cool-gray-100 active:text-cool-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <h1 class="tracking-wider">Tambah</h1>
        </a>
        <a href="{{ route('pembayar.pukal') }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition duration-150 ease-in-out bg-white rounded-md shadow hover:shadow-lg text-cool-gray-500 hover:text-cool-gray-800 focus:outline-none focus:shadow-outline-blue active:bg-cool-gray-100 active:text-cool-gray-700">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
            <h1 class="tracking-wider">Muat Naik Pukal</h1>
        </a>
    </div>
    <!-- Activity list (smallest breakopoint only) -->
    <div class="shadow sm:hidden">
        <ul class="mt-2 overflow-hidden divide-y shadow divide-cool-gray-200 sm:hidden" x-max="1">
            @forelse ($customer_list as $customer)
                <li>
                    <a href="{{ route('pembayar.maklumat', ['uuid'=>$customer->uuid]) }}" class="block px-4 py-4 bg-white hover:bg-cool-gray-50">
                        <div class="flex items-center space-x-4">
                            <div class="flex flex-1 space-x-2">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-5 h-5 transition duration-150 ease-in-out text-cool-gray-400">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="text-sm text-cool-gray-500">
                                    <p>{{ $customer->name }}</p>
                                    <p>{{ $customer->phone_no }}</p>
                                    <p>{{ $customer->email }}</p>
                                </div>
                            </div>
                            <div>
                                <svg class="flex-shrink-0 w-5 h-5 text-cool-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
            @empty
                <h1 class="text-sm italic text-gray-400">Tiada senarai pembayar zakat untuk akaun ini.</h1>
            @endforelse
        </ul>
        <div class="px-4 py-3 bg-white border-t border-cool-gray-200">
            {{ $customer_list->links('pagination::tailwind') }}
        </div>
    </div>

    <!-- Activity table (small breakopoint and up) -->
    <div class="hidden sm:block">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col mt-2">
                <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-cool-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left uppercase bg-cool-gray-50 text-cool-gray-500">
                                    Nama
                                </th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center uppercase bg-cool-gray-50 text-cool-gray-500">
                                    No. Telefon
                                </th>
                                <th class="hidden px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center uppercase bg-cool-gray-50 text-cool-gray-500 md:block">
                                    E-Mail
                                </th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center uppercase bg-cool-gray-50 text-cool-gray-500">
                                    Tarikh Daftar
                                </th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center uppercase bg-cool-gray-50 text-cool-gray-500">
                                    Status Saringan
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-cool-gray-200" x-max="1">
                            @forelse ($customer_list as $customer)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap max-w-0 text-cool-gray-900">
                                        <div class="flex">
                                            <a href="{{ route('pembayar.maklumat', ['uuid'=>$customer->uuid]) }}" class="inline-flex space-x-2 text-sm leading-5 truncate group">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-5 h-5 transition duration-150 ease-in-out text-cool-gray-400 group-hover:text-cool-gray-500">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="truncate transition duration-150 ease-in-out text-cool-gray-500 group-hover:text-cool-gray-900">
                                                    {{ $customer->name }}
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-center whitespace-no-wrap text-cool-gray-500">
                                        {{ $customer->phone_no }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-center whitespace-no-wrap text-cool-gray-500">
                                        {{ $customer->email }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-center whitespace-no-wrap text-cool-gray-500">
                                        {{ date('d/m/Y', strtotime($customer->created_at)) }}
                                    </td>
                                    <td class="flex justify-center px-6 py-4 text-sm leading-5 whitespace-no-wrap text-cool-gray-500">
                                            @if ($customer->screen_status == 0)
                                                <x-heroicon-o-refresh class="w-5 h-5 text-yellow-400 "/>
                                            @else
                                                <x-heroicon-o-check class="w-5 h-5 text-green-600 "/>
                                            @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-5 text-sm italic text-gray-400">Tiada senarai pembayar zakat untuk akaun ini.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="px-4 py-3 bg-white border-t border-cool-gray-200 sm:px-6">
                        {{ $customer_list->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>