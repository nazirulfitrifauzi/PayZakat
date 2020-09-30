<?php

namespace App\View\Components\general\button;

use Illuminate\View\Component;

class btn extends Component
{
    public $color, $class;

    public function __construct($color = "gray")
    {
        $this->color = $color;
        $this->class = "cursor-pointer inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md transition ease-in-out duration-150 text-white bg-" . $this->color . "-500 hover:bg-" . $this->color . "-400 focus:outline-none active:border-" . $this->color . "-700 active:bg-" . $this->color . "-700";
    }

    public function render()
    {
        return view('components.general.button.btn');
    }
}
