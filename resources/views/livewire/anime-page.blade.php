<div>
    <x-slot name="title">Anime</x-slot>
    <div>
        <div class="justify-center flex flex-wrap flex-row p-4">
            @foreach ($animations as $animation)
                <div class="">
                    <a href="{{ route('movie', ['title' => urlencode($animation->title), 'year' => $animation->year]) }}"
                        wire:navigate>
                        <x-movie-card class="w-full md:w-1/2" wire:loading.class="opacity-50">
                            <x-slot name="movieTitle">{{ $animation->title }}</x-slot>
                            <x-slot name="year">{{ $animation->year }}</x-slot>
                            <x-slot name="imbdRating">{{ $animation->imdbRating }}</x-slot>
                            <x-slot name="posterImage">{{ $animation->poster }}</x-slot>
                            <x-slot name="altText">{{ $animation->title }}</x-slot>
                            <x-slot name="director">{{ $animation->director }}</x-slot>
                            <x-slot name="runtime">{{ $animation->duration }} minutes</x-slot>
                            {{-- <x-slot name="genre">{{ $animation->genres->pluck('name') }}</x-slot> --}}
                        </x-movie-card>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="px-6 mt-4">
            {{ $animations->links() }}
        </div>
    </div>
</div>
