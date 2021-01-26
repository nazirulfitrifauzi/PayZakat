@extends('layouts.app.auth')

@section('content')
<x-general.header bgimg="{{ asset('img/header.jpg') }}"/>
<div class="m-5 flex justify-between">
    <div class="w-full flex items-center justify-between px-4 p-3 mb-8 text-md font-semibold text-teal-100 bg-teal-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-teal my-6">
        
        <h2>Senarai Butiran Refund</h2>

        <a href="{{route('ppz.refund')}}" class="bg-white hover:bg-teal-400 text-teal-800  hover:text-white font-semibold py-2 px-4 rounded inline-flex items-center text-xs">
            <x-heroicon-s-arrow-left class="-ml-0.5 mr-2 h-3 w-3"/>
            <span>Kembali</span>
        </a>
    </div>
    
</div>
    <main class="pl-8 pr-8">
        @livewire('ppz.refund.refund-application')
    </main>
@endsection