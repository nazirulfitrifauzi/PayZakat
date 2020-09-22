<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class tableHeader extends Component
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function render()
    {
        return view('components.general.table-header');
    }
}
