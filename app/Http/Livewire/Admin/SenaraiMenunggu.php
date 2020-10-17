<?php

namespace App\Http\Livewire\Admin;

use App\Models\SanctionListWebsite;
use App\Models\Screening;
use App\User;
use Illuminate\Support\Str;
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

    public function screenResult($user_id, $screen_id, $status)
    {

        return Screening::create([
            'uuid'          => (string) Str::uuid(),
            'user_id'       => $user_id,
            'sanction_id'   => $screen_id,
            'status'        => $status == "pass" ? 1 : 0,
            'created_by'    => auth()->user()->id,
        ]);
    }

    public function finalResult($user_id, $status)
    {
        if ($status == 'terima')
        {
            $user = User::find($user_id);
            $user->active = 1;
            $user->save();

            session()->flash('type', 'success');
            session()->flash('title', 'Berjaya!');
            session()->flash('message', 'Permohonan Ejen telah diterima.');
        }
        elseif ($status == 'tolak')
        {
            $user = User::find($user_id);
            $user->active = 2;
            $user->save();

            session()->flash('type', 'success');
            session()->flash('title', 'Berjaya!');
            session()->flash('message', 'Permohonan ejen telah ditolak.');
        }

        return redirect()->to('/admin/senarai-menunggu');
    }

    public function render()
    {
        return view('livewire.admin.senarai-menunggu',[
            'list' => User::where('name', 'like', '%' . $this->search . '%')
                            ->whereRole(1)
                            ->whereActive(0)
                            ->orderBy($this->sortField, ($this->sortAsc == true) ? 'asc' : 'desc')
                            ->paginate(10),
            'sanctionList' => SanctionListWebsite::all(),
        ]);
    }
}
