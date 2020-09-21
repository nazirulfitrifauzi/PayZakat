<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class infoCard extends Component
{
    public $bg;
    public $footerBg;
    public $title;
    public $value;
    public $footerRoute;
    public $footerText;

    public function __construct($bg, $footerBg, $title, $value, $footerRoute, $footerText)
    {
        $this->bg = $bg;
        $this->footerBg = $footerBg;
        $this->title = $title;
        $this->value = $value;
        $this->footerRoute = $footerRoute;
        $this->footerText = $footerText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.general.info-card');
    }
}
