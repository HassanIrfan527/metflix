<section class="pricing-sec flex items-center justify-center">
    <div class="container mx-auto px-4">
        <div class="img-box fixed top-0 left-0 w-full h-full -z-20">
            <img src="{{ asset('images/bg.jpg') }}" alt="background" class="bg-img object-cover w-full min-h-full" />
            <div class="bg-overlay"></div>
        </div>

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
                    <input id="Toggle3" type="checkbox" class="hidden peer">
                    <span class="px-4 py-2 rounded-l-md dark:bg-red-600 peer-checked:dark:bg-gray-700">Monthly</span>
                    <span class="px-4 py-2 rounded-r-md dark:bg-gray-700 peer-checked:dark:bg-red-600">Annually</span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-center lg:flex-row">
                <section class="relative z-10 overflow-hidden dark:bg-dark">
                    <div class="container mx-auto flex flex-row justify-center items-center">
                        <div class="ml-5 w-full max-w-sm p-4 border border-gray-200 rounded-lg shadow sm:p-8 dark:border-gray-700"
                            style="backface-visibility: blur(2px);">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">
                                Basic Plan
                            </h5>
                            <div class="flex items-baseline text-gray-900 dark:text-white">
                                <span class="text-3xl font-semibold">$</span>
                                <span class="text-5xl font-extrabold tracking-tight transition-all">
                                    10
                                </span>
                                <span class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">
                                    /month
                                </span>
                            </div>
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Access to all Free Movies</span>
                                </li>
                                <li class="flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Access your movies anywhere</span>
                                </li>
                                <li class="flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-red-700 dark:text-red-500"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Offline Access</span>
                                </li>
                            </ul>
                            <form method="post">
                                <input type="hidden" name="selectedPlan" value="Basic Plan">
                                <button type="submit"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                                    plan</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </main>
</section>
