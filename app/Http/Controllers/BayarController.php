<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\PPZ;
use App\Models\Customers;
use PDF;
use Illuminate\Http\Request;

class BayarController extends Controller
{
    public function index()
    {
        $productList = Products::select('product_code', 'product_name')->get();
        
        return view('pages.bayar.index', compact('productList'));
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
