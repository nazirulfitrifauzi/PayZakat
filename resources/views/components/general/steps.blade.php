{{-- <x-heroicon-o-check class="w-6 h-6 text-white"/> --}}
@php
      /* Progress Calculator */
      $totalstep = count($steps);
      $progressratio = (100 / $totalstep) / 2;
      $currentprogress = ((($currentstep/$totalstep) * 100) - $progressratio);
      $currentprogress = ($currentprogress > 100) ? $currentprogress = "100%" : $currentprogress . "%";
@endphp
<div class="h-16 relative flex items-center bg-transparent">
      <div class="h-2 w-full bg-white rounded-full relative">
            <div class="absolute inset-y-0 left-0 bg-teal-400 rounded-full transition-all duration-300 ease-in-out" style="width:{{ $currentprogress }}"></div>
      </div>
      <div class="absolute inset-0 bg-transparent flex">
            @foreach ($steps as $step => $label)
                  <div class="w-full flex items-center justify-center">
                        <button class="relative transition duration-300 ease-in-out text-sm font-medium rounded-full leading-none w-10 h-10 flex justify-center cursor-default items-center border-2 border-gray-200 {{ ($currentstep > $step) ? "bg-teal-400 text-white" : "bg-white border-2 text-teal-400" }}">
                              {{ $step }}
                              <p class="absolute bottom-0 whitespace-no-wrap text-teal-400" style="margin-bottom:-1.5rem">{{ $label }}</p>
                        </button>
                  </div>
            @endforeach
      </div>
</div>