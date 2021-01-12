<?php

namespace App\Http\Livewire\Ppz;

use Livewire\Component;
use App\Models\State;
use App\Models\Nisab as ModelsNisab;


class Nisab extends Component
{

    public $year;
    public $value;
    public $state_id = "";



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
            'state_id'      => auth()->user()->ref_id,
            'value'         => $this->value,
            'created_by'    => auth()->user()->id,
            'created_at'    => now(),
        ]);

        $this->state_id = "";
        $this->value = "";
    }

    // public function render()
    // {
    //     return view('livewire.ppz.nisab');
    // }
    public function render()
    {
        return view('livewire.ppz.nisab', [
            'state' => ModelsNisab::where('year', $this->year)
                ->where('state_id', auth()->user()->ref_id)
                ->get(),
            'stateNisab' => State::whereNotIn('id', function ($query) {
                $query->select('state_id')->from('nisab')->where('year', $this->year);
            })
                ->where('id', auth()->user()->ref_id)
                ->get(),
        ]);
    }
}
