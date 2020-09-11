<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SubmitCancelButton extends Component
{
    public $cancel;
    public $submit;

    public function __construct($cancel, $submit)
    {
        $this->cancel = $cancel;
        $this->submit = $submit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.submit-cancel-button');
    }
}
