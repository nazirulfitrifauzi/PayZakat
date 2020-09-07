<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'bank';
    protected $guarded = [];

    public function virtual_account_statements()
    {
        return $this->hasMany('App\Models\VirtualAccountStatements','bank_id','id');
    }

    public function account_zakat_statements(){
        return $this->hasMany('App\Models\AccountZakatStatements', 'bank_id', 'id');
    }
}
