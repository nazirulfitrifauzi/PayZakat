<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class grid extends Component
{
    public $mobile;
    public $gap;
    public $sm;
    public $lg;

    public function __construct($mobile, $gap, $sm, $lg)
    {
        $this->mobile = $mobile;
        $this->gap = $gap;
        $this->sm = $sm;
        $this->lg = $lg;
    }

    public function render()
    {
        return view('components.general.grid');
    }
}
