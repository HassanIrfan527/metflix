<div class="container p-2 mx-auto sm:p-4 dark:text-gray-800">

    <form wire:submit="generate">
        <label for="states" class="text-sm text-white">Write USA state names:</label>
        <textarea id="states" wire:model="states" placeholder="State 1 | State 2 | State 3 | State 4 | State 5"
            class="w-full text-black rounded-md focus:ring focus:ring-opacity-75 focus:dark:ring-blue-600 dark:border-gray-300"
            spellcheck="false"></textarea>
        <button type="submit"
            class="text-center w-[120px] h-[50px] mt-2 text-white bg-blue-500 rounded-md focus:ring focus:ring-opacity-75 focus:ring-blue-900">
            <span wire:loading.remove>{{ __('Generate') }}</span>
            <div wire:loading class="flex items-center">
                <svg class="animate-spin h-5 w-5 mr-2 text-gray-50" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 0116 0h2a10 10 0 00-20 0h2z"></path>
                </svg>
            </div>
        </button>
    </form>

    <div class="mt-4 text-center text-3xl text-white">{{$output}}</div>

</div>
