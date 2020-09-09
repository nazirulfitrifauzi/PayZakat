<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/logo/logo2.png') }}" type="image/gif" sizes="16x16">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <!-- alpine js support for IE11 -->
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine-ie11.min.js" defer></script>

    <!-- Inter Font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div x-data="{ open: false }" class="relative bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="#" aria-label="Home">
                                <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo/logo2.png') }}" alt="Logo">
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button
                                        @click="open = true" type="button"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" id="main-menu" aria-label="Main menu" aria-haspopup="true" x-bind:aria-expanded="open">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block md:ml-10 md:pr-4">
                            <a href="#" class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Product</a>
                            <a href="#" class="ml-8 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Features</a>
                            <a href="#" class="ml-8 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Marketplace</a>
                            <span class="inline-flex">
                                <a href="{{ route('login') }}" type="button" class="ml-8 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition ease-in-out duration-150 shadow-sm">
                                    Log Masuk
                                </a>
                            </span>
                        </div>
                    </nav>
                </div>
                <div
                    x-show="open"
                    x-description="Mobile menu, show/hide based on menu open state."
                    x-transition:enter="duration-150 ease-out"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="duration-100 ease-in"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                >
                    <div class="rounded-lg shadow-md">
                        <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    <img class="h-10 w-auto" src="{{ asset('img/logo/logo2.png') }}" alt="">
                                </div>
                                <div class="-mr-2">
                                    <button @click="open = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Close menu">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-2 pt-2 pb-3">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Product</a>
                                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Features</a>
                                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Marketplace</a>
                            </div>
                            <div>
                                <a href="{{ route('login') }}" class="block w-full px-5 py-3 text-center font-medium text-teal-600 bg-gray-50 hover:bg-gray-100 hover:text-teal-700 focus:outline-none focus:bg-gray-100 focus:text-teal-700 transition duration-150 ease-in-out" role="menuitem">
                                Log Masuk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                            Pay<span class="text-teal-600 italic">Zakat</span>
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 italic sm:text-base sm:max-w-xl sm:mx-auto md:mt-5 md:text-lg lg:mx-0">
                            “Wahai orang-orang yang beriman, keluarkan zakat sebahagian daripada hasil usaha kamu yang baik-baik dan sebahagian dari apa yang kami keluarkan dari bumi untuk kamu.”
                        </p>
                        <p class="mt-3 text-base text-gray-500 font-bold sm:mt-5 sm:text-base sm:max-w-xl sm:mx-auto md:mt-5 md:text-lg lg:mx-0">
                            (Surah Al-Baqarah : Ayat 267)
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Bayar Zakat
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-teal-700 bg-teal-100 hover:text-teal-600 hover:bg-teal-50 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Kira Zakat
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('img/welcome_banner.jpg') }}" alt="">
        </div>
    </div>
    <div class="py-12 bg-teal-100">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Cara mudah menunaikan zakat
                </h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                    Merangkumi semua pecahan zakat yang ada.
                </p>
            </div>
            <div class="mt-10">
                <ul class="md:grid md:grid-cols-2 md:col-gap-8 md:row-gap-10">
                    <li>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Zakat Pendapatan</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Harta pendapatan bermaksud semua jenis upah, imbuhan, bayaran atau hasil yang diperolehi daripada kerja atau usaha yang dilakukan sama ada secara tetap atau sekali sekali.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Zakat Perniagaan</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Zakat perniagaan ialah zakat yang wajib dikeluarkan hasil daripada harta perniagaan sama ada berasaskan pembuatan, perlombongan, perikanan, perkapalan, pembekalan, pertanian, perkhidmatan atau sebagainya dengan tujuan diperniagakan.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Zakat Harta</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Zakat harta ialah zakat yang mencakup hasil pertanian, binatang ternakan, perniagaan, wang simpanan, harta temuan, emas dan perak. Setiap zakat harta memiliki perhitungannya atau perkiraan harta yang akan dikenakan zakat.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Zakat KWSP</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Wang KWSP ialah wang daripada pendapatan seseorang hasil daripada pekerjaannya yang disimpan di dalam akaun simpanan pekerja kerana tertakluk di bawah akta KWSP. KWSP dikenakan zakat kerana konsepnya sama seperti wang simpanan, cuma perbezaannya simpanan di KWSP tidak boleh dikeluarkan sewenang-wenangnya seperti akaun simpanan biasa.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-gray-50">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                Berminat untuk menjadi ejen?
                <br>
                <span class="text-teal-600">Daftar segera disini.</span>
            </h2>
            <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        Daftar
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-teal-600 bg-white hover:text-teal-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        Log Masuk
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12 bg-teal-100">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Kelebihan menggunakan Pay<span class="text-teal-600 italic">Zakat</span>
                </h3>
            </div>
            <div class="mt-10">
                <ul class="md:grid md:grid-cols-2 md:col-gap-8 md:row-gap-10">
                    <li>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Point 1</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat nisi ac tincidunt lobortis. Nullam et mauris gravida, dapibus massa a, tristique justo. Nunc fermentum imperdiet eros sit amet egestas. Suspendisse potenti. Etiam auctor turpis non leo hendrerit, a ultrices.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Point 2</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat nisi ac tincidunt lobortis. Nullam et mauris gravida, dapibus massa a, tristique justo. Nunc fermentum imperdiet eros sit amet egestas. Suspendisse potenti. Etiam auctor turpis non leo hendrerit, a ultrices.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Point 3</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat nisi ac tincidunt lobortis. Nullam et mauris gravida, dapibus massa a, tristique justo. Nunc fermentum imperdiet eros sit amet egestas. Suspendisse potenti. Etiam auctor turpis non leo hendrerit, a ultrices.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Point 4</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat nisi ac tincidunt lobortis. Nullam et mauris gravida, dapibus massa a, tristique justo. Nunc fermentum imperdiet eros sit amet egestas. Suspendisse potenti. Etiam auctor turpis non leo hendrerit, a ultrices.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="py-6 bg-teal-800">
        <small class="flex justify-center text-white">
            © 1999-{{ now()->year }} Creative System Consultant Sdn. Bhd.
        </small>
    </div>
</body>
</html>
