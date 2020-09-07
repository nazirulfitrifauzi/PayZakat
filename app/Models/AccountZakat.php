<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountZakat extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'account_zakat';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    
    public function virtual_account(){
        return $this->belongsTo('App\Models\VirtualAccount', 'virtual_account_id', 'id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Customers', 'cust_id', 'id');
    }

    public function account_zakat_statements(){
        return $this->hasMany('App\Models\AccountZakatStatements', 'account_zakat_id', 'id');
    }
}
