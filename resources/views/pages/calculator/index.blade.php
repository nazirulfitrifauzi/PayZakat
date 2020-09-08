@extends('layouts.app.auth')

@section('content')
      <div class="min-h-screen bg-white" x-data="{tab:'tab1', open:false}" x-cloak>
            <div class="bg-white p-6">
                  <div class="relative">
                        <button class="flex items-center text-gray-600 hover:text-black focus:text-black focus:outline-none transition duration-300 ease-in-out" x-on:click="open=!open" x-on:click.away="open=false">
                              <p x-ref="active">Zakat Pendapatan</p>
                              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="flex flex-col absolute bg-white shadow rounded-lg py-4 mt-2 border" x-show="open" style="top:100%; width:200px">
                              <a 
                                    class="p-4 hover:bg-teal-700 hover:text-white transition duration-300 ease-in-out cursor-pointer" 
                                    :class="{'bg-teal-700 text-white':tab==='tab1'}" 
                                    x-on:click="tab='tab1'; $refs.active.innerText='Zakat Pendapatan'">
                                    Zakat Pendapatan
                              </a>
                              <a 
                                    class="p-4 hover:bg-teal-700 hover:text-white transition duration-300 ease-in-out cursor-pointer" 
                                    :class="{'bg-teal-700 text-white':tab==='tab2'}" 
                                    x-on:click="tab='tab2'; $refs.active.innerText='Zakat Perniagaan'">
                                    Zakat Perniagaan
                              </a>
                              <a 
                                    class="p-4 hover:bg-teal-700 hover:text-white transition duration-300 ease-in-out cursor-pointer" 
                                    :class="{'bg-teal-700 text-white':tab==='tab3'}" 
                                    x-on:click="tab='tab3'; $refs.active.innerText='Zakat Harta'">
                                    Zakat Harta
                              </a>
                              <a 
                                    class="p-4 hover:bg-teal-700 hover:text-white transition duration-300 ease-in-out cursor-pointer" 
                                    :class="{'bg-teal-700 text-white':tab==='tab4'}" 
                                    x-on:click="tab='tab4'; $refs.active.innerText='Zakat KWSP'">
                                    Zakat KWSP
                              </a>
                              <a 
                                    class="p-4 hover:bg-teal-700 hover:text-white transition duration-300 ease-in-out cursor-pointer" 
                                    :class="{'bg-teal-700 text-white':tab==='tab5'}" 
                                    x-on:click="tab='tab5'; $refs.active.innerText='Zakat ASB'">
                                    Zakat ASB
                              </a>
                        </div>
                  </div>
            </div>
            <div x-show="tab==='tab1'">@livewire('calculator.pendapatan')</div>
            <div x-show="tab==='tab2'">@livewire('calculator.perniagaan')</div>
            <div x-show="tab==='tab3'">@livewire('calculator.harta')</div>
            <div x-show="tab==='tab4'">@livewire('calculator.kwsp')</div>
            <div x-show="tab==='tab5'">@livewire('calculator.asb')</div>
      </div>
@endsection
