@extends('layouts.app.auth')

@section('content')
<x-general.header bgimg="https://ineed-allah.com/wp-content/uploads/2020/05/Reflections-on-Zakat-Third-Pillar-of-Islam-.jpg"/>
    <main class="p-3">
        @livewire('bayar.index')
    </main>
@endsection
