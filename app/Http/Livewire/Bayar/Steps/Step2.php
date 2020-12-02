<?php

namespace App\Http\Livewire\Bayar\Steps;

use Livewire\Component;
use App\Models\Products;
use App\Models\PPZ;
use App\Models\Customers;

class Step2 extends Component
{
    public $ppzid = "", $donorlist = [], $selectedDonor = [];
    public $productlist = [], $ppzlist = [], $ppzarray = [], $donorGrouped = [], $donorGroupTotal = [];
    public $totalAll = [];

    public function get_allList()
    {
        $this->productlist = Products::select('product_code', 'product_name')->get();
        $this->ppzlist = PPZ::select('id', 'name')->get();
        $this->donorlist = Customers::orderBy('fav_ppz_id')->get();
        $this->groupDonor();
    }

    public function render()
    {
        $this->get_allList();
        return view('livewire.bayar.steps.step2');
    }

    private function groupDonor()
    {
        foreach ($this->donorlist as $donor) {
            $this->donorGrouped[$donor->fav_ppz_id][] = [
                'nama' => $donor->name,
                'ic' => $donor->ic_no,
                'nilai_zakat' => $donor->default_amount_zakat,
            ];

            $this->donorGroupTotal[$donor->fav_ppz_id][] = $donor->default_amount_zakat;
            $this->totalAll[] = $donor->default_amount_zakat;
        }

        foreach ($this->ppzlist as $ppz) {
            $this->ppzarray[$ppz->id] = $ppz->name;
        }
    }

    public function paymentCompleted() {
       $this->emit('navigation', 'next');
    }
}
