@extends('layouts.app.auth')

@section('content')
    <main class="relative z-0 flex-1 pb-8 overflow-y-auto">
        <x-general.header bgimg="https://ineed-allah.com/wp-content/uploads/2020/05/Reflections-on-Zakat-Third-Pillar-of-Islam-.jpg"/>
        <!-- Content -->
        <div class="mt-8">
            <x-general.page-title title="Senarai Asnaf Untuk Disaring"/>

            <div class="px-0 mx-auto my-8 text-lg font-medium leading-6 text-cool-gray-900 sm:px-6 lg:px-8">
                    @livewire('admin.senarai-penerima-zakat')
            </div>
        </div>
    </main>
@endsection
