<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorSerie extends Model
{
    protected $table='actor_serie';
    protected $fillable = [
        'actor_id',
        'serie_id'
    ];
}
