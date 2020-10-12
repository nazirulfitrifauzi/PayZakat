<?php

namespace App\Http\Livewire\Asnaf;

use Livewire\Component;
use App\Models\State;
use App\Models\Asnaf;
use Illuminate\Support\Str;

class Tambah extends Component
{
    public $asnaf_id;
    public $negeri;
    public  $uuid,              $name,              $ic_no,          $household_income,  $dependents,        $phone_no,         $email, 
            $address1,          $address2,          $address3,      $town,              $postcode,          $state_id,
            $recommender_flag,  $recommender_name,   $recommender_ic, $recommender_phone,  $recommender_email,
            $created_by,        $updated_by,        $deleted_by,    $created_at,        $updated_at,        $deleted_at;

    public function mount()
    {
        $this->negeri = State::all();

        $this->uuid = (string)Str::uuid();
        $this->state_id = "";
        $this->recommender_flag = 1;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name'                => 'required',
            'ic_no'               => 'required|digits:12|unique:asnaf',
            'household_income'    => 'required|numeric', 
            'dependents'          => 'required|numeric',
            'phone_no'            => 'nullable|digits_between:10,12',
            'email'               => 'nullable|email',
            'address1'            => 'nullable|string',
            'address2'            => 'nullable|string',
            'address3'            => 'nullable|string',
            'postcode'            => 'nullable|digits:5',
            'town'                => 'nullable|string',
            'state_id'            => 'nullable|integer',
            'recommender_flag'    => 'numeric',
            'recommender_name'    => 'required_if:recommender_flag,0|nullable',
            'recommender_ic'      => 'required_if:recommender_flag,0|nullable|digits:12',
            'recommender_phone'   => 'required_if:recommender_flag,0|nullable|digits_between:10,12',
            'recommender_email'   => 'required_if:recommender_flag,0|nullable|email',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name'                => 'required',
            'ic_no'               => 'required|digits:12|unique:asnaf',
            'household_income'    => 'required|numeric', 
            'dependents'          => 'required|numeric',
            'phone_no'            => 'nullable|digits_between:10,12',
            'email'               => 'nullable|email',
            'address1'            => 'nullable|string',
            'address2'            => 'nullable|string',
            'address3'            => 'nullable|string',
            'postcode'            => 'nullable|digits:5',
            'town'                => 'nullable|string',
            'state_id'            => 'nullable|integer',
            'recommender_flag'    => 'numeric',
            'recommender_name'    => 'required_if:recommender_flag,0|nullable',
            'recommender_ic'      => 'required_if:recommender_flag,0|nullable|digits:12',
            'recommender_phone'   => 'required_if:recommender_flag,0|nullable|digits_between:10,12',
            'recommender_email'   => 'required_if:recommender_flag,0|nullable|email',
        ]);

        $create_customer = Asnaf::create([
            'uuid'                  => $this->uuid,
            'name'                  => $this->name,
            'ic_no'                 => $this->ic_no,
            'household_income'      => $this->household_income,
            'dependents'            => $this->dependents,
            'phone_no'              => $this->phone_no,
            'email'                 => $this->email,   
            'address1'              => $this->address1,
            'address2'              => $this->address2,       
            'address3'              => $this->address3,
            'town'                  => $this->town,
            'postcode'              => $this->postcode,
            'state_id'              => $this->state_id,
            'recommender_flag'      => $this->recommender_flag,
            'recommender_name'      => $this->recommender_name,
            'recommender_ic'        => $this->recommender_ic,
            'recommender_phone'     => $this->recommender_phone,
            'recommender_email'     => $this->recommender_email,
            'created_by'            => auth()->user()->id,
            'created_at'            => now(),
            'updated_by'            => auth()->user()->id,
            'updated_at'            => now(),
        ]);

        session()->flash('type', 'success');
        session()->flash('title', 'Berjaya!');
        session()->flash('message', 'Maklumat telah berjaya disimpan.');
        return redirect()->route('asnaf.senarai');
    }

    public function render()
    {
        return view('livewire.asnaf.tambah');
    }
}
