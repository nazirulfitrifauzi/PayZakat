<?php

namespace App\Http\Livewire\Asnaf;

use Livewire\Component;
use App\Models\State;
use App\Models\Asnaf;

class Maklumat extends Component
{
    public $asnaf_id;
    public $negeri;
    public  $uuid,              $name,              $ic_no,          $household_income,  $dependents,        $phone_no,         $email, 
            $address1,          $address2,          $address3,      $town,              $postcode,          $state_id,
            $recommender_flag,  $recommender_name,   $recommender_ic, $recommender_phone,  $recommender_email,
            $created_by,        $updated_by,        $deleted_by,    $created_at,        $updated_at,        $deleted_at;

    public function mount($asnaf) 
    {
        $this->negeri = State::all();
        $this->asnaf_id = $asnaf->id;

        $this->uuid             = $asnaf->uuid ?? "";
        $this->name             = $asnaf->name ?? "";
        $this->ic_no            = $asnaf->ic_no ?? "";
        $this->household_income = $asnaf->household_income ?? "";
        $this->dependents       = $asnaf->dependents ?? "";
        $this->phone_no         = $asnaf->phone_no ?? "";
        $this->email            = $asnaf->email ?? "";
        $this->address1         = $asnaf->address1 ?? "";
        $this->address2         = $asnaf->address2 ?? "";
        $this->address3         = $asnaf->address3 ?? "";
        $this->town             = $asnaf->town ?? "";
        $this->postcode         = $asnaf->postcode ?? "";
        $this->state_id         = $asnaf->state_id ?? "";   
        $this->recommender_flag = $asnaf->recommender_flag ?? 1;
        $this->recommender_name  = $asnaf->recommender_name ?? "";
        $this->recommender_ic    = $asnaf->recommender_ic ?? "";
        $this->recommender_phone = $asnaf->recommender_phone ?? "";
        $this->recommender_email = $asnaf->recommender_email ?? "";
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
            'ic_no'               => 'required|digits:12',
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

        Asnaf::where('id',$this->asnaf_id)->update([
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
        return view('livewire.asnaf.maklumat');
    }
}
