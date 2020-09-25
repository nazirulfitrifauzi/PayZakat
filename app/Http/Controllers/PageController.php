<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\User;

class PageController extends Controller
{
    public function home()
    {
        if(auth()->user()->role == 1) {
            return view('pages.dashboard');
        } else {
            return view('pages.admin.dashboard');
        }
    }

    public function maklumatPengguna()
    {
        return view('pages.maklumatPengguna');
    }

    public function akaun()
    {
        return view('pages.akaun');
    }

    public function pembayarsenarai()
    {
        return view('pages.pembayarzakat.senarai');
    }

    public function pembayartambah()
    {
        return view('pages.pembayarzakat.tambah');
    }

    public function pembayarmaklumat($uuid)
    {
        $selected_customer = Customers::where('uuid',$uuid)
                            ->where('agent_id',auth()->user()->agentInfo->id)
                            ->firstOrFail();

        return view('pages.pembayarzakat.maklumat', compact(
            'selected_customer'
        ));
    }

    public function pembayarpukal()
    {
        return view('pages.pembayarzakat.pukal');
    }

    // ADMIN
    public function adminSenaraiPengguna()
    {
        return view('pages.admin.pengguna.senaraiPengguna');
    }

    public function adminSenaraiMenunggu()
    {
        return view('pages.admin.pengguna.senaraiMenunggu');
    }

    public function adminSenaraiEjen()
    {
        return view('pages.admin.pengguna.senaraiEjen');
    }

    public function adminSenaraiDitolak()
    {
        return view('pages.admin.pengguna.senaraiDitolak');
    }
}
