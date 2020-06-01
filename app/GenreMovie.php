<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    protected $table="genre_movie";
    protected $fillable= [
        'genre_id',
        'id_movie'
    ];
}
