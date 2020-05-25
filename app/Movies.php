<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public function genres()
    {
        return $this
            ->belongsToMany('App\Genre')
            ->withTimestamps();
    }

    public function actors()
    {
        return $this
            ->belongsToMany('App\Actors')
            ->withTimestamps();
    }
}
