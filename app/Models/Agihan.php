<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agihan extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'agihan_asnafs';
    protected $guarded = [];

    public function ppz()
    {
        return $this->belongsTo('App\Models\PPZ', 'ppz_id', 'id');
    }
}
