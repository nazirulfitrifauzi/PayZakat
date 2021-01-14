<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;
    public $timestamps = true;

    // protected $fillable = [
    //     'name', 'email', 'password', 'uuid',
    // ];

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function agentInfo()
    {
        return $this->hasOne('App\Models\Agents', 'user_id', 'id')->withDefault();
    }

    public function PPZInfo()
    {
        return $this->hasOne('App\Models\PPZ', 'ppz_id', 'id')->withDefault();
    }

    public function screening()
    {
        return $this->hasMany('App\Models\Screening', 'user_id', 'id');
    }
}
