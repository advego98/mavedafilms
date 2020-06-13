<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie_fav extends Model
{
    protected $fillable = [
        'user_id', 'serie_id'
    ];

    public function serie()
    {
        return $this
            ->hasMany('App\Series')
            ->withTimestamps();
    }
}
