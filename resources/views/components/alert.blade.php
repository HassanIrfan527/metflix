@props(['type' => 'info', 'message', 'messageTitle'=>'Default', 'duration' => 5000])

@php
    $icons = [
        'success' => 'check-circle',
        'danger' => 'x-circle',
        'warning' => 'exclamation-triangle',
        'info' => 'information-circle',
    ];

    $colors = [
        'success' => 'bg-green-500 border-green-600 text-white',
        'danger' => 'bg-red-500 border-red-600 text-white',
        'warning' => 'bg-yellow-500 border-yellow-600 text-black',
        'info' => 'bg-blue-500 border-blue-600 text-white',
    ];
@endphp

<div x-data="{ show: true }" x-show="show"
    x-transition:enter="transform ease-out duration-300 transition opacity-0 translate-y-10"
    x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-10" x-init="setTimeout(() => show = false, {{ $duration }})"
    class="fixed bottom-5 right-5 flex max-w-sm w-full p-4 border-l-4 shadow-lg rounded-lg {{ $colors[$type] }}">

    <div class="mr-3 flex-shrink-0">
        @if ($type === 'success')
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
            </svg>
        @elseif ($type === 'danger')
            <i class="fa-solid fa-bug"></i>
        @elseif ($type === 'warning')
            <i class="fa-solid fa-triangle-exclamation"></i>
        @else
            <i class="fa-regular fa-circle-info"></i>
        @endif
    </div>

    <div class="flex-grow">
        <h4 class="font-semibold">{{ $messageTitle }}</h4>
        <p class="text-sm">{{ $message }}</p>
        <div class="h-1 w-full bg-opacity-30 mt-2 relative">
            <div x-ref="progress" class="absolute h-full bg-white" style="width: 100%;" x-init="$refs.progress.style.transition = 'width ' + {{ $duration }} + 'ms linear';
            $refs.progress.style.width = '0%'">
            </div>
        </div>
    </div>

    <button @click="show = false" class="ml-3 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
