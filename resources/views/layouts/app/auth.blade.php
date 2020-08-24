<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <style>
        [x-cloak] { display: none; }
    </style>

    @livewireStyles
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <div class="h-screen flex overflow-hidden bg-cool-gray-100" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
            <!-- mobile sidebar -->
            @include('layouts.sidebar.mobile')
            <!-- desktop sidebar -->
            @include('layouts.sidebar.desktop')

            <div x-init="$el.focus()" class="flex-1 overflow-auto focus:outline-none" tabindex="0">

                @include('layouts.navbar.topbar')

                <!-- Main Content -->
                @yield('content')

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

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    @stack('js')
</body>
</html>
