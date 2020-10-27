<div class="grid gap-6 grid-col-1">
    <div>
        <h1 class="text-gray-700">Pengesahan Transaksi</h1>
    </div>
    <div class="grid gap-5 grid-col-1">
        <div class="grid gap-2 grid-col-1">
            <h2 class="text-gray-300">Daripada</h2>
            <div class="flex items-center justify-between">
                <p>VA 1645-3254455-7</p>
                <p>RM 1,460.00</p>
            </div>
        </div>
        <div class="grid gap-2 grid-col-1">
            <h2 class="text-gray-300">Penerima</h2>
            <div class="flex items-center justify-between">
                <p>PPZ</p>
                <p>RM 708</p>
            </div>
            <div class="flex items-center justify-between">
                <p>PPZ</p>
                <p>RM 50</p>
            </div>
            <div class="flex items-center justify-between">
                <p>PPZ</p>
                <p>RM 702</p>
            </div>
        </div>
        <div class="grid gap-2 grid-col-1">
            <h2 class="text-gray-300">Maklumat Transaksi</h2>
            <div class="flex items-center justify-between">
                <p>{{ date('d F Y, H:i:sa') }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p>Transaksi ID: 12548</p>
            </div>
            <div class="flex items-center justify-between">
                <p>Transaksi di atas telah berjaya. Sila <a href="{{ route('bayar.resit') }}" target="_blank" class="text-blue-500">cetak resit</a> untuk rekod anda.</p>
            </div>
        </div>
    </div>
</div>
