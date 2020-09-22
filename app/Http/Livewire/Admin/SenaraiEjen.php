<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;

class SenaraiEjen extends Component
{
    public function render()
    {
        return view('livewire.admin.senarai-ejen',[
            'list' => User::whereRole(1)->whereActive(1)->paginate(2),
        ]);
    }
}
