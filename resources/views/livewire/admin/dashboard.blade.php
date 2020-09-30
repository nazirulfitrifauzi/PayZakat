<div class="mt-8">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <x-general.grid class="mt-2" mobile="1" gap="5" sm="2" md="2" lg="3" xl="3">
            <!-- Info Card -->
            <x-general.info-card bg="bg-white" footerBg="bg-cool-gray-100" title="Menunggu Pengesahan" value="{{ $pendingAgent }} Orang" footerRoute="/admin/senarai-menunggu" footerText="Lihat Semua">
                <x-slot name="svg">
                    <x-heroicon-o-clock class="h-6 w-6 text-yellow-400"/>
                </x-slot>
            </x-general.info-card>

            <x-general.info-card bg="bg-white" footerBg="bg-cool-gray-100" title="Ejen Aktif" value="{{ $currentAgent }} Orang" footerRoute="/admin/senarai-ejen" footerText="Lihat Semua">
                <x-slot name="svg">
                    <x-heroicon-o-users class="h-6 w-6 text-green-400"/>
                </x-slot>
            </x-general.info-card>

            <x-general.info-card bg="bg-white" footerBg="bg-cool-gray-100" title="Ejen yang ditolak" value="{{ $rejectedAgent }} Orang" footerRoute="/admin/senarai-ditolak" footerText="Lihat Semua">
                <x-slot name="svg">
                    <x-heroicon-o-x-circle class="h-6 w-6 text-red-400"/>
                </x-slot>
            </x-general.info-card>
        </x-general.grid>
    </div>
</div>