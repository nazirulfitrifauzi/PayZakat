<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class SenaraiMenunggu extends Component
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

    public function approve($user_id)
    {
        $user = User::find($user_id);
        $user->active = 1;
        $user->save();

        session()->flash('type', 'success');
        session()->flash('title', 'Berjaya!');
        session()->flash('message', 'Permohonan Ejen telah diterima.');
        return redirect()->to('/admin/senarai-menunggu');
    }

    public function reject($user_id)
    {
        $user = User::find($user_id);
        $user->active = 2;
        $user->save();

        session()->flash('type', 'success');
        session()->flash('title', 'Berjaya!');
        session()->flash('message', 'Permohonan ejen telah ditolak.');
        return redirect()->to('/admin/senarai-menunggu');
    }

    public function render()
    {
        return view('livewire.admin.senarai-menunggu',[
            'list' => User::where('name', 'like', '%' . $this->search . '%')
                            ->whereRole(1)
                            ->whereActive(0)
                            ->orderBy($this->sortField, ($this->sortAsc == true) ? 'asc' : 'desc')
                            ->paginate(2),
        ]);
    }
}
