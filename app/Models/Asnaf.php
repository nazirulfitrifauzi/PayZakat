<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asnaf extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'asnaf';
    protected $guarded = [];

    public function screening()
    {
        return $this->hasMany('App\Models\AsnafScreening', 'asnaf_id', 'id');
    }
}
