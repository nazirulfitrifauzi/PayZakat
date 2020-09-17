<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\Customers;
use App\Models\PPZ;


class PembayarTambah extends Component
{   
    public $negeri;
    public $ppz;
    public $name, $ic_no, $old_ic, $state_origin_id, $mastautin_flag, $mastautin_year, $phone_no, $email, $office_no, $employer_name, $position, $employee_no, $address1, $address2, $address3, $town, $postcode, $state_id, $fav_ppz_id;

    public function mount()
    {
        $this->negeri = State::all();
        $this->ppz = PPZ::all();

        $this->mastautin_flag = "none";
        $this->state_origin_id = "none";
        $this->state_id = "none";
        $this->fav_ppz_id = "none";
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

        $create_customer = Customers::create([
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
            'agent_id'            => auth()->user()->id,
            'created_by'          => auth()->user()->id,
            'created_at'          => now(),
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
        return view('livewire.pembayar-tambah');
    }
}
