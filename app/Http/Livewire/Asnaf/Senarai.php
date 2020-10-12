<?php

namespace App\Http\Livewire\Asnaf;

use Livewire\Component;
use App\models\Asnaf;
use Livewire\WithPagination;

class Senarai extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.asnaf.senarai', [
            'asnaf_list' => Asnaf::where('created_by', auth()->user()->id)
            ->orderBy('id','desc')
            ->paginate(5)
        ]);
    }
}
