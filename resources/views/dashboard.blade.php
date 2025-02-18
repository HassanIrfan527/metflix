<x-app-layout>
    @if (session('success'))
        <x-alert type="success" :message="session('success')"></x-alert>
    @endif
    @if (session('error'))
        <x-alert type="error" :message="session('error')"></x-alert>
    @endif

    <div class="px-10 mx-5 py-6 align-center">
        <h1 class="text-center text-red-500 text-3xl font-bold">Top Trending Movies</h1>
        <div>
            @livewire('movie-section')
        </div>
    </div>

</x-app-layout>
