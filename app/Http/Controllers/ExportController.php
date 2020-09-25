<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;

class ExportController extends Controller
{
    // ADMIN
    public function adminSenaraiPenggunaExcel()
    {
        return Excel::download(new UsersExport, 'senarai_pengguna(semua).xlsx');
    }

    public function adminSenaraiPenggunaPdf()
    {
        $data = User::all();

        view()->share('user', $data);
        $pdf = PDF::loadView('pages.admin.pengguna.pdf.semua', $data);

        // download PDF file with download method
        return $pdf->download('semua_pengguna.pdf');
    }
}
