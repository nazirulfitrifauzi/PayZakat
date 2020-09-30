<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayarController extends Controller
{
    public function index()
    {
        return view('pages.bayar.index');
    }
}
