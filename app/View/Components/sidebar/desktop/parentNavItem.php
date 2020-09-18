<?php

namespace App\View\Components\sidebar\desktop;

use Illuminate\View\Component;

class parentNavItem extends Component
{
    public $label;

    public function __construct($label)
    {
        $this->label = $label;
    }

    public function render()
    {
        return view('components.sidebar.desktop.parent-nav-item');
    }
}
