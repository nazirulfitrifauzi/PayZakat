<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\User;
use App\Models\Asnaf;

class PageController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == 1) {
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
        $selected_customer = Customers::where('uuid', $uuid)
            ->where('agent_id', auth()->user()->agentInfo->id)
            ->firstOrFail();

        return view('pages.pembayarzakat.maklumat', compact(
            'selected_customer'
        ));
    }

    public function pembayarpukal()
    {
        return view('pages.pembayarzakat.pukal');
    }

    public function asnafpukal()
    {
        return view('pages.asnaf.pukal');
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

    public function adminSenaraiPembayarZakat()
    {
        return view('pages.admin.pengguna.senaraiPembayarZakat');
    }

    public function adminNisab()
    {
        return view('pages.admin.nisab');
    }

    public function adminZakatR()
    {
        return view('pages.admin.zakatRefunds');
    }

    public function adminAgihan()
    {
        return view('pages.admin.agihan');
    }

    public function asnafSenarai()
    {
        return view('pages.asnaf.senarai');
    }

    public function adminSenaraiPenerimaZakat()
    {
        return view('pages.admin.asnaf.senaraiPenerimaZakat');
    }

    public function asnafTambah()
    {
        return view('pages.asnaf.tambah');
    }

    public function kyc()
    {
        return view('pages.kyc');
    }


    public function asnafMaklumat($uuid)
    {
        if (auth()->user()->role == 1) {
            $selected_asnaf = Asnaf::where('uuid', $uuid)
                ->where('created_by', auth()->user()->id)
                ->firstOrFail();

            return view('pages.asnaf.maklumat', compact(
                'selected_asnaf'
            ));
        } else {
            $selected_asnaf = Asnaf::where('uuid', $uuid)
                ->firstOrFail();

            return view('pages.admin.asnaf.maklumat', compact(
                'selected_asnaf'
            ));
        }
    }
}
