<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-4 relative">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold mb-12 text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            Trending Now
        </h2>

        <!-- AlpineJS Slider -->
        <div x-data="{
            currentIndex: 0,
            totalSlides: {{ count($movies) }},
            autoScroll: null,

            next() {
                this.currentIndex = (this.currentIndex + 1) % this.totalSlides;
            },
            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.totalSlides) % this.totalSlides;
            },
            scrollToIndex() {
                const slider = $refs.slider;
                const slide = slider.children[this.currentIndex];
                slider.scrollTo({ left: slide.offsetLeft - (slider.offsetWidth - slide.offsetWidth) / 2, behavior: 'smooth' });
            },
            startAutoScroll() {
                this.autoScroll = setInterval(() => this.next(), 4000);
            },
            stopAutoScroll() {
                clearInterval(this.autoScroll);
            }
        }" x-init="startAutoScroll()" @mouseenter="stopAutoScroll()" @mouseleave="startAutoScroll()" x-effect="scrollToIndex()" class="relative">

            <!-- Navigation Buttons -->
            <button @click="prev()" class="hidden md:block absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-gray-800/50 hover:bg-gray-700 backdrop-blur-md rounded-full p-4 text-2xl transition-all text-white">
                &#8592;
            </button>
            <button @click="next()" class="hidden md:block absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-gray-800/50 hover:bg-gray-700 backdrop-blur-md rounded-full p-4 text-2xl transition-all text-white">
                &#8594;
            </button>

            <!-- Slider Track -->
            <div x-ref="slider" class="flex gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-8 scrollbar-hide">
                @foreach ($movies as $movie)
                    <div class="shrink-0 w-[85%] md:w-[30%] lg:w-[20%] snap-center transform transition-transform duration-300 hover:scale-105">
                        <a href="{{ route('guest.movie', ['title' => urlencode($movie->title), 'year' => $movie->year]) }}" wire:navigate>
                            <x-movie-card wire:loading.class="opacity-50">
                                <x-slot name="movieTitle">{{ $movie->title }}</x-slot>
                                <x-slot name="year">{{ $movie->year }}</x-slot>
                                <x-slot name="imbdRating">{{ $movie->imdbRating }}</x-slot>
                                <x-slot name="posterImage">{{ $movie->poster }}</x-slot>
                                <x-slot name="altText">{{ $movie->title }}</x-slot>
                                <x-slot name="director">{{ $movie->director }}</x-slot>
                                <x-slot name="runtime">{{ $movie->duration }} minutes</x-slot>
                            </x-movie-card>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Dots Indicator -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <template x-for="i in totalSlides" :key="i">
                    <div @click="currentIndex = i - 1"
                        class="w-3 h-3 rounded-full cursor-pointer"
                        :class="currentIndex === (i - 1) ? 'bg-white' : 'bg-gray-500'">
                    </div>
                </template>
            </div>

        </div>
    </div>
</section>
