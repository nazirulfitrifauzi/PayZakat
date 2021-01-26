@extends('layouts.app.auth')

@section('content')
<x-general.header bgimg="{{ asset('img/header.jpg') }}"/>
<x-general.page-title class="mb-0" title="Refund"/>
    <main class="pl-8 pr-8">
        @livewire('ppz.refund.refund')
    </main>
@endsection