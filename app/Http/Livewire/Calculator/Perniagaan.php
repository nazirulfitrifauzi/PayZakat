<?php

namespace App\Http\Livewire\Calculator;

use Livewire\Component;

class Perniagaan extends Component
{
    public $a1, $a2, $a3;
    public $b1, $b2, $b3;

    public function render()
    {
        $newA1 = ($this->a1 == '') ? 0 : $this->a1;
        $newA2 = ($this->a2 == '') ? 0 : $this->a2;
        $newA3 = ($this->a3 == '') ? 0 : $this->a3;

        $newB1 = ($this->b1 == '') ? 0 : $this->b1;
        $newB2 = ($this->b2 == '') ? 0 : $this->b2;
        $newB3 = ($this->b3 == '') ? 0 : $this->b3;

        return view('livewire.calculator.perniagaan', [
            'totalA' => $newA1 + $newA2 + $newA3,
            'totalB' => $newB1 + $newB2 + $newB3,
        ]);
    }
}
