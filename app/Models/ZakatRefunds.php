<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZakatRefunds extends Model
{
  use SoftDeletes;
  public $timestamps = true;

  protected $table = 'zakat_refunds';
  protected $guarded = [];

  public function ppz()
  {
    return $this->belongsTo('App\Models\PPZ', 'ppz_id', 'id');
  }
}
