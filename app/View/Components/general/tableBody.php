<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class tableBody extends Component
{
    public $colspan;

    public function __construct($colspan)
    {
        $this->colspan = $colspan;
    }

    public function render()
    {
        return view('components.general.table-body');
    }
}
