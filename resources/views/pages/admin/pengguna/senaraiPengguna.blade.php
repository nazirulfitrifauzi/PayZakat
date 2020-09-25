@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">
            <x-general.page-title title="Senarai Semua Pengguna"/>

            <div class="mx-auto px-0 my-8 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                    @livewire('admin.senarai-pengguna')
            </div>
        </div>
    </main>
@endsection
