<div>
    @php
        $steps = [
            'step1'=>'Jenis & Pembayar Zakat',
            'step2'=>'Maklumat Transaksi',
            'step3'=>'Pengesahan Transaksi',
        ];
    @endphp
    <x-general.steps :steps="$steps" :stepstatus="$stepstatus" livewire="true" />
    <div class="mt-8">
        @foreach ($stepstatus as $id => $status)
            @if ($status == "current")
                @include('pages.bayar.steps.' . $id)
            @endif
        @endforeach
    </div>
</div>
