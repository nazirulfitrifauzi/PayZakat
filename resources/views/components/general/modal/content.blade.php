<div 
      class="fixed z-10 inset-0 overflow-y-auto" 
      x-data="{show:false}" 
      x-show="show" 
      @modal.window="if ($event.detail.id=='{{ $id }}') show = true" 
      x-cloak>
    <div
        class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
        x-show="show"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-100"
    >
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-black opacity-25"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-{{ (isset($align)) ? $align : 'middle' }} sm:h-screen"></span>&#8203;

        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden transform transition-all sm:my-8 sm:align-{{ (isset($align)) ? $align : 'middle' }} sm:max-w-{{ (isset($width)) ? $width : 'lg' }} w-full"
            role="dialog"
            aria-modal="true"
            aria-labelledby="modal-headline"
            x-show="show"
            x-on:click.away="show=false"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <div class="bg-gray-100 px-4 py-3 sm:px-6 relative h-16 flex items-center">
                  <span>{{ (isset($header)) ? $header : '' }}</span>
                  <span class="absolute inset-y-0 right-0 pr-4 sm:pr-6 inline-flex items-center">
                        <button x-on:click="show=false">
                              <span class="text-xl text-gray-400 hover:text-black">
                                    <x-heroicon-o-x class="h-6 w-6"/>
                              </span>
                        </button>
                  </span>
            </div>
            @isset($body)
                <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="sm:flex sm:items-start">
                              {{ $body }}
                        </div>
                  </div>
            @endisset
            @isset($footer)
                  <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        {{ $footer }}
                  </div>
            @endisset
        </div>
    </div>
</div>
