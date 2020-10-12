@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">
            <x-general.page-title title="Senarai Asnaf Zakat"/>
            @livewire('asnaf.senarai')
        </div>
    </main>
@endsection
