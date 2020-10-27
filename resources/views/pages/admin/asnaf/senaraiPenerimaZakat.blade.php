@extends('layouts.app.auth')

@section('content')
    <main class="relative z-0 flex-1 pb-8 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">
            <x-general.page-title title="Senarai Asnaf Untuk Disaring"/>

            <div class="px-0 mx-auto my-8 text-lg font-medium leading-6 text-cool-gray-900 sm:px-6 lg:px-8">
                    @livewire('admin.senarai-penerima-zakat')
            </div>
        </div>
    </main>
@endsection
