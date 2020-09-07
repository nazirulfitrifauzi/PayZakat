<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'product_category';
    protected $guarded = [];

    public function product_category(){
        return $this->hasMany('App\Models\Products', 'product_category_id', 'id');
    }

}
