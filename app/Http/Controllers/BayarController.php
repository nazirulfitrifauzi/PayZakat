<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class BayarController extends Controller
{
    public function index()
    {
        return view('pages.bayar.index');
    }

    public function resit()
    {
        $data = [
            'title'    => 'test'
        ];

        $pdf = PDF::loadView('pages.bayar.resit', $data);
        return $pdf->stream();
        // return $pdf->download('resit.pdf');
    }
}
