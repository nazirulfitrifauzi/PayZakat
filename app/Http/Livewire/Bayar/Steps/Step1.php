<?php

namespace App\Http\Livewire\Bayar\Steps;

use Livewire\Component;
use App\Models\PPZ;
use App\Models\Customers;

class Step1 extends Component
{
    public $searchdonor = "", $searchresult = [];
    public $ppzlist = [];

    public function mount()
    {
        $this->ppzlist = PPZ::all();
    }

    public function exec_searchdonor()
    {
        if ($this->searchdonor != "") {
            $this->searchresult = Customers::where('ic_no', 'like', '%' . $this->searchdonor . '%')->get();
        } else {
            $this->searchresult = [];
        }
    }

    public function render()
    {
        $this->exec_searchdonor();
        return view('livewire.bayar.steps.step1');
    }
}
