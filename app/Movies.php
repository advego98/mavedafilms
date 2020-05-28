<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'movie_code',
        'title',
        'description' ,
        'year' ,
        'rating',
        'featuring',
        'kid_restriction',
        'duration',
        'cover',
        'url',
    ];

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
