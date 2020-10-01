<?php

namespace App\Http\Livewire\Admin;

use App\Models\Nisab as ModelsNisab;
use App\Models\State;
use Livewire\Component;
use Livewire\WithPagination;

class Nisab extends Component
{
    use WithPagination;

    public $year;
    public $state_id = "";
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

        ModelsNisab::create([
            'year'          => $this->year,
            'state_id'      => $this->state_id,
            'value'         => $this->value,
            'created_by'    => auth()->user()->id,
            'created_at'    => now(),
        ]);

        $this->state_id = "";
        $this->value = "";
    }

    public function render()
    {
        return view('livewire.admin.nisab', [
            'state' => ModelsNisab::where('year', $this->year)
                                    ->orderBy('state_id', 'ASC')
                                    ->get(),
            'stateNisab' => State::whereNotIn('id', function ($query) {
                                $query->select('state_id')->from('nisab')->where('year', $this->year);
                            })->get(),
        ]);
    }
}
