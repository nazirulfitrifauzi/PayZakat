<?php

namespace App\View\Components\sidebar\desktop;

use Illuminate\View\Component;

class childNavItem extends Component
{
    public $alpine;
    public $label;

    public function __construct($alpine, $label)
    {
        $this->alpine = $alpine;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.sidebar.desktop.child-nav-item');
    }
}
