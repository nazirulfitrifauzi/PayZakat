<div {{ $attributes }}>
    <label class="block text-sm font-semibold leading-5 text-gray-700">
        {{ $label }}
    </label>
    <div class="mt-1 flex rounded-md shadow-sm">
        <input wire:model.lazy="{{ $value }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
    </div>
    @if($errors->has($value)) <p class="text-sm text-red-600">{{ $errors->first($value) }}</p> @endif
</div>