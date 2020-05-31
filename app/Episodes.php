<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    protected $fillable=[
         'code_episode',
            'season_id',
            'title',
            'url',
            'cover'
    ];
}
