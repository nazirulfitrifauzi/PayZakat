@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <x-general.header bgimg="{{ asset('img/header.jpg') }}/>
        <!-- Content -->
        <div class="mt-8">
            <x-general.page-title title="Maklumat Pembayar Zakat"/>

            <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                <div class="bg-white sm:rounded-lg shadow px-5 py-3">
                    @livewire('pembayarzakat.maklumat', ['customer'=>$selected_customer])
                </div>
            </div>
            @livewire('statement-pembayar-zakat')
        </div>
    </main>
@endsection
