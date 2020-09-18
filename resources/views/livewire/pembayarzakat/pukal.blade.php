<div class="mx-auto px-4 leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8 mt-5" x-data="{tab:'tab1'}" x-cloak>
    <div class="flex items-center">
        <button class="inline-flex items-center px-4 py-2 text-sm font-medium transition ease-in-out duration-300 focus:outline-none active:bg-cool-gray-100 active:text-cool-gray-700 rounded-t-md" x-on:click="tab='tab1'" :class="{'text-cool-gray-900 bg-white':tab==='tab1','text-cool-gray-500 hover:text-cool-gray-900':tab!=='tab1'}">
            <h1 class="tracking-wider">Muat Naik</h1>
        </button>
        <button class="inline-flex items-center px-4 py-2 text-sm font-medium transition ease-in-out duration-300 focus:outline-none active:bg-cool-gray-100 active:text-cool-gray-700 rounded-t-md" x-on:click="tab='tab2'" :class="{'text-cool-gray-900 bg-white':tab==='tab2','text-cool-gray-500 hover:text-cool-gray-900':tab!=='tab2'}">
            <h1 class="tracking-wider">Cara-cara</h1>
        </button>
    </div>
    <div class="bg-white p-4 border-b" :class="{'rounded-r-md rounded-b-md':tab==='tab1','rounded-md':tab!=='tab1'}">
        <div x-show="tab === 'tab1'">
            Muat nak dilakukan disini
        </div>
        <div x-show="tab === 'tab2'">
            Cara2 memuat naik diterangkan disini
        </div>
    </div>
</div>