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
    public $sortField = 'state_id';
    public $sortAsc = true;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($year)
    {
        $this->year = $year;
    }

    public function sortBy($field)
    {
        if ($this->sortField == $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.admin.nisab', [
            'state' => ModelsNisab::where('year', $this->year)->get(),
            'stateNisab' => State::whereNotIn('id', function ($query) {
                                $query->select('state_id')->from('nisab')->where('year', $this->year);
                            })->get(),
        ]);
    }
}
