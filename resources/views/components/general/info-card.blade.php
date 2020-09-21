<x-general.card class="{{ $bg }}">
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                {{ $svg }}
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm leading-5 font-medium text-cool-gray-500 truncate">{{ $title }}</dt>
                    <dd>
                        <div class="text-lg leading-7 font-medium text-cool-gray-900">{{ $value }}</div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="{{ $footerBg }} px-5 py-3">
        <div class="text-sm leading-5">
            <a href="{{ $footerRoute }}" class="font-medium text-teal-600 hover:text-teal-900 transition ease-in-out duration-150">{{ $footerText }}</a>
        </div>
    </div>
</x-general.card>