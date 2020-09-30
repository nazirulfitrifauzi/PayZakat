<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class steps extends Component
{
    public $steps, $totalsteps, $stepstatus;

    public function __construct($steps = [], $stepstatus = [])
    {
        $this->steps = $steps;
        $this->totalsteps = count($this->steps);
        $this->stepstatus = $stepstatus;
    }

    public function render()
    {
        return view('components.general.steps');
    }
}
