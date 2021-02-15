<?php

namespace App\Http\Livewire;

use App\Models\KYCAmil as ModelKYC;
use Livewire\Component;
use Livewire\WithFileUploads;

class KycAmil extends Component
{

    use WithFileUploads;

    public $uuid;
    public $kycd;

    public function mount($uuid)
    {
        $this->uuid = $uuid;
    }


    public function updatedKycd()
    {
        $this->validate([
            'kycd' => 'file|max:3072|mimes:xlsx,docx,pdf,txt', // 3MB Max 
        ]);
    }
    public function upload()
    {
        $this->validate([
            'kycd' => 'file|max:3072|mimes:xlsx,docx,pdf,txt', // 3MB Max 
        ]);


        ModelKYC::create([
            'uuid'             => $this->uuid,
            'kycA_document'    => $this->kycd->store('AmilKyc'),
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);

        session()->flash('message', 'Sila tunggu pengesahan daripada pihak Admin');
        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.kyc-amil');
    }
}
