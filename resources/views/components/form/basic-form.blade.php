<form wire:submit.prevent="{{ $action }}">
    <div class="mt-2">
        <div class="grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
            {{ $content }}
        </div>
    </div>
    {{ $button }}
</form>