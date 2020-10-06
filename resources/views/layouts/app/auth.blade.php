<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/logo/logo2.png') }}" type="image/gif" sizes="16x16">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <!-- alpine js support for IE11 -->
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine-ie11.min.js" defer></script>

    <!-- Inter Font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <style>
        [x-cloak] { display: none; }
    </style>

    @livewireStyles
</head>
<body class="h-screen antialiased leading-none bg-gray-100">
    <div id="app">
        <div class="flex h-screen overflow-hidden bg-cool-gray-200" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
            <!-- mobile sidebar -->
            <x-sidebar.mobile.index/>
            <!-- desktop sidebar -->
            <x-sidebar.desktop.index/>

            <div x-init="$el.focus()" class="flex-1 overflow-auto focus:outline-none" tabindex="0">

                <!-- TopBar -->
                @include('layouts.navbar.topbar')

                <main class="relative z-0 flex-1 pb-8 overflow-y-auto">
                    <!-- Toaster -->
                    <x-general.toaster/>

                    <!-- Main Content -->
                    @yield('content')
                </main>

                <!-- Calculator -->
                @include('pages.calculator.pendapatan')
                @include('pages.calculator.perniagaan')
                @include('pages.calculator.harta')
                @include('pages.calculator.kwsp')
                @include('pages.calculator.asb')
            </div>
        </div>
    </div>

    @livewireScripts


    @stack('js')
</body>
</html>
