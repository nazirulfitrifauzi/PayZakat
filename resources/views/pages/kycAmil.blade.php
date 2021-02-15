@extends('layouts.app.guest')

@section('content')
<div class="hidden">{{$uuid=app('request')->input('uuid')}}</div>

    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-general.logo class="w-auto h-24 mx-auto"/>
            <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                Daftar akaun baru
            </h2>
            <p class="mt-2 text-sm leading-5 text-center text-gray-600 max-w">
                atau
                <a href="{{ route('login') }}" class="font-medium text-teal-600 transition duration-150 ease-in-out hover:text-teal-500 focus:outline-none focus:underline">
                    log masuk akaun
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                @livewire('kyc-amil',['uuid'=>$uuid])
               
            </div>
        </div>
    </div>
@endsection
