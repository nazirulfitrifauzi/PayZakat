{{-- <x-heroicon-o-check class="w-6 h-6 text-white"/> --}}
@php
      /* Progress Calculator */
      $totalstep = count($steps);
      $progressratio = (100 / $totalstep) / 2;
      $currentprogress = ((($currentstep/$totalstep) * 100) - $progressratio);
      $currentprogress = ($currentprogress > 100) ? $currentprogress = "100%" : $currentprogress . "%";
@endphp
<div class="h-16 relative flex items-center bg-transparent">
      <div class="h-2 w-full bg-gray-200 rounded-full relative">
            <div class="absolute inset-y-0 left-0 bg-teal-400 rounded-full transition-all duration-300 ease-in-out " style="width:{{ $currentprogress }}"></div>
      </div>
      <div class="absolute inset-0 bg-transparent flex">
            @foreach ($steps as $step => $label)
                  <div class="w-full flex items-center justify-center">
                        <button class="relative transition duration-300 ease-in-out text-md font-medium rounded-full leading-none w-13 h-13 flex justify-center cursor-default items-center border-solid border-2 border-gray-200 z-10 {{ ($currentstep > $step) ? "bg-teal-400 text-white" : "bg-gray-200 border-2 text-teal-400" }}">
                              <span class="font-bold italic">{{ $step }}</span>
                              <p class="absolute bottom-0 whitespace-no-wrap text-teal-400" style="margin-bottom:-1.5rem">{{ $label }}</p>
                        </button>
                        <div class="{{ ($currentstep == $step) ? "animate-ping " : " "}} absolute rounded-full h-10 w-10 flex items-center justify-center bg-teal-400 bg-opacity-50 z-0"></div>
                  </div>
            @endforeach
      </div>
</div>