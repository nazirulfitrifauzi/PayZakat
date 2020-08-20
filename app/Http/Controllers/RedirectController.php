<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect()->route('home');
        } else {
            return view('auth.login');
        }
    }
}
