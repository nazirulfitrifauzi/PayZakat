<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class modal extends Component
{
    public $title;
    public $submit;
    public $cancel;

    public function __construct($title, $submit, $cancel)
    {
        $this->title = $title;
        $this->submit = $submit;
        $this->cancel = $cancel;
    }

    public function render()
    {
        return view('components.general.modal');
    }
}
