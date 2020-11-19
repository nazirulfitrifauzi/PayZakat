<?php

namespace App\Http\Livewire;

use App\Models\VirtualAccountStatements;
use Livewire\Component;
use Livewire\WithPagination;

class Akaun extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.akaun', [
            'akaunStatement_list' => VirtualAccountStatements::where('created_by', auth()->user()->id)
                ->orderBy('id', 'desc')
                ->paginate(3)
        ]);
    }
}
