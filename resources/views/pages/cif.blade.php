@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Page header -->
        @include('layouts.navbar.header')

        <!-- Tab Header -->
        <div class="bg-white shadow px-4 lg:px-8">
            <div class="border-t border-cool-gray-200">
                <div class="sm:hidden">
                    <select aria-label="Selected tab" class="form-select block w-full">
                        <option>My Account</option>
                        <option>Company</option>
                        <option selected>Team Members</option>
                        <option>Billing</option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex">
                            <a href="#" class="group inline-flex items-center justify-center w-1/4 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                                <svg class="-ml-0.5 mr-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-bold">Alamat</span>
                            </a>
                            <a href="#" class="group inline-flex items-center justify-center w-1/4 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                                <svg class="-ml-0.5 mr-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-bold">Keluarga</span>
                            </a>
                            <a href="#" class="group inline-flex items-center justify-center w-1/4 py-4 px-1 border-b-2 border-indigo-500 font-medium text-sm leading-5 text-indigo-600 focus:outline-none focus:text-indigo-800 focus:border-indigo-700" aria-current="page">
                                <svg class="-ml-0.5 mr-2 h-5 w-5 text-indigo-600 group-hover:text-gray-500 group-focus:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-bold">Kebajikan</span>
                            </a>
                            <a href="#" class="group inline-flex items-center justify-center w-1/4 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                                <svg class="-ml-0.5 mr-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-bold">Yuran</span>
                            </a>
                            <a href="#" class="group inline-flex items-center justify-center w-1/4 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                                <svg class="-ml-0.5 mr-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-bold">Akaun</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content -->
        <div class=" bg-white">
            <p>Hello World</p>
        </div>
    </main>
@endsection