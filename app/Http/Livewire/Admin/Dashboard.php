<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $pendingAgent;
    public $currentAgent;
    public $rejectedAgent;

    public function mount()
    {
        // count not active (0) agent from registration
        $this->pendingAgent = User::whereRole(1)->whereActive(0)->count();
        // count active (1) agent
        $this->currentAgent = User::whereRole(1)->whereActive(1)->count();
        // count rejected (2) agent
        $this->rejectedAgent = User::whereRole(1)->whereActive(2)->count();
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
