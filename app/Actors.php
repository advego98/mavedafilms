<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{

    protected $fillable=[
        'actor'
    ];
    public function movies()
    {
        return $this
            ->belongsToMany('App\Movies')
            ->withTimestamps();
    }

    public function series()
    {
        return $this
            ->belongsToMany('App\Series')
            ->withTimestamps();
    }
}
