<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;

class SenaraiPengguna extends Component
{
    public function render()
    {
        return view('livewire.admin.senarai-pengguna', [
            'list' => User::paginate(2),
        ]);
    }
}
