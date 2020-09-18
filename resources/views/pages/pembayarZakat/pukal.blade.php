@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">
            <h2 class="mx-auto mt-8 px-4 text-lg sm:px-6 lg:px-8 font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                Muat Naik Pukal
            </h2>

            @livewire('pembayarzakat.pukal')
        </div>
    </main>
@endsection
