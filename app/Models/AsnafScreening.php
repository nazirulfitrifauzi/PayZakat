<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsnafScreening extends Model
{
  use SoftDeletes;
  public $timestamps = true;

  protected $table = 'asnaf_screenings';
  protected $guarded = [];

  public function asnaf()
  {
    return $this->belongsTo('App\Models\AsnafScreening', 'asnaf_id', 'id');
  }

  public function sanction()
  {
    return $this->belongsTo('App\Models\SanctionListWebsite', 'sanction_id', 'id');
  }
}
