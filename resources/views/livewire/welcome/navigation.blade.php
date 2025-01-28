<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-lg tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-lg tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="bg-red-500 mx-6 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-lg tracking-wide focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
            >
                Register
            </a>
        @endif
    @endauth
</nav>
