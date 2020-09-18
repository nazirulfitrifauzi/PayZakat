<?php

namespace App\View\Components\sidebar\desktop;

use Illuminate\View\Component;

class navItem extends Component
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
        return view('components.sidebar.desktop.nav-item');
    }
}
