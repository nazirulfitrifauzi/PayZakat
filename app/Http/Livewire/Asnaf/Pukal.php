<?php

namespace App\Http\Livewire\Asnaf;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Imports\CustomerImport;
use App\Models\Asnaf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class Pukal extends Component
{
  use WithFileUploads;

  public $dokumen = null;
  public $ic = null;

  public function updatedDokumen()
  {
    $this->validate([
      'dokumen' => 'file|max:3072|mimes:xlsx', // 3MB Max | Xlsx only
    ]);
  }

  public function save()
  {
    $customercollection = Excel::toArray(new CustomerImport, $this->dokumen);
    if (!empty($customercollection)) // Check collection not empty
    {
      foreach ($customercollection as $customerlist) {
        if (count($customerlist) > 1) // Check file content exists, not only field name row else consider as empty
        {
          foreach ($customerlist as $row => $customers) {
            if ($row > 0) // Skip field name
            {
              foreach ($customers as $col => $value) {
                if ($col <= 11) // Only loop until 11
                {
                  if ($col == 1) // Get new ic number into variable
                  {
                    $this->ic = $value;
                  }

                  $savecustomer[$this->fieldlibrary()[$col]] = $value; // Collection
                }
              }

              foreach ($this->autogenfield() as $field => $value) {
                $savecustomer[$field] = $value; // Add collection with auto gen values
              }

              $save = Asnaf::create($savecustomer); // Save current row
            }
          }

          session()->flash('type', 'success');
          session()->flash('title', 'Berjaya!');
          session()->flash('message', 'Muat naik secara pukal telah berjaya. Sila periksa di Senarai Asnaf.');
          return redirect()->route('asnaf.pukal');
        } else {
          session()->flash('type', 'warning');
          session()->flash('title', 'Perhatian!');
          session()->flash('message', 'Tiada data untuk di muat naik.');
          return redirect()->route('asnaf.pukal');
        }
      }
    }

    $this->dokumen = null;
  }

  public function render()
  {
    return view('livewire.asnaf.pukal');
  }

  private function fieldlibrary()
  {
    return [
      '0' => 'name',
      '1' => 'ic_no',
      '2' => 'household_income',
      '3' => 'dependents',
      '4' => 'phone_no',
      '5' => 'email',
      '6' => 'address1',
      '7' => 'address2',
      '8' => 'address3',
      '9' => 'town',
      '10' => 'postcode',
      '11' => 'state_id',
    ];
  }

  private function autogenfield()
  {
    return [
      'uuid' => (string) Str::uuid(),
      // 'agent_id' => auth()->user()->agentinfo->id, might need to add in the table for loggin purposes
      'created_by' => auth()->user()->id,
      'updated_by' => auth()->user()->id,
      'created_at' => now(),
      'updated_at' => now(),
    ];
  }
}
