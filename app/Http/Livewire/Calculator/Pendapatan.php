<?php

namespace App\Http\Livewire\Calculator;

use App\Models\Nisab;
use App\Models\State;
use Livewire\Component;

class Pendapatan extends Component
{
    public $a1, $a2, $a3, $a4;
    public $b11 = 12936, $b12, $b13, $b14, $b15, $b16;
    public $b21, $b22, $b23;
    public $c;
    public $e;
    public $negeri;
    public $nisab;

    public function mount()
    {
        $this->negeri   = State::all();
        $this->nisab    = '';
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'a1'    => 'numeric',
            'a2'    => 'numeric',
            'a3'    => 'numeric',
            'a4'    => 'numeric',
            'b12'   => 'numeric',
            'b13'   => 'numeric',
            'b14'   => 'numeric',
            'b15'   => 'numeric',
            'b16'   => 'numeric',
            'b21'   => 'numeric',
            'b22'   => 'numeric',
            'b23'   => 'numeric',
            'c'     => 'numeric',
            'e'     => 'numeric',
        ]);
    }

    private function inputCheck($value) {
        return (!is_numeric($value)) ? 0 : $value;
    }

    public function render()
    {
        return view('livewire.calculator.pendapatan',[
            'totalA'        => $this->inputCheck($this->a1) + $this->inputCheck($this->a2) + $this->inputCheck($this->a3) + $this->inputCheck($this->a4),
            'totalB1'       => $this->b11 + ($this->b12 * 4848) + ($this->b13 * 2172) + ($this->b14 * 7104) + ($this->b15 * 4008) + ($this->b16 * 1740),
            'totalB2'       => ($this->b21 * 2688) + ($this->b22 * 2664) + ($this->b23 * 3480),
            'totalC'        => $this->inputCheck($this->c),
            'totalE'        => $this->inputCheck($this->e),
            'nisabNegeri'   => Nisab::where('year', now()->format('Y'))->where('state_id', $this->nisab)->value('value'),
        ]);
    }
}
