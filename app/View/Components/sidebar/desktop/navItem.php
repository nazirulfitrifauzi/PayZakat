<?php

namespace App\View\Components\sidebar\desktop;

use Illuminate\View\Component;

class navItem extends Component
{
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function render()
    {
        return view('components.sidebar.desktop.nav-item');
    }
}
