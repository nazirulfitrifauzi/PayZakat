@extends('layouts.app.guest')

@section('content')
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
                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                            Nama Penuh
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="name" name="name" type="text" required value="{{ old('name') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name')  border-red-500 @enderror">

                            @error('name')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                            User ID
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="username" name="username" type="text" required value="{{ old('username') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('username')  border-red-500 @enderror">

                            @error('username')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                            Alamat Emel
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="email" name="email" type="email" required value="{{ old('email') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email')  border-red-500 @enderror">

                            @error('email')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                            Kata Laluan
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password" name="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password')  border-red-500 @enderror">

                            @error('password')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="password-confirm" class="block text-sm font-medium leading-5 text-gray-700">
                            Sahkan Kata Laluan
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password-confirm" name="password_confirmation" type="password" required class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-teal focus:border-teal-300 sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-teal-600 border border-transparent rounded-md hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700">
                                Daftar Akaun
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
