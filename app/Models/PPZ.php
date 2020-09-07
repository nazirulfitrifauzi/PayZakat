<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PPZ extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'ppz';
    protected $guarded = [];

    public function agents()
    {
        return $this->hasMany('App\Models\Agents','fav_ppz_id','id');
    }
}
