<div class="mt-8">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="font-semibold text-lg flex items-center justify-between p-4 mb-8 text-md font-semibold text-teal-100 bg-teal-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-teal my-6">
            <h2>Selamat Datang <span class="text-teal-100">Admin</span></h2>
        </div>
        <x-general.grid class="mt-2" mobile="1" gap="5" sm="2" md="2" lg="3" xl="3">
            <!-- Info Card -->
            <x-general.info-card bg="bg-white" footerBg="bg-cool-gray-100" title="Menunggu Pengesahan" value="{{ $pendingAgent }} Orang" footerRoute="/admin/pengguna/senarai-menunggu" footerText="Lihat Semua">
                <x-slot name="svg">
                    <x-heroicon-o-clock class="h-6 w-6 text-yellow-400"/>
                </x-slot>
            </x-general.info-card>

            <x-general.info-card bg="bg-white" footerBg="bg-cool-gray-100" title="Ejen Aktif" value="{{ $currentAgent }} Orang" footerRoute="/admin/pengguna/senarai-ejen" footerText="Lihat Semua">
                <x-slot name="svg">
                    <x-heroicon-o-users class="h-6 w-6 text-green-400"/>
                </x-slot>
            </x-general.info-card>

            <x-general.info-card bg="bg-white" footerBg="bg-cool-gray-100" title="Ejen yang ditolak" value="{{ $rejectedAgent }} Orang" footerRoute="/admin/pengguna/senarai-ditolak" footerText="Lihat Semua">
                <x-slot name="svg">
                    <x-heroicon-o-x-circle class="h-6 w-6 text-red-400"/>
                </x-slot>
            </x-general.info-card>
        </x-general.grid>
    </div>
</div>

<h2 class="mx-auto mt-8 px-4 text-lg leading-6 font-medium text-cool-gray-900 sm:px-6 lg:px-8">
Dashboard 
</h2>

<x-general.grid class="mt-4 ml-8 mr-8" mobile="1" gap="5" sm="1" md="1" lg="2" xl="2">
    <x-general.card class="bg-white">
        <div class="p-4">
             {!! $UserBarChart->container() !!}
        </div>
    </x-general.card>
    
    <x-general.card class="bg-white">
        <div class="p-4">
             {!! $UserDoughnutChart->container() !!}
        </div>
    </x-general.card>
</x-general.grid>


<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
@if($UserBarChart)
    {!! $UserBarChart->script() !!}
@endif

@if($UserDoughnutChart)
     {!! $UserDoughnutChart->script() !!}
@endif

