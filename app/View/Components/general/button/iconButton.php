<?php

namespace App\View\Components\general\button;

use Illuminate\View\Component;

class iconButton extends Component
{
    public $href;
    public $target;
    public $label;
    public $color;
    public $livewire;

    public function __construct($href, $target, $label, $color, $livewire)
    {
        $this->href = $href;
        $this->target = $target;
        $this->label = $label;
        $this->color = $color;
        $this->livewire = $livewire;
    }

    public function render()
    {
        return view('components.general.button.icon-button');
    }
}
