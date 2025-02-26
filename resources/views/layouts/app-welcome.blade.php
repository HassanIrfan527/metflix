<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'MetFlix - Watch Unlimited Movies and TV Shows' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased font-sans text-white bg-gray-900">

    <div class="loader bg-opacity-75 z-50" wire:loading.delay>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>

    <!-- Navigation -->
    <livewire:welcome.navigation />
    {{ $slot }}
    <!-- Footer -->
    <footer class="bg-gray-900 py-12 border-t border-gray-800 text-gray-400">

        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">MetFlix</h4>
                    <p class="text-gray-400">The best streaming experience</p>
                </div>
                <div>
                    <h5 class="font-bold mb-4">Company</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">About</a></li>
                        <li><a href="#" class="hover:text-white">Careers</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold mb-4">Legal</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Privacy</a></li>
                        <li><a href="#" class="hover:text-white">Terms</a></li>
                        <li><a href="#" class="hover:text-white">Cookie Settings</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold mb-4">Social</h5>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                        <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-400 hover:text-white">Instagram</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                &copy; 2025 <a class="text-red-500" href="{{ route('welcome') }}">MetFlix</a> . All rights reserved.
            </div>
        </div>
    </footer>

    @vite(['resources/js/app.js'])

</body>

</html>
