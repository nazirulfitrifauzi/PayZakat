<?php

namespace App\Http\Livewire\Admin;

use App\Models\PPZ;
use App\Models\ZakatRefunds as ZakatR;
use Livewire\Component;
use Livewire\WithPagination;

class ZakatRefunds extends Component
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

        ZakatR::create([
            'year'          => $this->year,
            'ppz_id'        => $this->ppz_id,
            'value'         => $this->value,
            'created_by'    => auth()->user()->id,
            'created_at'    => now(),
        ]);

        $this->ppz_id = "";
        $this->value = "";
    }

    public function render()
    {
        return view('livewire.admin.zakat-refunds', [
            'ppz' => ZakatR::where('year', $this->year)
                ->orderBy('ppz_id', 'ASC')
                ->get(),
            'PPZData' => PPZ::whereNotIn('id', function ($query) {
                $query->select('ppz_id')->from('zakat_refunds')->where('year', $this->year);
            })->get(),
        ]);
    }
}
