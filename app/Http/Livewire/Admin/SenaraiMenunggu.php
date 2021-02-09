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
    public $remarks;

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

    public function finalResult($user_id, $role, $status)
    {
        $this->validate([
            'remarks'  => 'required|max:255',
        ]);

        if ($status == 'terima') {
            User::whereId($user_id)
                ->update([
                    'active' => 1,
                    'screen_remarks' => $this->remarks
                ]);

            session()->flash('type', 'success');
            session()->flash('title', 'Berjaya!');
            if ($role == 1) {
                session()->flash('message', 'Permohonan Ejen telah diterima.');
            } else {
                session()->flash('message', 'Permohonan PPZ telah diterima.');
            }
        } elseif ($status == 'tolak') {
            User::whereId($user_id)
                ->update([
                    'active' => 2,
                    'screen_remarks' => $this->remarks
                ]);

            session()->flash('type', 'success');
            session()->flash('title', 'Berjaya!');
            if ($role == 1) {
                session()->flash('message', 'Permohonan Ejen telah diterima.');
            } else {
                session()->flash('message', 'Permohonan PPZ telah diterima.');
            }
        }

        return redirect()->to('/admin/pengguna/senarai-menunggu');
    }

    public function render()
    {
        return view('livewire.admin.senarai-menunggu', [
            'list' => User::where('name', 'like', '%' . $this->search . '%')
                ->whereIn('role', [1, 2, 3])
                ->whereActive(0)
                ->orderBy($this->sortField, ($this->sortAsc == true) ? 'asc' : 'desc')
                ->paginate(10),
            'sanctionList' => SanctionListWebsite::all(),
        ]);
    }
}
