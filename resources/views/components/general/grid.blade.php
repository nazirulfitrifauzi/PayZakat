<div x-max="1" {{ $attributes->merge(['class' => 'grid grid-cols-'.$mobile.' gap-'.$gap.' sm:grid-cols-'.$sm.' lg:grid-cols-'.$lg]) }}>
    {{ $slot }}
</div>