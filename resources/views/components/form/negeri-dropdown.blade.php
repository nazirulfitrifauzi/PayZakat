<div {{ $attributes }}>
    <label class="block text-sm font-semibold leading-5 text-gray-700">
        {{ $label }}
    </label>
    <div class="mt-1 rounded-md shadow-sm">
        <select
            wire:model.lazy="{{ $value }}"
            class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
            wire:loading.attr='readonly'
            wire:loading.class="bg-gray-300"
            wire:target="submit"
        >
            <option value="" selected disabled>Sila Pilih</option>
            {{ $slot }}
        </select>
    </div>
</div>