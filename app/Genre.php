<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
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
