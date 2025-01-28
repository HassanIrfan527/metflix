<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pricing - MetFlix | Choose the right plan for you</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    <style>
        .bg-img {
            background-blend-mode: darken;
            filter: brightness(0.5) blur(2px);
        }

        .bg-overlay {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            background-image: linear-gradient(to top,
                    rgba(0, 0, 0, 0.8) 0,
                    rgba(0, 0, 0, 0) 60%,
                    rgba(0, 0, 0, 0.8) 100%);
        }
    </style>
</head>

<body class="antialiased font-sans text-white bg-black">
    <section class="pricing-sec flex items-center justify-center">
        <div class="container mx-auto px-4">
            <div class="img-box fixed top-0 left-0 w-full h-full -z-20">
                <img src="{{ asset('images/bg.jpg') }}" alt="background"
                    class="bg-img object-cover w-full min-h-full" />
                <div class="bg-overlay"></div>
            </div>

            <livewire:pricing />

    </section>
    {{-- Scripts --}}
    @vite('resources/js/app.js')
</body>

</html>
