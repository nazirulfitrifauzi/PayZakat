<?php

namespace App\Http\Livewire\Pembayarzakat;

use Livewire\Component;
use App\Models\Customers;
use Livewire\WithPagination;

class Senarai extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.pembayarzakat.senarai', [
            'customer_list' => Customers::where('agent_id',auth()->user()->agentInfo->user_id)
            ->orderBy('created_at','desc')
            ->paginate(5)
        ]);
    }
}
