<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;

class SenaraiDitolak extends Component
{
    public function render()
    {
        return view('livewire.admin.senarai-ditolak', [
            'list' => User::whereRole(1)->whereActive(2)->paginate(2),
        ]);
    }
}
