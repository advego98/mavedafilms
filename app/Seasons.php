<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    protected $fillable = [
        'code_season', 'serie_id','name'
    ];

    public function serie()
    {
        return $this
            ->hasMany('App\Series')
            ->withTimestamps();
    }
}
