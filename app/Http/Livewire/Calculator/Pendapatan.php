<?php

namespace App\Http\Livewire\Calculator;

use Livewire\Component;

class Pendapatan extends Component
{
    public $a1, $a2, $a3, $a4;
    public $b11 = 12936, $b12, $b13, $b14, $b15, $b16;
    public $b21, $b22, $b23;
    public $c;

    public function render()
    {
        return view('livewire.calculator.pendapatan',[
            'totalA' => $this->a1 + $this->a2 + $this->a3 + $this->a4,
            'totalB1' => $this->b11 + ($this->b12 * 4848) + ($this->b13 * 2172) + ($this->b14 * 7104) + ($this->b15 * 4008) + ($this->b16 * 1740),
            'totalB2' => ($this->b21 * 2688) + ($this->b22 * 2664) + ($this->b23 * 3480),
            'totalC' => $this->c,
        ]);
    }
}
