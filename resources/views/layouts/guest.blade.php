<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <div class="loader bg-opacity-75 z-50 fixed inset-0" wire:loading.delay>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/bg.jpg') }}" alt="Hero Background" class="w-full h-full object-cover">
            <div class="absolute z-0 inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 bg-overlay"></div>
        </div>
        <div class="z-10 text-center">

            <a class="justify-center" href="/" wire:navigate>
                <x-application-logo class="w-20 h-20 fill-current text-red-500" />
            </a>
        </div>
        <div
            class="w-full z-10 sm:max-w-md mt-6 px-6 py-4 bg-white/30 dark:bg-gray-800/30 backdrop-blur-lg border border-white/20 shadow-lg overflow-hidden sm:rounded-xl">
            {{ $slot }}


        </div>


    </div>
</body>

</html>
