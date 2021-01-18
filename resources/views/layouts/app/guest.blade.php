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
    <script type="text/javascript">
    function PPZHide(value){
        if(value=="2"){
            document.getElementById('nric').style.display='none';
            document.getElementById('nricL').style.display='none';
            document.getElementById('nric').required=false;
        }else if(value=="1"){
            document.getElementById('nric').style.display='block';
            document.getElementById('nricL').style.display='block';
            document.getElementById('nric').required=true;
        }
      }
    </script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <!-- alpine js support for IE11 -->
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine-ie11.min.js" defer></script>

    <!-- Inter Font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @livewireStyles
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        @yield('content')
    </div>

    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    @stack('js')
</body>
</html>
