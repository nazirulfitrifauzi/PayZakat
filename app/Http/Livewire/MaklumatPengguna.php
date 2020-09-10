<?php

namespace App\Http\Livewire;

use App\Models\Agents;
use Livewire\Component;

class MaklumatPengguna extends Component
{
    public $userid;
    public $n_name, $n_ic_no, $n_old_ic, $n_state_origin_id, $n_mastautin_flag, $n_mastautin_year, $n_phone_no, $n_office_no, $n_employer_name, $n_position, $n_employee_no, $n_address1, $n_address2, $n_address3, $n_town, $n_postcode, $n_state_id;

    public function mount()
    {
        $this->userid               = auth()->user()->id;
        $this->n_name               = auth()->user()->agentInfo->name ?? '';
        $this->n_ic_no              = auth()->user()->agentInfo->ic_no ?? '';
        $this->n_old_ic             = auth()->user()->agentInfo->old_ic ?? '';
        $this->n_state_origin_id    = auth()->user()->agentInfo->state_origin_id ?? '';
        $this->n_mastautin_flag     = auth()->user()->agentInfo->mastautin_flag ?? '';
        $this->n_mastautin_year     = auth()->user()->agentInfo->mastautin_year ?? '';
        $this->n_phone_no           = auth()->user()->agentInfo->phone_no ?? '';
        $this->n_office_no          = auth()->user()->agentInfo->office_no ?? '';
        $this->n_employer_name      = auth()->user()->agentInfo->employer_name ?? '';
        $this->n_position           = auth()->user()->agentInfo->position ?? '';
        $this->n_employee_no        = auth()->user()->agentInfo->employee_no ?? '';
        $this->n_address1           = auth()->user()->agentInfo->address1 ?? '';
        $this->n_address2           = auth()->user()->agentInfo->address2 ?? '';
        $this->n_address3           = auth()->user()->agentInfo->address3 ?? '';
        $this->n_town               = auth()->user()->agentInfo->town ?? '';
        $this->n_postcode           = auth()->user()->agentInfo->postcode ?? '';
        $this->n_state_id           = auth()->user()->agentInfo->state_id ?? '';
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'n_name'                => 'required',
            'n_ic_no'               => 'required|digits:12',
            'n_old_ic'              => 'alpha_num',
            'n_state_origin_id'     => 'integer',
            'n_mastautin_flag'      => 'integer',
            'n_mastautin_year'      => 'integer',
            'n_address1'            => 'string',
            'n_address2'            => 'string',
            'n_address3'            => 'string',
            'n_postcode'            => 'digits:5',
            'n_town'                => 'string',
            'n_state_id'            => 'integer',
            'n_phone_no'            => 'required|digits_between:10,12',
            'n_office_no'           => 'digits_between:10,12',
            'n_position'            => 'string',
            'n_employee_no'         => 'alpha_num',
            'n_employer_name'       => 'string',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'n_name'                => 'required',
            'n_ic_no'               => 'required|digits:12',
            'n_old_ic'              => 'alpha_num',
            'n_state_origin_id'     => 'integer',
            'n_mastautin_flag'      => 'integer',
            'n_mastautin_year'      => 'integer',
            'n_address1'            => 'string',
            'n_address2'            => 'string',
            'n_address3'            => 'string',
            'n_postcode'            => 'digits:5',
            'n_town'                => 'string',
            'n_state_id'            => 'integer',
            'n_phone_no'            => 'required|digits_between:10,12',
            'n_office_no'           => 'digits_between:10,12',
            'n_position'            => 'string',
            'n_employee_no'         => 'alpha_num',
            'n_employer_name'       => 'string',
        ]);

        $info = Agents::updateOrCreate([
            'user_id'    => $this->userid,
        ], [
            'name'              => $this->n_name,
            'ic_no'             => $this->n_ic_no,
            'old_ic'            => $this->n_old_ic,
            'state_origin_id'   => $this->n_state_origin_id,
            'mastautin_flag'    => $this->n_mastautin_flag,
            'mastautin_year'    => $this->n_mastautin_year,
            'phone_no'          => $this->n_phone_no,
            'office_no'         => $this->n_office_no,
            'employer_name'     => $this->n_employer_name,
            'position'          => $this->n_position,
            'employee_no'       => $this->n_employee_no,
            'address1'          => $this->n_address1,
            'address2'          => $this->n_address2,
            'address3'          => $this->n_address3,
            'town'              => $this->n_town,
            'postcode'          => $this->n_postcode,
            'state_id'          => $this->n_state_id,
        ]);

        if ($info->wasRecentlyCreated) // $info perform create
        {
            Agents::where('user_id', $this->userid)->update([
                'created_by' => auth()->user()->id,
                'created_at' => now(),
            ]);
        }

        if(!$info->wasRecentlyCreated && $info->wasChanged()) // $info perform update
        {
            Agents::where('user_id', $this->userid)->update([
                'updated_by' => auth()->user()->id,
                'updated_at' => now(),
            ]);
        }

        return redirect()->to('/home');
    }

    public function render()
    {
        return view('livewire.maklumat-pengguna');
    }
}
