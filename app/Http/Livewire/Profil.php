<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profil extends Component
{   
    public $old_password, $password, $password_confirmation;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'old_password' => 'required|string|min:8|required_with:password',
            'password' => 'required|string|min:8|required_with:password_confirmation',
            'password_confirmation' => 'required|string|min:8|same:password',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'old_password' => 'required|string|min:8|required_with:password',
            'password' => 'required|string|min:8|required_with:password_confirmation',
            'password_confirmation' => 'required|string|min:8|same:password',
        ]);
        
        // check old_password match with existed one
        if(\Hash::check($this->old_password, auth()->user()->password)) {
            // change password
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($this->password);
            $user->updated_at = now();
            $user->save();

            session()->flash('type', 'success');
            session()->flash('title', 'Berjaya!');
            session()->flash('message', 'Kata Laluan telah berjaya dikemaskini.');
        }
        else {
            session()->flash('type', 'warning');
            session()->flash('title', 'Tidak Berjaya!');
            session()->flash('message', 'Kata Laluan Lama tidak betul.');
        }
        
        return redirect()->to('/profil');
    }

    public function render()
    {
        return view('livewire.profil');
    }
}
