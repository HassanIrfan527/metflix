<x-app-layout>
    <x-slot name="title">Home</x-slot>

    <div x-data="{ show: false, message: '' }" x-show="show" x-transition
        class="fixed bottom-5 right-5 z-50 bg-blue-500 text-white px-4 py-2 rounded shadow-lg" x-init="Echo.channel('movie').listen('MovieAdded',(event)=>{
        show = true;
        message = event.user
        console.log(event);})">
        <p x-text="message"></p>
    </div>

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

    <x-loader wire:loading wire:target="nextPage,previousPage"
        class="fixed inset-0 flex items-center justify-center"></x-loader>
</x-app-layout>
