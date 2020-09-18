<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SubmitCancelButton extends Component
{
    public $cancel, $cancelpage;
    public $submit;

    public function __construct($cancel, $submit, $cancelpage=null)
    {
        $this->cancel = $cancel;
        $this->cancelpage = (is_null($cancelpage)) ? route('home') : $cancelpage;
        $this->submit = $submit;
    }

    public function render()
    {
        return view('components.form.submit-cancel-button');
    }
}
