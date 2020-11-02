<?php

namespace App\Http\Livewire\Admin;

use App\Models\State;
use App\Models\ZakatRefunds;
use Livewire\Component;

class Test extends Component
{
    public function mount($year)
    {
        $this->year = $year;
    }

    public function render()
    {
        return view('livewire.admin.test', [
            'state' => ZakatRefunds::where('year', $this->year)
                ->orderBy('ppz_id', 'ASC')
                ->get(),
            'stateNisab' => State::whereNotIn('id', function ($query) {
                $query->select('ppz_id')->from('zakat_refunds')->where('year', $this->year);
            })->get(),
        ]);
    }
}
