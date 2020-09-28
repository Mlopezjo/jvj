<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function platforms()
    {
        return $this->hasMany('App\Platform');
    }

    public function edite()
    {
        return $this->hasMany('App\Platform');
    }

    public function developpe()
    {
        return $this->hasMany('App\Platform');
    }
}
