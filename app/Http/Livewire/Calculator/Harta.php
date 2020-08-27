<?php

namespace App\Http\Livewire\Calculator;

use Livewire\Component;

class Harta extends Component
{
    public $a1, $a2, $a3, $a4, $a5;
    public $b1, $b2, $b3, $b4, $b5, $b6, $b7;
    public $c1, $c2, $c3, $c4, $c5;
    public $d1, $d2;
    public $e;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'a1' => 'numeric',
            'a2' => 'numeric',
            'a3' => 'numeric',
            'a4' => 'numeric',
            'a5' => 'numeric',
            'b1' => 'numeric',
            'b2' => 'numeric',
            'b3' => 'numeric',
            'b4' => 'numeric',
            'b5' => 'numeric',
            'b6' => 'numeric',
            'b7' => 'numeric',
            'c1' => 'numeric',
            'c2' => 'numeric',
            'c3' => 'numeric',
            'c4' => 'numeric',
            'c5' => 'numeric',
            'd1' => 'numeric',
            'd2' => 'numeric',
            'e' => 'numeric',
        ]);
    }

    private function inputCheck($value)
    {
        return (!is_numeric($value)) ? 0 : $value;
    }

    public function render()
    {
        return view('livewire.calculator.harta', [
            'totalA' => $this->inputCheck($this->a1) + $this->inputCheck($this->a2) + $this->inputCheck($this->a3) + $this->inputCheck($this->a4) + $this->inputCheck($this->a5),
            'totalB' => $this->inputCheck($this->b1) + $this->inputCheck($this->b2) + $this->inputCheck($this->b3) + $this->inputCheck($this->b4) + $this->inputCheck($this->b5) + $this->inputCheck($this->b6) + $this->inputCheck($this->b7),
            'totalC' => $this->inputCheck($this->c1) + $this->inputCheck($this->c2) + $this->inputCheck($this->c3) + $this->inputCheck($this->c4) + $this->inputCheck($this->c5),
            'totalD' => $this->inputCheck($this->d1) + $this->inputCheck($this->d2),
            'totalE' => $this->inputCheck($this->e),
        ]);
    }
}
