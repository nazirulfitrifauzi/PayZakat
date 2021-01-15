@extends('layouts.app.auth')

@section('content')
    <x-general.header bgimg="{{ asset('img/header.jpg') }}"/>
    <!-- Content -->
    @livewire('p-p-z.dashboard')
@endsection
