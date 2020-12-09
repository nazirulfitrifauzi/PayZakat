{{-- <x-heroicon-o-check class="w-6 h-6 text-white"/> --}}
@php
      /* Progress Calculator */
      $totalstep = count($steps);
      $progressratio = (100 / $totalstep) / 2;
      $currentprogress = ((($currentstep/$totalstep) * 100) - $progressratio);
      $currentprogress = ($currentprogress > 100) ? "100%" : $currentprogress . "%";
@endphp
<div class="relative flex items-center h-16 bg-transparent">
      <div class="relative w-full h-2 bg-gray-200 rounded-full">
            <div class="absolute inset-y-0 left-0 transition-all duration-300 ease-in-out bg-teal-400 rounded-full " style="width:{{ $currentprogress }}"></div>
      </div>
      <div class="absolute inset-0 flex bg-transparent">
            @foreach ($steps as $step => $label)
                  <div class="flex items-center justify-center w-full">
                        <button class="relative transition duration-300 ease-in-out text-md font-medium rounded-full leading-none w-13 h-13 flex justify-center cursor-default items-center border-solid border-2 border-white z-10 {{ ($currentstep >= $step) ? "bg-teal-400 text-white" : "bg-gray-200 border-2 text-teal-400" }}">
                              <span class="italic font-bold">{{ $step }}</span>
                              <p class="absolute bottom-0 text-teal-400 whitespace-no-wrap" style="margin-bottom:-1.5rem">{{ $label }}</p>
                        </button>
                        <div class="{{ ($currentstep == $step) ? "animate-ping " : " "}} absolute rounded-full h-10 w-10 flex items-center justify-center bg-teal-400 bg-opacity-50 z-0"></div>
                  </div>
            @endforeach
      </div>
</div>