<?php

namespace App\Http\Livewire\Ppz\Refund;

use Livewire\Component;
use App\Models\Products;
use App\Models\PPZ;
use App\Models\Customers;

class Index extends Component
{
    public $steps = [
        '1' => 'Jenis & Pembayar Zakat',
        '2' => 'Maklumat Transaksi',
        '3' => 'Pengesahan Transaksi',
    ];
    public $products, $customers, $ppzs;
    public $customerGroup=[], $customerGroupTotal=[], $ppzList=[];
    public $ppzGroupTotal, $totalPayment;
    public $currentstep = 1;

    protected $listeners = ['navigation'];

    public function navigation($keyword)
    {
        if ($keyword == "next") {
            $this->currentstep++;
        } elseif ($keyword == "prev") {
            $this->currentstep--;
        }

        if ($this->currentstep < 1) $this->currentstep = 1;
    }

    private function set_step()
    {
        $this->{'step' . $this->currentstep}();
    }
    
    private function step1()
    {
        $this->products = Products::select('product_code', 'product_name')->get();
    }

    private function step2()
    {
        $this->ppzGroupTotal = [];
        foreach($this->customerGroupTotal as $ppzId => $cusPayment)
        {
            $this->ppzGroupTotal[$ppzId] = array_sum($cusPayment);
        }

        $this->totalPayment = array_sum($this->ppzGroupTotal);
    }

    public function paymentCompleted() 
    {
        $this->navigation('next');
    }

    private function step3()
    {
        //
    }
    public function render()
    {
        return view('livewire.ppz.refund.index');
    }
}
