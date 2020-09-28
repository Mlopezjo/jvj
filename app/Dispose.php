<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispose extends Model
{

    protected $fillable = [
        'users_id',
        'games_id'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function games()
    {
        return $this->hasMany('App\Game');
    }
}
