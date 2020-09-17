<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customers;
use Livewire\WithPagination;

class Pembayar extends Component
{   
    use WithPagination;
    public function render()
    {
        return view('livewire.pembayar', [
            'customer_list' => Customers::where('agent_id',auth()->user()->agentInfo->user_id)
            ->orderBy('created_at','desc')
            ->paginate(5)
        ]);
    }
}
