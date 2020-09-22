@php
    $header = collect(['Nama','Alamat Emel','Tarikh Daftar']);
@endphp

<x-general.table>
    <x-slot name="thead">
        @foreach($header as $value)
            <x-general.table-header class="text-left" value="{{ $value }}"/>
        @endforeach
    </x-slot>
    <x-slot name="tbody">
        @forelse ($list as $lists)
            <tr>
                <x-general.table-body colspan="" class="font-medium text-gray-900">
                    {{ $lists->name }}
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-gray-500">
                    {{ $lists->email }}
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-gray-500">
                    {{ $lists->created_at->format('d F Y') }}
                </x-general.table-body>
            </tr>
        @empty
            <tr>
                <x-general.table-body colspan="4" class="text-gray-500 text-center">
                    Tiada Data
                </x-general.table-body>
            </tr>
        @endforelse
    </x-slot>

    {{ $list->links('pagination::tailwind') }}
</x-general.table>