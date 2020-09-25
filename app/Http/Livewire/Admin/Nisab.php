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
        $state_id = State::where('description', 'like', '%' . $this->search . '%')->pluck('id');

        return view('livewire.admin.nisab', [
            'list' => ModelsNisab::whereIn('state_id', $state_id)
                    ->where('year', $this->year)
                    ->orderBy($this->sortField, ($this->sortAsc == true) ? 'asc' : 'desc')
                    ->paginate(7),
        ]);
    }
}
