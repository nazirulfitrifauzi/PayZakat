<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;
use App\Charts\GlobalChart;
use Carbon\Carbon;


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
        
        $pendingAgent  =  User::whereRole(1)->whereActive(0)->count();
        $currentAgent  =  User::whereRole(1)->whereActive(1)->count();
        $rejectedAgent =  User::whereRole(1)->whereActive(2)->count();

         $borderColors = [
            "rgba(255, 205, 86, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 99, 132, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 205, 86, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"
        ];

        //Bar Chart
        $UserBarChart = new GlobalChart;
        $UserBarChart->labels(['Menunggu Pengesahan', 'Ejen Aktif', 'Ejen yang ditolak']);
        $UserBarChart->dataset('Menunggu Pengesahan', 'bar', [$pendingAgent,0,0])
            ->color("#f6e05e")
            ->backgroundcolor("#f6e05e");
        $UserBarChart->dataset('Ejen Aktif', 'bar', [0,$currentAgent,0])
            ->color("#68d391")
            ->backgroundcolor("#68d391");
        $UserBarChart->dataset('Ejen yang ditolak', 'bar', [0,0,$rejectedAgent])
            ->color("#fc8181")
            ->backgroundcolor("#fc8181");

        //Doughnut Chart
        $UserDoughnutChart = new GlobalChart;
        $UserDoughnutChart->labels(['Menunggu Pengesahan', 'Ejen Aktif', 'Ejen yang ditolak']);
        $UserDoughnutChart->dataset('Menunggu Pengesahan', 'doughnut', [$pendingAgent,$currentAgent,$rejectedAgent])
            ->color($borderColors)
            ->backgroundcolor($fillColors);
        

        return view('livewire.admin.dashboard', [ 
            'UserBarChart' => $UserBarChart,
            'UserDoughnutChart' => $UserDoughnutChart,
            
            ]);
    }
}
