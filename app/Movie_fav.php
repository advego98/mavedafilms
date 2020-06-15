<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie_fav extends Model
{
    protected $fillable = [
        'user_id', 'movie_id'
    ];

    public function movie()
    {
        return $this
            ->hasMany('App\Movie')
            ->withTimestamps();
    }
}
