<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeribadiController extends Controller
{
    public function index() {
        return view('pages.peribadi');
    }
}
