<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-2xl font-semibold leading-tight">
                {{ __('Welcome 👋 ' . Auth::user()->name) }}
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> --}}


        </div>
    </x-slot>

    {{-- <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in!") }}
    </div> --}}

    <div class="flex space-x-5">
        <div class="w-full bg-slate-50 dark:bg-gray-800 py-5 px-10 rounded-lg shadow-md">
            <h1 class="font-semibold text-sm">Total Balance </h1>
            <h1 class="font-bold text-3xl mt-3 text-blue-700 dark:text-blue-300">$500</h1>
        </div>
        <div class="w-full bg-slate-50 dark:bg-gray-800 py-5 px-10 rounded-lg shadow-md">
            <h1 class="font-semibold text-sm">Income </h1>
            <h1 class="font-bold text-3xl mt-3 text-green-700 dark:text-green-300">+$500</h1>
        </div>
        <div class="w-full bg-slate-50 dark:bg-gray-800 py-5 px-10 rounded-lg shadow-md">
            <h1 class="font-semibold text-sm">Expense </h1>
            <h1 class="font-bold text-3xl mt-3 text-red-700 dark:text-red-300">-$500</h1>
        </div>
    </div>

    <div class="flex justify-between items-center mt-8" x-data="{ open: false }">
        <h1 class="font-semibold text-md">Recent Transaction</h1>
        <x-button @click="open = true" variant="primary" class="justify-center max-w-xs gap-2">
            <x-plus></x-plus>
            <span>Add Transaction</span>
        </x-button>
        <div class=" fixed top-0 left-0 w-full h-full flex items-center justify-center z-30"
            style="background-color: rgba(0,0,0,.5);" x-show="open">
            <div class="text-left bg-white dark:bg-gray-800 h-auto w-full p-4 md:max-w-2xl lg:max-w-3xl md:p-6 lg:p-8 shadow-xl rounded mx-2 md:mx-0"
                @click.away="open = false">
                <h2 class="text-2xl font-semibold">New Transaction</h2>
                <form class="mt-5" action="" method="post">
                    <div class="form-group mb-6">
                        <label class="form-label inline-block mb-2 text-gray-700">Title</label>
                        <input type="text" name="title"
                            class="form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-describedby="titleHelp" placeholder="Enter title">
                    </div>
                    <div class="form-group mb-6">
                        <label class="form-label inline-block mb-2 text-gray-700">Amount</label>
                        <input type="number" name="amount"
                            class="form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-describedby="amountHelp" placeholder="Enter amount">
                    </div>
                    <div class="flex justify-center mb-6">
                        <div class="w-full">
                            <label class="form-label inline-block mb-2 text-gray-700">Transaction Type</label>
                            <select name="type"
                                class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="Transaction Type Select">
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-center mb-6">
                        <div class="w-full">
                            <label class="form-label inline-block mb-2 text-gray-700">Category</label>
                            <select name="category"
                                class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="Transaction Type Select">
                                <option value="food">Food</option>
                                <option value="transportation">Transportation</option>
                                <option value="electricity">Electricty</option>
                                <option value="water">Water</option>
                                <option value="shopping">General Shopping</option>
                                <option value="internet">Internet Data</option>
                            </select>
                        </div>
                    </div>

                </form>
                <div class="flex justify-center mt-8">
                    <button class="bg-gray-700 text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none"
                        @click="open = false">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3 space-y-3">
        <div
            class="w-full md:w-3/4 flex justify-between items-center bg-slate-50 dark:bg-gray-800 py-5 px-10 rounded-lg shadow-md">
            <div>
                <h1 class="font-semibold text-xl">Makan Nasi Goreng</h1>
                <h1 class="font-semibold text-slate-400 dark:text-gray-600 text-sm mt-2 ">Food </h1>
            </div>
            <div>
                <h1 class="font-bold text-xl mt-3 text-green-700 dark:text-green-300">+$500</h1>
                <h1 class="font-semibold text-slate-400 dark:text-gray-600 text-sm mt-2 ">Jan 20, 2023 </h1>
            </div>
        </div>
        <div
            class="w-full md:w-1/2 flex justify-between items-center bg-slate-50 dark:bg-gray-800 py-5 px-10 rounded-lg shadow-md">
            <div>
                <h1 class="font-semibold text-xl">Makan Nasi Goreng</h1>
                <h1 class="font-semibold text-slate-400 dark:text-gray-600 text-sm mt-2 ">Food </h1>
            </div>
            <div>
                <h1 class="font-bold text-xl mt-3 text-green-700 dark:text-green-300">+$500</h1>
                <h1 class="font-semibold text-slate-400 dark:text-gray-600 text-sm mt-2 ">Jan 20, 2023 </h1>
            </div>
        </div>
    </div>

</x-app-layout>
