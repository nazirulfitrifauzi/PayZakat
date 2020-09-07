<div x-show="open"
    class="fixed z-10 inset-0 overflow-y-auto"
>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div x-show="open"
            x-description="Background overlay, show/hide based on modal state."
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 transition-opacity"
        >
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        <div x-show="open"
            x-description="Modal panel, show/hide based on modal state."
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline"
        >
            <div>
                <div class="text-center">
                    <h3 class="text-lg leading-6 font-semibold text-gray-900" id="modal-headline">
                        Bayar Zakat
                    </h3>
                    <div class="mt-3 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex  items-center col-span-1">From Account</label>
                        <div class="text-sm leading-5 text-gray-500 col-span-2">
                            <select id="location" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                <option>VA Account</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-2 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex  items-center col-span-1">Account No</label>
                        <div class="mt-1 relative rounded-md shadow-sm text-gray-500 col-span-2">
                            <input id="email" class="form-input block w-full sm:text-sm sm:leading-5" readonly value="16482905522-8">
                        </div>
                    </div>
                    <div class="mt-2 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex  items-center col-span-1">Pay Amount</label>
                        <div class="mt-1 relative rounded-md shadow-sm text-gray-500 col-span-2">
                            <input id="email" class="form-input block w-full sm:text-sm sm:leading-5">
                        </div>
                    </div>
                    <div class="mt-2 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex  items-center col-span-1">Effective Date</label>
                        <div class="mt-1 relative rounded-md shadow-sm text-gray-500 col-span-2">
                            <input id="email" class="form-input block w-full sm:text-sm sm:leading-5">
                        </div>
                    </div>
                    <div class="mt-2 text-justify grid grid-cols-3" >
                        <label for="location" class="text-sm leading-5 font-medium text-gray-700 flex  items-center col-span-1">Reference</label>
                        <div class="mt-1 relative rounded-md shadow-sm text-gray-500 col-span-2">
                            <input id="email" class="form-input block w-full sm:text-sm sm:leading-5">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                <span class="flex w-full rounded-md shadow-sm sm:col-start-2">
                    <button @click="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Bayar
                    </button>
                </span>
                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:col-start-1">
                    <button @click="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Batal
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>