<div class="fixed inset-0 overflow-hidden mt-16"
    x-data="{ Open4: false }"
    x-cloak
    x-show="Open4"
    @open-calculator.window="if ($event.detail.id == 4) Open4 = true"
>
    <div class="absolute inset-0 overflow-hidden">
        <section
            @click.away="Open4 = false;"
            class="absolute inset-y-0 pl-16 max-w-full right-0 flex"
        >
            <div class="w-screen max-w-xl shadow-2xl"
                x-description="Slide-over panel, show/hide based on slide-over state."
                x-show="Open4"
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
            >
                @livewire('calculator.kwsp')
            </div>
        </section>
    </div>
</div>