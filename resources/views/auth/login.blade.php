@extends('layouts.app.guest')

@section('content')
<div class="min-h-screen bg-white flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <div class="flex justify-center">
                    <img class="h-24 w-auto" src="{{ asset('img/logo/logo.png') }}" alt="Workflow">
                </div>
                <h2 class="mt-6 text-3xl leading-9 font-extrabold text-gray-900 text-center">
                    Log masuk akaun
                </h2>
                <p class="mt-2 text-sm leading-5 text-gray-600 max-w text-center">
                    atau
                    <a href="{{ route('register') }}" class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        daftar akaun baru
                    </a>
                </p>
            </div>

            <div class="mt-8">
                <div class="mt-6">
                    <form action="{{ route('login') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                                Alamat Emel
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="email" name="email" type="email" required value="{{ old('email') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror">

                                @error('email')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                                Kata Laluan
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="password" name="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-500 @enderror">
                                @error('password')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember" name="remember" type="checkbox" class="form-checkbox h-4 w-4 text-teal-600 transition duration-150 ease-in-out">
                                <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
                                    Ingat saya
                                </label>
                            </div>

                            <div class="text-sm leading-5">
                                <a href="{{ route('password.request') }}" class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                    Lupa Kata Laluan?
                                </a>
                            </div>
                        </div>

                        <div>
                            <span class="block w-full rounded-md shadow-sm">
                                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition duration-150 ease-in-out">
                                    Log Masuk
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('img/login_banner.jpg') }}" alt="">
    </div>
</div>
@endsection
