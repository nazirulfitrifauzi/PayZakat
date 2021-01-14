<?php

namespace App\Http\Livewire;

use App\Models\PPZ;
use Livewire\Component;
use App\Models\State;
use App\User;
use Illuminate\Support\Str;


class MaklumatPPZ extends Component
{

    public $userid;
    public $uuid, $name, $state_origin_id, $phone_no, $office_no, $address1, $address2, $address3, $town, $postcode, $state_id;
    public $negeri;

    public function mount()
    {
        $this->userid               = auth()->user()->id;
        $this->uuid                 = auth()->user()->uuid ?? (string)Str::uuid();
        $this->name                 = auth()->user()->name ?? '';
        $this->state_origin_id      = auth()->user()->PPZInfo->state_origin_id ?? '';
        $this->phone_no             = auth()->user()->PPZInfo->phone_no ?? '';
        $this->office_no            = auth()->user()->PPZInfo->office_no ?? '';
        $this->address1             = auth()->user()->PPZInfo->address1 ?? '';
        $this->address2             = auth()->user()->PPZInfo->address2 ?? '';
        $this->address3             = auth()->user()->PPZInfo->address3 ?? '';
        $this->town                 = auth()->user()->PPZInfo->town ?? '';
        $this->postcode             = auth()->user()->PPZInfo->postcode ?? '';
        $this->state_id             = auth()->user()->PPZInfo->state_id ?? '';
        $this->negeri               = State::all();
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name'                => 'required',
            'state_origin_id'     => 'nullable|integer',
            'phone_no'            => 'required|digits_between:10,12',
            'office_no'           => 'nullable|digits_between:10,12',
            'address1'            => 'required|string',
            'address2'            => 'nullable|string',
            'address3'            => 'nullable|string',
            'postcode'            => 'required|digits:5',
            'town'                => 'required|string',
            'state_id'            => 'required|integer',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name'                => 'required',
            'state_origin_id'     => 'nullable|integer',
            'phone_no'            => 'required|digits_between:10,12',
            'office_no'           => 'nullable|digits_between:10,12',
            'address1'            => 'required|string',
            'address2'            => 'nullable|string',
            'address3'            => 'nullable|string',
            'postcode'            => 'required|digits:5',
            'town'                => 'required|string',
            'state_id'            => 'required|integer',
        ]);

        $user = User::where('id', $this->userid)->update([
            'name' => $this->name,
            'ppz_id'    => $this->userid,
        ]);

        $PPZ = PPZ::updateOrCreate([
            'ppz_id'    => $this->userid,
        ], [
            'name'              => $this->name,
            'uuid'              => $this->uuid,
            'state_origin_id'   => $this->state_origin_id,
            'phone_no'          => $this->phone_no,
            'office_no'         => $this->office_no,
            'address1'          => $this->address1,
            'address2'          => $this->address2,
            'address3'          => $this->address3,
            'town'              => $this->town,
            'postcode'          => $this->postcode,
            'state_id'          => $this->state_id,
        ]);

        if ($PPZ->wasRecentlyCreated) // $PPZ perform create
        {
            PPZ::where('id', $this->userid)->update([
                'created_by' => auth()->user()->id,
                'created_at' => now(),
            ]);
        }

        if (!$PPZ->wasRecentlyCreated && $PPZ->wasChanged()) // $PPZ perform update
        {
            PPZ::where('id', $this->userid)->update([
                'updated_by' => auth()->user()->id,
                'updated_at' => now(),
            ]);

            User::where('id', $this->userid)->update([
                'updated_by' => auth()->user()->id,
                'updated_at' => now(),
            ]);
        }

        session()->flash('type', 'success');
        session()->flash('title', 'Berjaya!');
        session()->flash('message', 'Maklumat telah berjaya disimpan.');
        return redirect()->to('/maklumat-ppz');
    }

    public function render()
    {
        return view('livewire.maklumat-p-p-z');
    }
}
