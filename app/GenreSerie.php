<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreSerie extends Model
{
    protected $table="genre_serie";
    protected $fillable= [
        'genre_id',
        'serie_id'
    ];
}
