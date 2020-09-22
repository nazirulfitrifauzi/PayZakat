<?php

namespace App\View\Components\sidebar;

use Illuminate\View\Component;

class parentNavItem extends Component
{
    public $label;
    public $uri;

    public function __construct($label, $uri)
    {
        $this->label = $label;
        $this->uri = $uri;
    }

    public function render()
    {
        return view('components.sidebar.parent-nav-item');
    }
}
