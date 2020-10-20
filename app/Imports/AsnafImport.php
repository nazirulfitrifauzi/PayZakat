<?php

namespace App\Imports;

use App\Asnaf;
use Maatwebsite\Excel\Concerns\ToModel;

class AsnafImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Asnaf([
            //
        ]);
    }
}
