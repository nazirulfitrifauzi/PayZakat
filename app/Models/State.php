<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'state';
    protected $guarded = [];

    public function agents()
    {
        return $this->hasMany('App\Models\State','state_id','id');
    }

    public function agents_state_origin()
    {
        return $this->hasMany('App\Models\Agents','state_origin_id','id');
    }

    public function nisab()
    {
        return $this->hasMany('App\Models\Nisab','state_id','id');
    }
}
