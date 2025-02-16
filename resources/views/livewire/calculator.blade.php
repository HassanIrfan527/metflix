<div>
    <div class="mx-auto overflow-hidden mt-10 mb-2 bg-purple-900 shadow-lg border rounded-lg lg:w-2/6 md:w-3/6 sm:w-4/6">
        <div class="">
            <div class="p-5 text-white text-center text-3xl bg-purple-900">Calculator</div>
            <div class="p-5 flex flex-row pb-0 text-white text-right text-3xl bg-purple-800">
                <form wire:submit="calculate" method="post">
                    <input class="bg-transparent ml-2" placeholder="Number 1" type="number" step="any" name="number1"
                        id="number1" wire:model="number1">
                    <select name="actionNum" id="actionNum" wire:model="actionNum" class="bg-transparent ml-2">
                        <option value="+" default>+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input class="bg-transparent ml-2" placeholder="Number 2" type="number" step="any"
                        name="number2" id="number2" wire:model="number2">
                    <button class="bg-transparent rounded-full border border-blue-500 ml-2" type="submit">=</button>
                </form>
            </div>

            <div class="p-5 text-white text-right text-3xl bg-purple-800"><span
                    class="text-orange-500">{{ $result }}</span></div>





        </div>

        <div class="flex items-stretch bg-purple-900 h-24">
            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    7</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    8</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    9</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none"
                    wire:click="changeText('*')">
                    ×</div>
            </div>
        </div>

        <div class="flex items-stretch bg-purple-900 h-24">
            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    4</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    5</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    6</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    -</div>
            </div>
        </div>

        <div class="flex items-stretch bg-purple-900 h-24">
            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    1</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    2</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    3</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    ÷</div>
            </div>
        </div>


        <div class="flex items-stretch bg-purple-900 h-24 mb-4">
            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    +</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    0</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-purple-800 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    .</div>
            </div>

            <div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold">
                <div
                    class="rounded-full h-20 w-20 flex items-center bg-orange-500 justify-center shadow-lg border-2 border-purple-700 hover:border-2 hover:border-gray-500 focus:outline-none">
                    =</div>

            </div>
        </div>


    </div>
</div>
</div>
