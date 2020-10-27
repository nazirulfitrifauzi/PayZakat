<?php

namespace App\Http\Livewire\Admin;

use App\Models\Asnaf;
use App\Models\AsnafScreening;
use App\Models\SanctionListWebsite;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class SenaraiPenerimaZakat extends Component
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

  public function screenResult($asnaf_id, $screen_id, $status)
  {
    return AsnafScreening::create([
      'uuid'          => (string) Str::uuid(),
      'asnaf_id'      => $asnaf_id,
      'sanction_id'   => $screen_id,
      'status'        => $status == "pass" ? 1 : 0,
      'created_by'    => auth()->user()->id,
    ]);
  }

  public function finalResult($asnaf_id, $status)
  {
    $this->validate([
      'remarks'  => 'required|max:255',
    ]);

    if ($status == 'terima') {
      Asnaf::whereId($asnaf_id)
        ->update([
          'active' => 1,
          'screen_status' => 1,
          'screen_remarks' => $this->remarks
        ]);

      session()->flash('type', 'success');
      session()->flash('title', 'Berjaya!');
      session()->flash('message', 'Saringan Penerima Zakat telah berjaya.');
    } elseif ($status == 'tolak') {
      Asnaf::whereId($asnaf_id)
        ->update([
          'active' => 2,
          'screen_status' => 1,
          'screen_remarks' => $this->remarks
        ]);

      session()->flash('type', 'success');
      session()->flash('title', 'Berjaya!');
      session()->flash('message', 'Saringan Penerima Zakat telah ditolak.');
    }

    return redirect()->to('/admin/senarai-penerima-zakat');
  }

  public function render()
  {
    return view('livewire.admin.senarai-penerima-zakat', [
      'list' => Asnaf::where('name', 'like', '%' . $this->search . '%')
        ->where('screen_status', 0)
        ->orderBy($this->sortField, ($this->sortAsc == true) ? 'asc' : 'desc')
        ->paginate(10),
      'sanctionList' => SanctionListWebsite::all(),
    ]);
  }
}
