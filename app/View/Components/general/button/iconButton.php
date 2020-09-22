<?php

namespace App\View\Components\general\button;

use Illuminate\View\Component;

class iconButton extends Component
{
    public $label;
    public $livewire;

    public function __construct($label, $livewire)
    {
        $this->label = $label;
        $this->livewire = $livewire;
    }

    public function render()
    {
        return view('components.general.button.icon-button');
    }
}
