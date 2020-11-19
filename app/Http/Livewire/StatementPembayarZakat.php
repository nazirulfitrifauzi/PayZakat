<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AccountZakatStatements;

class StatementPembayarZakat extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.statement-pembayar-zakat', [
            'statement_list' => AccountZakatStatements::where('created_by', auth()->user()->id)
                ->orderBy('id', 'desc')
                ->paginate(5)
        ]);
    }
}
