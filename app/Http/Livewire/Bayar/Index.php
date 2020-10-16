<?php

namespace App\Http\Livewire\Bayar;

use Livewire\Component;

class Index extends Component
{
    public $steps = [
        '1' => 'Jenis & Pembayar Zakat',
        '2' => 'Maklumat Transaksi',
        '3' => 'Pengesahan Transaksi',
    ];
    
    public $currentstep = 1;

    public function navigation($keyword)
    {
        if ($keyword == "next") {
            $this->currentstep++;
        } elseif ($keyword == "prev") {
            $this->currentstep--;
        }

        if ($this->currentstep < 1) $this->currentstep = 1;
    }

    public function render()
    {
        return view('livewire.bayar.index');
    }



    /*******************************/
    /*******************************/
    /*******Private Functions*******/
    /*******************************/
    /*******************************/
}
