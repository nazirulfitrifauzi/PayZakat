<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'products';
    protected $guarded = [];

    public function account_zakat(){
        return $this->hasMany('App\Models\AccountZakat', 'product_id', 'id');
    }

    public function product_category(){
        return $this->belongsTo('App\Models\ProductCategory', 'product_category_id', 'id');
    }

}
