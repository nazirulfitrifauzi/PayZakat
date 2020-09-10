<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agents extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'agents';
    protected $guarded = [];

    public function userInfo()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function virtual_account(){
        return $this->hasOne('App\Models\VirtualAccounts', 'agent_id', 'id');
    }

    public function payment_category(){
        return $this->belongsTo('App\Models\PaymentCategory', 'payment_category_id', 'id');
    }

    public function gender(){
        return $this->belongsTo('App\Models\Gender', 'gender_id', 'id');
    }

    public function state_origin(){
        return $this->belongsTo('App\Models\State', 'state_origin_id', 'id');
    }

    public function state(){
        return $this->belongsTo('App\Models\State', 'state_id', 'id');
    }

    public function ppz(){
        return $this->belongsTo('App\Models\PPZ', 'fav_ppz_id', 'id');
    }

    public function customers(){
        return $this->hasMany('App\Models\Customers', 'agent_id', 'id');
    }
}
