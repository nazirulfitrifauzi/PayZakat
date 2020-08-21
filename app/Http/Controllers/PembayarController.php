<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayarController extends Controller
{
    public function __construct() {
        //
    }

    public function index() {
        return view('pages.pembayar');
    }
}
