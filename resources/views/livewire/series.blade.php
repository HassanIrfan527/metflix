<div>
    <x-slot name="title">Series</x-slot>

    <div>
        <div class="justify-center flex flex-wrap flex-row p-4">
            @foreach ($series as $entry)
                <div class="">
                    <a href="{{ route('movie', ['title' => urlencode($entry->title), 'year' => $entry->year]) }}"
                        wire:navigate>
                        <x-movie-card class="w-full md:w-1/2" wire:loading.class="opacity-50">
                            <x-slot name="movieTitle">{{ $entry->title }}</x-slot>
                            <x-slot name="year">{{ $entry->year }}</x-slot>
                            <x-slot name="imbdRating">{{ $entry->imdbRating }}</x-slot>
                            <x-slot name="posterImage">{{ $entry->poster }}</x-slot>
                            <x-slot name="altText">{{ $entry->title }}</x-slot>
                            <x-slot name="director">{{ $entry->director }}</x-slot>
                            <x-slot name="runtime">{{ $entry->duration }} minutes</x-slot>
                            {{-- <x-slot name="genre">{{ $entry->genres->pluck('name') }}</x-slot> --}}
                        </x-movie-card>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="px-6 mt-4">
            {{ $series->links() }}
        </div>
    </div>
</div>
