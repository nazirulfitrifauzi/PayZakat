<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.dashboard');
    }

    public function maklumatPengguna()
    {
        $info = auth()->user()->agentInfo;
        return view('pages.maklumatPengguna', compact('info'));
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
}
