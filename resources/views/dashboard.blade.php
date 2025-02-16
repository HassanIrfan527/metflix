<x-app-layout>
    @if (session('success'))
        <x-alert type="success" :message="session('success')"></x-alert>
    @endif
    @if (session('error'))
        <x-alert type="error" :message="session('error')"></x-alert>
    @endif

    <livewire:pages.movies-interface />
    {{-- <livewire:calculator /> --}}
    <livewire:todo />

</x-app-layout>
