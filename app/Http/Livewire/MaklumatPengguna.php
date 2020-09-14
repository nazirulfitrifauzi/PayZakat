<?php

namespace App\Http\Livewire;

use App\Models\Agents;
use App\Models\State;
use Livewire\Component;

class MaklumatPengguna extends Component
{
    public $userid;
    public $name, $ic_no, $old_ic, $state_origin_id, $mastautin_flag, $mastautin_year, $phone_no, $office_no, $employer_name, $position, $employee_no, $address1, $address2, $address3, $town, $postcode, $state_id;
    public $negeri;

    public function mount()
    {
        $this->userid               = auth()->user()->id;
        $this->name                 = auth()->user()->agentInfo->name ?? '';
        $this->ic_no                = auth()->user()->agentInfo->ic_no ?? '';
        $this->old_ic               = auth()->user()->agentInfo->old_ic ?? '';
        $this->state_origin_id      = auth()->user()->agentInfo->state_origin_id ?? '';
        $this->mastautin_flag       = auth()->user()->agentInfo->mastautin_flag ?? '';
        $this->mastautin_year       = auth()->user()->agentInfo->mastautin_year ?? '';
        $this->phone_no             = auth()->user()->agentInfo->phone_no ?? '';
        $this->office_no            = auth()->user()->agentInfo->office_no ?? '';
        $this->employer_name        = auth()->user()->agentInfo->employer_name ?? '';
        $this->position             = auth()->user()->agentInfo->position ?? '';
        $this->employee_no          = auth()->user()->agentInfo->employee_no ?? '';
        $this->address1             = auth()->user()->agentInfo->address1 ?? '';
        $this->address2             = auth()->user()->agentInfo->address2 ?? '';
        $this->address3             = auth()->user()->agentInfo->address3 ?? '';
        $this->town                 = auth()->user()->agentInfo->town ?? '';
        $this->postcode             = auth()->user()->agentInfo->postcode ?? '';
        $this->state_id             = auth()->user()->agentInfo->state_id ?? '';
        $this->negeri               = State::all();
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name'                => 'required',
            'ic_no'               => 'required|digits:12',
            'old_ic'              => 'alpha_num',
            'state_origin_id'     => 'integer',
            'mastautin_flag'      => 'integer',
            'mastautin_year'      => 'integer',
            'address1'            => 'string',
            'address2'            => 'string',
            'address3'            => 'string',
            'postcode'            => 'digits:5',
            'town'                => 'string',
            'state_id'            => 'integer',
            'phone_no'            => 'required|digits_between:10,12',
            'office_no'           => 'digits_between:10,12',
            'position'            => 'string',
            'employee_no'         => 'alpha_num',
            'employer_name'       => 'string',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name'                => 'required',
            'ic_no'               => 'required|digits:12',
            'old_ic'              => 'alpha_num',
            'state_origin_id'     => 'integer',
            'mastautin_flag'      => 'integer',
            'mastautin_year'      => 'integer',
            'address1'            => 'string',
            'address2'            => 'string',
            'address3'            => 'string',
            'postcode'            => 'digits:5',
            'town'                => 'string',
            'state_id'            => 'integer',
            'phone_no'            => 'required|digits_between:10,12',
            'office_no'           => 'digits_between:10,12',
            'position'            => 'string',
            'employee_no'         => 'alpha_num',
            'employer_name'       => 'string',
        ]);

        $info = Agents::updateOrCreate([
            'user_id'    => $this->userid,
        ], [
            'name'              => $this->name,
            'ic_no'             => $this->ic_no,
            'old_ic'            => $this->old_ic,
            'state_origin_id'   => $this->state_origin_id,
            'mastautin_flag'    => $this->mastautin_flag,
            'mastautin_year'    => $this->mastautin_year,
            'phone_no'          => $this->phone_no,
            'office_no'         => $this->office_no,
            'employer_name'     => $this->employer_name,
            'position'          => $this->position,
            'employee_no'       => $this->employee_no,
            'address1'          => $this->address1,
            'address2'          => $this->address2,
            'address3'          => $this->address3,
            'town'              => $this->town,
            'postcode'          => $this->postcode,
            'state_id'          => $this->state_id,
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

        session()->flash('type', 'success');
        session()->flash('title', 'Berjaya!');
        session()->flash('message', 'Maklumat telah berjaya disimpan.');
        return redirect()->to('/maklumat-pengguna');
    }

    public function render()
    {
        return view('livewire.maklumat-pengguna');
    }
}
