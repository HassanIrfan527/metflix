<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public $user , $count;

    public function mount()
    {
        $this->user = Auth::user();
        $this->count = $this->user->watchlist()->count();
    }
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<!-- Component Start -->
<nav
    class="z-50 fixed left-0 flex h-full overflow-x-hidden overflow-y-hidden w-20 flex-col items-center hover:overflow-y-auto bg-gradient-to-b from-slate-800/90 to-slate-900/90 text-gray-300 shadow-xl backdrop-blur-md transition-all duration-500 hover:w-64 group rounded-r-2xl border-r border-white/5">
    <!-- Logo with enhanced animation -->
    <div class="shrink-0 flex items-center justify-center pt-6 pb-3 w-full relative">
        <a href="{{ route('dashboard') }}" wire:navigate class="flex items-center justify-center w-full">
            <x-application-logo
                class="block h-12 w-auto fill-current text-gray-100 transition-all duration-500 group-hover:scale-110 pulse-subtle" />
        </a>
        <!-- Enhanced glow effect -->
        <div
            class="absolute inset-0 bg-blue-500/10 rounded-full blur-3xl opacity-30 group-hover:opacity-50 transition-all duration-700 animate-pulse-slow">
        </div>
    </div>

    <div class="w-full px-3">
        <!-- Theme Toggle Button (New Feature) -->
        <div class="flex justify-end w-full mb-2 opacity-70 group-hover:opacity-100 transition-opacity duration-300">
            <button id="theme-toggle" class="p-1 rounded-full hover:bg-white/10 transition-colors duration-200"
                onclick="toggleTheme()">
                <!-- Moon icon for dark mode (default) -->
                <svg id="moon-icon" class="w-5 h-5 block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 21a9 9 0 0 1-.5-18v0A9 9 0 0 0 20 15h.5a9 9 0 0 1-8.5 6Z" />
                </svg>
                <!-- Sun icon for light mode (hidden initially) -->
                <svg id="sun-icon" class="w-5 h-5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm0-9v2m0 14v2M5.6 5.6l1.4 1.4m10 10 1.4 1.4M3 12h2m14 0h2M5.6 18.4l1.4-1.4m10-10 1.4-1.4" />
                </svg>
            </button>
        </div>

        <!-- Main Nav Links with Enhanced Effects -->
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700/50 pt-3">
            <!-- Dashboard/Home Link -->
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-white/10 hover:shadow-lg transition-all duration-300
                              {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 shadow-lg text-white active-nav-item' : '' }}">
                <div
                    class="absolute left-0 w-1 h-8 rounded-r-full {{ request()->routeIs('dashboard') ? 'bg-blue-500 glow-indicator' : 'bg-transparent' }}">
                </div>
                <div
                    class="inline-flex items-center justify-center w-12 h-12 { request()->routeIs('dashboard') ? 'text-blue-400' : 'text-gray-400' }}">
                    <svg class="w-8 h-8 stroke-current transition-all duration-300 group-hover:w-7 group-hover:h-7"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">Home</span>

                <!-- Right notification indicator (new) -->
                <div
                    class="absolute right-3 flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full ml-auto opacity-0 group-hover:opacity-100 {{ request()->routeIs('dashboard') ? 'pulse-animation' : 'hidden' }}">
                </div>
            </x-nav-link>

            {{-- Friends Link --}}
            <x-nav-link :href="route('auth.friends')" :active="request()->routeIs('auth.friends')" wire:navigate
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-white/10 hover:shadow-lg transition-all duration-300
                              {{ request()->routeIs('auth.friends') ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 shadow-lg text-white active-nav-item' : '' }}">
                <div
                    class="absolute left-0 w-1 h-8 rounded-r-full {{ request()->routeIs('auth.friends') ? 'bg-blue-500 glow-indicator' : 'bg-transparent' }}">
                </div>
                <div
                    class="inline-flex items-center justify-center w-12 h-12 { request()->routeIs('auth.friends') ? 'text-blue-400' : 'text-gray-400' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-8 h-8 stroke-current transition-all duration-300 group-hover:w-7 group-hover:h-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>

                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">Friends</span>

                <!-- Right notification indicator (new) -->
                <div
                    class="absolute right-3 flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full ml-auto opacity-0 group-hover:opacity-100 {{ request()->routeIs('dashboard') ? 'pulse-animation' : 'hidden' }}">
                </div>
            </x-nav-link>

            <!-- Movies Link -->
            <x-nav-link :href="route('movies')" :active="request()->routeIs('movies')" wire:navigate
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-white/10 hover:shadow-lg transition-all duration-300
                              {{ request()->routeIs('movies') ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 shadow-lg text-white active-nav-item' : '' }}">
                <div
                    class="absolute left-0 w-1 h-8 rounded-r-full {{ request()->routeIs('movies') ? 'bg-blue-500 glow-indicator' : 'bg-transparent' }}">
                </div>
                <div
                    class="inline-flex items-center justify-center w-12 h-12 {{ request()->routeIs('movies') ? 'text-blue-400' : 'text-gray-400' }}">
                    <svg class="size-6"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">Movies</span>

                <!-- Right indicator with count (new) -->
                <div
                    class="absolute right-3 ml-auto bg-blue-500 rounded-full text-xs text-white px-2 py-0.5 opacity-0 group-hover:opacity-100 scale-hover">
                    3</div>
            </x-nav-link>

            <!-- Series Link -->
            <x-nav-link :href="route('series')" :active="request()->routeIs('series')" wire:navigate
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-white/10 hover:shadow-lg transition-all duration-300
                              {{ request()->routeIs('series') ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 shadow-lg text-white active-nav-item' : '' }}">
                <div
                    class="absolute left-0 w-1 h-8 rounded-r-full {{ request()->routeIs('series') ? 'bg-blue-500 glow-indicator' : 'bg-transparent' }}">
                </div>
                <div
                    class="inline-flex items-center justify-center w-12 h-12 {{ request()->routeIs('series') ? 'text-blue-400' : 'text-gray-400' }}">
                    <svg class="w-8 h-8 stroke-current transition-all duration-300 group-hover:w-7 group-hover:h-7"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4h16v16H4z M8 4v16M16 4v16" />
                    </svg>
                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">Series</span>

                <!-- New label (new feature) -->
                <div
                    class="absolute right-3 ml-auto bg-green-500 rounded-full text-xs text-white px-2 py-0.5 opacity-0 group-hover:opacity-100 scale-hover">
                    NEW</div>
            </x-nav-link>

            <!-- Anime Link -->
            <x-nav-link :href="route('anime')" :active="request()->routeIs('anime')" wire:navigate
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-white/10 hover:shadow-lg transition-all duration-300
                              {{ request()->routeIs('anime') ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 shadow-lg text-white active-nav-item' : '' }}">
                <div
                    class="absolute left-0 w-1 h-8 rounded-r-full {{ request()->routeIs('anime') ? 'bg-blue-500 glow-indicator' : 'bg-transparent' }}">
                </div>
                <div
                    class="inline-flex items-center justify-center w-12 h-12 {{ request()->routeIs('anime') ? 'text-blue-400' : 'text-gray-400' }}">
                    <svg class="w-8 h-8 stroke-current transition-all duration-300 group-hover:w-7 group-hover:h-7"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 2L3 7v4a9 9 0 0018 0V7z M12 12h.01" />
                    </svg>
                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">Anime</span>
            </x-nav-link>

            <!-- Search Link -->
            <x-nav-link :href="route('search')" :active="request()->routeIs('search')" wire:navigate
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-white/10 hover:shadow-lg transition-all duration-300
                              {{ request()->routeIs('search') ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 shadow-lg text-white active-nav-item' : '' }}">
                <div
                    class="absolute left-0 w-1 h-8 rounded-r-full {{ request()->routeIs('search') ? 'bg-blue-500 glow-indicator' : 'bg-transparent' }}">
                </div>
                <div
                    class="inline-flex items-center justify-center w-12 h-12 {{ request()->routeIs('search') ? 'text-blue-400' : 'text-gray-400' }}">
                    <svg class="w-8 h-8 stroke-current transition-all duration-300 group-hover:w-7 group-hover:h-7"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">Search</span>
            </x-nav-link>
        </div>

        <!-- Personal Collection Links with Enhanced Styles -->
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700/50 pt-3">
            <p
                class="mb-2 text-xs font-semibold text-gray-400 uppercase w-full text-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                My Collections</p>

            <!-- Watchlist Link -->
            <x-nav-link :href="route('watchlist')" :active="request()->routeIs('watchlist')" wire:navigate
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-white/10 hover:shadow-lg transition-all duration-300
                              {{ request()->routeIs('watchlist') ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 shadow-lg text-white active-nav-item' : '' }}">
                <div
                    class="absolute left-0 w-1 h-8 rounded-r-full {{ request()->routeIs('watchlist') ? 'bg-blue-500 glow-indicator' : 'bg-transparent' }}">
                </div>
                <div
                    class="inline-flex items-center justify-center w-12 h-12 {{ request()->routeIs('watchlist') ? 'text-blue-400' : 'text-gray-400' }}">
                    <svg class="w-8 h-8 stroke-current transition-all duration-300 group-hover:w-7 group-hover:h-7"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v18l7-5 7 5V3z" />
                    </svg>
                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">My
                    Watchlist</span>

                <!-- Watch count indicator (new) -->
                <div
                    class="absolute right-3 ml-auto bg-yellow-500 rounded-full text-xs text-white px-2 py-0.5 opacity-0 group-hover:opacity-100 scale-hover">
                    {{$count}}</div>
            </x-nav-link>

            <!-- Favourites Link -->
            <x-nav-link :href="route('favourites')" :active="request()->routeIs('favourites')" wire:navigate
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-white/10 hover:shadow-lg transition-all duration-300
                              {{ request()->routeIs('favourites') ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 shadow-lg text-white active-nav-item' : '' }}">
                <div
                    class="absolute left-0 w-1 h-8 rounded-r-full {{ request()->routeIs('favourites') ? 'bg-blue-500 glow-indicator' : 'bg-transparent' }}">
                </div>
                <div
                    class="inline-flex items-center justify-center w-12 h-12 {{ request()->routeIs('favourites') ? 'text-blue-400' : 'text-gray-400' }}">
                    <svg class="w-8 h-8 stroke-current transition-all duration-300 group-hover:w-7 group-hover:h-7"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2"
                            d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                    </svg>
                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">Favourites</span>

                <!-- Favorites count indicator (new) -->
                <div
                    class="absolute right-3 ml-auto bg-pink-500 rounded-full text-xs text-white px-2 py-0.5 opacity-0 group-hover:opacity-100 scale-hover">
                    8</div>
            </x-nav-link>
        </div>

        <!-- Enhanced Logout Section -->
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700/50 pt-3">
            <x-nav-link
                class="relative flex items-center w-full h-14 mt-2 rounded-xl hover:bg-red-500/20 hover:text-red-300 hover:shadow-lg transition-all duration-300 hover:cursor-pointer overflow-hidden group/logout"
                wire:click="logout">
                <!-- Hover ripple effect (new) -->
                <div
                    class="absolute inset-0 w-0 h-0 rounded-full opacity-0 group-hover/logout:w-full group-hover/logout:h-full group-hover/logout:opacity-20 transition-all duration-500 bg-red-500 -z-10">
                </div>

                <div
                    class="inline-flex items-center justify-center w-12 h-12 text-gray-400 group-hover/logout:text-red-400">
                    <svg class="w-8 h-8 transition-all duration-300 group-hover:w-7 group-hover:h-7"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                    </svg>
                </div>
                <span
                    class="ml-2 text-sm font-medium truncate transition-all duration-300 opacity-0 group-hover:opacity-100 transform translate-x-8 group-hover:translate-x-0">Log
                    Out</span>
            </x-nav-link>
        </div>
    </div>

    <!-- Enhanced Profile Button with Status Indicator -->
    <a class="flex items-center w-full mt-auto relative bottom-0
             bg-gradient-to-r from-slate-700/70 to-slate-800/70 hover:from-blue-500/20 hover:to-purple-500/20
             backdrop-blur-md transition-all duration-500 hover:shadow-lg border-t border-gray-700/30 group-hover:rounded-lg mx-2 mb-2 p-3"
        href="{{ route('profile') }}" wire:navigate>
        <!-- Neumorphic effect for profile button -->
        <div
            class="absolute inset-0 bg-white/5 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 hover-pulse">
        </div>
        <div
            class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-blue-500/70 to-purple-500/70 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-700">
        </div>

        <!-- Profile avatar with online status -->
        <div
            class="relative w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center border border-white/10 shrink-0">
            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <!-- Online status indicator -->
            <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-slate-800 rounded-full"></span>
        </div>

        <div class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex-grow">
            <p class="text-sm font-medium leading-none">{{ $user->name }}</p>
            <p class="text-xs text-gray-400 mt-1">View Profile</p>
        </div>

        <!-- Glassmorphism glow effect -->
        <div
            class="absolute inset-0 bg-blue-500/5 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 -z-10">
        </div>
    </a>
</nav>


<!-- Component End  -->
