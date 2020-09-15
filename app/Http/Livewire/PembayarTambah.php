<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State;


class PembayarTambah extends Component
{   
    public $negeri;

    public function mount()
    {
        $this->negeri = State::all();
    }

    public function render()
    {
        return view('livewire.pembayar-tambah');
    }
}
