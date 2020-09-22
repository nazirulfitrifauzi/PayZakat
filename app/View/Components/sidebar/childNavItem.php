<?php

namespace App\View\Components\sidebar;

use Illuminate\View\Component;

class childNavItem extends Component
{
    public $route;
    public $label;
    public $uri;

    public function __construct($route, $label, $uri)
    {
        $this->route = $route;
        $this->label = $label;
        $this->uri = $uri;
    }

    public function render()
    {
        return view('components.sidebar.child-nav-item');
    }
}
