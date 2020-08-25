@extends('layouts.app.auth')

@section('content')
<main class="flex-1 relative pb-8 z-0 overflow-y-auto">
      <div class="md:flex md:items-center md:justify-between mx-8 mt-8">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:leading-9 sm:truncate">
                    Profil
                </h2>
            </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg mx-8 my-4">
            <div class="flex flex-col bg-white sm:rounded-lg p-5 shadow">
                  <div>
                        <h3 class="text-lg leading-6 font-semibold text-gray-900">
                            Kata Laluan Akaun
                        </h3>
                  </div>
                  <form>
                        <div class="mt-5 grid md:grid-cols-3 gap-8">
                              <div>
                                    <label for="old_password" class="block text-sm font-semibold leading-5 text-gray-700">
                                          Kata Laluan Lama
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                          <input id="old_password" type="password" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                              </div>
                              <div>
                                    <label for="old_password" class="block text-sm font-semibold leading-5 text-gray-700">
                                          Kata Laluan Baru
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                          <input id="old_password" type="password" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                              </div>
                              <div>
                                    <label for="old_password" class="block text-sm font-semibold leading-5 text-gray-700">
                                          Sahkan Kata Laluan Baru
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                          <input id="old_password" type="password" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                              </div>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-5">
                              <div class="flex justify-end">
                                    <span class="inline-flex rounded-md shadow-sm">
                                          <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                                Batal
                                          </button>
                                    </span>
                                    <span class="ml-3 inline-flex rounded-md shadow-sm">
                                          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                                Simpan
                                          </button>
                                    </span>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
</main>
@endsection
