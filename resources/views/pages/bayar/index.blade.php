@extends('layouts.app.auth')

@section('content')
<x-general.header bgimg="https://ineed-allah.com/wp-content/uploads/2020/05/Reflections-on-Zakat-Third-Pillar-of-Islam-.jpg"/>
  <x-general.page-title class="mb-0" title="Bayar Zakat"/>
    <main class="pl-8 pr-8">
        @livewire('bayar.index')
    </main>
@endsection
