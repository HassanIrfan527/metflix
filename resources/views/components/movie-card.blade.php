@props(['movieTitle', 'year', 'imbdRating', 'posterImage', 'altText'])

<div class="relative snap-center transition-transform duration-300 transform hover:scale-105 w-64 h-96 m-6">
    <!-- Movie Card: each card is its own hover group -->
    <div class="group hover:cursor-pointer relative h-full rounded-2xl overflow-hidden shadow-2xl">
        <!-- Movie Poster -->
        <img src="{{ $posterImage }}" alt="{{ $altText }}" class="w-full h-full object-cover aspect-[2/3]">

        <!-- Glassmorphic Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-6 flex flex-col justify-end">
            <!-- Card Content: moves upward on hover of this specific card -->
            <div
                class="backdrop-blur-sm bg-white/5 rounded-xl p-4 transition-all transform translate-y-4 group-hover:translate-y-0">
                <h3 class="font-bold text-lg text-white">{{ $movieTitle }}</h3>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-sm text-purple-400">{{ $year }}</p>
                    <div class="flex items-center bg-white/10 px-2 py-1 rounded-full">
                        <span class="text-xs text-amber-400">★</span>
                        <span class="text-xs text-white ml-1">{{ $imbdRating }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
