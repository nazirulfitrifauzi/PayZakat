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

    public function maklumatPembayar($name)
    {
        $customer_name = str_replace('-',' ',$name);
        $selected_customer = Customers::where('name',$customer_name)->first();
        return view('pages.pembayarZakat.maklumat', compact(
            'selected_customer'
        ));
    }
}
