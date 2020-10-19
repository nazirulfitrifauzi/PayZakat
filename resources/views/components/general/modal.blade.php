<div x-show="open" x-cloak
    class="fixed inset-0 z-10 overflow-y-auto"
    >
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
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
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg lg:max-w-2xl xl:max-w-5xl sm:w-full sm:p-6"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline"
        >
            <div>
                <div class="text-center">
                    <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-headline">
                        {{ $title }}
                    </h3>
                    {{ $slot }}
                </div>
            </div>
            <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                <span class="flex w-full rounded-md shadow-sm sm:col-start-2">
                    <button
                        @click="open = false"
                        wire:click="{{ $submit }}"
                        type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo sm:text-sm sm:leading-5"
                    >
                        {{ $submitLabel }}
                    </button>
                </span>
                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:col-start-1">
                    <button @click="open = false" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                        {{ $cancel }}
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>