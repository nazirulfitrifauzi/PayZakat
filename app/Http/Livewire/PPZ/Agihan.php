<?php

namespace App\Http\Livewire\Ppz;

use App\Models\PPZ;
use App\Models\Agihan as AgihanAsnaf;
use Livewire\Component;
use Livewire\WithPagination;

class Agihan extends Component
{
    use WithPagination;

    public $year;
    public $ppz_id = "";
    public $value;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($year)
    {
        $this->year = $year;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'value'     => 'required|numeric',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'value'     => 'required|numeric',
        ]);

        AgihanAsnaf::create([
            'year'          => $this->year,
            'ppz_id'        => auth()->user()->ppz_id,
            'value'         => $this->value,
            'created_by'    => auth()->user()->id,
            'created_at'    => now(),
        ]);

        $this->ppz_id = "";
        $this->value = "";
    }

    public function render()
    {
        return view('livewire.ppz.agihan', [
            'ppz' => AgihanAsnaf::where('year', $this->year)
                ->where('ppz_id', auth()->user()->ppz_id)
                ->orderBy('ppz_id', 'ASC')
                ->get(),
            'PPZData' => PPZ::whereNotIn('id', function ($query) {
                $query->select('ppz_id')->from('agihan_asnafs')->where('year', $this->year);
            })
                ->where('id', auth()->user()->ppz_id)
                ->get(),
        ]);
    }
}
