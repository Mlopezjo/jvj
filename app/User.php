<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','image', 'ville_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function games()
    {
        return $this->belongsToMany('App\Game', 'disposes');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function ville()
    {
        return $this->belongsTo('App\Ville');
    }

    public function haveIThisGame($game){
        
        return $this->games->contains($game);
    }
}
