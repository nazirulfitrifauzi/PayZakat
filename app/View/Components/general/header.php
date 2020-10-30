<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class header extends Component
{
    public $bgimg;
    
    public function __construct($bgimg)
    {
        $this->bgimg = $bgimg; 
    }

    
    public function render()
    {
        return view('components.general.header');
    }
}
