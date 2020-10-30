@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <x-general.header bgimg="https://ineed-allah.com/wp-content/uploads/2020/05/Reflections-on-Zakat-Third-Pillar-of-Islam-.jpg"/>
        <!-- Content -->
        <div class="mt-8">
            <x-general.page-title title="Muat Naik Pukal"/>

            @livewire('pembayarzakat.pukal')
        </div>
    </main>
@endsection
