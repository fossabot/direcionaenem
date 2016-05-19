<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Usuario
{
    protected $table = 'usuarios';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('estudante', function (Builder $builder) {
            $builder->where('role', '=', 'estudante');
        });
    }
}
