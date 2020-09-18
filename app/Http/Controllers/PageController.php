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

    public function pembayar()
    {
        return view('pages.pembayarZakat.pembayar');
    }

    public function tambahPembayar()
    {
        return view('pages.pembayarZakat.tambah');
    }

    public function maklumatPembayar($uuid)
    {
        $selected_customer = Customers::where('uuid',$uuid)
                            ->where('agent_id',auth()->user()->agentInfo->user_id)
                            ->first();
                            
        return view('pages.pembayarZakat.maklumat', compact(
            'selected_customer'
        ));
    }
}
