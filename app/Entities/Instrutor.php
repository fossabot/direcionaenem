<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Instrutor extends Usuario
{
    protected $table = 'usuarios';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('instrutor', function (Builder $builder) {
            $builder->where('papel', '=', 'instrutor');
        });
    }
}
