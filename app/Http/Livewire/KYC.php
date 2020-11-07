<?php

namespace App\Http\Livewire;

use App\Models\KYC as ModelsKYC;
use Livewire\Component;
use Livewire\WithFileUploads;

class KYC extends Component
{

    use WithFileUploads;

    public $uuid;
    public $kycf;
    public $kycb;

    public function mount($uuid)
    {
        $this->uuid = $uuid;
    }


    public function updatedKycf()
    {
        $this->validate([
            'kycf' => 'image|max:1024', // 1MB Max 12288
        ]);
    }

    public function updatedKycb()
    {
        $this->validate([
            'kycb' => 'image|max:1024', // 1MB Max
        ]);
    }

    public function upload()
    {
        $this->validate([
            'kycf' => 'image|max:1024', // 1MB Max
            'kycb' => 'image|max:1024', // 1MB Max
        ]);

        // $urlf = $this->kycf->store('customerKyc');
        // $urlb = $this->kycb->store('customerKyc');

        ModelsKYC::create([
            'uuid'             => $this->uuid,
            'kyc_front'        => $this->kycf->store('customerKyc'),
            'kyc_back'         => $this->kycb->store('customerKyc'),
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);

        session()->flash('message', 'Sila tunggu pengesahan daripada pihak Admin');
        return redirect()->to('/login');
    }
}
