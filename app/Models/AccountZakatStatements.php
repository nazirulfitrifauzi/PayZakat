<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountZakatStatements extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'account_zakat_statements';
    protected $guarded = [];

    public function virtual_account()
    {
        return $this->belongsTo('App\Models\VirtualAccount','virtual_account_id','id');
    }
    
    public function account_zakat()
    {
        return $this->belongsTo('App\Models\AccountZakat','account_zakat_id','id');
    }
    
    public function txn_code()
    {
        return $this->belongsTo('App\Models\TransactionCodes','transaction_code_id','id');
    }
    
    public function payment_method()
    {
        return $this->belongsTo('App\Models\PaymentMethod','payment_method_id','id');
    }

    public function transaction_status()
    {
        return $this->belongsTo('App\Models\TransactionStatus','transaction_status_id','id');
    }
    
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank','bank_id','id');
    }
}
