<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nisab extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'nisab';
    protected $guarded = [];

    public function state(){
        return $this->belongsTo('App\Models\State','state_id','id');
    }

}
