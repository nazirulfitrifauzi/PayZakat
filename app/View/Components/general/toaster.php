<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class toaster extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.general.toaster');
    }
}
