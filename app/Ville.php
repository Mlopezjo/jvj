<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'zip', 'name',
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
