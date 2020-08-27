<?php

namespace App\Http\Livewire\Calculator;

use Livewire\Component;

class Perniagaan extends Component
{
    public $a1, $a2, $a3;
    public $b1, $b2, $b3;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'a1' => 'numeric',
            'a2' => 'numeric',
            'a3' => 'numeric',
            'b1' => 'numeric',
            'b2' => 'numeric',
            'b3' => 'numeric'
        ]);
    }

    private function inputCheck($value) {
        return (!is_numeric($value)) ? 0 : $value;
    }

    public function render()
    {
        return view('livewire.calculator.perniagaan', [
            'totalA' => $this->inputCheck($this->a1) + $this->inputCheck($this->a2) + $this->inputCheck($this->a3),
            'totalB' => $this->inputCheck($this->b1) + $this->inputCheck($this->b2) + $this->inputCheck($this->b3)
        ]);
    }
}
