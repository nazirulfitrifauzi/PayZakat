@extends('layouts.app.auth')

@section('content')
    <x-general.header bgimg="{{ asset('img/header.jpg') }}"/>
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">

            @php
                $year = \Carbon\Carbon::now()->format('Y');
            @endphp

            @livewire('ppz.agihan', ['year' => $year])
        </div>
    </main>
@endsection
