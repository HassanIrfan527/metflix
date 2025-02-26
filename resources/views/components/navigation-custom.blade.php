<nav
    class="sticky top-0 backdrop-blur-xl bg-black/60 border-b border-white/5 shadow-[0_4px_30px_rgba(0,0,0,0.2)] z-50 transition-all duration-500">
    <div class="container mx-auto flex justify-between items-center px-6 py-3" x-data="{ scrolled: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })">
        <!-- Logo Section with Animation -->
        <div class="flex-shrink-0 transition-all duration-500 hover:scale-105"
            :class="scrolled ? 'transform scale-90' : ''">
            <a href="{{ route('welcome') }}" wire:navigate class="cursor-pointer text-3xl text-white relative group">
                <x-application-logo height="60" width="60"
                    class="transition-all duration-500 group-hover:filter group-hover:drop-shadow-[0_0_8px_rgba(239,68,68,0.7)]"></x-application-logo>
                <span
                    class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 via-red-400 to-pink-500 transition-all duration-500 group-hover:w-full"></span>
            </a>
        </div>

        <!-- Center Search Bar - Only shows when scrolled -->
        <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 transition-all duration-500"
            :class="scrolled ? 'opacity-100 scale-100' : 'opacity-0 scale-95 pointer-events-none'">
            <div class="relative">
                <input type="text" placeholder="Search titles, genres..."
                    class="bg-white/10 backdrop-blur-md text-white border border-white/10 rounded-full py-2 pl-10 pr-4 w-64 focus:w-80 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-red-500/50 placeholder-white/50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70 absolute left-3 top-2.5"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- Navigation Links with Enhanced Animation -->
        <div class="hidden md:block" x-data="{ activeLink: null, hoverLink: null }">
            <ul class="flex space-x-8 text-white/90">
                <li class="group relative">
                    <a href="#"
                        class="py-2 px-1 inline-block font-medium transition-all duration-300 hover:text-white group"
                        @mouseover="hoverLink = 'home'" @mouseleave="hoverLink = null"
                        @click="activeLink = (activeLink === 'home' ? null : 'home')">
                        <span class="relative z-10 flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transition-transform duration-300 group-hover:scale-110" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Home</span>
                        </span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 via-pink-500 to-purple-500 transition-all duration-300 rounded-full"
                            :class="(hoverLink === 'home' || activeLink === 'home') ? 'w-full' : 'w-0'"></span>
                    </a>
                    <!-- Dropdown for Home - Shows when active -->
                    <div class="absolute left-0 mt-2 w-48 bg-black/80 backdrop-blur-xl border border-white/10 rounded-lg shadow-lg transition-all duration-300 z-20 overflow-hidden"
                        :class="activeLink === 'home' ? 'opacity-100 translate-y-0 max-h-60' :
                            'opacity-0 -translate-y-4 max-h-0 pointer-events-none'"
                        @click.away="activeLink = null">
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">New
                            Releases</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Popular</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Trending</a>
                    </div>
                </li>
                <li class="group relative">
                    <a href="#"
                        class="py-2 px-1 inline-block font-medium transition-all duration-300 hover:text-white group"
                        @mouseover="hoverLink = 'movies'" @mouseleave="hoverLink = null"
                        @click="activeLink = (activeLink === 'movies' ? null : 'movies')">
                        <span class="relative z-10 flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transition-transform duration-300 group-hover:scale-110" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <span>Movies</span>
                        </span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 via-pink-500 to-purple-500 transition-all duration-300 rounded-full"
                            :class="(hoverLink === 'movies' || activeLink === 'movies') ? 'w-full' : 'w-0'"></span>
                    </a>
                    <!-- Dropdown for Movies -->
                    <div class="absolute left-0 mt-2 w-48 bg-black/80 backdrop-blur-xl border border-white/10 rounded-lg shadow-lg transition-all duration-300 z-20 overflow-hidden"
                        :class="activeLink === 'movies' ? 'opacity-100 translate-y-0 max-h-60' :
                            'opacity-0 -translate-y-4 max-h-0 pointer-events-none'"
                        @click.away="activeLink = null">
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Action</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Comedy</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Drama</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Horror</a>
                    </div>
                </li>
                <li class="group relative">
                    <a href="#"
                        class="py-2 px-1 inline-block font-medium transition-all duration-300 hover:text-white group"
                        @mouseover="hoverLink = 'tvshows'" @mouseleave="hoverLink = null"
                        @click="activeLink = (activeLink === 'tvshows' ? null : 'tvshows')">
                        <span class="relative z-10 flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transition-transform duration-300 group-hover:scale-110" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>TV Shows</span>
                        </span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 via-pink-500 to-purple-500 transition-all duration-300 rounded-full"
                            :class="(hoverLink === 'tvshows' || activeLink === 'tvshows') ? 'w-full' : 'w-0'"></span>
                    </a>
                    <!-- Dropdown for TV Shows -->
                    <div class="absolute left-0 mt-2 w-48 bg-black/80 backdrop-blur-xl border border-white/10 rounded-lg shadow-lg transition-all duration-300 z-20 overflow-hidden"
                        :class="activeLink === 'tvshows' ? 'opacity-100 translate-y-0 max-h-60' :
                            'opacity-0 -translate-y-4 max-h-0 pointer-events-none'"
                        @click.away="activeLink = null">
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Drama
                            Series</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Comedy
                            Series</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Fantasy</a>
                    </div>
                </li>
                <li class="group relative">
                    <a href="#"
                        class="py-2 px-1 inline-block font-medium transition-all duration-300 hover:text-white group"
                        @mouseover="hoverLink = 'anime'" @mouseleave="hoverLink = null"
                        @click="activeLink = (activeLink === 'anime' ? null : 'anime')">
                        <span class="relative z-10 flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transition-transform duration-300 group-hover:scale-110" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span>Anime</span>
                        </span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-red-500 via-pink-500 to-purple-500 transition-all duration-300 rounded-full"
                            :class="(hoverLink === 'anime' || activeLink === 'anime') ? 'w-full' : 'w-0'"></span>
                    </a>
                    <!-- Dropdown for Anime -->
                    <div class="absolute left-0 mt-2 w-48 bg-black/80 backdrop-blur-xl border border-white/10 rounded-lg shadow-lg transition-all duration-300 z-20 overflow-hidden"
                        :class="activeLink === 'anime' ? 'opacity-100 translate-y-0 max-h-60' :
                            'opacity-0 -translate-y-4 max-h-0 pointer-events-none'"
                        @click.away="activeLink = null">
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Shonen</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Shojo</a>
                        <a href="#"
                            class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/10 transition-colors duration-200">Seinen</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu Button - Animated Hamburger -->
        <div class="md:hidden flex items-center" x-data="{ open: false }">
            <button class="text-white focus:outline-none relative w-8 h-8" @click="open = !open">
                <span class="sr-only">Toggle menu</span>
                <!-- Animated hamburger icon -->
                <span
                    class="absolute top-4 left-1 block w-6 h-0.5 bg-white transform transition duration-500 ease-in-out"
                    :class="{ 'rotate-45': open, 'translate-y-0': open, '-translate-y-1.5': !open }"></span>
                <span
                    class="absolute top-4 left-1 block w-6 h-0.5 bg-white transform transition duration-500 ease-in-out"
                    :class="{ 'opacity-0': open }"></span>
                <span
                    class="absolute top-4 left-1 block w-6 h-0.5 bg-white transform transition duration-500 ease-in-out"
                    :class="{ '-rotate-45': open, 'translate-y-0': open, 'translate-y-1.5': !open }"></span>
            </button>

            <!-- Mobile Search Button -->
            <button class="ml-4 text-white focus:outline-none" x-data="{ searchOpen: false }"
                @click="searchOpen = !searchOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>

                <!-- Mobile Search Input (Slide Down) -->
                <div class="absolute top-full left-0 w-full bg-black/90 transform transition-all duration-300 z-50"
                    :class="searchOpen ? 'translate-y-0 opacity-100' : '-translate-y-full opacity-0'">
                    <div class="p-4">
                        <div class="relative">
                            <input type="text" placeholder="Search..."
                                class="w-full bg-white/10 border border-white/20 text-white rounded-lg py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-red-500/50">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-white/70 absolute left-3 top-2.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </button>
        </div>

        <!-- Auth Buttons with Enhanced Effects -->
        <div class="hidden md:flex items-center space-x-4" :class="scrolled ? 'scale-90' : ''"
            x-data="{ hover: false }">
            @auth
                <a href="{{ route('dashboard') }}" wire:navigate class="relative overflow-hidden group"
                    @mouseover="hover = true" @mouseleave="hover = false">
                    <span
                        class="block px-6 py-2.5 rounded-full font-medium text-white
                                 bg-gradient-to-r from-red-600 to-pink-600 transform transition-all duration-300
                                 group-hover:translate-y-0 group-hover:shadow-lg group-hover:shadow-red-500/30">
                        Dashboard
                    </span>
                    <!-- Glow effect -->
                    <span
                        class="absolute inset-0 rounded-full bg-gradient-to-r from-red-400 to-pink-400 blur opacity-40
                                 transform transition-all duration-300 scale-105 group-hover:opacity-70"></span>
                </a>

                <!-- Notification Bell -->
                <button class="relative text-white focus:outline-none" x-data="{ notifOpen: false }"
                    @click="notifOpen = !notifOpen">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 hover:text-red-400 transition-colors duration-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <!-- Red dot notification -->
                    <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>

                    <!-- Notification Dropdown -->
                    <div class="absolute right-0 mt-3 w-64 bg-black/80 backdrop-blur-xl border border-white/10 rounded-lg shadow-lg p-2 transition-all duration-300 z-20"
                        :class="notifOpen ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-4 pointer-events-none'"
                        @click.away="notifOpen = false">
                        <div class="text-sm font-medium text-white/90 p-2">Notifications</div>
                        <div class="border-t border-white/10"></div>
                        <div class="p-2 hover:bg-white/10 rounded-md transition-colors duration-200">
                            <div class="text-sm text-white">New content added to your watchlist</div>
                            <div class="text-xs text-white/60">2 hours ago</div>
                        </div>
                        <div class="p-2 hover:bg-white/10 rounded-md transition-colors duration-200">
                            <div class="text-sm text-white">New recommendation available</div>
                            <div class="text-xs text-white/60">Yesterday</div>
                        </div>
                    </div>
                </button>
            @else
                <!-- Login Button - Enhanced Neumorphic -->
                <a href="{{ route('login') }}" wire:navigate class="relative overflow-hidden group">
                    <span
                        class="block px-6 py-2.5 rounded-full font-medium text-red-500 border border-red-500/50
                                 transition-all duration-300 group-hover:text-white group-hover:border-transparent
                                 group-hover:bg-gradient-to-r group-hover:from-red-500 group-hover:to-pink-500">
                        Log in
                    </span>
                    <!-- Subtle inner shadow for neumorphic effect -->
                    <span
                        class="absolute inset-0 rounded-full shadow-inner opacity-0 transition-opacity duration-300 group-hover:opacity-30"></span>
                </a>

                @if (Route::has('register'))
                    <!-- Register Button - Enhanced Glass Style -->
                    <a href="{{ route('register') }}" wire:navigate class="relative overflow-hidden group">
                        <span
                            class="relative z-10 block px-6 py-2.5 rounded-full font-medium text-white
                                     bg-gradient-to-r from-red-600 to-pink-600 transform transition-all duration-300
                                     group-hover:translate-y-0 group-hover:shadow-lg group-hover:shadow-red-500/30">
                            Register
                        </span>
                        <!-- Glass highlights -->
                        <span
                            class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-white/20 to-transparent rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <!-- Glow effect -->
                        <span
                            class="absolute inset-0 rounded-full bg-gradient-to-r from-red-400 to-pink-400 blur opacity-40
                                     transform transition-all duration-300 scale-105 group-hover:opacity-70"></span>
                    </a>
                @endif
            @endauth
        </div>
    </div>

    <!-- Mobile Menu (Slide Down) -->
    <div class="md:hidden bg-black/90 backdrop-blur-xl transform transition-all duration-500 overflow-hidden"
        :class="open ? 'max-h-screen opacity-100 py-4' : 'max-h-0 opacity-0 py-0'" x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-4">

        <ul class="flex flex-col space-y-1 text-white/90 px-6">
            <li class="py-2 border-b border-white/10" x-data="{ subMenuOpen: false }">
                <div class="flex justify-between items-center">
                    <a href="#"
                        class="block font-medium text-white/80 hover:text-white transition-colors duration-200">
                        <span class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span>Home</span>
                        </span>
                    </a>
                    <button @click="subMenuOpen = !subMenuOpen" class="text-white/70 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 transform transition-transform duration-200"
                            :class="subMenuOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div class="pl-6 mt-2 space-y-1 transition-all duration-300"
                    :class="subMenuOpen ? 'max-h-40 opacity-100' : 'max-h-0 opacity-0 hidden'">
                    <a href="#"
                        class="block py-1 text-sm text-white/70 hover:text-white hover:pl-1 transition-all duration-200">New
                        Releases</a>
                    <a href="#"
                        class="block py-1 text-sm text-white/70 hover:text-white hover:pl-1 transition-all duration-200">Popular</a>
                    <a href="#"
                        class="block py-1 text-sm text-white/70 hover:text-white hover:pl-1 transition-all duration-200">Trending</a>
                </div>
            </li>

            <li class="py-2 border-b border-white/10" x-data="{ subMenuOpen: false }">
                <div class="flex justify-between items-center">
                    <a href="#"
                        class="block font-medium text-white/80 hover:text-white transition-colors duration-200">
                        <span class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <span>Movies</span>
                        </span>
                    </a>
                    <button @click="subMenuOpen = !subMenuOpen" class="text-white/70 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 transform transition-transform duration-200"
                            :class="subMenuOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div class="pl-6 mt-2 space-y-1 transition-all duration-300"
                    :class="subMenuOpen ? 'max-h-40 opacity-100' : 'max-h-0 opacity-0 hidden'">
                    <a href="#"
                        class="block py-1 text-sm text-white/70 hover:text-white hover:pl-1 transition-all duration-200">Action</a>
                    <a href="#"
                        class="block py-1 text-sm text-white/70 hover:text-white hover:pl-1 transition-all duration-200">Comedy</a>
                    <a href="#"
                        class="block py-1 text-sm text-white/70 hover:text-white hover:pl-1 transition-all duration-200">Drama</a>
                    <a href="#"
                        class="block py-1 text-sm text-white/70 hover:text-white hover:pl-1 transition-all duration-200">Horror</a>
                </div>
            </li>

            <!-- TV Shows -->
            {{-- <li class="py-2 border-b border-white/10" x-data="{ subMenuOpen: false }">
                <!-- Similar structure to Movies -->
                <div class="flex justify-between items-center">
                    <a href="#"
                        class="block font-medium text-white/80 hover:text-white transition-colors duration-200">
                        <span class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3. --}}
            </span>
            </a>
    </div>
    </li>
    </ul>
    </div>
</nav>
