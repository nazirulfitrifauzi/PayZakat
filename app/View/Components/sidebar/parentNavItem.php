<?php

namespace App\View\Components\sidebar;

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
        return view('components.sidebar.parent-nav-item');
    }
}
