<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{

    public function view(): View
    {
        return view('pages.admin.pengguna.excel.semua', [
            'user' => User::all()
        ]);
    }
}
