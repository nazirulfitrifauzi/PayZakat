<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'payment_method';
    protected $guarded = [];

    public function virtual_account_statements()
    {
        return $this->hasMany('App\Models\VirtualAccountStatements','payment_method_id','id');
    }

    public function account_zakat_statements(){
        return $this->hasMany('App\Models\AccountZakatStatements', 'payment_method_id', 'id');
    }
}
