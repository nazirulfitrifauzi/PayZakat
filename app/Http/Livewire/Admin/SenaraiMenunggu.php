<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;

class SenaraiMenunggu extends Component
{
    // public $user_id;

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
            'list' => User::whereRole(1)->whereActive(0)->paginate(10),
        ]);
    }
}
