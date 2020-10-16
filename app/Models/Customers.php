<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'customers';
    protected $guarded = [];

    public function agent(){
        return $this->belongsTo('App\Models\Agents', 'agent_id', 'id');
    }
    
    public function payment_category(){
        return $this->belongsTo('App\Models\PaymentCategory', 'payment_category_id', 'id');
    }

    public function gender(){
        return $this->belongsTo('App\Models\PaymentCategory', 'gender_id', 'id');
    }

    public function state_origin(){
        return $this->belongsTo('App\Models\PaymentCategory', 'state_origin_id', 'id');
    }

    public function state(){
        return $this->belongsTo('App\Models\PaymentCategory', 'state_id', 'id');
    }

    public function ppz(){
        return $this->belongsTo('App\Models\PaymentCategory', 'fav_ppz_id', 'id');
    }

    public function zakat()
    {
        return $this->hasMany('App\Models\AccountZakat','customer_id','id');
    }

    public function screening()
    {
        return $this->hasMany('App\Models\Screening','user_id','id');
    }
}
