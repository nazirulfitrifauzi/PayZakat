<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulatorController extends Controller
{
    public function __construct()
    {
        //
    }
    
    public function index() 
    {
        return view('pages.calculator.index');
    }
}
