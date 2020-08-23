@extends('layouts.app.auth')

@section('content')
<main class="flex-1 relative pb-8 z-0 overflow-y-auto">
      <!-- Content -->
      <div class="mt-8">
            <h2 class="mx-auto mt-8 px-4 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                Profil
            </h2>

            <!-- Activity table (small breakopoint and up) -->
            <div class="mx-auto px-0 sm:px-6 lg:px-8">
                  <div class="sm:rounded-lg px-5 py-3 flex flex-col md:flex-row justify-end">
                        <button class="bg-teal-500 hover:bg-teal-500 text-white hover:text-white py-2 px-4 rounded border border-teal-500 text-sm focus:outline-none transition duration-500 ease-in-out tracking-wider font-bold flex items-center">
                              <svg viewBox="0 0 20 20" fill="currentColor" class="pencil-alt w-6 h-6 mr-3">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                              </svg>
                              Kemaskini
                        </button>
                  </div>
                  <div class="flex flex-col mt-2 bg-white sm:rounded-lg p-5 shadow">
                        <div>
                              <p class="tracking-wider text-sm mb-2">
                                    Nama Penuh
                              </p>
                              <h1 class="font-semibold text-xl tracking-wider">
                                    {{ Auth()->user()->name }}
                              </h1>  
                        </div>
                        <div class="mt-8">
                              <p class="tracking-wider text-sm mb-2">
                                    Emel
                              </p>
                              <div class="flex items-center">
                                    <h1 class="font-semibold text-xl tracking-wider">
                                          user@csc.net.my
                                    </h1> 
                                    <span class="ml-1 text-green-500 flex items-center cursor-default text-xs tracking-widest">
                                          <svg viewBox="0 0 20 20" fill="currentColor" class="badge-check w-6 h-6"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                          Disahkan
                                    </span>
                              </div>
                        </div>
                        <div class="mt-8">
                              <p class="tracking-wider text-sm mb-2">
                                    No. Telefon
                              </p>
                              <div class="flex items-center">
                                    <h1 class="font-semibold text-xl tracking-wider">
                                          +6017 548 6897
                                    </h1> 
                                    <span class="ml-1 text-green-500 flex items-center cursor-default text-xs tracking-widest">
                                          <svg viewBox="0 0 20 20" fill="currentColor" class="badge-check w-6 h-6"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                          Disahkan
                                    </span>
                              </div>
                        </div>
                        <div class="mt-8">
                              <p class="tracking-wider text-sm mb-2">
                                    Kata Laluan Akaun
                              </p>
                              <div class="flex items-center">
                                    <h1 class="font-semibold text-xl tracking-wider">
                                          *********
                                    </h1> 
                                    <button class="bg-white p-3 text-xs ml-5 border border-gray-200 text-gray-500 rounded-lg focus:outline-none hover:shadow-lg focus:shadow-lg hover:text-black focus:text-black transition duration-300 ease-in-out tracking-wider flex items-center">
                                          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="key w-6 h-6 mr-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                                          Kemaskini Kata Laluan
                                    </button>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

</main>
@endsection
