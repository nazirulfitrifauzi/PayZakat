<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profil extends Component
{
    use WithFileUploads;

    public $current_image_profile, $gambar_profil;
    public $kata_laluan_lama, $kata_laluan_baru, $pengesahan_kata_laluan;

    public function mount()
    {

        $user = User::where('id', auth()->user()->id)->first();
        $this->current_image_profile = (is_null($user->image)) ? asset('img/avatar/avatar.jpg') : asset('storage/' . $user->image);
        $this->gambar_profil = null;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'kata_laluan_lama' => 'required_with:kata_laluan_baru|string|min:8',
            'kata_laluan_baru' => 'required_with:kata_laluan_lama|string|min:8',
            'pengesahan_kata_laluan' => 'required_with:kata_laluan_baru|same:kata_laluan_baru|string|min:8',
        ]);
    }

    public function updatedGambar_profil($field)
    {
        $this->validateOnly($field, [
            'gambar_profil' => 'nullable|image|max:1024',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'kata_laluan_lama' => 'nullable|required_with:kata_laluan_baru|string|min:8',
            'kata_laluan_baru' => 'nullable|required_with:kata_laluan_lama|string|min:8',
            'pengesahan_kata_laluan' => 'nullable|required_with:kata_laluan_baru|same:kata_laluan_baru|string|min:8',
            'gambar_profil' => 'nullable|image|max:1024',
        ]);


        // check kata_laluan_lama match with existed one
        if (!is_null($this->kata_laluan_lama)) {
            if (\Hash::check($this->kata_laluan_lama, auth()->user()->password)) {
                // change kata_laluan_baru
                $user = User::find(auth()->user()->id);

                $user->password = Hash::make($this->kata_laluan_baru);
                $user->updated_at = now();
                $user->updated_by = auth()->user()->id;
                $user->save();

                session()->flash('type', 'success');
                session()->flash('title', 'Berjaya!');
                session()->flash('message', 'Kata Laluan telah berjaya dikemaskini.');
                return redirect()->route('home');
            } else {
                session()->flash('type', 'warning');
                session()->flash('title', 'Tidak Berjaya!');
                session()->flash('message', 'Kata Laluan Lama tidak betul.');
                return redirect()->route('profile');
            }
        }

        if (!is_null($this->gambar_profil)) {
            $gambar_profil_name = $this->gambar_profil->store('/avatar');

            $user = User::find(auth()->user()->id);

            $user->image = $gambar_profil_name;
            $user->updated_at = now();
            $user->updated_by = auth()->user()->id;
            $user->save();

            session()->flash('type', 'success');
            session()->flash('title', 'Berjaya!');
            session()->flash('message', 'Gambar Profil telah berjaya dikemaskini.');
            return redirect()->route('home');
        }
    }

    public function render()
    {
        if (!is_null($this->gambar_profil)) {
            $this->current_image_profile = $this->gambar_profil->temporaryUrl();
        }
        return view('livewire.profil');
    }
}
