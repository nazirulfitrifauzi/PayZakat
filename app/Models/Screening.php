<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Screening extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'screenings';
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customers','user_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\Users','user_id','id');
    }

    public function sanction()
    {
        return $this->belongsTo('App\Models\SanctionListWebsite', 'sanction_id', 'id');
    }
}
