<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
//    protected $table="role_user";

    protected $fillable=[
        'role_id',
        'user_id'
    ];

    public function users()
    {
        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }

    public function roles()
    {
        return $this
            ->belongsToMany('App\Roles')
            ->withTimestamps();
    }
}
