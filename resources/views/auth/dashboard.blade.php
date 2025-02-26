<x-app-layout>
    <x-slot name="title">Home</x-slot>
    @if (session('success'))
        <x-alert type="success" :message="session('success')"></x-alert>
    @endif
    @if (session('error'))
        <x-alert type="error" :message="session('error')"></x-alert>
    @endif

    <div class="py-6 text-center align-center">
        <h1 class="text-center text-red-500 text-3xl font-bold">Top Trending Movies</h1>
        <div>
            @livewire('movie-section')
        </div>
    </div>

    <x-loader wire:loading wire:target="nextPage,previousPage" class="fixed inset-0 flex items-center justify-center"></x-loader>
</x-app-layout>
