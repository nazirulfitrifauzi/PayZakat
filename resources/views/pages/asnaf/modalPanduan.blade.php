<div  x-show="open"
      x-cloak
      class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="open"
                  x-description="Background overlay, show/hide based on modal state."
                  x-transition:enter="ease-out duration-300"
                  x-transition:enter-start="opacity-0"
                  x-transition:enter-end="opacity-100"
                  x-transition:leave="ease-in duration-200"
                  x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0"
                  class="fixed inset-0 transition-opacity">
                  <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
            <div x-show="open"
                  x-description="Modal panel, show/hide based on modal state."
                  x-transition:enter="ease-out duration-300"
                  x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave="ease-in duration-200"
                  x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                  x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:mt-20 sm:mb-8 sm:align-middle sm:max-w-3xl sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                  <div>
                        <table class="table-fixed">
                              <thead>
                                    <tr>
                                          <th class="w-2/5 px-4 py-2">Ruangan</th>
                                          <th class="w-2/5 px-4 py-2">Format</th>
                                          <th class="w-1/5 px-4 py-2">Mandatori</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                          <td class="px-4 py-2 border">Nama Penuh</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Semua huruf.</li>
                                                      <li>Simbol @ sahaja dibenarkan.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">No. Kad Pengenalan</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Semua nombor.</li>
                                                      <li>Simbol - TIDAK dibenarkan.</li>
                                                      <li>Maksimum 12 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">Pendapatan Isi Rumah</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Nombor sahaja.</li>
                                                      <li>Simbol - TIDAK dibenarkan.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">Jumlah Tanggungan</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Nombor sahaja.</li>
                                                      <li>Simbol - TIDAK dibenarkan.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">No. Telefon Bimbit</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Semua nombor.</li>
                                                      <li>Kod Negara +6 tidak dibenarkan.</li>
                                                      <li>Maksimum 12 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">E-mel</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Alamat e-mel yang sah.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">Alamat 1</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Semua huruf.</li>
                                                      <li>Semua nombor.</li>
                                                      <li>Hanya simbol / - , @ yang dibenarkan.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">Alamat 2</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Semua huruf.</li>
                                                      <li>Semua nombor.</li>
                                                      <li>Hanya simbol / - , @ yang dibenarkan.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">Alamat 3</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Semua huruf.</li>
                                                      <li>Semua nombor.</li>
                                                      <li>Hanya simbol / - , @ yang dibenarkan.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Tidak</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">Bandar</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Semua huruf.</li>
                                                      <li>Semua nombor.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">Poskod</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Semua nombor.</li>
                                                      <li>Maksimum 5 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="px-4 py-2 border">Negeri</td>
                                          <td class="px-4 py-2 border">
                                                <ul class="px-4 list-disc">
                                                      <li>Kod negeri.</li>
                                                      <li>1 = JOHOR</li>
                                                      <li>2 = KEDAH</li>
                                                      <li>3 = KELANTAN</li>
                                                      <li>4 = MELAKA</li>
                                                      <li>5 = NEGERI SEMBILAN</li>
                                                      <li>6 = PAHANG</li>
                                                      <li>7 = PERAK</li>
                                                      <li>8 = PERLIS</li>
                                                      <li>9 = PULAU PINANG</li>
                                                      <li>10 = SABAH</li>
                                                      <li>11 = SARAWAK</li>
                                                      <li>12 = SELANGOR</li>
                                                      <li>13 = TERENGGANU</li>
                                                      <li>14 = WILAYAH PERSEKUTUAN</li>
                                                </ul>
                                          </td>
                                          <td class="px-4 py-2 border">Ya</td>
                                    </tr>
                              </tbody>
                        </table>
                  </div>
                  <div class="mt-5 text-center sm:mt-6">
                        <button
                              @click="open = false"
                              type="button"
                              class="inline-flex justify-center px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                              Tutup
                        </button>
                  </div>
                  <div class="absolute top-0 right-0 pt-2 pr-2 focus:outline-none">
                        <button
                              @click="open = false"
                              type="button"
                              class="text-gray-600 transition duration-200 ease-in-out rounded-full hover:text-gray-800 active:bg-gray-300 active:text-gray-100 focus:outline-none">
                              <x-heroicon-o-x class="w-6 h-6"/>
                        </button>
                  </div>
            </div>
      </div>
</div>