<?php

namespace App\Http\Livewire\Calculator;

use Livewire\Component;

class Kwsp extends Component
{
    public $a1;
    public $b1;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'a1' => 'numeric',
            'b1' => 'numeric',
        ]);
    }

    private function inputCheck($value)
    {
        return (!is_numeric($value)) ? 0 : $value;
    }

    public function render()
    {
        return view('livewire.calculator.kwsp', [
            'totalA' => $this->inputCheck($this->a1),
            'totalB' => $this->inputCheck($this->b1),
        ]);
    }
}
