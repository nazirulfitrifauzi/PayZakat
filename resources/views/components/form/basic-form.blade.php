<form wire:submit.prevent="{{ $action }}">
    <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6 p-5">
        {{ $content }}
    </div>
    {{ $slot }}
</form>