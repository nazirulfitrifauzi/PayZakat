<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentCategory extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'payment_category';
    protected $guarded = [];

    public function agents()
    {
        return $this->hasMany('App\Models\Agents','payment_categoty_id','id');
    }
}
