<?php

namespace App\Http\Livewire\Bayar;

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
        $this->ppzs = PPZ::select('id', 'name')->get();
        // $this->customers = Customers::where('agent_id',auth()->user()->id)->orderBy('fav_ppz_id')->get();
        $this->customers = Customers::orderBy('fav_ppz_id')->get();
        
        foreach ($this->customers as $customer) {
            $this->customerGroup[$customer->fav_ppz_id][] = [
                'nama' => $customer->name,
                'ic' => $customer->ic_no,
                'nilai_zakat' => $customer->default_amount_zakat,
            ];

            $this->customerGroupTotal[$customer->fav_ppz_id][] = $customer->default_amount_zakat;
        }
        
        foreach ($this->ppzs as $ppz) {
            $this->ppzList[$ppz->id] = $ppz->name;
        }
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
        $this->set_step();
        return view('livewire.bayar.index');
    }
}
