<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [

        'plan_id', 'user_id', 'credit_card', 'credit_card_name', 'credit_card_lastname', 'due_date', 'cvv'
    ];

    public function plans()
    {
        return $this
            ->belongsTo('App\Plans','plan_id')
            ->withTimestamps();
    }

    public function users()
    {
        return $this
            ->belongsTo('App\User','id')
            ->withTimestamps();
    }
}
