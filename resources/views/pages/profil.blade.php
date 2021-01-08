@extends('layouts.app.auth')

@section('content')
<x-general.header bgimg="https://ineed-allah.com/wp-content/uploads/2020/05/Reflections-on-Zakat-Third-Pillar-of-Islam-.jpg"/>
      <div class="mt-8">
            <x-general.page-title title="Tetapan"/>

            <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                  <div class="bg-white sm:rounded-lg shadow  py-3 relative">
                        @livewire('profil')
                  </div>
            </div>
      </div>
@endsection
