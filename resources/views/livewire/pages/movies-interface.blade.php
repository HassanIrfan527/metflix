<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-4 relative">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold mb-12 text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            Trending Now
          </h2>

        <!-- Slider Container using AlpineJS -->
        <div x-data="{
            // currentIndex holds the index of the active slide
            currentIndex: 0,
            // scrollToIndex scrolls the slider track to center the active slide
            scrollToIndex() {
                const slider = $refs.slider;
                const slide = slider.children[this.currentIndex];
                // Calculate the scroll position so the slide is centered
                slider.scrollLeft = slide.offsetLeft - (slider.offsetWidth - slide.offsetWidth) / 2;
            }
        }" x-effect="scrollToIndex()" class="relative">
            <!-- Navigation Buttons (Arrows) -->
            <button
                @click="currentIndex = currentIndex === 0 ? {{ count($movies) - 1 }} : currentIndex - 1"
                class="hidden md:block absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white/10 hover:bg-white/20 backdrop-blur-lg rounded-full p-4 text-2xl transition-all text-white/80 hover:text-white"
            >
                ←
            </button>
            <button
                @click="currentIndex = currentIndex === {{ count($movies) - 1 }} ? 0 : currentIndex + 1"
                class="hidden md:block absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white/10 hover:bg-white/20 backdrop-blur-lg rounded-full p-4 text-2xl transition-all text-white/80 hover:text-white"
            >
                →
            </button>

            <!-- Slider Track -->
            <!-- x-ref allows us to reference this element in our AlpineJS code -->
            <div x-ref="slider" class="grid grid-flow-col auto-cols-[85%] md:auto-cols-[30%] lg:auto-cols-[20%] gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-8 scrollbar-hide">
                @foreach ($movies as $index => $movie)
                    <!-- Each slide/card -->
                    <div
                        class="relative transition-transform duration-300 transform hover:scale-105 snap-start"
                        :class="{ 'scale-105': currentIndex === {{ $index }} }"
                    >
                        <!-- Movie Card: each card is its own hover group -->
                        <div class="group hover:cursor-pointer relative h-full rounded-2xl overflow-hidden shadow-2xl">
                            <!-- Movie Poster -->
                            <img
                                src="{{ $movie->poster }}"
                                alt="{{ $movie->title }}"
                                class="w-full h-full object-cover aspect-[2/3]"
                            >

                            <!-- Glassmorphic Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-6 flex flex-col justify-end">
                                <!-- Card Content: moves upward on hover of this specific card -->
                                <div class="backdrop-blur-sm bg-white/5 rounded-xl p-4 transition-all transform translate-y-4 group-hover:translate-y-0">
                                    <h3 class="font-bold text-lg text-white">{{ $movie->title }}</h3>
                                    <div class="flex items-center justify-between mt-2">
                                        <p class="text-sm text-purple-400">{{ $movie->year }}</p>
                                        <div class="flex items-center bg-white/10 px-2 py-1 rounded-full">
                                            <span class="text-xs text-amber-400">★</span>
                                            <span class="text-xs text-white ml-1">{{ $movie->imdbRating ?? "N/A" }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
