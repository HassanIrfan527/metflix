<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MetFlix - Watch TV Shows & Movies online</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased font-sans text-white bg-black">

    <section class="home-sec h-screen flex items-center justify-center">
        <div class="container mx-auto px-4">
            <div class="img-box absolute top-0 left-0 w-full h-full -z-20">
                <img src="{{ asset('images/bg.jpg') }}" alt="background" class="bg-img object-cover w-full h-full" />
                <div class="bg-overlay"></div>
            </div>
            <div class="flex flex-col items-center justify-center z-10">
                <h1 class="text-7xl font-bold text-center text-white">Welcome to MetFlix!</h1>
                <p class="text-3xl p-4 text-center text-white">Watch Unlimited TV Shows & Movies</p>

                <header class="header">
                    @if (Route::has('login'))
                        <livewire:welcome.navigation />
                    @endif
                </header>
    </section>
    <main>
        @include('components.features')
        @include('components.faqs')
      </main>

      @vite(['resources/js/app.js'])
</body>

</html>
