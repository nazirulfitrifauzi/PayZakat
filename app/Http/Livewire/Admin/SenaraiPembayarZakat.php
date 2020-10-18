<?php

namespace App\Http\Livewire\Admin;

use App\Models\Customers;
use App\Models\CustomerScreening;
use App\Models\SanctionListWebsite;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class SenaraiPembayarZakat extends Component
{
    use WithPagination;

    public $sortField = 'name';
    public $sortAsc = true;
    public $search = '';
    public $remarks;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField == $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function screenResult($customer_id, $screen_id, $status)
    {
        return CustomerScreening::create([
            'uuid'          => (string) Str::uuid(),
            'customer_id'   => $customer_id,
            'sanction_id'   => $screen_id,
            'status'        => $status == "pass" ? 1 : 0,
            'created_by'    => auth()->user()->id,
        ]);
    }

    public function finalResult($customer_id, $status)
    {
        $this->validate([
            'remarks'  => 'required|max:255',
        ]);

        if ($status == 'terima') {
            Customers::whereId($customer_id)
                ->update([
                    'active' => 1,
                    'screen_status' => 1,
                    'screen_remarks' => $this->remarks
                ]);

            session()->flash('type', 'success');
            session()->flash('title', 'Berjaya!');
            session()->flash('message', 'Saringan Pembayar Zakat telah berjaya.');
        } elseif ($status == 'tolak') {
            Customers::whereId($customer_id)
                ->update([
                    'active' => 2,
                    'screen_status' => 1,
                    'screen_remarks' => $this->remarks
                ]);

            session()->flash('type', 'success');
            session()->flash('title', 'Berjaya!');
            session()->flash('message', 'Saringan Pembayar Zakat telah ditolak.');
        }

        return redirect()->to('/admin/senarai-pembayar-zakat');
    }

    public function render()
    {
        return view('livewire.admin.senarai-pembayar-zakat', [
            'list' => Customers::where('name', 'like', '%' . $this->search . '%')
                ->where('screen_status',0)
                ->orderBy($this->sortField, ($this->sortAsc == true) ? 'asc' : 'desc')
                ->paginate(10),
            'sanctionList' => SanctionListWebsite::all(),
        ]);
    }
}
