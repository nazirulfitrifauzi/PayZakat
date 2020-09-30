<?php

namespace App\Http\Livewire\Bayar;

use Livewire\Component;

class Index extends Component
{
    public $stepstatus = [
        'step1' => 'current',
        'step2' => 'upcoming',
        'step3' => 'upcoming',
    ];

    public $navigate;

    public function mount()
    {
        //
    }

    public function navigation($current, $next, $flow)
    {
        if ($flow == "next") {
            $this->next($current, $next);
        } else {
            $this->prev($current, $next);
        }
    }

    private function next($current, $next)
    {
        $this->stepstatus[$current] = "completed";
        $this->stepstatus[$next] = "current";
    }

    private function prev($current, $next)
    {
        $this->stepstatus[$current] = "upcoming";
        $this->stepstatus[$next] = "current";
    }

    public function render()
    {
        return view('livewire.bayar.index');
    }
}
