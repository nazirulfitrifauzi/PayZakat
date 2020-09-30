@if ($totalsteps > 0)
    <nav>
        <ul class="border border-gray-300 rounded divide-y divide-gray-300 md:flex md:divide-y-0">
            @php
                $count = 1;
            @endphp
            @foreach ($steps as $id => $name)
                @if ($count == $totalsteps)
                    @if ($stepstatus[$id] == "upcoming")
                        <!-- Upcoming Step -->
                        <li class="relative md:flex-1 md:flex">    
                            <div class="group flex items-center cursor-default">
                                <div class="px-6 py-2 flex items-center text-sm leading-5 font-medium space-x-4">
                                    <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full group-hover:border-gray-400 transition ease-in-out duration-150">
                                    <span class="text-gray-500 group-hover:text-gray-900 transition ease-in-out duration-150">
                                        {{ sprintf('%02d', $count) }}
                                    </span>
                                    </div>
                                    <p class="text-sm leading-5 font-medium text-gray-500 group-hover:text-gray-900 transition ease-in-out duration-150">{{ $name }}</p>
                                </div>
                            </div>
                        </li>
                    @elseif($stepstatus[$id] == "current")
                        <!-- Current Step -->
                        <li class="relative md:flex-1 md:flex">
                            <div class="px-6 py-4 flex items-center text-sm leading-5 font-medium space-x-4 cursor-default">
                                <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-teal-600 rounded-full">
                                    <p class="text-teal-600">
                                        {{ sprintf('%02d', $count) }}
                                    </p>
                                </div>
                                <p class="text-sm leading-5 font-medium text-teal-600">{{ $name }}</p>
                            </div>
                        </li>
                    @else
                        <!-- Completed Step -->    
                        <li class="relative md:flex-1 md:flex">
                            <a href="#" class="group flex items-center w-full">
                                <div class="px-6 py-2 flex items-center text-sm leading-5 font-medium space-x-4">
                                    <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-teal-600 rounded-full group-hover:bg-teal-800 transition ease-in-out duration-150">
                                            {{-- <p class="text-gray-200">{{ sprintf('%02d', $count) }}</p> --}}
                                            <x-heroicon-o-check class="w-6 h-6 text-white"/>
                                    </div>
                                    <p class="text-sm leading-5 font-medium text-teal-600">{{ $name }}</p>
                                </div>
                            </a>
                        </li>
                    @endif
                @else
                    @if ($stepstatus[$id] == "upcoming")
                        <!-- Upcoming Step -->
                        <li class="relative md:flex-1 md:flex">    
                            <div class="group flex items-center cursor-default">
                                <div class="px-6 py-2 flex items-center text-sm leading-5 font-medium space-x-4">
                                    <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full group-hover:border-gray-400 transition ease-in-out duration-150">
                                    <span class="text-gray-500 group-hover:text-gray-900 transition ease-in-out duration-150">
                                        {{ sprintf('%02d', $count) }}
                                    </span>
                                    </div>
                                    <p class="text-sm leading-5 font-medium text-gray-500 group-hover:text-gray-900 transition ease-in-out duration-150">{{ $name }}</p>
                                </div>
                            </div>
                            <div class="hidden md:block absolute top-0 right-0 h-full w-5">
                                <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>
                    @elseif($stepstatus[$id] == "current")
                        <!-- Current Step -->
                        <li class="relative md:flex-1 md:flex">
                            <div class="px-6 py-4 flex items-center text-sm leading-5 font-medium space-x-4 cursor-default">
                                <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-teal-600 rounded-full">
                                    <p class="text-teal-600">
                                        {{ sprintf('%02d', $count) }}
                                    </p>
                                </div>
                                <p class="text-sm leading-5 font-medium text-teal-600">{{ $name }}</p>
                            </div>
                            <div class="hidden md:block absolute top-0 right-0 h-full w-5">
                                <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>
                    @else
                        <!-- Completed Step -->    
                        <li class="relative md:flex-1 md:flex">
                            <a href="#" class="group flex items-center w-full">
                                <div class="px-6 py-2 flex items-center text-sm leading-5 font-medium space-x-4">
                                    <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-teal-600 rounded-full group-hover:bg-teal-800 transition ease-in-out duration-150">
                                            {{-- <p class="text-gray-200">{{ sprintf('%02d', $count) }}</p> --}}
                                            <x-heroicon-o-check class="w-6 h-6 text-white"/>
                                    </div>
                                    <p class="text-sm leading-5 font-medium text-teal-600">{{ $name }}</p>
                                </div>
                            </a>
                            <div class="hidden md:block absolute top-0 right-0 h-full w-5">
                                <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>
                    @endif
                @endif
                @php
                    $count++;
                @endphp
            @endforeach
        </ul>
    </nav>
@endif
