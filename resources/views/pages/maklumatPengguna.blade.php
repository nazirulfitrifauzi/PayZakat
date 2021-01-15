@extends('layouts.app.auth')

@section('content')
    <!-- Content -->
    <x-general.header bgimg="{{ asset('img/header.jpg') }}"/>
    <div class="mt-8">
        <x-general.page-title title="Maklumat Peribadi Pengguna"/>

        <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
            <div class="bg-white sm:rounded-lg shadow px-5 py-3">
                @livewire('maklumat-pengguna')
            </div>
        </div>
    </div>
@endsection
