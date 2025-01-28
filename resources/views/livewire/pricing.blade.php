<main class="max-w-6xl mx-auto pt-10 pb-5 px-8">


    <div class="max-w-md mx-auto mb-14 text-center">
        <h1 class="text-4xl font-semibold mb-6 lg:text-5xl">
            <span class="text-red-600">Flexible</span> Plans
        </h1>
        <p class="text-xl text-gray-300 font-medium">
            Choose a plan that is best for your entertainment
        </p>

        <label for="Toggle3"
            class="inline-flex text-center items-center p-2 rounded-md cursor-pointer dark:text-gray-100">
            <input id="Toggle3" type="checkbox" class="hidden peer" wire:click="togglePlan">
            <span class="px-4 py-2 rounded-l-md dark:bg-red-600 peer-checked:dark:bg-gray-700">Monthly</span>
            <span class="px-4 py-2 rounded-r-md dark:bg-gray-700 peer-checked:dark:bg-red-600">Annually</span>
        </label>
    </div>

    <div class="flex flex-col items-center justify-center lg:flex-row">
        <!-- ====== Pricing Section Start -->
        <section class="relative z-10 overflow-hidden dark:bg-dark">
            @if ($isYearly)


                <div class="container mx-auto flex flex-row justify-center items-center">
                    @foreach ($yearlyPlans as $yearlyPlan)
                        <div class="ml-5 w-full max-w-sm p-4 border border-gray-200 rounded-lg shadow sm:p-8 dark:border-gray-700"
                            style="backface-visibility: blur(2px);">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">
                                {{ $yearlyPlan->title }}
                            </h5>
                            <div class="flex items-baseline text-gray-900 dark:text-white">
                                <span class="text-3xl font-semibold">$</span>
                                <span wire:loading.remove class="text-5xl font-extrabold tracking-tight transition-all">
                                    {{ $yearlyPlan->price }}
                                </span>
                                <span wire:loading
                                wire:target="isYearly"
                                    class="text-5xl rounded shadow-md text-white/10 transition-all animate-pulse">
                                    {{ $yearlyPlan->price }}
                                </span>

                                <span wire:loading.remove
                                    class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">
                                    /{{ $yearlyPlan->interval }}</span>
                                <span wire:loading
                                wire:target="isYearly"
                                    class="ms-1 text-xl font-normal rounded shadow-md text-white/10 transition-all animate-pulse">
                                    /{{ $yearlyPlan->interval }}
                                </span>
                            </div>
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $yearlyPlan->title == 'Basic' ? __('Access to all Free Movies') : __('Everything in Basic') }}</span>
                                </li>
                                <li class="flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Access
                                        your movies anywhere</span>
                                </li>
                                <li class="flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $yearlyPlan->title == 'Basic' ? 'Offline Access' : 'Access to Premium resources' }}</span>
                                </li>
                                {{-- <li class="flex line-through decoration-gray-500">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch Files</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">API Access</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Complete
                                documentation</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">24×7 phone & email
                                support</span>
                        </li> --}}
                            </ul>
                            <form wire:submit="submit" method="post">
                                <input type="hidden" name="selectedPlan" wire:model="selectedPlan" value="{{ $yearlyPlan->title }}">
                                <button wire:click="submit"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                                    plan</button>
                            </form>
                        </div>
                    @endforeach


                </div>
            @else
                <div class="container mx-auto flex flex-row justify-center items-center">
                    @foreach ($monthlyPlans as $monthlyPlan)
                        <div class="ml-5 w-full max-w-sm p-4  border border-gray-200 rounded-lg shadow sm:p-8 dark:border-gray-700"
                            style="backface-visibility: blur(2px);">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">
                                {{ $monthlyPlan->title }}
                            </h5>
                            <div class="flex items-baseline text-gray-900 dark:text-white">
                                <span class="text-3xl font-semibold">$</span>
                                <span wire:loading.remove class="text-5xl font-extrabold tracking-tight transition-all">
                                    {{ $monthlyPlan->price }}
                                </span>
                                <span wire:loading
                                    class="text-5xl rounded shadow-md text-white/10 transition-all animate-pulse">
                                    {{ $monthlyPlan->price }}
                                </span>

                                <span wire:loading.remove
                                    class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">
                                    /{{ $monthlyPlan->interval }}</span>
                                <span wire:loading
                                    class="ms-1 text-xl font-normal rounded shadow-md text-white/10 transition-all animate-pulse">
                                    /{{ $monthlyPlan->interval }}
                                </span>
                            </div>
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $monthlyPlan->title == 'Basic' ? __('Access to all Free Movies') : __('Everything in Basic') }}</span>
                                </li>
                                <li class="flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Access
                                        your movies anywhere</span>
                                </li>
                                <li class="flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span
                                        class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $monthlyPlan->title == 'Basic' ? 'Offline Access' : 'Access to Premium resources' }}</span>
                                </li>
                                {{-- <li class="flex line-through decoration-gray-500">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch Files</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">API Access</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Complete
                                documentation</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">24×7 phone & email
                                support</span>
                        </li> --}}
                            </ul>
                            <form wire:submit="submit" method="post">
                                <input type="hidden" name="selectedPlan" wire:model="selectedPlan"
                                    value="{{ $monthlyPlan->title }}">
                                <button type="submit"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                                    plan</button>
                            </form>
                        </div>
                    @endforeach

                </div>
            @endif
        </section>



    </div>
</main>
