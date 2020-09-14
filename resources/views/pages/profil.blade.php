@extends('layouts.app.auth')

@section('content')
      <div class="mt-8">
            <h2 class="mx-auto mt-8 px-4 text-lg sm:px-6 lg:px-8 font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
            Profil
            </h2>

            <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                  <div class="bg-white sm:rounded-lg shadow px-5 py-3">
                        @livewire('profil')
                  </div>
            </div>
      </div>
@endsection
