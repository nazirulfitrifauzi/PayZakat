<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionCodes extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'transaction_codes';
    protected $guarded = [];

    public function virtual_account_statements()
    {
        return $this->hasMany('App\Models\VirtualAccountStatements','transaction_code_id','id');
    }

    public function account_zakat_statements(){
        return $this->hasMany('App\Models\AccountZakatStatements', 'transaction_code_id', 'id');
    }
}
