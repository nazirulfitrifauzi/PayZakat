<?php

namespace App\View\Components\sidebar;

use Illuminate\View\Component;

class CalcChildNavItem extends Component
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
        return view('components.sidebar.calc-child-nav-item');
    }
}
