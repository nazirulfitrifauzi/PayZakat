<?php

namespace App\Imports;

use App\models\Customers;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{
    public function model(array $row)
    {
        //
    }
}
