<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualAccounts extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'virtual_accounts';
    protected $guarded = [];

    public function agent()
    {
        return $this->belongsTo('App\Models\Agents','agent_id','id');
    }

    public function virtual_account_statements()
    {
        return $this->hasMany('App\Models\VirtualAccountStatements','virtual_account_id','id');
    }

    public function account_zakat(){
        return $this->hasMany('App\Models\AccountZakat', 'virtual_account_id', 'id');
    }

    public function account_zakat_statements(){
        return $this->hasMany('App\Models\AccountZakatStatements', 'virtual_account_id', 'id');
    }
}
