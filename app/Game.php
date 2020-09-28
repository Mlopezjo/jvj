<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'image',
        'genre_id',
        'editeur_id',
        'dev_id',
        'platform_id',
    ];
    
    public function editeur()
    {
        return $this->belongsTo('App\Societe');
    }
    
    public function dev()
    {
        return $this->belongsTo('App\Societe');
    }
    
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    public function platform()
    {
        return $this->belongsTo('App\Plateform');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'disposes');
    }
}
