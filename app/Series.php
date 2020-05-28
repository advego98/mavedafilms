<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{

    protected $fillable = [
        'code_serie',
        'title',
        'description' ,
        'year' ,
        'rating',
        'featuring',
        'kid_restriction',
        'duration',
        'cover',
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
