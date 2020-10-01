<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class modal extends Component
{
    public $title;
    public $submitLabel;
    public $submit;
    public $cancel;

    public function __construct($title, $submit, $cancel, $submitLabel)
    {
        $this->title = $title;
        $this->submitLabel = $submitLabel;
        $this->submit = $submit;
        $this->cancel = $cancel;
    }

    public function render()
    {
        return view('components.general.modal');
    }
}
