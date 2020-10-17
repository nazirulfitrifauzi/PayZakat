<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanctionListWebsite extends Model
{
    public function screening()
    {
        return $this->hasMany('App\Models\Screening', 'sanction_id', 'id');
    }
}
