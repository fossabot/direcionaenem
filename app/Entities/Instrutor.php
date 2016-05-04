<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Instrutor extends User
{
    protected $table = 'users';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('instrutor', function (Builder $builder) {
            $builder->where('role', '=', 'instrutor');
        });
    }
}
