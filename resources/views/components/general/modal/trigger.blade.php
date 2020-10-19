<button {{ $attributes->merge(['class'=>'transition duration-200 ease-in-out focus:outline-none cursor-pointer']) }} x-data="{id:'{{ $target }}'}" x-on:click="$dispatch('modal',{id})">
      {{ $slot }}
</button>