<?php

namespace App\Http\Livewire\Bayar\Steps;

use Livewire\Component;
use App\Models\Products;
use App\Models\PPZ;
use App\Models\Customers;

class Step1 extends Component
{
    public $ppzid = "", $donorlist = [], $selectedDonor = [];
    public $productlist = [], $ppzlist = [], $ppzarray = [], $donorGrouped = [], $donorGroupTotal = [];
    public $checkAll = "";

    public function get_allList()
    {
        $this->productlist = Products::select('product_code', 'product_name')->get();
        $this->ppzlist = PPZ::select('id', 'name')->get();
        $this->donorlist = Customers::orderBy('fav_ppz_id')->get();
        $this->groupDonor();
    }

    public function get_donorList()
    {
        // $this->checkAll = "";

        // if ($this->ppzid != "") {
        //     $this->donorlist = Customers::where('fav_ppz_id', $this->ppzid)->orderBy('name')->get();
        // } else {
        //     $this->donorlist = [];
        // }
    }

    public function selectAll()
    {
        if ($this->checkAll == "") {
            $this->checkAll = "1";
        } else {
            $this->checkAll = "";
        }

        if ($this->checkAll == "1") {
            foreach ($this->donorlist as $donor) {
                $this->selectedDonor[$donor->id] = $donor->name;
            }
        } else {
            foreach ($this->donorlist as $donor) {
                $this->selectedDonor[$donor->id] = false;
            }
        }
    }

    public function render()
    {
        $this->get_allList();
        return view('livewire.bayar.steps.step1');
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
        }

        foreach ($this->ppzlist as $ppz) {
            $this->ppzarray[$ppz->id] = $ppz->name;
        }
    }
}
