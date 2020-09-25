<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class SenaraiEjen extends Component
{
    use WithPagination;

    public $sortField = 'name';
    public $sortAsc = true;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
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
        return view('livewire.admin.senarai-ejen',[
            'list' => User::where('name', 'like', '%' . $this->search . '%')
                    ->whereRole(1)
                    ->whereActive(1)
                    ->orderBy($this->sortField, ($this->sortAsc == true) ? 'asc' : 'desc')
                    ->paginate(2),
        ]);
    }
}
