<?php

namespace App\Http\Livewire\Bayar\Steps;

use Livewire\Component;
use App\Models\Products;
use App\Models\PPZ;
use App\Models\Customers;

class Step1 extends Component
{
    public $ppzid = "", $donorlist = [];
    public $productlist = [], $ppzlist = [];

    public function mount()
    {
        //
    }

    public function get_alllist()
    {
        $this->productlist = Products::select('product_code', 'product_name')->get();
        $this->ppzlist = PPZ::select('id', 'name')->get();
    }

    public function get_donorlist()
    {
        if ($this->ppzid != "") {
            $this->donorlist = Customers::where('fav_ppz_id', $this->ppzid)->orderBy('name')->get();
        } else {
            $this->donorlist = [];
        }
    }

    public function render()
    {
        $this->get_alllist();
        $this->get_donorlist();
        return view('livewire.bayar.steps.step1');
    }
}
