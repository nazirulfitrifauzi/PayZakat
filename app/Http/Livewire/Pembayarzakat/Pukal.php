<?php

namespace App\Http\Livewire\Pembayarzakat;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Imports\CustomerImport;
use App\Models\Customers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class Pukal extends Component
{
    use WithFileUploads;

    public $dokumen=null;

    public function updatedDokumen()
    {
        $this->validate([
            'dokumen' => 'file|max:3072|mimes:xlsx', // 3MB Max | Xlsx only
        ]);
    }

    public function save() 
    {
        $customercollection = Excel::toArray(new CustomerImport, $this->dokumen);
        if(!empty($customercollection)) // Check collection not empty
        {
            foreach($customercollection as $customerlist)
            {
                if(count($customerlist) > 1) // Check file content exists, not only field name row else consider as empty
                {
                    foreach($customerlist as $row => $customers) 
                    {
                        if($row > 0) // Skip field name
                        {
                            foreach($customers as $col => $value)
                            {
                                if($col < 21) // Only loop until 20
                                {
                                    if($col == 4) // Convert gender L,P to 1,2
                                    {
                                        $value = ($value == "L") ? 1 : 2;
                                    }

                                    $savecustomer[$this->fieldlibrary()[$col]] = $value; // Collecttion
                                }
                            }

                            foreach($this->autogenfield() as $field => $value)
                            {
                                $savecustomer[$field] = $value; // Add collection with auto gen values
                            }
                            // dd($savecustomer);
                            $save = Customers::create($savecustomer); // Save current row
                        }
                    }

                    session()->flash('type', 'success');
                    session()->flash('title', 'Berjaya!');
                    session()->flash('message', 'Muat naik secara pukal telah berjaya. Sila periksa di Senarai Pembayar Zakat.');
                    return redirect()->route('pembayar.pukal');
                }
                else
                {
                    session()->flash('type', 'warning');
                    session()->flash('title', 'Perhatian!');
                    session()->flash('message', 'Tiada data untuk di muat naik.');
                    return redirect()->route('pembayar.pukal');
                }
            }
        }

        $this->dokumen = null;
    }
    
    public function render()
    {
        return view('livewire.pembayarzakat.pukal');
    }

    private function fieldlibrary()
    {
        return [
            '0' => 'name',
            '1' => 'ic_no',
            '2' => 'old_ic',
            '3' => 'birth_date',
            '4' => 'gender_id',
            '5' => 'state_origin_id',
            '6' => 'mastautin_flag',
            '7' => 'mastautin_year',
            '8' => 'address1',
            '9' => 'address2',
            '10' => 'address3',
            '11' => 'postcode',
            '12' => 'town',
            '13' => 'state_id',
            '14' => 'phone_no',
            '15' => 'email',
            '16' => 'employer_name',
            '17' => 'office_no',
            '18' => 'position',
            '19' => 'employee_no',
            '20' => 'fav_ppz_id',
        ];
    }

    private function autogenfield() 
    {
        return [
            'uuid' => (string) Str::uuid(),
            'agent_id' => auth()->user()->agentinfo->id,
            'created_by' => auth()->user()->id,
            'updated_by' => auth()->user()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
