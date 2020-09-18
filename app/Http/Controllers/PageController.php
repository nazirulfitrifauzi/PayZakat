<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.dashboard');
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
                            ->where('agent_id',auth()->user()->agentInfo->user_id)
                            ->first();
                            
        return view('pages.pembayarzakat.maklumat', compact(
            'selected_customer'
        ));
    }

    public function pembayarpukal()
    {
        return view('pages.pembayarzakat.pukal');
    }
}
