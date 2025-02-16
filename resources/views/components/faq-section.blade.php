@props(['question', 'answer'])

<details class="bg-white/10 backdrop-blur-lg border border-gray-200/20 rounded-lg p-4 group">
    <summary class="flex justify-between items-center cursor-pointer text-lg font-medium text-gray-200">
        {{ $question }}
        <svg class="w-5 h-5 text-gray-500 transition-transform duration-300 group-open:rotate-180"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </summary>
    <p class="mt-2 text-gray-400">
        {{ $answer }}
    </p>
</details>
