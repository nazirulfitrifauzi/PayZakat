<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customers;

class Pembayar extends Component
{   
    public $customer_list;

    public function mount()
    {
        $this->get_customer();
    }

    public function get_customer($id=null) {
        if(!is_null($id)) {
            $this->customer_list = Customers::where('agent_id',auth()->user()->agentInfo->user_id)
                                ->orderBy('updated_at','desc')
                                ->paginate(5);
        }
    }

    public function render()
    {
        return view('livewire.pembayar');
    }
}
