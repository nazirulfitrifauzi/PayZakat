<?php

namespace App\Http\Livewire\Calculator;

use Livewire\Component;

class Asb extends Component
{
    public $a1, $a2;
    public $dividenA;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'a1' => 'numeric',
            'a2' => 'numeric',
        ]);
    }

    private function inputCheck($value)
    {
        return (!is_numeric($value)) ? 0 : $value;
    }

    public function render()
    {
        $dividenA = 0.745 * $this->inputCheck($this->a2);
        return view('livewire.calculator.asb', [
            'dividen' => $dividenA,
            'totalA' => $dividenA + $this->inputCheck($this->a1),
        ]);
    }
}
