<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class zakat_refund extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'zakat_refunds';
    protected $guarded = [];

    public function state(){
        return $this->belongsTo('App\Models\PPZ','ppz_id','id');
    }

}
