@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">
            <x-general.page-title title="Muat Naik Pukal"/>

            @livewire('asnaf.pukal')
        </div>
    </main>
@endsection
