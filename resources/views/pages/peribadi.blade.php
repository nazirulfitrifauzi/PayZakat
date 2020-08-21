@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
       <!-- Content -->
        <div class="mt-8">
            <h2 class="mx-auto mt-8 px-4 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
                Maklumat Peribadi Terperinci
            </h2>

            <div class="mx-auto px-0 my-3 text-lg leading-6 font-medium text-cool-gray-900 sm:px-4 lg:px-6">
                  <div class="sm:rounded-lg px-5 py-3 flex flex-col md:flex-row justify-end">
                        <button class="bg-teal-500 hover:bg-teal-500 text-white hover:text-white py-2 px-4 rounded border border-teal-500 text-sm focus:outline-none transition duration-500 ease-in-out tracking-wider font-bold flex items-center">
                              <svg viewBox="0 0 20 20" fill="currentColor" class="pencil-alt w-6 h-6 mr-3">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                              </svg>
                              Kemaskini
                        </button>
                  </div>
                  <div class="mt-3 bg-white sm:rounded-lg shadow px-5 py-3 flex flex-col">
                        <div class="px-2">
                              <div class="flex items-center">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="cash w-6 h-6 text-gray-300 mr-3">
                                          <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <h1 class="font-serif tracking-wider">MAKLUMAT PENDAPATAN</h1>
                              </div>
                              <hr class="mt-3">
                        </div>
                        <div class="flex flex-col md:flex-row">
                              <div class="w-full p-2">
                                    <h4 class="text-sm tracking-widest">Gaji Kasar</h4>
                                    <h1 class="font-bold  tracking-wide">RM 6,430.80</h1>
                              </div>
                              <div class="w-full p-2">
                                    <h4 class="text-sm tracking-widest">Elaun Tetap</h4>
                                    <h1 class="font-bold  tracking-wide">RM 1,500.00</h1>
                              </div>
                        </div>
                        <div class="flex flex-col md:flex-row">
                              <div class="w-full p-2">
                                    <h4 class="text-sm tracking-widest">Bonus</h4>
                                    <h1 class="font-bold  tracking-wide">RM 0.00    </h1>
                              </div>
                        </div>
                  </div>
                  <div class="mt-3 bg-white sm:rounded-lg shadow px-5 py-3 flex flex-col">
                        <div class="px-2">
                              <div class="flex items-center">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="cash w-6 h-6 text-gray-300 mr-3">
                                          <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <h1 class="font-serif tracking-wider"></h1>
                              </div>
                              <hr class="mt-3">
                        </div>
                        <div class="flex flex-col md:flex-row">
                              <div class="w-full p-2">
                                    <h4 class="text-sm tracking-widest">Gaji Kasar</h4>
                                    <h1 class="font-bold  tracking-wide">RM 6,430.80</h1>
                              </div>
                              <div class="w-full p-2">
                                    <h4 class="text-sm tracking-widest">Elaun Tetap</h4>
                                    <h1 class="font-bold  tracking-wide">RM 1,500.00</h1>
                              </div>
                        </div>
                        <div class="flex flex-col md:flex-row">
                              <div class="w-full p-2">
                                    <h4 class="text-sm tracking-widest">Bonus</h4>
                                    <h1 class="font-bold  tracking-wide">RM 0.00    </h1>
                              </div>
                        </div>
                  </div>
            </div>
        </div>

    </main>
@endsection
