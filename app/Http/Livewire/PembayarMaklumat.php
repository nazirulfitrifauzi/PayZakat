<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\Customers;
use App\Models\PPZ;

class PembayarMaklumat extends Component
{   
    public $customer_id;
    public $negeri;
    public $ppz;
    public $uuid, $name, $ic_no, $old_ic, $state_origin_id, $mastautin_flag, $mastautin_year, $phone_no, $email, $office_no, $employer_name, $position, $employee_no, $address1, $address2, $address3, $town, $postcode, $state_id, $fav_ppz_id;

    public function mount($customer) 
    {
        $this->negeri = State::all();
        $this->ppz = PPZ::all();
        $this->customer_id = $customer->id;
        
        $this->uuid             = $customer->uuid ?? "";
        $this->name             = $customer->name ?? "";
        $this->ic_no            = $customer->ic_no ?? "";
        $this->old_ic           = $customer->old_ic ?? "";
        $this->state_origin_id  = $customer->state_origin_id ?? "";
        $this->mastautin_flag   = $customer->mastautin_flag ?? "";
        $this->mastautin_year   = $customer->mastautin_year ?? "";
        $this->phone_no         = $customer->phone_no ?? "";
        $this->email            = $customer->email ?? "";
        $this->office_no        = $customer->office_no ?? "";
        $this->employer_name    = $customer->employer_name ?? "";
        $this->position         = $customer->position ?? "";
        $this->employee_no      = $customer->employee_no ?? "";
        $this->address1         = $customer->address1 ?? "";
        $this->address2         = $customer->address2 ?? "";
        $this->address3         = $customer->address3 ?? "";
        $this->town             = $customer->town ?? "";
        $this->postcode         = $customer->postcode ?? "";
        $this->state_id         = $customer->state_id ?? "";   
        $this->fav_ppz_id       = $customer->fav_ppz_id ?? "";  
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name'                => 'required|unique:customers',
            'ic_no'               => 'required|digits:12|unique:customers',
            'old_ic'              => 'nullable|alpha_num',
            'state_origin_id'     => 'required|integer',
            'mastautin_flag'      => 'required|integer',
            'mastautin_year'      => 'nullable|integer',
            'phone_no'            => 'required|digits_between:10,12',
            'email'               => 'required|email',
            'office_no'           => 'nullable|digits_between:10,12',
            'employer_name'       => 'nullable|string',
            'position'            => 'nullable|string',
            'employee_no'         => 'nullable|alpha_num',
            'address1'            => 'required|string',
            'address2'            => 'nullable|string',
            'address3'            => 'nullable|string',
            'postcode'            => 'required|digits:5',
            'town'                => 'required|string',
            'state_id'            => 'required|integer',
            'fav_ppz_id'          => 'required|integer',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name'                => 'required',
            'ic_no'               => 'required|digits:12',
            'old_ic'              => 'nullable|alpha_num',
            'state_origin_id'     => 'required|integer',
            'mastautin_flag'      => 'required|integer',
            'mastautin_year'      => 'nullable|integer',
            'phone_no'            => 'required|digits_between:10,12',
            'email'               => 'required|email',
            'office_no'           => 'nullable|digits_between:10,12',
            'employer_name'       => 'nullable|string',
            'position'            => 'nullable|string',
            'employee_no'         => 'nullable|alpha_num',
            'address1'            => 'required|string',
            'address2'            => 'nullable|string',
            'address3'            => 'nullable|string',
            'postcode'            => 'required|digits:5',
            'town'                => 'required|string',
            'state_id'            => 'required|integer',
            'fav_ppz_id'          => 'required|integer',
        ]);

        Customers::where('id',$this->customer_id)->update([
            'name'                => $this->name,
            'ic_no'               => $this->ic_no,
            'old_ic'              => $this->old_ic,
            'state_origin_id'     => $this->state_origin_id,
            'mastautin_flag'      => $this->mastautin_flag,
            'mastautin_year'      => $this->mastautin_year,
            'phone_no'            => $this->phone_no,
            'email'               => $this->email,
            'office_no'           => $this->office_no,
            'employer_name'       => $this->employer_name,
            'position'            => $this->position,
            'employee_no'         => $this->employee_no,
            'address1'            => $this->address1,
            'address2'            => $this->address2,
            'address3'            => $this->address3,
            'town'                => $this->town,
            'postcode'            => $this->postcode,
            'state_id'            => $this->state_id,
            'fav_ppz_id'          => $this->fav_ppz_id,
            'updated_by'          => auth()->user()->id,
            'updated_at'          => now(),
        ]);

        session()->flash('type', 'success');
        session()->flash('title', 'Berjaya!');
        session()->flash('message', 'Maklumat telah berjaya disimpan.');
        return redirect()->to('/pembayar');
    }
    
    public function render()
    {
        return view('livewire.pembayar-maklumat');
    }
}
