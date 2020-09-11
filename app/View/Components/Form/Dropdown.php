<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $label;
    public $value;

    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.form.dropdown');
    }
}
