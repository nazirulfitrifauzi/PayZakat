<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerScreening extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'customer_screenings';
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo('App\Models\CustomerScreening', 'customer_id', 'id');
    }

    public function sanction()
    {
        return $this->belongsTo('App\Models\SanctionListWebsite', 'sanction_id', 'id');
    }
}
