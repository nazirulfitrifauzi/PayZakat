<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gender extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'gender';
    protected $guarded = [];

    public function customer(){
        return $this->hasMany('App\Models\Customers', 'gender_id', 'id');
    }
}
