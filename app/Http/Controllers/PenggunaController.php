<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index() {
        //
    }

    public function peribadi()
    {
        return view('pages.pengguna.peribadi');
    }

    public function alamat()
    {
        return view('pages.pengguna.alamat');
    }

    public function keluarga()
    {
        return view('pages.pengguna.keluarga');
    }

    public function kebajikan()
    {
        return view('pages.pengguna.kebajikan');
    }
}
