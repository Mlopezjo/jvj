<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plateform extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'societe_id', 
    ];

    public function games()
    {
        return $this->hasMany('App\Game');
    }

    public function constructeur()
    {
        return $this->belongsTo('App\Societe');
    }
}
