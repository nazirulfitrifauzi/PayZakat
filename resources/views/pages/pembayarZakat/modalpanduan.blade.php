<div  x-show="open" 
      x-cloak
      class="fixed z-10 inset-0 overflow-y-auto">
      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                  class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
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
                                          <td class="border px-4 py-2">Nama Penuh</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua huruf.</li>
                                                      <li>Simbol @ sahaja dibenarkan.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">No. Kad Pengenalan Baru</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua nombor.</li>
                                                      <li>Simbol - TIDAK dibenarkan.</li>
                                                      <li>Maksimum 12 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">No. Kad Pengenalan Lama</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Huruf dan Nombor sahaja.</li>
                                                      <li>Simbol - TIDAK dibenarkan.</li>
                                                      <li>Maksimum 12 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Tidak</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Tarikh Lahir</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Format Y-m-d.</li>
                                                      <li>Tahun-Bulan-Hari.</li>
                                                      <li>Contoh: 1999-01-31.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Jantina</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Kod jantina.</li>
                                                      <li>L = Lelaki.</li>
                                                      <li>P = Perempuan.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Negeri Asal</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
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
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Status Bermastautin</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Kod bermastautin.</li>
                                                      <li>1 = Bermastautin.</li>
                                                      <li>2 = Tidak bermastautin.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Tempoh Bermastautin</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Ruangan ini hanya perlu diisi jika ruangan Status Bermastautin berkod 1.</li>
                                                      <li>Tempoh dalam kiraan tahun</li>
                                                      <li>Nombor sahaja</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Alamat 1</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua huruf.</li>
                                                      <li>Semua nombor.</li>
                                                      <li>Hanya simbol / - , @ yang dibenarkan.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Alamat 2</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua huruf.</li>
                                                      <li>Semua nombor.</li>
                                                      <li>Hanya simbol / - , @ yang dibenarkan.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Alamat 3</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua huruf.</li>
                                                      <li>Semua nombor.</li>
                                                      <li>Hanya simbol / - , @ yang dibenarkan.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Tidak</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Poskod</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua nombor.</li>
                                                      <li>Maksimum 5 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Bandar</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua huruf.</li>
                                                      <li>Semua nombor.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Negeri</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
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
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">No. Telefon Bimbit</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua nombor.</li>
                                                      <li>Kod Negara +6 tidak dibenarkan.</li>
                                                      <li>Maksimum 12 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">E-mel</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Alamat e-mel yang sah.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Nama Majikan</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua huruf.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Tidak</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">No. Telefon Pejabat</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua nombor.</li>
                                                      <li>Kod Negara +6 tidak dibenarkan.</li>
                                                      <li>Maksimum 12 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Tidak</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Jawatan</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua huruf.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Tidak</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">No. Pekerja</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Semua huruf dan nombor.</li>
                                                      <li>Maksimum 255 karakter.</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Tidak</td>
                                    </tr>
                                    <tr>
                                          <td class="border px-4 py-2">Kod PPZ Pilihan</td>
                                          <td class="border px-4 py-2">
                                                <ul class="list-disc px-4">
                                                      <li>Kod PPZ.</li>
                                                      <li>1 = PPZ - Shamelin (HQ)</li>
                                                      <li>2 = PPZ - Daruzzakah</li>
                                                      <li>3 = PPZ - Masjid Negara</li>
                                                      <li>4 = PPZ - Wangsa Maju</li>
                                                      <li>5 = PPZ - PUTRAJAYA</li>
                                                      <li>6 = PPZ - Masjid At-Taqwa,Taman Tun Dr. Ismail (TTDI)</li>
                                                      <li>7 = PPZ - Masjid Abdul Rahman Bin Auf, Puchong</li>
                                                      <li>8 = PPZ - Masjid Imam Al Ghazali, Kepong</li>
                                                      <li>9 = PPZ - Labuan</li>
                                                </ul>
                                          </td>
                                          <td class="border px-4 py-2">Ya</td>
                                    </tr>
                              </tbody>
                        </table>                          
                  </div>
                  <div class="mt-5 sm:mt-6 text-center">
                        <button 
                              @click="open = false" 
                              type="button" 
                              class="inline-flex justify-center rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                              Tutup
                        </button>
                  </div>
            </div>
      </div>
</div>